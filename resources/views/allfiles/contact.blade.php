<!doctype html>
<html lang="en">

<head>
	<title>SSL Travels & Tours</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('website/contact/css/style.css')}}">
	<link href="img/favicon.ico" rel="icon">
	<style>
		.custom-box {
			background-color: transparent;
			border: 2px solid blue;
			border-radius: 10px;
			padding: 10px;
			/* Add padding for better visual appearance */
			transition: background-color 0.3s ease;
			/* Add a smooth transition effect */
		}

		.custom-box:hover {
			background-color: blue;
		}
	</style>

</head>
@include('allfiles.nav')

<body>
	<section style="margin-bottom:-120px;" class="ftco-section">
		<div class="container">
			<div class="row justify-content-center" style="margin-top: 6px;">
				<div class="col-md-6 text-center mb-5 custom-box">
					<h2 class="heading-section">Contact Us Freely</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
									@endif
									@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
									@endif
									<form action="{{route('contactus.store')}}" method="POST">
										@csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message">{{old('message')}}</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									<h3 class="mb-4 mt-md-4">Contact us</h3>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Address:</span>Land Mark plaza, Jail Road, Lahore</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Phone:</span> <a href="tel://1234567920">+923011114504</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a href="mailto:info@yoursite.com">info@ssltravel.com</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><span>Website</span> <a href="{{url('/')}}">ssltravel.com</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.428231413262!2d74.3469248!3d31.5349506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905d3e3ae6b77%3A0x157a2f53f97b67c6!2sSSL%20SOLUTIONS!5e0!3m2!1sen!2s!4v1701933478588!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
	</iframe>
	@include('allfiles.footer')

	<script src="{{asset('website/contact/js/jquery.min.js')}}"></script>
	<script src="{{asset('website/contact/js/popper.js')}}"></script>
	<script src="{{asset('website/contact/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('website/contact/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('website/contact/js/main.js')}}"></script>
</body>

</html>