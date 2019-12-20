<?php $__env->startSection('title', 'Dashboard V2'); ?>

<?php $__env->startPush('css'); ?>
	<link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
	<link href="/assets/plugins/nvd3/nvd3.min.css" rel="stylesheet" />
	<link href="/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
	<link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
		<li class="breadcrumb-item active">Dashbaoard v2</li>
	</ol>
	<tr>

<div class="card ">
				<div class="card-header ">
					Featured
				</div>
				<div class="card-block text-center">
					<h4 class="card-title">Add New Tenants </h4>
					<p class="card-text">Please present the Rules and Guidelines first to the new Tenants before proceeding on this process.</p>
				
								<td><a href="#addtenantmodal" class="btn btn-primary" data-toggle="modal">Register</a></td>
				</div>
				<div class="card-footer text-muted">
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
						<?php echo e(csrf_field()); ?>

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
								<p class="ownername m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Telephone *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="newtelephone" data-parsley-type="url" placeholder="+639..." />
								<p class="telephone m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="website">Email Address *:</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="telephone" id="website" name="newemailaddress" data-parsley-type="url" placeholder="your@email.com" />
								<p class="emailaddress m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>	
						<div class="form-group row m-b-15">
							<label class="col-md-4 col-sm-4 col-form-label" for="message">Fax No * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="digits" name="newfaxno" data-parsley-type="digits" placeholder="Digits" />
								<p class="faxno m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
<h5 class="modal-title m-t-40">Building</h5>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Name * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuldingname" data-parsley-type="number" placeholder="Required" />
								<p class="buldingname m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Floor * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuildingfloor" data-parsley-type="number" placeholder="Floor Name" />
								<p class="buildingfloor m-t-10 error text-center alert alert-danger hide"></p>
							</div>
						</div>
						<div class="form-group row m-b-15 ">
							<label class="col-md-4 col-sm-4 col-form-label " for="message">Unit * :</label>
							<div class="col-md-8 col-sm-8">
								<input class="form-control" type="text" id="number" name="newbuildingunit" data-parsley-type="number" placeholder="Unit Number" />
								<p class="buildingunit m-t-10 error text-center alert alert-danger hide"></p>
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


	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Dashboard <small>Building Administrator</small></h1>
	<!-- end page-header -->
	<!-- begin row -->
	<div class="row">
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">

			<div class="widget widget-stats bg-gradient-green">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">TODAY'S VISITS</div>
					<div class="stats-number">7,842,900</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 70.1%;"></div>
					</div>
					<div class="stats-desc">Better than last week (70.1%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-blue">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">ELEVATOR CONSUMPTION</div>
					<div class="stats-number">P19,000</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 40.5%;"></div>
					</div>
					<div class="stats-desc">Better than last week (40.5%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-purple">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">NEW INCOMING STOCK REQUESTS</div>
					<div class="stats-number">38,900</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 76.3%;"></div>
					</div>
					<div class="stats-desc">Better than last week (76.3%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
		<!-- begin col-3 -->
		<div class="col-lg-3 col-md-6">
			<div class="widget widget-stats bg-gradient-black">
				<div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
				<div class="stats-content">
					<div class="stats-title">NEW OUTGOING STOCK REQUESTS</div>
					<div class="stats-number">3,988</div>
					<div class="stats-progress progress">
						<div class="progress-bar" style="width: 54.9%;"></div>
					</div>
					<div class="stats-desc">Better than last week (54.9%)</div>
				</div>
			</div>
		</div>
		<!-- end col-3 -->
	</div>
	<!-- end row -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-8 -->
		<div class="col-lg-8">
			<div class="widget-chart with-sidebar bg-white">
				<div class="widget-chart-content">
					<h4 class="chart-title  text-black-darker">
						Visitors Analytics
						<small class = "text-black-darker"> Most Recent Tenants Activity</small>
					</h4>
					<div id="visitors-line-chart" class="widget-chart-full-width nvd3" style="height: 260px;"></div>
				</div>
				<div class="widget-chart-sidebar bg-black-darker">
					<div class="chart-number">
						50
						<small>Total Tenant Activity</small>
					</div>
					<div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
					<ul class="chart-legend f-s-11">
						<li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>Stock In</span></li>
						<li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Stock Out</span></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- end col-8 -->
		<!-- begin col-4 -->
		<div class="col-lg-4">
			<div class="panel panel-inverse" >
				<div class="panel-heading">
					<h4 class="panel-title">
						Most Active Tenants
					</h4>
				</div>
			
				<div class="list-group">
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						1. WHO
						<span class="badge f-w-500 bg-gradient-green f-s-10">20.95%</span>
					</a> 
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						2. Philam
						<span class="badge f-w-500 bg-gradient-blue f-s-10">16.12%</span>
					</a>
					<a href="javascript:;" class="list-group-item list-group-item-inverse d-flex justify-content-between align-items-center text-ellipsis">
						3. Mariana
						<span class="badge f-w-500 bg-gradient-grey f-s-10">14.99%</span>
					</a>
				</div>
			</div>
		</div>

		<!-- end col-4 -->
	</div>
	<!-- end row -->
	<!-- end row -->
<?php $__env->stopSection(); ?>



<?php $__env->startPush('scripts'); ?>


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
	


   $('.addtenantmodal-footer').on('click', '.addtenant', function() {
     	  

     swal({
     
     	title:  'Tenant '+ document.getElementById("myForm").elements.namedItem("newcompanyname").value,
  text: 'Are you sure you want to add tenant '+document.getElementById("myForm").elements.namedItem("newcompanyname").value.toUpperCase(),
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
            	 	 swal.close();
            	 	 swal("Tenant successfully added!");
            	 	 window.location.href = '<?php echo e(route("tenantlist")); ?>'; 
            }},
                         error: function(data){
    swal("Error !", "Company is already existing.", "error");
}
    });

        } else {
           
        }
    });



    });

</script>

	<script src="/assets/plugins/sweetalert/sweetalert.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admindefault', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>