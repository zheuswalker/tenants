@extends('layouts.admindefault')

@section('title', 'Dashboard V2')

@push('css')



	<link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/buttons/buttons.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
	<link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
	<link href="/assets/plugins/nvd3/nvd3.min.css" rel="stylesheet" />
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />


@endpush

@section('content')

	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Dashbaoard v2</li>
	</ol>
	<tr>

<div class="card m-t-40">
				<div class="card-header ">
					Featured
				</div>
				<div class="card-block text-center">
					<h4 class="card-title">Add New Tenants </h4>
					<p class="card-text">Please present the Rules and Guidelines first to the new Tenants before proceeding on this process.</p>
				
								<td><a href="#addtenantmodal" class="btn btn-primary" data-toggle="modal">Register</a></td>
				</div>
		</div>


<div class="col-lg-14 m-t-20">
	{{ csrf_field() }}
			<!-- begin panel -->
			<div class="panel panel-inverse" >
				<!-- begin panel-heading -->
				<div class="panel-heading">
					
				</div>
		<!-- begin panel-body -->
				<div class="panel-body">
					<!-- begin table-responsive -->
					<div class="table-responsive">
							<table id="table" class="table table-striped table-bordered">
					
							<thead>
					<tr>
						<th class="text-nowrap ">Company Name</th>
						<th class="text-nowrap ">Owner/Autorized Representative</th>
						<th class="text-nowrap ">Phone Number</th>
						<th class="text-nowrap hide">Email Address</th>
						<th class="text-nowrap ">Fax No.</th>
						<th class="text-nowrap ">Building</th>
						<th class="text-nowrap ">Floor</th>
						<th class="text-nowrap ">Unit</th>
						<th class="text-nowrap ">Actions</th>
					</tr>
				</thead>

							<tbody>
									@foreach($data as $item)
				<tr class="item{{$item->rti_tenantid}}">
					<td>{{$item->rti_company}}</td>
					<td>{{$item->rti_owner}}</td>
					<td>{{$item->rti_telephone}}</td>
					<td class="hide">{{$item->rti_emailaddress}}</td>
					<td>{{$item->rti_faxno}}</td>
					<td>{{$item->rti_building}}</td>
					<td>{{$item->rti_floor}}</td>
					<td>{{$item->rti_unit}}</td>
					<td class="with-btn" nowrap>
						<button class="edit-modal btn btn-sm btn-primary width-60 m-r-2"
							data-info="{{$item->rti_tenantid}},{{$item->rti_company}},{{$item->rti_owner}},{{$item->rti_telephone}},{{$item->rti_emailaddress}},{{$item->rti_faxno}},{{$item->rti_building}},{{$item->rti_floor}},{{$item->rti_unit}}">
							<span class="glyphicon glyphicon-edit"></span> Edit
						</button>
									
										<a href="#" class="btn btn-sm btn-white width-60">Delete</a>
									</td>
				</tr>
				@endforeach
								
							</tbody>
						</table>
					</div>
					<!-- end table-responsive -->
				</div>
				<!-- end panel-body -->
	<div class="modal" id="modal-without-animation">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Tenant Information</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									
<div class="panel-body">

<div id="logafter"></div>
					<form class="form-horizontal" data-parsley-validate="true" name="demo-form" action="/addtenant" method="post">
						{{ csrf_field() }}
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Company Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control hide " type="text" id="tenantid" name="tenantid" data-parsley-required="true" />
								<input class="form-control" type="text" id="companyname" name="companyname" placeholder="Required" data-parsley-required="true" />
							<p class="companyname_error m-t-10 error text-center alert alert-danger hide"></p>
							</div>
							
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="email">Owner/Autorized Representative * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="ownername" name="ownername" data-parsley-type="email" placeholder="(FirstName MiddleName Lastname)" data-parsley-required="true" />
								<p class="ownername m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Telephone *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="telephone" name="telephone" data-parsley-type="url" placeholder="+639..." />
									<p class="telephone m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Email Address *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="emailaddress" name="emailaddress" data-parsley-type="url" placeholder="your@email.com" />
								<p class="emailaddress m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>	
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="message">Fax No * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="faxno" name="faxno" data-parsley-type="digits" placeholder="Digits" />
								<p class="faxno m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
<h5 class="modal-title m-t-40">Building</h5>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="buldingname" name="buldingname" data-parsley-type="number" placeholder="Required" />
									<p class="buldingname m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Floor * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="buildingfloor" name="buildingfloor" data-parsley-type="number" placeholder="Floor Name" />
									<p class="buildingfloor m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Unit * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="buildingunit" name="buildingunit" data-parsley-type="number" placeholder="Unit Number" />
									<p class="buildingunit m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						
					</form>
				</div>

								</div>
								<div class="modal-footer">
						<button type="button" class="btn actionBtn" data-dismiss="modal">
							<span id="footer_action_button" class='glyphicon'> </span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove'></span> Close
						</button>
					</div>	
							</div>
						</div>
					</div>

						<div class="modal" id="modal-without-animation">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Tenant Information</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									
<div class="panel-body">
					<form class="form-horizontal" data-parsley-validate="true" name="demo-form" action="/addtenant" method="post">
						{{ csrf_field() }}
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Company Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="companyname" name="companyname" placeholder="Required" data-parsley-required="true" />
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="email">Owner/Autorized Representative * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="email" name="ownername" data-parsley-type="email" placeholder="(FirstName MiddleName Lastname)" data-parsley-required="true" />
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Telephone *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="telephone" data-parsley-type="url" placeholder="+639..." />
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Email Address *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="emailaddress" data-parsley-type="url" placeholder="your@email.com" />
							</div>
						</div>	
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="message">Fax No * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="digits" name="faxno" data-parsley-type="digits" placeholder="Digits" />
							</div>
						</div>
<h5 class="modal-title m-t-40">Building</h5>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="buldingname" data-parsley-type="number" placeholder="Required" />
							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Floor * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="buildingfloor" data-parsley-type="number" placeholder="Floor Name" />
							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Unit * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="buildingunit" data-parsley-type="number" placeholder="Unit Number" />
							</div>
						</div>
						
					</form>
				</div>

								</div>
									<div class="modal-footer">
									<div class="form-group row m-b-0">
							<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
							<div class="col-md-8 col-sm-8">
								<button type="submit" name="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
									<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
								</div>
							</div>
						</div>
					</div>




						<div class="modal" id="addtenantmodal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Tenant Information</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								</div>
								<div class="modal-body">
									
<div class="panel-body">
					<form class="form-horizontal" data-parsley-validate="true" name="demo-form"  id="myForm">
						{{ csrf_field() }}
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Company Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="companyname" name="newcompanyname" placeholder="Required" data-parsley-required="true" />
								<p class="newcompanyname_error m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="email">Owner/Autorized Representative * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="email" name="newownername" data-parsley-type="email" placeholder="(FirstName MiddleName Lastname)" data-parsley-required="true" />
								<p class="newownername_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Telephone *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="newtelephone" data-parsley-type="url" placeholder="+639..." />
								<p class="newtelephone_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Email Address *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="newemailaddress" data-parsley-type="url" placeholder="your@email.com" />
								<p class="newemailaddress_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>	
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="message">Fax No * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="digits" name="newfaxno" data-parsley-type="digits" placeholder="Digits" />
								<p class="newfaxno_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
<h5 class="modal-title m-t-40">Building</h5>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuldingname" data-parsley-type="number" placeholder="Required" />
								<p class="newbuldingname_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Floor * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuildingfloor" data-parsley-type="number" placeholder="Floor Name" />
								<p class="newbuildingfloor_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Unit * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuildingunit" data-parsley-type="number" placeholder="Unit Number" />
								<p class="newbuildingunit_error m-t-10 error text-center alert alert-danger hide"></p>

							</div>
						</div>
						
					</form>
				</div>

								</div>
								<div class="addtenantmodal-footer modal-footer">
									<div class="form-group row m-b-0">
							<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
							<div class="col-md-8 col-sm-8">
								<button type="submit" name="submit" class="btn btn-primary addtenant">Submit</button>
							</div>
						</div>
									<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
								</div>
							</div>
						</div>
					</div>
@endsection



@push('scripts')


	<script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
</script>

	<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>
	<script src="/assets/plugins/nvd3/nvd3.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="/assets/js/demo/dashboard-v2.js"></script>
	<script>
		$(document).ready(function() {

			DashboardV2.init();
			 $('#modal-alert').modal('show');
		});
	</script>
	<script>
	
    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#updatedata').text(" Update");
        $('.actionBtn').addClass('btn-primary');
        $('.actionBtn').addClass('edit');
        var stuff = $(this).data('info').split(',');
        fillmodalData(stuff)
        $('#modal-without-animation').modal('show');
    });

var tenantname;
function fillmodalData(details){
    $('#tenantid').val(details[0]);
    var val = ''+ $('#tenantid').val(details[0]);
    tenantname =details[1];
    $('#companyname').val(details[1]);
    $('#ownername').val(details[2]);
    $('#telephone').val(details[3]);
    $('#emailaddress').val(details[4]);
    $('#faxno').val(details[5]);
    $('#buldingname').val(details[6]);
    $('#buildingfloor').val(details[7]);
    $('#buildingunit').val(details[8]);
}

 $('.modal-footer').on('click', '.edit', function() {
     swal({
     	title:  'Tenant '+ tenantname ,
  text: 'Are you sure you want to update tenant information? ',
  type: 'warning',
 buttons: true ,
 closeOnClickOutside: false,
 buttons: ["Cancel", "Confirm"],

    }).then((update) => {
        if (update) {
            $.ajax({
            type: 'post',
              url: '/editTenantDetails',
            data: {
               '_token': $('input[name=_token]').val(),
                'companyname': $("#companyname").val(),
                'rti_tenantid': $('#tenantid').val(),
                'ownername': $('#ownername').val(),
                'telephone': $('#telephone').val(),
                'emailaddress': $('#emailaddress').val(),
                'faxno': $('#faxno').val(),
                'buldingname': $('#buldingname').val(),
                'buildingfloor': $('#buildingfloor').val(),
                'buildingunit': $('#buildingunit').val()
            },
            success: function(data) {
 console.log(data);
            	if (data.errors){
                	$('#modal-without-animation').modal('show');
                    if(data.errors.companyname) {

		            	$('.companyname_error').removeClass('hide');
                        $('.companyname_error').text("Company name cant be empty!");
                    }
                    if(data.errors.ownername) {
                    	$('.ownername').removeClass('hide');
                        $('.ownername').text("Owner name can't be empty !");
                    }
                    if(data.errors.telephone) {
                    	$('.telephone').removeClass('hide');
                        $('.telephone').text("Telephone must be a valid one !");
                    }
                    if(data.errors.emailaddress) {
                    	$('.emailaddress').removeClass('hide');
                        $('.emailaddress').text("Email address must be valid one !");
                    }
                    if(data.errors.faxno) {
                    	$('.faxno').removeClass('hide');
                        $('.faxno').text("Fax No. can't be empty!");
                    }
                     if(data.errors.buldingname) {
                    	$('.buldingname').removeClass('hide');
                        $('.buldingname').text("Building Name can't be empty!");
                    }
                     if(data.errors.buildingfloor) {
                    	$('.buildingfloor').removeClass('hide');
                        $('.buildingfloor').text("Building Floor can't be empty!");
                    }
                     if(data.errors.buildingunit) {
                    	$('.buildingunit').removeClass('hide');
                        $('.buildingunit').text("Building Unit can't be empty!");
                    }

                }
            	 else {
            	 	 swal("Updated successfully!");
 $('.item' + data.rti_tenantid).replaceWith("<tr class='item" + data.rti_tenantid + "'><td class='f-s-13'>" +
                        data.rti_company + "</td><td class='f-s-13'>" + data.rti_owner +
                        "</td><td class='f-s-13'>" + data.rti_telephone + "</td><td class='f-s-13'>"  + data.rti_faxno + "</td><td class='f-s-13'> " + data.rti_building + "</td><td class='f-s-13'>" + data.rti_floor +"</td><td class='f-s-13'>" + data.rti_unit +"</td><td class='f-s-13'><button class='edit-modal btn btn-sm btn-primary width-60 m-r-2' data-info='" + data.rti_tenantid+","+data.rti_company+","+data.rti_owner+","+data.rti_telephone+","+data.rti_emailaddress+","+data.rti_faxno+","+data.rti_building+","+data.rti_floor+","+data.rti_unit+"'><span class='glyphicon glyphicon-edit'></span> Edit </button> <a href='#'' class='btn btn-sm btn-white width-60'>Delete</a> </td></tr>");

            }},
                         error: function(data){
    swal("Error !", "You clicked the button!", "error");
}
    });

        } else {
           
        }
    });



    });


   $('.addtenantmodal-footer').on('click', '.addtenant', function() {
     	

     swal({
     
     	title:  'Tenant '+ document.getElementById("myForm").elements.namedItem("newcompanyname").value.toUpperCase(),
  text: 'Are you sure you want to add tenant ? '+document.getElementById("myForm").elements.namedItem("newcompanyname").value.toUpperCase(),
  type: 'warning',
 buttons: true ,
 closeOnClickOutside: false,
 buttons: ["Cancel", "Confirm"],

    }).then((update) => {
        if (update) {
            $.ajax({
            type: 'post',
              url: '/addtenant',
            data: {
               '_token': $('input[name=_token]').val(),
                'companyname': document.getElementById("myForm").elements.namedItem("newcompanyname").value,
                'ownername': document.getElementById("myForm").elements.namedItem("newownername").value,
                'telephone': document.getElementById("myForm").elements.namedItem("newtelephone").value,
                'emailaddress': document.getElementById("myForm").elements.namedItem("newemailaddress").value,
                'faxno': document.getElementById("myForm").elements.namedItem("newfaxno").value,
                'buldingname': document.getElementById("myForm").elements.namedItem("newbuldingname").value,
                'buildingfloor': document.getElementById("myForm").elements.namedItem("newbuildingfloor").value,
                'buildingunit': document.getElementById("myForm").elements.namedItem("newbuildingunit").value
            },
            success: function(data) {
 console.log(data);
            	if (data.errors){
            		console.log('here');
                	$('#addtenantmodal').modal('show');
                    if(data.errors.companyname) {

		            	$('.newcompanyname_error').removeClass('hide');
                        $('.newcompanyname_error').text("Company name cant be empty!");
                    }
                    if(data.errors.ownername) {
                    	$('.newownername_error').removeClass('hide');
                        $('.newownername_error').text("Owner name can't be empty !");
                    }
                    if(data.errors.telephone) {
                    	$('.newtelephone_error').removeClass('hide');
                        $('.newtelephone_error').text("Telephone must be a valid one !");
                    }
                    if(data.errors.emailaddress) {
                    	$('.newemailaddress_error').removeClass('hide');
                        $('.newtelephone_error').text("Email address must be valid one !");
                    }
                    if(data.errors.faxno) {
                    	$('.newfaxno_error').removeClass('hide');
                        $('.newfaxno_error').text("Fax No. can't be empty!");
                    }
                     if(data.errors.buldingname) {
                    	$('.newbuldingname_error').removeClass('hide');
                        $('.newbuldingname_error').text("Building Name can't be empty!");
                    }
                     if(data.errors.buildingfloor) {
                    	$('.newbuildingfloor_error').removeClass('hide');
                        $('.newbuldingname_error').text("Building Floor can't be empty!");
                    }
                     if(data.errors.buildingunit) {
                    	$('.newbuildingunit_error').removeClass('hide');
                        $('.newbuildingunit_error').text("Building Unit can't be empty!");
                    }

                }
            	 else {
  $('#myForm')[0].reset();
            	 	var newRow=document.getElementById('table').insertRow(1);
  newRow.innerHTML = "<tr class='item" + data.rti_tenantid + "'><td class='f-s-13'>" +
                        data.rti_company + "</td><td class='f-s-13'>" + data.rti_owner +
                        "</td><td class='f-s-13'>" + data.rti_telephone + "</td><td class='f-s-13'>"  + data.rti_faxno + "</td><td class='f-s-13'> " + data.rti_building + "</td><td class='f-s-13'>" + data.rti_floor +"</td><td class='f-s-13'>" + data.rti_unit +"</td><td class='f-s-13'><button class='edit-modal btn btn-sm btn-primary width-60 m-r-2' data-info='" + data.rti_tenantid+","+data.rti_company+","+data.rti_owner+","+data.rti_telephone+","+data.rti_emailaddress+","+data.rti_faxno+","+data.rti_building+","+data.rti_floor+","+data.rti_unit+"'><span class='glyphicon glyphicon-edit'></span> Edit </button> <a href='#'' class='btn btn-sm btn-white width-60'>Delete</a> </td></tr>";
                          $('#myForm')[0].reset();

            	 	 swal("Tenant successfully added!");
            	 	 $('#addtenantmodal').modal('hide');

            }},
                         error: function(data){
    swal("Error !", "You clicked the button!", "error");
}
    });

        } else {
           
        }
    });



    });

</script>

	
	<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/buttons/dataTables.buttons.js"></script>
	<script src="/assets/plugins/datatables/js/buttons/buttons.bootstrap4.js"></script>
	<script src="/assets/plugins/datatables/js/buttons/buttons.flash.js"></script>
	<script src="/assets/plugins/datatables/js/buttons/buttons.html5.js"></script>
	<script src="/assets/plugins/datatables/js/buttons/buttons.print.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
	<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
	<script src="/assets/js/demo/table-manage-buttons.demo.js"></script>
	<script>
		$(document).ready(function() {
			TableManageButtons.init();
		});
	</script>

@endpush
