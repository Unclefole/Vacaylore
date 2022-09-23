<?php

namespace App\Http\Controllers\guider;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Models\JobModel;
use App\Models\JobAppliedModel;
use App\Models\User;
use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\JourneysModel;

use Intervention\Image\Facades\Image;
use Storage;
use File;

class GuiderController extends Controller
{
    // index page in now job portal
    public function index()
    {
        $job = JobModel::get();
        /*********Check If Guider Profile is Updated start*************************************/
        $profile = ProfileModel::where('user_id', auth()->user()->id)->with('getProfileUser')->first();
        $countries = CountryModel::all();
        if ($profile->address == null || $profile->zip_code == null) {
            return redirect()->route('Guider_profile', compact('countries', 'profile'))->with('error', 'Please update your profile');
        }
        /*********Check If Guider Profile is Updated end***************************************/

        return view('guider.index', compact('job'));
    }

    public function orders_list()
    {
        $orders = JourneysModel::where('guide_id', auth()->user()->id)->get();
        /*********Check If Guider Profile is Updated start*************************************/
        $profile = ProfileModel::where('user_id', auth()->user()->id)->with('getProfileUser')->first();
        $countries = CountryModel::all();
        if ($profile->address == null || $profile->zip_code == null) {
            return redirect()->route('Guider_profile', compact('countries', 'profile'))->with('error', 'Please update your profile');
        }
        /*********Check If Guider Profile is Updated end***************************************/

        return view('guider.orders_list', compact('orders'));
    }

    public function job_applied($job)
    {
        $pre_applied_job = JobAppliedModel::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if ($pre_applied_job) {
            return back()->with('error', 'You can\'t apply! Your previous applied job is not done yet');
        } else {
            $job_for_apply = JobModel::find($job);
            $guider = User::find(auth()->user()->id);

            $applied_job = new JobAppliedModel();
            $applied_job->user_id = $guider->id;
            $applied_job->job_id = $job_for_apply->id;
            // status = 0  -->  pending
            $applied_job->status = 0;
            $applied_job->save();
        }

        return redirect(route('Guider_index'))->with('success', 'Successfully applied');
    }
    // public function job_portal()
    // {
    //     return view('guider.job_portal');
    // }


    public function guider_profile()
    {
        if (Auth::check()) {

            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {
//==============================================================================================================================
                    $countries = CountryModel::all();
                    $profile = ProfileModel::where('user_id', auth()->user()->id)->with('getProfileUser')->first();
                    // $profile = ProfileModel::where('user_id', 2)->first();
                    return view('guider.guider_profile', compact('countries', 'profile'));
//==============================================================================================================================
                } else {
                    return redirect()->route('Guider_membership_plan');
                }
            } else {
                return redirect()->route('Guider_membership_plan');
            }
        }
        return redirect(route('UI_login'));
    }


    public function update_guider_profile(Request $req)
    {
        if (Auth::check()) {
            if (Auth()->user()->id && Auth()->user()->id > 0) {
                $validate_image = '';
            } else {
                $validate_image = 'required|image|mimes:jpeg,png,jpg|max:40000';
            }
        }
        $req->validate([
            'image' => $validate_image,
            'full_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'country_id' => 'required',
        ],
            [
                'zip_code.required' => 'The zip code field is required.',
                'country_id.required' => 'The country field is required.',
            ]
        );
        $user = User::where('id', auth()->user()->id)->first();

        $profile = ProfileModel::where('user_id', auth()->user()->id)->first();
        if (!$profile) {
            $profile = new ProfileModel();
        }
        if ($req->image) {
            $image = $req->image;

            /** Make a new filename with extension */
            $filename = time() . rand(1, 30) . '.' . $image->getClientOriginalExtension();

            /**
             * Get real image path using
             * @class Intervention\Image\Facades\Image
             *
             */
            $img = Image::make($image->getRealPath());

            /** Set image dimension to conserve aspect ratio */
            $img->fit(300, 300);

            /** Get image stream to store the image else the tmp file will be stored */
            $img->stream();

            /** Make a new filename with extension */
            $path = File::put(public_path('users/') . $filename, $img);

            /** Update the image index in the data array to update the image path to be stored in database */
            $data['image'] = $filename;

            /** Checking Image if exits in our project */
            if(File::exists(public_path('users/' . $user->avatar)))
            {
                File::delete(public_path('users/' . $user->avatar));
            }
//            if (Storage::disk('public')->exists('public/users/' . $profile->avatar)) {
//                Storage::disk('public')->delete('public/users/' . $profile->avatar);
//            }
            /** Insert the data in the database */

            $user->avatar = $data['image'];

            $user->save();
        }

        $countryName = CountryModel::where('id', $req->country_id)->pluck('name')->first();
        $profile->user_id = auth()->user()->id;
        $profile->full_name = $req->full_name;
        $profile->phone = $req->phone;
        $profile->address = $req->address;
        $profile->zip_code = $req->zip_code;
        $profile->country_id = $req->country_id;
        $profile->country = $countryName;
        $profile->account_title = $req->account_title;
        $profile->account_number = $req->account_number;
        $profile->save();

        return back()->with('success', 'Profile updated');
    }

    //Meta For Guider
    public function pay_with_meta(MembershipPlanModel $plan)
    {
        if (Auth::check()) {
            $plan_id = $plan->id;
            $plan_price = $plan->price;
            return view('guider.stripe_payment', compact('plan_id', 'plan_price'));
        } else {
            return view('login');
        }
    }

    public function eth_conversion(Request $request, MembershipPlanModel $plan)
    {
        $oneusd = 1 / $request->eth_res_usd;
        $plan_eth = $oneusd * $plan->price;
        return response()->json(array('plan_eth' => $plan_eth, 'message' => 'converted', 'status' => 1));
    }

    public function meta_form(Request $request, MembershipPlanModel $plan)
    {
        if ($request->hash && $request->from) {
            //condition store database Order // Member Model

            // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION
            //Checking user already purchase plan or not
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                //If a user already purchase package we will get count of packages for validate count of packages
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->orderBy('id', 'DESC')->get();
                if ($plan->no_of_packages < count($user_packages)) {
                    $a = 0;
                    foreach ($user_packages as $user_package) {
                        if ($a < $plan->no_of_packages) {
                            $user_package->status = 0;
                        } else {
                            $user_package->status = 1;
                        }
                        $user_package->save();
                        $a++;
                    }
                    // for($a = $plan->no_of_packages; $a <= count($user_packages); $a++)
                    // {
                    // $user_packages[a]->status = 1;
                    // $user_packages[a]->save();
                    // }
//                    return view('guider.stripe_payment', compact('plan_id'));
                }
            }
            // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION

            $invoice = time() . rand('111111111', '999999999');
            $user = Auth::user();
            $desc = $plan->title;
            $price = $plan->price;

            //condition store database Order
            $membership_obj = new MembershipModel();
            $membership_obj->invoice_number = $invoice;
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $plan->id;
            $membership_obj->payment_type = "Through Meta";
            $membership_obj->meta_hash = $request->hash;
            $membership_obj->meta_from = $request->from;


            $membership_obj->no_of_packages = $plan->no_of_packages;
            $membership_obj->duration = $plan->duration;
            $membership_obj->title = $plan->title;
            $membership_obj->price = $plan->price;
            $membership_obj->save();

            return response()->json(['status' => 1, 'message' => 'Payment Successful']);
        } else {
            return response()->json(['message' => 'Payment UnSuccessful']);
        }
    }


    public function stripe_form(MembershipPlanModel $membership)
    {
        $plan_id = $membership->id;
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $free_plan = MembershipPlanModel::where('title', 'Free')->orWhere('price',0)->first();
        if ($membership->id != $free_plan->id) {
            if ($member) {
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                if ($membership->no_of_packages >= count($user_packages)) {
                    return view('guider.stripe_payment', compact('plan_id'));
                } else {
                    return view('guider.stripe_payment', compact('plan_id'))->with('warning', 'We\'ll Inactive your exceeding packages after payment');
                }
            } else {
                return view('guider.stripe_payment', compact('plan_id'));
            }
        } else {
            $member_free = MembershipModel::where('user_id', auth()->user()->id)->where('membership_id', $free_plan->id)->first();
            if ($member_free) {
                return back()->with('error', 'Your free package expires. Please buy our plan to proceed');
            }
            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            // $membership_obj->payment_id = 1;
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
            return redirect()->route('Guider_index');
        }
        return back()->with('warning', 'Something went wrong');
    }


    public function event_stripe(Request $req)
    {
        $plan = MembershipPlanModel::find($req->plan_id);

        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        if ($member) {
            $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->orderBy('id', 'DESC')->get();
            if ($plan->no_of_packages < count($user_packages)) {
                $a = 0;
                foreach ($user_packages as $user_package) {
                    if ($a < $plan->no_of_packages) {
                        $user_package->status = 0;
                    } else {
                        $user_package->status = 1;
                    }
                    $user_package->save();
                    $a++;
                }
                // for($a = $plan->no_of_packages; $a <= count($user_packages); $a++)
                // {
                // $user_packages[a]->status = 1;
                // $user_packages[a]->save();
                // }
                $plan_id = $plan->id;
                return view('guider.stripe_payment', compact('plan_id'));
            }
        }
        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION

        $invoice = time() . rand('111111111', '999999999');
        $user = Auth::user();
        $desc = $plan->title;
        $price = $plan->price;
        $response = $this->stripe_payment($user->email, $req->stripeToken, $price, $desc);

        if ($response['status'] == 'succeeded') {
            //condition store database Order
            $membership_obj = new MembershipModel();
            $membership_obj->invoice_number = $invoice;
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $plan->id;
            $membership_obj->payment_type = 'Through Stripe';
            $membership_obj->payment_id = $response['id'];
            $membership_obj->receipt_url = $response['receipt_url'];
            $membership_obj->no_of_packages = $plan->no_of_packages;
            $membership_obj->duration = $plan->duration;
            $membership_obj->title = $plan->title;
            $membership_obj->price = $plan->price;
            $membership_obj->save();
        } else {
            return back()->with('error', 'Check your inputs and try again');
        }
        return redirect(route('Guider_packages'))->with('success', 'Thank you for purchasing...');
    }
}


