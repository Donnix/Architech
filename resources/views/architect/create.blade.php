<!DOCTYPE html>
<html lang="en">
<head>
	<title>yap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="{{ route('architect.save') }}" method="POST" id="form_add" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Form Registration 
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" id="name"  value="{{ ucfirst(Auth()->user()->name) }}" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" id="email" value="{{ ucfirst(Auth()->user()->email) }}" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="no_hp" value="{{ ucfirst(Auth()->user()->no_hp) }}" id="no_hp" placeholder="Enter Number Phone">
				</div>

				<!-- <div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Needed Services *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Please chooses</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What type of products do you sell?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Phycical Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Digital Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Services Consulting
							</label>
						</div>
					</div>

				
				</div> -->

				<div class="wrap-contact100-form-range">
						<span class="label-input100">Range Project yang terselesaikan *</span>

						<div class="contact100-form-range-value">
							Rp.<span id="value-lower"></span> - Rp.<span id="value-upper"></span>
							<input type="text" name="project_min">
							<input type="text" name="project_max">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Short Description">
					<span class="label-input100">Short Description</span>
					<textarea class="input100" name="short_description" id="short_description" placeholder="Your Description here..."></textarea>
				</div>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Location Service">
					<span class="label-input100">Location Service *</span>
					<input class="input100" type="text" name="location_service"  id="location_service" placeholder="Enter Location Service">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Link Facebook </span>
					<input class="input100" type="text" name="facebook_url" id="facebook_url" placeholder="Enter Your Link Facebook ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Link Instagram</span>
					<input class="input100" type="text" name="instagram_url"  id="instagram_url"placeholder="Enter Number Link Instagram">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Link Linkedin </span>
					<input class="input100" type="text" name="linkedin_url"  id="linkedin_url"  placeholder="Enter Your Link Linkedin ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Link Twitter</span>
					<input class="input100" type="text" name="twitter_url"   id="twitter_url"placeholder="Enter Number Link Twitter">
				</div>
					<input type="hidden" name="user_id" value="{{ ucfirst(Auth()->user()->email) }}">
					<input type="hidden" name="id_project" value="2">
					<input type="hidden" name="profile_image" value="2">

				<div class="container-contact100-form-btn">
					<button type="submit" id="submit" class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('js/registerprofesional.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/noui/nouislider.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>


<script>
	var filterBar = document.getElementById('filter-bar');

noUiSlider.create(filterBar, {
    start: [ 500000, 5000000 ],
    connect: true,
    range: {
        'min': 500000, 
        'max': 5000000,
    }
});

var skipValues = [
document.getElementById('value-lower'),
document.getElementById('value-upper')
];

filterBar.noUiSlider.on('update', function( values, handle ) {
    skipValues[handle].innerHTML = Math.round(values[handle]);
    $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
    $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
});
</script>
<script>
	$(document).ready(function() {

/* Datepicker */
$(function () { 
	
$(document).on('click', '.submit', function() {
	var form = $(this).closest('form');

	form.validate({
		ignore: ":hidden:not(#description),.note-editable.panel-body",
		rules: {
			name: {
				required: true
			},
		   email: {
				required: true
			},
			no_hp: {
				required: true
			},
			short_description: {
				required: true
			},
			location_service: {
				required: true
			},
			facebook_url: {
				required: true
			},
			instagram_url: {
				required: true
			},
			linkedin_url: {
				required: true
			},
			twitter_url: {
				required: true
			}

			// image_file_name: {
			//     required: function() {
			//         var val_image_file_name = $('input[name="val_image_file_name"]').val();

			//         if(val_image_file_name == '') {
			//             return true;
			//         } else {
			//             return false;
			//         }
			//     } 
			// }
		}
	});

	if(form.valid()) {

		swal({
			title                 : "Are you sure ?",
			text                  : "Make sure the data that you already input is correct",
			type                  : "warning",
			confirmButtonText     : 'Yes',
			showCancelButton      : true,
			allowOutsideClick     : false
		})

		.then((willSave) => {
			if (willSave.value === true) {

				mApp.blockPage({
					overlayColor : '#000000',
					type         : 'loader',
					state        : 'success',
					size         : 'lg'
				});

				$.ajax({
					type        : 'POST',
					url         : form.attr('action'),
					data        : new FormData(document.getElementById("form_add")),
					processData : false,
					contentType : false,
					cache       : false,
					success     : function(data) {
						
						if(data.status == '1')
						{   
							
							toastr.success(data.message); 
							setTimeout(function() {
								window.location.href = data.url;
							}, 2000);   
						}
						else
						{
							toastr.error(data.message);
							setTimeout(function() {
								window.location.href = data.url;
							}, 2000);
						}
					}
				});  
			}
		});
	}
});
});
});
</script>
</body>
</html>
