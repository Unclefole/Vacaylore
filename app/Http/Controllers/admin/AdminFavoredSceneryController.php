<?php

namespace App\Http\Controllers\admin;

use App\Models\BannerModel;
use App\Models\Visitor;
use App\Models\MembershipModel;
use App\Models\MembershipPlanModel;
use App\Models\FavoredSceneryModel;
use App\Models\User;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Storage;
use Illuminate\Support\Facades\File;

class AdminFavoredSceneryController extends Controller
{
    public function all_favored_scenery()
    {
        $favored_scenery = FavoredSceneryModel::orderby('id','ASC')->get();
        return view('admin.favored_scenery.list_favored_scenery',compact('favored_scenery'));
    }
    public function add_favored_scenery()
    {
        return view('admin.favored_scenery.add_favored_scenery');
    }
    public function edit_favored_scenery($id)
    {
        $favored_scenery = FavoredSceneryModel::where('id',$id)->orderby('id','ASC')->first();
        return view('admin.favored_scenery.edit_favored_scenery',compact('favored_scenery'));
    }
    public function delete_favored_scenery(FavoredSceneryModel $favored_scenery)
    {
        $old_image_delete = public_path('favored_scenery/'.$favored_scenery->image);
        unlink($old_image_delete);
        $favored_scenery->delete();
        return back()->with('success','Deleted Successfully');
    }
    public function add_edit_favored_scenery(FavoredSceneryModel $favored_scenery,Request $request)
    {
        $rules = array(
            'name' => ['required'],
        );
        $validator = Validator::make($request->all(), $rules);

        $create = 1;
        (isset($favored_scenery->id) and $favored_scenery->id>0)?$create=0:$create=1;

        $favored_scenery->name = $request->name;

        if($request->hasFile('image'))
        {
            /**delete old image*/
            if(!empty($favored_scenery->image)) {
                $old_image_delete = public_path('favored_scenery/'.$favored_scenery->image);
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
            File::put(public_path('favored_scenery') .'/'. $filename, $img);
            /** Store a new images for products */
            $favored_scenery->image = $filename;
        }
        $favored_scenery->save();

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
