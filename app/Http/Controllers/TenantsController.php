<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Services\PayUService\Exception;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use DB;
use Hash;

class TenantsController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function addtenant(Request $request){
        
    
try {
        $password = Hash::make('secret');
        $companyname = $request->input('companyname');
        $ownername = $request->input('ownername');
        $telephone = $request->input('telephone');
        $emailaddress = $request->input('emailaddress');
        $faxno = $request->input('faxno');
        $buldingname = $request->input('buldingname');
        $buildingfloor = $request->input('buildingfloor');
        $buildingunit = $request->input('buildingunit');


    $data = array('rti_password'=>$password,'rti_company' => $companyname,'rti_owner' => $ownername,'rti_telephone' => $telephone,
        'rti_emailaddress' => $emailaddress,'rti_faxno' => $faxno,'rti_building' => $buldingname,
        'rti_floor' => $buildingfloor, 'rti_unit' => $buildingunit );
        DB::table('r_tenants_informations')->insert($data);
          return view('pages/admin/dashboard')->with('oSales', 'success');;
 
} catch (\Exception $e) {

if (strpos($e, 'rti_company') !== false) {
          return view('pages/admin/dashboard')->with('oSales', 'error');
 }
}

    }

}
