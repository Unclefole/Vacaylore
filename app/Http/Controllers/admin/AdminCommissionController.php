<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\CommissionModel;
use Illuminate\Http\Request;

class AdminCommissionController extends Controller
{
    function commission_edit()
    {
        $commission = CommissionModel::where('id',1)->first();
        return view('admin.commission.edit_commission',compact('commission'));
    }
    function commission_add_edit_data(Request $request,CommissionModel $commission)
    {
        $this->validate($request, [
            'commission' => 'required'
        ]);
        $commission->commission = $request->commission;
        $commission->save();
        return back()->with('update','Updated Successfully');

    }
}
