<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\GuiderPaymentModel;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminGuiderController extends Controller
{
    public function guider(){
        $guiders = User::where('user_role',1)->with('getMemberships')->get();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.guiders.guider-list',compact('guiders'));
    }
    public function guides_profile_state_edit(User $guides)
    {
        if($guides->profile_status == 0)
        {
            $guides->profile_status = 1;
        } else {
            $guides->profile_status = 0;
        }
        $guides->save();

        return redirect()->route('admin_guiders');
    }

    public function guider_payment_list()
    {
        $guider_payment = GuiderPaymentModel::with('getUser','getJournies','getProfile')->orderby('id','DESC')->get();
        return view('admin.guider-payments.list_guider_payments',compact('guider_payment'));
    }
    public function get_journey_details(Request $request)
    {
        $data = GuiderPaymentModel::with('getUser','getJournies')->where('id',$request->guider_payment_id)->orderby('id','DESC')->first();
        return response()->json(['res'=>$data,'message'=>'success','status'=>1]);
    }
    public function pay_with_paypal(Request $request)
    {
        $guiderPayment = GuiderPaymentModel::with('getUser','getJournies','getProfile')->where('id',$request->guider_payment_id)->orderby('id','DESC')->first();

        if($guiderPayment->getProfile->paypal_email === '' OR  $guiderPayment->getProfile->paypal_email === null)
        {
            return back()->with('message','Guider paypal account not found.');
        }

        //----------------------Credentials----------------------//
        $PAYPAL_CLIENT_ID = env('CLIENT_KEY');
        $PAYPAL_CLIENT_SECRET = env('CLIENT_SECRET');
        $PAYPAL_TOKEN_URL = env('TOKEN_URL');
        $PAYPAL_PAYOUTS_URL = env('PAYOUTS_URL');
        //----------------------Credentials----------------------//


        //------------------get token starts--------------------//
        $getTokenUrl = $PAYPAL_TOKEN_URL;
        $grant = 'grant_type=client_credentials';

        $credentials = base64_encode($PAYPAL_CLIENT_ID.':'.$PAYPAL_CLIENT_SECRET);

        $client = new Client();
        $response = $client->post($getTokenUrl, [
            'headers' => [ 'Authorization' => 'Basic '.$credentials],
            'body' => $grant,
        ]);

        $output = json_decode($response->getBody()->getContents());
        $access_token= $output->access_token;
        //------------------get token ends---------------------//


        //--------------Paypal Payout Starts------------------//

        $time = time();
        //--- Prepare sender batch header
        $sender_batch_header["sender_batch_id"] = $time;
        $sender_batch_header["email_subject"]   = "Payout Received";
        $sender_batch_header["email_message"]   = "You have received a payout, Thank you for using our services";

        //--- First receiver
        $receiver["recipient_type"] = "EMAIL";
        $receiver["note"] = "Your cut of Ivacay Package";
        $receiver["sender_item_id"] = $time++;

        $receiver["receiver"] = "buyer.paypal.dev@gmail.com";
//        $receiver["receiver"] = $guiderPayment->getProfile->paypal_email; //guider email

        $receiver["amount"]["value"] = $guiderPayment->getJournies->guiders_cut; //guider cut
        $receiver["amount"]["currency"] = "USD";
        $items[] = $receiver;

        $data["sender_batch_header"] = $sender_batch_header;
        $data["items"] = $items;


        $client = new Client();
        $response = $client->post($PAYPAL_PAYOUTS_URL, [
            'headers' => [ 'Content-Type'=>'application/json','Authorization' => 'Bearer '. $access_token],
            'body' => json_encode($data),
        ]);

        $result = json_decode($response->getBody()->getContents());
        $payout_id = $result->batch_header->payout_batch_id; //transaction id
//        return back()->with('message',$payout_id);
        sleep(5);
        //--------------Paypal Payout Ends------------------//


        //--------------Paypal Payout Check Transaction starts------------------//
        $getPayoutUrl = 'https://api.sandbox.paypal.com/v1/payments/payouts/'.$payout_id;
        $grant2 = 'grant_type=client_credentials';
        $credentials = base64_encode($PAYPAL_CLIENT_ID.':'.$PAYPAL_CLIENT_SECRET);
        $client = new Client();
        $response = $client->get($getPayoutUrl, [
            'headers' => [ 'Authorization' => 'Basic '.$credentials],
            'body' => $grant2,
        ]);
        $output = json_decode($response->getBody()->getContents());
        $status = $output->batch_header->batch_status;

        //saving data to db
        if($status === "SUCCESS")
        {
            $guiderPayment->transfer_status = 1;
        }
        elseif($status === "DECLINED")
        {
            $guiderPayment->transfer_status = 2;
        }
        else{
            $guiderPayment->transfer_status = 0;
        }
        $guiderPayment->transfer_approval_date = date('Y-m-d');
        $guiderPayment->save();
        return back()->with('message',$output->batch_header->batch_status);

        //--------------Paypal Payout Check Transaction Ends------------------//



    }

}
