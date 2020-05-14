<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/animate.css">
    
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('templates/main') }}/css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Главная</a></li>
	          <li class="nav-item"><a href="{{ url('east_employers/') }}" class="nav-link">Работники с Востока</a></li>
	          <li class="nav-item"><a href="{{ url('vacancies/') }}" class="nav-link">Вакансии</a></li>
	          <li class="nav-item"><a href="{{ url('about/') }}" class="nav-link">О нас</a></li>
	          <li class="nav-item"><a href="{{ url('contacts/') }}" class="nav-link">Контакты</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{ url('employers_registration/') }}" class="nav-link">Работодателям</a></li>
	          <li class="nav-item cta cta-colored"><a href="{{ url('workers_registration/') }}" class="nav-link">Работникам</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('templates/main') }}/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Главная <i class="ion-ios-arrow-forward"></i></a></span> <span>Работодателям</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Регистрация</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			<form class="p-5 bg-white">
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="firstname">Имя</label>
                  <input type="text" id="firstname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="lastname">Фамилия</label>
                  <input type="text" id="lastname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="text" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Телефон</label>
                  <input type="text" id="phone" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="company_name">Название компании</label>
                  <input type="text" id="company_name" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Кого Вы ищите?</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea class="form-control" id="description" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="button" value="Зарегистрироваться" onclick="RegistrationEmployers();" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
            </div>
          </div>
		  
		  
        </div>
      </div>
    </div>

		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('templates/main') }}/js/jquery.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/popper.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/aos.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('templates/main') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('templates/main') }}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('templates/main') }}/js/google-map.js"></script>
  <script src="{{ asset('templates/main') }}/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>

function RegistrationEmployers()
{
	$.ajax( "{{ url('main/employers_registration') }}", {
		type: "POST",
		data: {
			email  : $('#email').val(),
			firstname  : $('#firstname').val(),
			lastname  : $('#lastname').val(),
			phone  : $('#phone').val(),
			company_name  : $('#company_name').val(),
			description  : $('#description').val(),
		},
		dataType: "json",
		success: function(res) {

			if (res.response)
			{
				Swal.fire({
					icon: 'success',
					title: "Регистрация прошла успешно!",
					confirmButtonColor: "#66BB6A",
					type: "success"
				});

				window.location.href = "{{URL::to('/')}}";
				
			}else{
				
				Swal.fire({
					icon: 'error',
					title: res.error,
					confirmButtonColor: "#EF5350",
					type: "error"
				});
				
			}
			
		},
		error: function (error) {

			Swal.fire({
				title: "SERVER ERROR!",
				confirmButtonColor: "#EF5350",
				type: "error"
			});
			
		}
		
	});
	
}

</script>

    
  </body>
</html>