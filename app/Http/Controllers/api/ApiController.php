<?php

namespace App\Http\Controllers\api;

use App\Models\AccountDeleteVerificationModel;
use App\Models\ReviewModel;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\ActivityModel;
use App\Models\JourneysModel;
use App\Models\MembershipModel;
use App\Models\MembershipPlanModel;
use App\Models\FavoredSceneryModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use Carbon\Carbon;

use Illuminate\Auth\RequestGuard;

use Illuminate\Support\Facades\Validator;

class ApiController extends EmailController
{
    public function multiple_record(Request $request)
    {
        $model = new  ActivityModel();
        $model->name = $request->name;
        $model->save();
        if ($model->save()) {
            return response()->json([
                'data' => $model,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data not saved'
            ], 404);
        }
    }

    public function all_packages()
    {
        $data = PackageModel::with('getImages')->with('getCountry')->orderBy('id', 'desc')->where('status', 0)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->take(5)->get();

        if ($data) {
            return response()->json([
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Package not found'
            ], 404);
        }
    }

    public function country()
    {
        $data = CountryModel::all();

        if ($data) {
            return response()->json([
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Country Not Found',
            ], 404);
        }
    }

    public function country_packages($id)
    {
        if ($id) {
            $data = PackageModel::where('country_id', $id)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->with('getImages')->with('getCountry')->where('status', 0)->get();
            if ($data) {
                return response()->json([
                    'data' => $data,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Packages Not Found',
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Please select country',
            ], 404);
        }
    }

    /** in user table status 1 == active
     * in package table status 0 == active  */

    public function guider_packages($id)
    {
        if ($id) {
            $data = User::where('id', $id)->where('status', 1)->where('profile_status', 0)->first(); // in user table status 1 == active

            $data = PackageModel::where('user_id', $data->id)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->with('getFavoredScenery')->with('getImages')->with('getCountry')->where('status', 0)->get();// in package table status 0 == active
            if ($data) {
                return response()->json([
                    'data' => $data,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Packages Not Found',
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Guider Not Found',
            ], 404);
        }
    }

    public function package_guider($id)
    {
        if ($id) {
            $guider_id = PackageModel::where('user_id', $id)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->where('status', 0)->first();
            if (!$guider_id) {
                return response()->json([
                    'message' => 'Package Not Found',
                ], 404);
            }
            $data = User::where('id', $guider_id->id)->where('status', 1)->where('profile_status', 0)->first();
            $data2 = ProfileModel::where('user_id', $data->id)->first();

            if ($data && $data2) {
                return response()->json([
                    'data' => $data,
                    'data2' => $data2,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Guider Not Found',
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Package Id Not Found',
            ], 404);
        }
    }

    public function favored_sceneries_packages($id)
    {
        if (!$id) {
            return response()->json([
                'message' => 'Favored Sceneries Id Not Found',
            ], 404);
        } else {
            $data = PackageModel::where('activity', $id)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->with('getImages')->with('getCountry')->where('status', 0)->get();
            if ($data) {
                return response()->json([
                    'data' => $data,
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Packages Not Found',
                ], 404);
            }
        }
    }

    public function search(Request $request, $id)
    {
        $rules = array(
            'is_price' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if ($id) {
            if ($request->is_price == 1 && $request->start_price !== null && $request->end_price !== null) {
                $data = PackageModel::with('getImages')->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->with('getCountry')->where('country_id', $id)->where('price', '>=', $request->start_price)->where('price', '<=', $request->end_price)->where('status', 0)->orderBy('id', 'DESC')->get();
            } elseif ($request->is_price == 0 && $request->is_price !== null) {
                $data = PackageModel::with('getImages')->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->with('getCountry')->where('country_id', $id)->where('status', 0)->orderBy('id', 'DESC')->get();
            } else {
                return response()->json([
                    'message' => 'Is Price Empty',
                ], 401);
            }
            if ($data && count($data) > 1) {
                return response()->json([
                    'data' => $data,
                ], 200);
            } elseif (count($data) < 1) {
                return response()->json([
                    'data' => $data,
                ], 404);
            } else {
                return response()->json([
                    'message' => 'Packages Not Found',
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'Country Not Found',
            ], 404);
        }
    }

    //Review
    public function reviews()
    {
        $reviews = ReviewModel::with('getReviewUser')
            ->whereRelation('getReviewUser', 'status', 1)
            ->whereRelation('getReviewUser', 'profile_status', 0)
            /** Check if user delete his/her account */
            ->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)
            /** Check if user request for delete or user exists*/
            ->whereRelation('getReviewUser', 'is_deleted_account', 0)
            ->orWhereRelation('getReviewUser', 'is_deleted_account', '!=', 2)
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
        $review_star = ReviewModel::where('status', 1)->pluck('star')->avg();
        $review_avg = number_format((float)$review_star, 1, '.', '');

        if ($reviews && $review_avg) {
            return response()->json([
                'data' => $reviews,
                'review_avg' => $review_avg,
            ], 200);
        } else {
            return response()->json([
                'data' => $reviews,
                'message' => 'Review Not Found',
            ], 404);
        }
    }

    public function submit_review(Request $request)
    {
        $rules = array(
            'userId' => ['required'],
            'message' => ['required', 'max:1000'],
            'rating' => ['required', 'numeric', 'min:1', 'max:5'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $review_model = new ReviewModel();
        $review_model->user_id = $request->userId;
        $review_model->message = str_replace('"', "", $request->message);
        $review_model->star = $request->rating;
        $review_model->status = 1;
        $review_model->save();
        if ($review_model->save()) {
            return response()->json([
                'message' => 'Review Submitted',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Review Not Submitted',
            ], 400);
        }
    }

    //need to complete
    public function payment_intend(Request $request)
    {
        $rules = array(
            'amount' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );

        $pi = $stripe->paymentIntents->create([
            'amount' => $request->amount,
            'currency' => 'usd',
            'payment_method_types' => ['card'],
        ]);

        return response()->json($pi, 200);
    }

    public function order_place(Request $request)
    {
        $rules = array(
            'userRole' => ['required'],
            'package_id' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if ($request->userRole == Auth()->user()->user_role) {
            if ($request->userRole == 0) {
                //Journies Table

                /****************************************** ****************************************/
//                $package = PackageModel::find($request->package_id);
//
//                $inv_no = rand('111111111', '999999999');
//                $user = Auth::user();
//                $desc = $package->title;
//                $price = $package->price;
//                $response = $this->stripe_payment($user->email, $request->stripeToken, $price, $desc);
//
//                if ($response['status'] == 'succeeded') {
//                    //condition store database Order
//                    $journey = new JourneysModel();
//                    $journey->invoice_number = "stripe".$inv_no;
//                    $journey->user_id = auth()->user()->id;
//                    $journey->guide_id = $package->user_id;
//                    $journey->package_id = $package->id;
//                    $journey->payment_type = "Through Stripe";
//                    $journey->payment_id = $response['id'];
//                    $journey->payment_url = $response['receipt_url'];
//                    $journey->total_price = $price;
//                    $journey->status =1; //0=Process,1=completed,2=rejected
//                    $journey->save();
//                } else {
//                    return back()->with('error', 'Check your inputs and try again');
//                }
//                return redirect(route('UI_index'))->with('success', 'Your vacation booked');
                /***************************************** *****************************************/

            } elseif ($request->userRole == 1) {
                //MemberShip Table
                return response()->json([
                    'message' => ' the server understands the content type of the request, and the syntax of the request entity is correct, but it was unable to process the contained instructions.'
                ], 422);
            } else {
                return response()->json([
                    'message' => 'Invalid User Role'
                ], 400);
            }
        } else {
            return response()->json([
                'message' => 'Something went wrong'
            ], 400);
        }
    }

    /**-------------------Api Controller Stripe Api Starts------------------------------------------------**/

    public function stripe_key()
    {
        $publishableKey = env('STRIPE_KEY');
        $secretKey = env('STRIPE_SECRET');
        return response()->json(['pk_key' => $publishableKey, 'sk_key' => $secretKey]);
    }

    /**
     * submit payment page
     *
     * @return void
     */
    public function submit(Request $request)
    {
        $rules = array(
            'userId' => ['required'],
            'packageId' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );
        $user = User::where('id', $request->userId)->where('status', 1)->where('profile_status', 0)->first();
        if ($user) {
            if ($user->user_role == 0) {
                //Journies Table
                $package = PackageModel::where('status', 0)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->find($request->packageId);
                if ($package) {
                    $pi = $stripe->paymentIntents->create([
                        'amount' => $package->price * 100,
                        'currency' => 'usd',
                        'payment_method_types' => ['card'],
                    ]);
                    return response()->json(['pi' => $pi], 200);
                } else {
                    return response()->json([
                        'message' => 'No Package Found'
                    ], 404);
                }

            } elseif ($user->user_role == 1) {
                //MemberShip Table
                return response()->json([
                    'message' => 'The server understands the content type of the request, and the syntax of the request entity is correct, but it was unable to process the contained instructions.'
                ], 422);
            } else {
                return response()->json([
                    'message' => 'Invalid User Role'
                ], 400);
            }
        } else {
            return response()->json([
                'message' => 'User Not Found'
            ], 400);
        }
    }

    public function aftersubmit(Request $request)
    {
        /** using validator for api call **/
        $rules = array(
            'userId' => ['required'],
            'invoiceNumber' => ['required'],
            'packageId' => ['required'],
            'stripeId' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $user = User::where('id', $request->userId)->where('status', 1)->where('profile_status', 0)->first();
        if ($user->user_role == 0) {
            //Journies Table
            $package = PackageModel::where('status', 0)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->find($request->packageId);
            if ($package) {
                $journey_model = JourneysModel::where('invoice_number', $request->invoiceNumber)->first();
                //condition store database Order
                if ($journey_model) {
                    $journey = $journey_model;
                    $msg = 'updated';
                } else {
                    $journey = new JourneysModel();
                    $msg = 'new';

                }
                $journey->invoice_number = $request->invoiceNumber;
                $journey->user_id = $user->id;
                $journey->guide_id = $package->user_id;
                $journey->package_id = $package->id;
                $journey->payment_type = "Through Stripe";
                $journey->payment_id = $request->stripeId;
                $journey->total_price = $package->price;
                $journey->status = 1; //0=Process,1=completed,2=rejected
                $journey->is_paid = 1; //0=Unsuccessfull Payment,1=Successfull Payment
                $journey->save();
                if ($journey->save()) {
                    return response()->json(['success' => True, 'message' => $msg, 'journey' => $journey],200);
                } else {
                    $journey_model = JourneysModel::where('invoice_number', $request->invoiceNumber)->first();
                    if ($journey_model) {
                        $journey = $journey_model;
                        $msg = 'updated';
                    } else {
                        $journey = new JourneysModel();
                        $msg = 'new';
                    }
                    $journey->invoice_number = $request->invoiceNumber;
                    $journey->user_id = $user->id;
                    $journey->guide_id = $package->user_id;
                    $journey->package_id = $package->id;
                    if ($request->stripeId) {
                        $journey->payment_type = "Through Stripe";
                        $journey->payment_id = $request->stripeId;
                    }
                    $journey->total_price = $package->price;
                    $journey->status = 0; //0=Process,1=completed,2=rejected
                    $journey->is_paid = 0; //0=Unsuccessfull Payment,1=Successfull Payment

                    $journey->save();
                    return response()->json(['success' => False, 'message' => 'Please Contact Admin For Your Payment-' . $msg, 'journey' => $journey], 500);
                }
            } else {
                return response()->json([
                    'message' => 'No Package Found'
                ], 404);
            }

        } elseif ($user->user_role == 1) {
            //MemberShip Table
            return response()->json([
                'message' => 'The server understands the content type of the request, and the syntax of the request entity is correct, but it was unable to process the contained instructions.'
            ], 422);
        } else {
            return response()->json([
                'message' => 'Invalid User Role'
            ], 400);
        }
        // 	$orders =Order::where('id',$request->id)->get();
        // dd($orders);
//        return response()->json(['success' => True]);
    }
    /**-------------------Api Controller Stripe Api Ends------------------------------------------------**/
    /**-------------------Api Controller Paypal Api Starts------------------------------------------------**/
    public function paypal_submit(Request $request)
    {

        /** using validator for api call **/
        $rules = array(
            'userId' => ['required'],
            'invoiceNumber' => ['required'],
            'packageId' => ['required'],
            'payerId' => ['required'],
            'paymentId' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
//        dd($request->all());
        $user = User::where('id', $request->userId)->where('status', 1)->where('profile_status', 0)->first();
        if ($user->user_role == 0) {
            //Journies Table
            $package = PackageModel::where('status', 0)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->find($request->packageId);
            if ($package) {
                $journey_model = JourneysModel::where('invoice_number', $request->invoiceNumber)->first();
                //condition store database Order
                if ($journey_model) {
                    $journey = $journey_model;
                    $msg = 'updated';
                } else {
                    $journey = new JourneysModel();
                    $msg = 'new';

                }
                $journey->invoice_number = $request->invoiceNumber;
                $journey->user_id = $user->id;
                $journey->guide_id = $package->user_id;
                $journey->package_id = $package->id;
                $journey->payment_type = "Through Paypal";
                $journey->payment_id = $request->paymentId;
                $journey->payer_id = $request->payerId;
                $journey->total_price = $package->price;
                $journey->status = 1; //0=Process,1=completed,2=rejected
                $journey->is_paid = 1; //0=Unsuccessfull Payment,1=Successfull Payment
                $journey->save();
                if ($journey->save()) {
                    return response()->json(['success' => True, 'message' => $msg, 'journey' => $journey],200);
                } else {
                    $journey_model = JourneysModel::where('invoice_number', $request->invoiceNumber)->first();
                    if ($journey_model) {
                        $journey = $journey_model;
                        $msg = 'updated';
                    } else {
                        $journey = new JourneysModel();
                        $msg = 'new';
                    }
                    $journey->invoice_number = $request->invoiceNumber;
                    $journey->user_id = $user->id;
                    $journey->guide_id = $package->user_id;
                    $journey->package_id = $package->id;
                    if ($request->stripeId) {
                        $journey->payment_type = "Through Stripe";
                        $journey->payment_id = $request->stripeId;
                    }
                    $journey->total_price = $package->price;
                    $journey->status = 0; //0=Process,1=completed,2=rejected
                    $journey->is_paid = 0; //0=Unsuccessfull Payment,1=Successfull Payment

                    $journey->save();
                    return response()->json(['success' => False, 'message' => 'Please Contact Admin For Your Payment-' . $msg, 'journey' => $journey], 500);
                }
            } else {
                return response()->json([
                    'message' => 'No Package Found'
                ], 404);
            }

        } elseif ($user->user_role == 1) {
            //MemberShip Table
            return response()->json([
                'message' => 'The server understands the content type of the request, and the syntax of the request entity is correct, but it was unable to process the contained instructions.'
            ], 422);
        } else {
            return response()->json([
                'message' => 'Invalid User Role'
            ], 400);
        }
        // 	$orders =Order::where('id',$request->id)->get();
        // dd($orders);
//        return response()->json(['success' => True]);
    }
    /**-------------------Api Controller Paypal Api ends------------------------------------------------**/

    /**-------------------Api Controller Favored Sceneries Api Starts------------------------------------------------**/
    public function favored_sceneries()
    {
        $data = FavoredSceneryModel::all();
        if ($data) {
            return response()->json([
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Favored Scenery not found'
            ], 404);
        }
    }
    /**-------------------Api Controller Favored Sceneries Api Ends------------------------------------------------**/

    /**-------------------Api Controller Journey Order Details Api Starts------------------------------------------------**/
    public function journey_order_details($id)
    {
        $data = JourneysModel::with('getJourneyGuider')->with('getJourneyGuiderProfile')->with('getJourneyPackage')->where('user_id', $id)->where('status', 1)->where('is_paid', 1)->get();

        if ($data) {
            return response()->json([
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Journey not found'
            ], 404);
        }
    }
    /**-------------------Api Controller Journey Order Details Api Ends------------------------------------------------**/

    /**-------------------Api Controller Get Guider Booked Packages Api Starts------------------------------------------------**/
    public function guider_booked_packages(Request $request)
    {
        /** using validator for api call **/
        $rules = array(
            'guideId' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $member = MembershipModel::where('user_id', $request->guideId)->orderBy('id', 'DESC')->first();
        if ($member) {
            $pkg_expiry = $member->created_at->addDay($member->duration);
            $now = Carbon::now();
            if ($pkg_expiry > $now) {
                $data = PackageModel::with('getImages')->with('getCountry')
                    ->with('getPackageJourneys.getUser')
                    ->whereRelation('getPackageJourneys', 'guide_id', $request->guideId)
                    ->whereRelation('getPackageJourneys', ['is_paid' => 1, 'status' => 1])
                    ->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())
                    ->where('user_id', $request->guideId)->where('status', 0)->orderBy('id', 'desc')->get();

            } else {
                return response()->json([
                    'message' => 'Your membership expires! Please buy according to your need'
                ], 410);
            }
        } else {
            return response()->json([
                'message' => 'Please buy membership'
            ], 404);
        }

        if ($data) {
            return response()->json([
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'message' => 'None of your packages booked'
            ], 404);
        }
    }
    /**-------------------Api Controller Get Guider Booked Packages Api Ends------------------------------------------------**/

    /**-------------------Api Controller Guider Profile Api Starts------------------------------------------------**/
    public function update_guider_profile(Request $request)
    {
        /** using validator for api call **/
        $rules = array(
            'guideId' => ['required'],
            'guideName' => ['required'],
            'guidePhoneNo' => ['required'],
            'guideAddress' => ['required'],
            'guideZipcode' => ['required'],
            'guideCountry' => ['required'],
            'guideImage' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


    }

    /**-------------------Api Controller Guider Profile Api Ends------------------------------------------------**/

    /**-------------------Api Controller Meta Mask Api Starts------------------------------------------------**/

    public function meta_mask($package, $user)
    {
        if (!$user) {
            return response()->json([
                'message' => 'Oops ! User not found'
            ], 404);
        }
        if (!$package) {
            return response()->json([
                'message' => 'Oops ! Package not found'
            ], 404);
        }

        $userfind = User::where('id', $user)->where('status', 1)
            /** Check if user delete his/her account */
            ->where('deleted_at', null)
            ->where('is_deleted_account', '!=', 1)
            /** Check if user request for delete or user exists*/
            ->where('is_deleted_account', 0)
            ->orWhere('is_deleted_account', 2)
            ->first();

        if ($userfind) {
            if ($userfind->is_deleted_account === 2) {
                $this->deleteAccountEmail($userfind);
                return response()->json([
                    'message' => 'Please check email'
                ], 401);
            }
            if ($userfind->user_role == 1) //means if user is a guider
            {
                return response()->json([
                    'message' => 'Guider Profile'
                ], 404);

            } else if ($userfind->user_role == 0) {
                return redirect()->route('meta_login', ['user' => $userfind->id, 'package' => $package]);
            }
        } else {
            return response()->json([
                'message' => 'Email not found or You didn\'t confirm your email yet'
            ], 404);
        }
    }
    /**-------------------Api Controller Meta Mask Api Ends------------------------------------------------**/

    /**-------------------Api Controller Meta Mask Eth Conversion Api Starts------------------------------------------------**/
    public function eth_conversion(PackageModel $package)
    {
        $json = json_decode(file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=ETH,USD'), true);
        $oneusd = 1 / $json['USD'];
        $pkg_eth = $oneusd * $package->price;

        if ($pkg_eth) {
            return response()->json([
                'data' => $pkg_eth,
                'message' => 'converted',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Error in ethereum conversion'
            ], 404);
        }
    }
    /**-------------------Api Controller Meta Mask Eth Conversion Api Ends------------------------------------------------**/

    /**-------------------Api Controller Meta Mask Submit Api Ends------------------------------------------------**/
    public function metamask_aftersubmit(Request $request)
    {
        /** using validator for api call **/
        $rules = array(
            'userId' => ['required'],
            'invoiceNumber' => ['required'],
            'packageId' => ['required'],
            'meta_hash' => ['required'],
            'meta_from' => ['required'],
            'meta_to' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if ($request->meta_to !== env('META_CLIENT_KEY')) {
            return response()->json([
                'message' => 'Requests from malicious bots can pose as legitimate traffic. Occasionally, you may see this page while the site ensures that the connection is secure.'
            ], 422);
        }
        $order = JourneysModel::where('meta_hash', $request->meta_hash)->first();
        if ($order) {
            return response()->json([
                'message' => 'Invalid meta mask hash.'
            ], 422);
        }
        $user = User::where('id', $request->userId)->where('status', 1)->where('profile_status', 0)->where('deleted_at', null)->first();
        if ($user->user_role == 0) {
            //Journies Table
            $package = PackageModel::where('status', 0)->where('from_date', '>=', Carbon::now())->where('end_date', '>=', Carbon::now()->addDay())->find($request->packageId);
            if ($package) {

                $journey = new JourneysModel();
                $journey->invoice_number = $request->invoiceNumber;
                $journey->user_id = $user->id;
                $journey->guide_id = $package->user_id;
                $journey->package_id = $package->id;
                $journey->payment_type = "Through Meta Mask";
                $journey->meta_hash = $request->meta_hash;
                $journey->meta_from = $request->meta_from;
                $journey->total_price = $package->price;
                $journey->status = 1; //0=Process,1=completed,2=rejected
                $journey->is_paid = 1; //0=Unsuccessfull Payment,1=Successfull Payment
                $journey->save();

                if ($journey->save()) {
                    return response()->json([
                        'success' => True, 'message' => 'Transaction completed successfully.', 'journey' => $journey
                    ], 200);
                } else {
                    return response()->json(['success' => False, 'message' => 'Please Contact Admin For Your Payment', 'journey' => $journey], 500);
                }
            } else {
                return response()->json([
                    'message' => 'No Package Found'
                ], 404);
            }

        } elseif ($user->user_role == 1) {
            //MemberShip Table
            return response()->json([
                'message' => 'The server understands the content type of the request, and the syntax of the request entity is correct, but it was unable to process the contained instructions.'
            ], 422);
        } else {
            return response()->json([
                'message' => 'Invalid User Role'
            ], 400);
        }
        // 	$orders =Order::where('id',$request->id)->get();
        // dd($orders);
//        return response()->json(['success' => True]);
    }

    /**-------------------Api Controller Meta Mask Submit Api Ends------------------------------------------------**/

    /**-------------------Api Controller User Delete Account Api Starts------------------------------------**/
    public function user_account_delete($id)
    {
//        ->whereRelation('getPackageJourneys', 'guide_id', $request->guideId)

        $user = User::where('id', $id)->where('user_role', 0)->where('status', 1)->where('profile_status', 0)->first();

        if ($user) {
            if ($user->is_deleted_account === 1 || $user->deleted_at !== null) {
                /**  1 = Yes */
                /**  means account already deleted */
                return response()->json([
                    'message' => 'account already deleted'
                ], 404);
            }
            if ($user->is_deleted_account === 2) {
                /**  2 = Process*/
                /**  means delete my account application is in process */
                return response()->json([
                    'message' => 'account deletion is in process, please verify your email to delete your ivacay account'
                ], 404);
            }
            if ($user->user_role === 0) {
                if ($user->deleted_at === null) {
                    if ($user->is_deleted_account === 0) {
                        /**  0 = No */
                        /**  means delete his/her account */
                        $this->deleteAccountEmail($user);
                        $user->is_deleted_account = 2;
                        $user->save();
                        $acc_del_ver = new AccountDeleteVerificationModel();
                        $acc_del_ver->user_id = $user->id;
                        $acc_del_ver->is_seen = 0;
                        $acc_del_ver->token = rand('1111111111111111', '9999999999999999');
                        $acc_del_ver->save();
                        return response()->json([
                            'message' => 'An email has been sent to you'
                        ], 200);
                    }
                }
            } else {
                return response()->json([
                    'message' => 'user role issue'
                ], 404);
            }
        } else {
            return response()->json([
                'message' => 'user not found'
            ], 404);
        }

    }
    /**-------------------Api Controller User Delete Account Api Ends--------------------------------------**/


}
