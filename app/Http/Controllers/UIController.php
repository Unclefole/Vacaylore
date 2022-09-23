<?php

namespace App\Http\Controllers;

use App\Models\AccountDeleteVerificationModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\ReviewModel;
use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\JourneysModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\ActivityModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use App\Models\FavoredSceneryModel;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Storage;
use File;

class UIController extends EmailController
{

    public function index($message = "")
    {
        $countries = CountryModel::all();
        $sceneries = FavoredSceneryModel::all();
        $activities = ActivityModel::where('status', 1)->orderBy('name', 'Asc')->get();
        return view('index', compact('countries', 'sceneries', 'activities'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
    public function my_bookings()
    {
        $packages = JourneysModel::with('getJourneyGuider','getJourneyGuiderProfile','getJourneyPackage.getCountry','getImage')
            ->where('user_id', auth()->user()->id)
            ->where('status', 1)
            ->where('is_paid', 1)
            ->orderby('id','DESC')
            ->get();
//        dd($packages);
        return view('my-bookings',compact('packages'));
    }

    public function meta_login($package, $user)
    {
        $userfind = User::find($user);
        Auth::login($userfind);
        if (Auth::check()) {
            return redirect()->route('UI_pay_with_meta', [$package]);
        } else {
            return 'home';
        }
    }

    public function for_guide()
    {
        return view('for_guide');
    }

    public function articles()
    {
        return view('articles');
    }

    public function faq()
    {
        return view('faq');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function submit_review(Request $request)
    {
        $request->validate([
            'message' => 'required|max:1000',
            'rating' => 'required|numeric|min:1|max:5'
        ]);
        if (Auth::check() && Auth::user()->id) {
            $review_model = new ReviewModel();
            $review_model->user_id = Auth::user()->id;
            $review_model->message = str_replace('"', "", $request->message);
            $review_model->star = $request->rating;
            $review_model->status = 1;
            $review_model->save();
            if ($review_model->save()) {
                return redirect()->route('UI_share_experience')->with('success', 'submitted');
            }
        } else {
            return redirect()->route('UI_share_experience')->with('error', 'Login Requried');
        }
        return redirect()->route('UI_index');
    }

    public function share_experience()
    {
        $reviews = ReviewModel::where('status', 1)
            ->with('getReviewUser')
            /** Check if user delete his/her account so that means email available */
            ->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)
            ->orderBy('id', 'desc')
            ->get();
        $review_star = ReviewModel::where('status', 1)->pluck('star')->avg();
        $review_avg = number_format((float)$review_star, 1, '.', '');

        $excellent = ReviewModel::where('star', 5)->where('status', 1)->with('getReviewUser')->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)->count();
        $good = ReviewModel::where('star', 4)->where('status', 1)->with('getReviewUser')->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)->count();
        $average = ReviewModel::where('star', 3)->where('status', 1)->with('getReviewUser')->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)->count();
        $poor = ReviewModel::where('star', 2)->where('status', 1)->with('getReviewUser')->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)->count();
        $terrible = ReviewModel::where('star', 1)->where('status', 1)->with('getReviewUser')->whereRelation('getReviewUser', 'deleted_at', null)
            ->whereRelation('getReviewUser', 'is_deleted_account', '!=', 1)->count();

        //Excellent
        if ($excellent <= 0) {
            $excellent_bar = 'bar-1';
        } elseif ($excellent < 10 && $excellent > 0) {
            $excellent_bar = 'bar-2';
        } elseif ($excellent < 30 && $excellent > 10) {
            $excellent_bar = 'bar-3';
        } elseif ($excellent < 60 && $excellent > 30) {
            $excellent_bar = 'bar-4';
        } elseif ($excellent <= 100 && $excellent > 60) {
            $excellent_bar = 'bar-5';
        } elseif ($excellent > 100) {
            $excellent_bar = 'bar-6';
        }

        //Good
        if ($good <= 0) {
            $good_bar = 'bar-1';
        } elseif ($good < 10 && $good > 0) {
            $good_bar = 'bar-2';
        } elseif ($good < 30 && $good > 10) {
            $good_bar = 'bar-3';
        } elseif ($good < 60 && $good > 30) {
            $good_bar = 'bar-4';
        } elseif ($good <= 100 && $good > 60) {
            $good_bar = 'bar-5';
        } elseif ($good > 100) {
            $good_bar = 'bar-6';
        }

        //Average
        if ($average <= 0) {
            $average_bar = 'bar-1';
        } elseif ($average < 10 && $average > 0) {
            $average_bar = 'bar-2';
        } elseif ($average < 30 && $average > 10) {
            $average_bar = 'bar-3';
        } elseif ($average < 60 && $average > 30) {
            $average_bar = 'bar-4';
        } elseif ($average <= 100 && $average > 60) {
            $average_bar = 'bar-5';
        } elseif ($average > 100) {
            $average_bar = 'bar-6';
        }

        //Poor
        if ($poor <= 0) {
            $poor_bar = 'bar-1';
        } elseif ($poor < 10 && $poor > 0) {
            $poor_bar = 'bar-2';
        } elseif ($poor < 30 && $poor > 10) {
            $poor_bar = 'bar-3';
        } elseif ($poor < 60 && $poor > 30) {
            $poor_bar = 'bar-4';
        } elseif ($poor <= 100 && $poor > 60) {
            $poor_bar = 'bar-5';
        } elseif ($poor > 100) {
            $poor_bar = 'bar-6';
        }

        //Terrible
        if ($terrible <= 0) {
            $terrible_bar = 'bar-1';
        } elseif ($terrible < 10 && $terrible > 0) {
            $terrible_bar = 'bar-2';
        } elseif ($terrible < 30 && $terrible > 10) {
            $terrible_bar = 'bar-3';
        } elseif ($terrible < 60 && $terrible > 30) {
            $terrible_bar = 'bar-4';
        } elseif ($terrible <= 100 && $terrible > 60) {
            $terrible_bar = 'bar-5';
        } elseif ($terrible > 100) {
            $terrible_bar = 'bar-6';
        }

        return view('share-experience', compact('reviews', 'review_avg', 'excellent', 'good', 'average', 'poor', 'terrible', 'excellent_bar', 'good_bar', 'average_bar', 'poor_bar', 'terrible_bar'));
    }


    public function service_provider()
    {
        return view('service_provider');
    }

    public function search_country(Request $request)
    {
        if ($request->ajax()) {
            if ($request->search != null) {
                $part = CountryModel::where('name', 'LIKE', '%' . $request->search . '%')
                    // ->orWhere('title','LIKE','%'.$request->search.'%')
                    ->get();

                $output = '<table class="table table-striped">
                                    <tbody>';
                if (count($part) > 0) {
                    foreach ($part as $value) {
                        $route = route('UI_country_specific_packages', [$value->id]);
                        $output .=
                            '<tr><a href="' . $route . '">
                                ' . $value->name . '
                            </a></tr>';
                    }
                } else {
                    $output .= '<tr><a href="javascript:void(0)">No Result Found. Please search a correct name.</a></tr>';
                }
                $output .= '</tbody>
                        </table>';
                return $output;
            } else {
                return $output = '';
            }
        }
    }


    public function vacationer()
    {
        $countries = CountryModel::all();
        $sceneries = FavoredSceneryModel::all();
        $activities = ActivityModel::all();
        return view('vacationer', compact('countries', 'sceneries','activities'));
    }

    public function vacationer_profile()
    {
        if (Auth::check()) {
            $countries = CountryModel::all();
            $user = User::with('getUserProfile')->where('id', auth()->id())
                ->where('deleted_at', null)
                ->where('is_deleted_account', '!=', 1)
                ->first();

            return view('vacationer-profile', compact('user', 'countries'));
        }
        return back();
    }

    public function vacationer_profile_update(Request $request)
    {
        if (Auth::check()) {
            if (Auth()->user()->id && Auth()->user()->id > 0) {
                $validate_image = '';
            } else {
                $validate_image = 'required|image|mimes:jpeg,png,jpg|max:40000';
            }
        }

        $request->validate([
            'image' => $validate_image,
            'username' => 'required',
            'email' => 'required',
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
        $user->username = $request->username;

        /** If User Change Email need to verify */
        if ($user->email !== $request->email) {
            $user->email = $request->email;
            /** to shoot an email */
            $this->verifyEmail($user->id);
            $user->status = 0;
            $msg = ' Profile updated successfully, Please verify your email. Otherwise you won\'t be logged in again !';

        } else {
            $msg = ' Profile updated successfully!';
        }

        if ($request->image) {
            $image = $request->image;

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
            if (File::exists(public_path('users/' . $user->avatar))) {
                File::delete(public_path('users/' . $user->avatar));
            }

            /** Insert the data in the database */
            $user->avatar = $data['image'];
        }

        $user->save();


        $profile = ProfileModel::where('user_id', auth()->user()->id)->first();

        if (!$profile) {
            $profile = new ProfileModel();
        }
        $countryName = CountryModel::where('id', $request->country_id)->pluck('name')->first();
        $profile->user_id = auth()->user()->id;
        $profile->full_name = $request->full_name;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->zip_code = $request->zip_code;
        $profile->country_id = $request->country_id;
        $profile->country = $countryName;
        $profile->save();

        return back()->with('success', $msg);
    }

    public function plan_journey()
    {
        return view('contact_us');
    }

    public function build_package()
    {
        $countries = CountryModel::all();
        return view('build_your_package', compact('countries'));
    }

    public function contact_us(Request $req)
    {
        $this->contactUs($req->subject, $req->username, $req->email, $req->comment);
        return back()->with('success', 'Response submitted Successfully');
    }


    public function sign_up()
    {
        if (Auth::check()) {
            return back();
        } else {
            $countries = CountryModel::all();
            return view('sign_up', compact('countries'));
        }
    }

    public function create_account(Request $req)
    {
        $this->validate($req, [
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'phone' => ['required'],
            'user_role' => ['required'],
            'flexRadioDefault' => ['accepted'],
            'country_id' => ['required'],
            'image' => ['required', 'mimes:jpeg,png,jpg,max:40000'],
        ],
            [
                'username.required' => 'The user name field is required.',
                'user_role.required' => 'The user role field is required.',
                'flexRadioDefault.accepted' => 'Please accept terms and conditions',
                'country_id.required' => 'The country field is required.',
            ]
        );

        /** If email exists means user found*/
//        $user = User::where('email', $req->email)
//            /** Check if user delete his/her account so that means email available */
//            ->where('is_deleted_account', '!=', 1)
//            ->first();

        $user = User::where('email', $req->email)->where('deleted_at',null)->first();


        if ($user) {
            /** Check if user request for delete or user exists*/
            if ($user->is_deleted_account === 0 || $user->is_deleted_account === 2) {
                return back()->with('error', 'User already register.');
            }
        }

        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        if ($req->password) {
            $user->password = Hash::make($req->password);
        }
        $user->user_role = $req->user_role;

//        if ($req->image) {
//            $imageName = time() . '.' . $req->image->getClientOriginalExtension();
//            $req->image->move(public_path('/users'), $imageName);
//        }
//        $user->avatar = $imageName;

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
        File::put(public_path('users/') . $filename, $img);
//        $path = Storage::disk('public')->put('users/' . $filename, $img);

        /** Update the image index in the data array to update the image path to be stored in database */
        $data['image'] = $filename;

        /** Insert the data in the database */
        $user->avatar = $data['image'];

        $user->save();
        $countryName = CountryModel::where('id', $req->country_id)->pluck('name')->first();

        $profile = new ProfileModel();
        $profile->user_id = $user->id;
        $profile->full_name = $user->username;
        $profile->country_id = $req->country_id;
        $profile->phone = $req->phone;
        $profile->country = $countryName;
        $profile->save();

        //to shoot an email
        $this->verifyEmail($user->id);

        return redirect()->route('UI_login')->with('success', 'Account created successfully!');
    }

    public function login()
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            $countries = CountryModel::all();
            return redirect()->route('UI_index')->with('success', 'Login successfully ');
        }
    }

    public function loggedin(Request $req)
    {
        $this->validate($req, [
            'email' => ['required'],
            'password' => ['required'],
        ]);
        if (!empty($req->email) && !empty($req->password)) {

            $userfind = User::where('email', $req->email)->where('status', 1)
                /** Check if user delete his/her account so that means email available */
                ->where('deleted_at', null)
//                ->where('is_deleted_account', 1)
//                /** Check if user request for delete or user exists*/
//                ->where('is_deleted_account', 0)
//                ->orWhere('is_deleted_account', 2)
                ->first();



            if ($userfind) {
                /*means found user*/
                if (Hash::check($req->password, $userfind->password)) {
                    /*matched password*/
                    Auth::login($userfind);
                    if (Auth::check()) {
                        // dd($userfind->user_role == 1); //means if user is a guider
                        if ($userfind->user_role == 1) //means if user is a guider
                        {
                            if ($userfind->profile_status == 0) {
                                return redirect()->route('Guider_membership_plan');
                            } else {
                                Auth::logout();
                                return back()->with('error', 'Your profile is locked. Contact owner to unlock it');
                            }
                        } else if ($userfind->user_role == 0) {


                            if ($userfind->is_deleted_account === 2) {
                                return redirect()->route('UI_view_delete_account')->with('error', 'Your account is in deleting process, please verify your email to delete your ivacay account');
                            }

                            return back()->with('success', 'Logged in successfully');
                            // return redirect()->route('UI_index');
                        }
                        // return redirect(route('UI_index'));
                        return redirect()->back();
                    } else {
                        return redirect(route('UI_login'));
                    }
                    /*matched password end*/
                } else {
                    return redirect(route('UI_login'))->with('error', 'Password is incorrect')->with('email', $req->email);
                }
                /*means found user end*/
            } else {
                return back()->with('error', 'Email not found or You didn\'t confirm your email yet');
            }
        } else {
            return redirect(route('UI_login'))->with('warning', 'Please fill required fields');
        }
    }

    //execute from user email
    public function user_verified($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();

        return redirect(route('UI_login'))->with('success', 'Email authorized! You can login now.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('UI_index')->with('success', 'Logout successfully');
    }


    public function personal_concierge_service()
    {
        return view('personal_concierge_service');
    }

    public function personal_concierge_service2()
    {
        return view('personal_concierge_service2');
    }

    public function forgotpasswordView()
    {
        return view('forgot-password');
    }

    public function forgot_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $userfind = User::where('email', $request->email)->first();
        if ($userfind) {
            $userfind->is_reset = 1;
            $userfind->save();
            $details = $userfind;
            $this->forgotpassword($details);
            return redirect()->route('UI_login')->with('success', 'An email has been sent to you!');
        } else {
            return back()->with('error', 'Your email is not valid');
        }
    }

    public function reset_password(User $user)
    {
        if ($user->is_reset === 1) {
            return view('reset-password', compact('user'));
        } else {
            return redirect()->route('UI_index')->with('error', 'Link not found');
        }

    }

    protected function reset_password_data(User $user, Request $request)
    {
        $data = $request->validate([
            'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ]);
        if (Hash::check($request->new_password, $user->password)) {
            return back()->with('error', 'New password cannot be the same as old password.');

        } else {

            if ($user->is_reset === 1) {
                $user->password = Hash::make($request->new_password);
                $user->is_reset = 0;
                $user->save();
                return redirect()->route('UI_index')->with('success', 'Password Update Successfully');
            } else {
                return redirect()->route('UI_index')->with('error', 'Your Link Expired');
            }
        }
    }

    /**-------------------- Redirect Login Starts-----------------------------*/

    /**-------------------- Delete Account Starts-----------------------------*/
    public function view_delete_account()
    {
        return view('delete_account');
    }

    public function del_account_email(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('id', auth()->user()->id)->where('user_role', 0)->where('status', 1)->where('profile_status', 0)->first();

        if ($user) {
            if ($user->email === $request->email) {

                if ($user->is_deleted_account === 1 || $user->deleted_at !== null) {
                    /**  1 = Yes */
                    /**  means account already deleted */
                    return back()->with('error', 'account already deleted');
                }
                if ($user->is_deleted_account === 2) {
                    /**  2 = Process*/
                    /**  means delete my account application is in process */
                    return back()->with('error', 'account deletion is in process, please verify your email to delete your ivacay account');
                }
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
                        return back()->with('success', 'An email has been sent to you');
                    }
                }
            } else {
                return back()->with('error', 'Wrong email');
            }
        } else {
            return back();
        }

    }

    public function delete_account($userId)
    {
        $user = User::where('id', $userId)->where('user_role', 0)->where('status', 1)->where('profile_status', 0)->first();

        if ($user) {
            $acc_del_ver = AccountDeleteVerificationModel::where('user_id', $userId)->latest()->first();
            if ($acc_del_ver) {
                if ($acc_del_ver->is_seen !== 1) {
                    $acc_del_ver->is_seen = 1;
                    $acc_del_ver->save();

                    $carbonDate = Carbon::now();
                    $user->deleted_at = $carbonDate;
                    $user->is_deleted_account = 1;
                    $user->save();
                } else {
                    return redirect()->route('UI_index')->with('error', 'This link is no longer in use');
                }
            } else {
                return redirect()->route('UI_index')->with('error', 'Account not found');
            }
        } else {
            return redirect()->route('UI_index')->with('error', 'User not found');
        }
        Auth::logout();
        return redirect()->route('UI_index')->with('success', 'Account deleted successfully');

    }

    public function dont_delete_account($userId)
    {
        $user = User::where('id', $userId)->where('user_role', 0)->where('status', 1)->where('profile_status', 0)->first();

        $acc_del_ver = AccountDeleteVerificationModel::where('user_id', $userId)->latest()->first();
        if ($acc_del_ver) {
            if ($acc_del_ver->is_seen !== 1) {
                $acc_del_ver->is_seen = 1;
                $acc_del_ver->save();
            } else {
                return redirect()->route('UI_index')->with('error', 'This link is no longer in use');
            }
        } else {
            return redirect()->route('UI_index')->with('error', 'Account not found');
        }
        $user->is_deleted_account = 0;
        $user->save();
        return redirect()->route('UI_index');
    }
    /**-------------------- Delete Account Ends ------------------------------*/
//    public function redirect_login(Request $request)
//    {
//        $request->validate([
//           'data'=>'required',
//           'package'=>'required',
//        ]);
//        $userfind = User::where('id', $request->data)->where('status', 1)->first();
//        if ($userfind) {
//            if ($userfind->user_role == 1) //means if user is a guider
//            {
//                return redirect()->route('UI_index');
//
//            } else if ($userfind->user_role == 0) {
//                Auth::login($userfind);
//                if (Auth::check()) {
//                    return response()->json(['status' => 1, 'message' => 'Successful']);
//                } else {
//                    return response()->json(['message' => 'UnSuccessful']);
//                }
//            }
//        } else {
//            return response()->json(['message' => 'Email not found or You didn\'t confirm your email yet']);
//        }
//    }
    /**-------------------- Redirect Login Ends-----------------------------*/

    public function privacy_policy()
    {
        return view('privacy-policy');
    }

    public function cancellation_refund_policy()
    {
        return view('cancellation&refund-policy');
    }

    public function community_guidelines()
    {
        return view('community-guidelines');
    }

    public function cookie_policy()
    {
        return view('cookie-policy');
    }

    public function disclaimer()
    {
        return view('disclaimer');
    }

    public function dmca_notice_for_copyright_claims()
    {
        return view('dmca-notice-for-copyrights-claims');
    }

    public function service_provider_terms()
    {
        return view('service-provider-terms');
    }

    public function user_agreement()
    {
        return view('user-agreement');
    }

    public function support()
    {
        return view('support');
    }
}
