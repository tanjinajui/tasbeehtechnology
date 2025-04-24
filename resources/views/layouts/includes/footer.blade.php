<!-- Start Footer -->
<footer data-aos="fade-up">
	<div class="subscribe-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="p-5 bg-white subscribe-wrapper">
						<div class="row align-items-center">
							<div class="col-md-6 offset-md-3">
								<div class="subscribe socail-icons">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
										<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- <div class="col-md-6">
								<div class="subscribe-text">
									<h2>Newsletters</h2>
									<p>Consectetur adipisicing elit, sed do eiusmod tempoe</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="subscribe-form">
									<form action="#">
										<input type="email" class="form-control" placeholder="Enter Your Email Here">
										<button type="submit">Subscribe</button>
									</form>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-area default_bg">
		<div class="footer-top ">
			<div class="container">
				<div class="row">
					<div class=" col-md-6">
						<div class="single_widget my-xs-4">
							<div class="address-widget">
								<div class="footer-logo">
									<a href="#"><h2 class="footer-logo-text">Tasbeeh Technologies</h2></a>
									<!-- <a href="index.html"><img src="assets/images/footer_logo.png" alt="" class="img-fluid"></a> -->
								</div>
								<p>57/8, Shah Jalal Plaza (3rd Floor), East Rajabazar, 
									West Panthapath, Dhaka-1215</p>
								<div class="contact-icon">
									<i class="mr-1 fas fa-mobile-alt"></i>+880 1534930755
									<div class="pl-2">
										<i class="fa-solid fa-fax"></i>Fax: +880 1534930755
									</div>
								</div>
								<div>
									<i class="mr-1 fas fa-envelope"></i>admin@tasbeehtech.com
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="footer-right">
							<!-- <div class="socail-icons">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div> -->
							<div class="copyright-text">
								<p>Developed & Maintained by Tasbeeh Technologies</p>
								<p>© 2024-2025. All Rights Reserved.</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="scroll-top">
		<div class="scroll-icon">
			<i class="fas fa-arrow-down"></i>
		</div>
	</div>
</footer>
<!-- End Footer -->
<script src="{{asset('frontend/js/jquery-3.4.0.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script> -->
 <script src="{{asset('frontend/js/all.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
 
<script src="{{asset('frontend/js/aos.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/bootnavbar.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<!-- recaptcha link -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
	function onSubmit(token) {
  document.getElementById("demo-form").submit();
}
	function enableSubmitBtn(){
	document.getElementById("mySubmitBtn").disabled = false;
	}
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-webcomponent@2/dist/tinymce-webcomponent.min.js"></script> --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}

 <script>
    //   $('#summernote').summernote({
    //     placeholder: 'About test description',
    //     tabsize: 2,
    //     height: 120,
        // toolbar: [
        //   ['style', ['style']],
        //   ['font', ['bold', 'underline', 'clear']],
        //   ['color', ['color']],
        //   ['para', ['ul', 'ol', 'paragraph']],
        //   ['table', ['table']],
        //   ['insert', ['link', 'picture', 'video']],
        //   ['view', ['fullscreen', 'codeview', 'help']]
        // ]
    //   });
    </script>
	

@yield('js') 
</body>

</html>

