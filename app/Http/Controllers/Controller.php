<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
function addtenant(){
    	// $companyname = $request->input('companyname');
    	// $ownername = $request->input('ownername');
    	// $telephone = $request->input('telephone');
    	// $emailaddress = $request->input('emailaddress');
    	// $faxno = $request->input('faxno');
    	// $buldingname = $request->input('buldingname');
    	// $buildingfloor = $request->input('buildingfloor');
    	// $buildingunit = $request->input('buildingunit');

    	// $data =$arrayName = array('rti_company' => $companyname,'rti_owner' => $ownername,'rti_telephone' => $telephone,
    	// 'rti_emailaddress' => $emailaddress,'rti_faxno' => $faxno,'rti_building' => $buldingname,
    	// 'rti_floor' => $buildingfloor, 'rti_unit ' => $buildingunit );

    	// DB::table('r_tenants_informations')->insert($data);
    	echo "Success";
    }
}
