<?php

namespace App\Http\Controllers\guider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\ActivityModel;
use App\Models\FavoredSceneryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Auth;


class GuiderPackageController extends Controller
{

    public function guider_packages()
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {

                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {

                    // ==========================================================================================================================================================================================================================================                }

                    /*********Check If Guider Profile is Updated start*************************************/
                    $profile = ProfileModel::where('user_id', auth()->user()->id)->with('getProfileUser')->first();
                    $countries = CountryModel::all();
                    if ($profile->address == null || $profile->zip_code == null) {
//                        $request = new Request([
//                            'address' => '',
//                            'zip_code' => ''
//                        ]);
//
//                        $this->validate($request, [
//                            'address' => 'required',
//                            'zip_code' => 'required'
//                        ]);

                        return redirect()->route('Guider_profile', compact('countries', 'profile'))->with('error', 'Please update your profile');
                    }
                    /*********Check If Guider Profile is Updated end***************************************/
                    $packages = PackageModel::where('status', '!=', 2)->where('user_id', auth()->user()->id)->get();

                    return view('guider.guider_package', compact('packages'));
                    // ========  ==================================================================================================================================================================================================================================                }

                } else {
                    return redirect()->route('Guider_membership_plan');
                }
            } else {
                return redirect()->route('Guider_membership_plan');
            }
        }
        return redirect(route('UI_login'));
    }


    public function add_package()
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {
                    // ========  ==================================================================================================================================================================================================================================                }

                    $countries = CountryModel::all();
                    $sceneries = FavoredSceneryModel::all();
                    $activities = ActivityModel::where('status', 1)->orderBy('name', 'Asc')->get();
                    return view('guider.add_package', compact('countries', 'sceneries', 'activities'));
                    // ========  ==================================================================================================================================================================================================================================                }

                }
            }
            $plans = MembershipPlanModel::where('plan_type', null)->get();
            return view('guider.membership_plans', compact('plans'))->with('error', 'Your membership expires! Please buy according to your need');
        }
        return redirect(route('UI_login'));
    }


    public function edit_package($id)
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {
                    // ========  ==================================================================================================================================================================================================================================                }

                    $countries = CountryModel::all();
                    $sceneries = FavoredSceneryModel::all();
                    $activities = ActivityModel::where('status', 1)->orderBy('name', 'Asc')->get();
                    // $package = PackageModel::find($id)->with('getImages');
                    $package = PackageModel::where('id', $id)->with('getImages')->first();
                    return view('guider.edit_package', compact('countries', 'sceneries', 'activities', 'package'));
                    // ========  ==================================================================================================================================================================================================================================                }

                }
            }
            $plans = MembershipPlanModel::where('plan_type', null)->get();
            return view('guider.membership_plans', compact('plans'))->with('error', 'Your membership expires! Please buy according to your need');
        }
        return redirect(route('UI_login'));
    }


    public function delete_package(PackageModel $package)
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {
                    // ========  ==================================================================================================================================================================================================================================                }

                    $package->status = 2;
                    $package->save();
                    return redirect()->route('Guider_packages');
                    // ========  ==================================================================================================================================================================================================================================                }

                }
            }
            $plans = MembershipPlanModel::where('plan_type', null)->get();
            return view('guider.membership_plans', compact('plans'))->with('error', 'Your membership expires! Please buy according to your need');
        }
        return redirect(route('UI_login'));
    }


    public function add_edit_package(Request $req, PackageModel $package)
    {
        (isset($package->id) and $package->id > 0) ? $validate_image = '' : $validate_image = 'required';

        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'country_id' => 'required',
            'from_date' => 'required|before:end_date',
            'end_date' => 'required|after:from_date',
//            'meet_up_point' => 'required',
            'activity' => 'required',
//            'activities' => 'required',
            // 'image' => 'required',
            'image' => $validate_image,
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        );

//        $customMessages = array(
//            'location.required_if' => 'The meet up point is required!',
//            'place_id.required_if' => 'The meet up point is required!',
//            'latitude.required_if' => 'The meet up point is required!',
//            'longitude.required_if' => 'The meet up point is required!'
//        );
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        if ($req->meet_up_point && ($req->place_id === null || $req->latitude === null || $req->longitude === null)){
            $validator->getMessageBag()->add('meet_up_point',  'Please select meet-up point again.');
            return back()->withErrors($validator);
        }

        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {

                    // ========  ==================================================================================================================================================================================================================================                }

                    (isset($package->id) and $package->id > 0) ? $create = 0 : $create = 1;
                    // CHECKING NO OF PACKAGES
                    $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
                    $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                    $session_msg = null;
                    $package_limit = $member->no_of_packages;
                    if ($package->status == 0) {
                        if ($create == 0) {
                            $package_limit++;
                        }
                    }
                    if ($req->status == 0) {
                        if ($package_limit > count($user_packages)) {
                            $package->status = 0;
                            if ($create == 0) {
                                $session_msg = 'Package edited successfully';
                            } else {
                                $session_msg = 'Package created successfully';
                            }
                        } else {
                            $package->status = 1;
                            $session_msg = 'Your package is Inactive because you cover the limit of package';
                        }
                    } else {
                        $package->status = 1;
                        if ($session_msg == null) {
                            if ($create == 0) {
                                $session_msg = 'Package edited successfully';
                            } else {
                                $session_msg = 'Package created successfully';
                            }
                        }
                    }

                    // CHECKING NO OF PACKAGES

                    // (isset($package->id) and $package->id>0) ? $create=0 : $create=1;

                    $package->user_id = auth()->user()->id;
                    // $package->image_id = $image_obj->id;
                    $package->title = $req->title;
                    $package->description = $req->description;
                    $package->price = $req->price;
                    $package->country_id = $req->country_id;
                    $package->from_date = $req->from_date;
                    $package->end_date = $req->end_date;
                    $package->activity = $req->activity;
                    $package->meet_up_point = $req->meet_up_point;
                    $package->place_id = $req->place_id;
                    $package->latitude = $req->latitude;
                    $package->longitude = $req->longitude;
                    $package->activity_2 = json_encode($req->activities);
                    // $package->is_taken = $req->is_taken;
                    $package->save();


                    if ($req->hasFile('image')) {
                        $pre_images = ImageModel::where('pakage_id', $package->id)->delete();

                        $check_array = true;
                        foreach ($req->image as $key => $img) {
                            $image_obj = new ImageModel();
                            $imageName = time() . $key . '.' . $img->getClientOriginalExtension();
                            $img->move(public_path('/packages'), $imageName);
                            $image_obj->title = $imageName;
                            $image_obj->pakage_id = $package->id;
                            $image_obj->save();

                            $check_array = false;
                        }
                        if ($check_array) {
                            $image_obj = new ImageModel();
                            $imageName = time() . '.' . $req->image->getClientOriginalExtension();
                            $req->image->move(public_path('/packages'), $imageName);
                            $image_obj->title = $imageName;
                            $image_obj->pakage_id = $package->id;
                            $image_obj->save();
                        }
                    }

                    return back()->with('success', $session_msg);
                    // ========  ==================================================================================================================================================================================================================================                }
                }
                $plans = MembershipPlanModel::where('plan_type', null)->get();
                return view('guider.membership_plans', compact('plans'));
            }
            return redirect(route('UI_login'));
        }
    }
}
