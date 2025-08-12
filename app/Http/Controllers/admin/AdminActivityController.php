<?php

namespace App\Http\Controllers\admin;

use App\Models\BannerModel;
use App\Models\Visitor;
use App\Models\MembershipModel;
use App\Models\MembershipPlanModel;
use App\Models\ActivityModel;
use App\Models\User;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Storage;
use Illuminate\Support\Facades\File;

class AdminActivityController extends Controller
{
    public function all_activity()
    {
        $activity = ActivityModel::orderby('id','ASC')->get();
        return view('admin.activity.list_activity',compact('activity'));
    }
    public function add_activity()
    {
        return view('admin.activity.add_activity');
    }
    public function edit_activity($id)
    {
        $activity = ActivityModel::where('id',$id)->orderby('id','ASC')->first();
        return view('admin.activity.edit_activity',compact('activity'));
    }
    public function delete_activity(ActivityModel $activity)
    {
        $old_image_delete = public_path('activity/'.$activity->image);
        unlink($old_image_delete);
        $activity->delete();
        return back()->with('success','Deleted Successfully');
    }
    public function add_edit_activity(ActivityModel $activity,Request $request)
    {
        $rules = array(
            'name' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);

        $create = 1;
        (isset($activity->id) and $activity->id>0)?$create=0:$create=1;

        $activity->name = $request->name;

        if($request->hasFile('image'))
        {
            /**delete old image*/
            if(!empty($activity->image)) {
                $old_image_delete = public_path('activity/'.$activity->image);
                unlink($old_image_delete);
            }
            $image = $request->image;
            /** Make a new filename with extension */
            $filename = time() . rand(1, 30) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath());
            /** Set image dimension to conserve aspect ratio */
            $img->fit(300, 300);
            /** Get image stream to store the image else the tmp file will be stored */
            $img->stream();
            /** Make a new filename with extension */
            File::put(public_path('activity') .'/'. $filename, $img);
            /** Store a new images for products */
            $activity->image = $filename;
        }
        $activity->status = 1;
        $activity->save();

        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }

}
