<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>WoW ! Please Sign Up</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/all/admin') }}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('public/all/admin') }}/global_assets/js/main/jquery.min.js"></script>
	<script src="{{ asset('public/all/admin') }}/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="{{ asset('public/all/admin') }}/assets/js/app.js"></script>
	<script src="{{ asset('public/all/admin') }}/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Registration form -->
				<form action="" method="POST" enctype="multipart/form-data" class="flex-fill">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
										<h5 class="mb-0">Create account</h5>
										<span class="d-block text-muted">All fields are required</span>
									</div>

									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control" placeholder="Choose username">
										<div class="form-control-feedback">
											<i class="icon-user-plus text-muted"></i>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" placeholder="First name">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control" placeholder="Second name">
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" placeholder="Create password">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" class="form-control" placeholder="Repeat password">
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" class="form-control" placeholder="Your email">
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" class="form-control" placeholder="Repeat email">
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" required data-fouc>
												Send me <a href="#">test account settings</a>
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" required data-fouc>
												Subscribe to monthly newsletter
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" required data-fouc>
												Accept <a href="#">terms of service</a>
											</label>
										</div>
									</div>

									<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button> <p style="display: inline;">Or...</p>
									<a href="{{ route('sign_in') }}" class="btn bg-teal-400 btn-labeled btn-labeled-right"> Sign In to Exiting account<b><i class="icon-arrow-right7"></i></b></a>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>
