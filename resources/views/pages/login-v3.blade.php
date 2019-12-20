@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/assets/img/cover/10.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>G.E Antonino Incorporated</b> </h4>
				<p>
					To see our enterprises grow in prosperity,
while enriching the Philippines economic, political, and social growth.
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<img class="m-r-5" src="/assets/img/logo/geantonino" alt="" height="20" width="20"><h4><b>G.E Antonino TENANTS</b></h4>
					<small>Making life easier.</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				
					{{ csrf_field() }}
					<div class=" form-group m-b-15">
						<input type="text" class="form-control form-control-lg " id = "tenantid" placeholder="Tenant ID" required />
					</div>
					<div class="form-group m-b-15">
						<input type="password" class="form-control form-control-lg" id="password" placeholder="Password" required />
					</div>
						<p class="loginerror m-t-10 error text-center alert alert-danger hide "></p>
					<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="remember_me_checkbox" value="" />
						<label for="remember_me_checkbox">
							Remember Me
						</label>
					</div>
					<div class="login-buttons addtenantmodal-footer">
						<button type="submit" id= "addtenant" class="addtenant  btn btn-success btn-block btn-lg">Sign me in</button>
					</div>
					<div class="m-t-20 m-b-40 p-b-40 text-inverse">
						Not a member yet? Please contact <b><a class="text-success">Ms.Carol C.Baluyot</a> </b>to create your account.
					</div>
					<hr />
					<p class="text-center text-grey-darker">
						&copy;  All Right Reserved 2018
					</p>
				
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection



@push('scripts')

	<script>
	
var button = document.getElementById("addtenant");
button.addEventListener("click",function(e){
	
     	  $.ajax({
            type: 'post',
              url: '/logintenants',
            data: {
               '_token': $('input[name=_token]').val(),
                'tenantid': document.getElementById("tenantid").value,
                'password': document.getElementById("password").value
            },
            success: function(data) {
            	if (data.errors){
                	$('#addtenantmodal').modal('show');
                    if(data.errors.companyname) {

		            	$('.newcompanyname_error').removeClass('hide');
                        $('.newcompanyname_error').text("Company name cant be empty!");
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
            	 	console.log(data);
if(data.message=='success')
{

	$('.loginerror').addClass('hide');
	$('.loginerror').text('');
	swal("Logged in successfully!");
		 window.location.href = '{{route("tenantlist")}}'; 
 }
            	 	 else{
$('.loginerror').removeClass('hide');
                        $('.loginerror').text(data.message);
}
            }},
                         error: function(data){
                         	console.log(data);
    swal("Error !", "Company is already existing.", "error");
}
    });
},false);




</script>


	<script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
@endpush