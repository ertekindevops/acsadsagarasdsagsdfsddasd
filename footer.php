		
		
	<style>
    .whatsapp {position: fixed;left: 15px;bottom: 15px;transition: all .5s ease-in-out;z-index: 999;}
.whatsapp a {height: 50px;width: 50px;border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);font-size: 28px;display: block;text-align: center;line-height: 50px;color: white;background: #4dc247;}
.whatsapp .tooltiptext {visibility: hidden;width: 120px;background-color: black;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;line-height: normal;font-size: 15px;top: 13px;left: 105%;height: auto;}
.whatsapp:hover a {transform: rotate(45deg);-webkit-transform: rotate(45deg);}.whatsapp:hover .tooltiptext {visibility: visible;}
.telefon {position: fixed;left: 15px;bottom: 75px;transition: all .5s ease-in-out;z-index: 999;}
.telefon a {height: 50px;width: 50px;border-radius: 50%;overflow: hidden;box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);font-size: 28px;display: block;text-align: center;line-height: 50px;color: white;background: #337ab7;}
.telefon .tooltiptext {visibility: hidden;width: 120px;background-color: black;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;line-height: normal;font-size: 15px;top: 13px;left: 105%;height: auto;}
.telefon:hover a {transform: rotate(45deg);-webkit-transform: rotate(45deg);}
.telefon:hover .tooltiptext {visibility: visible;}

.telefon {
right: 15px !important;
left: unset;
bottom: 300px;
}

.whatsapp {
right: 15px !important;
left: unset;
bottom: 240px;
}

.telefon .tooltiptext, .whatsapp .tooltiptext {
right: 105%;
left: unset;
}

.telegram {
position: fixed;
right: 15px;
bottom: 180px;
transition: all .5s ease-in-out;
z-index: 999;
}

.telegram a {
height: 50px;
width: 50px;
border-radius: 50%;
overflow: hidden;
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
font-size: 28px;
display: block;
text-align: center;
line-height: 50px;
color: white;
background: #27A7E5;
}

.telegram .tooltiptext {
visibility: hidden;
width: 100px;
background-color: black;
color: #fff;
text-align: center;
border-radius: 6px;
padding: 5px 0;
position: absolute;
z-index: 1;
line-height: normal;
font-size: 15px;
top: 13px;
right: 105%;
height: auto;
}

.telegram:hover a {
transform: rotate(45deg);
-webkit-transform: rotate(45deg);
}

.telegram:hover .tooltiptext {
visibility: visible;
}

.instagram {
position: fixed;
right: 15px;
bottom: 120px;
transition: all .5s ease-in-out;
z-index: 999;
}

.instagram a {
height: 50px;
width: 50px;
border-radius: 50%;
overflow: hidden;
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
font-size: 28px;
display: block;
text-align: center;
line-height: 50px;
color: white;
background: #fd3a67;
}

.instagram .tooltiptext {
visibility: hidden;
width: 100px;
background-color: black;
color: #fff;
text-align: center;
border-radius: 6px;
padding: 5px 0;
position: absolute;
z-index: 1;
line-height: normal;
font-size: 15px;
top: 13px;
right: 105%;
height: auto;}
</style>


<!---
<div class="telefon">
	<a href="tel:=$xxx["telefon"];" title="Telefon" alt="Telefon"><i class="fa fa-phone"></i></a>
	<span class="tooltiptext">Telefon</span>
</div>
--->




		
	
		<footer class="site-footer">
			<div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.png);">
			</div>
			<div class="container">
				<div class="site-footer__top">
					<div class="row">
						<center>
						
							<div class="footer-widget__column footer-widget__about">
								<div class="footer-widget__about-text-box">
									<p class="footer-widget__about-text">  
									2022-2023 © <?=$sites["isim"];?> - Tüm Hakları Saklıdır.</p>
							
								</div>
								
							
							
							</div>
					
						
						
						
						
						
						
					</div>
				</div>
				
			</div>
		</footer>
	
		
		
		
		



	</div>


	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:<?=$sites["mail"];?>"><?=$sites["mail"];?></a>
				</li>
			</ul><!-- /.mobile-nav__contact -->
	



		</div>
		<!-- /.mobile-nav__content -->
	</div>



	<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/jarallax/jarallax.min.js"></script>
	<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
	<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
	<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
	<script src="assets/vendors/nouislider/nouislider.min.js"></script>
	<script src="assets/vendors/odometer/odometer.min.js"></script>
	<script src="assets/vendors/swiper/swiper.min.js"></script>
	<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
	<script src="assets/vendors/wnumb/wNumb.min.js"></script>
	<script src="assets/vendors/wow/wow.js"></script>
	<script src="assets/vendors/isotope/isotope.js"></script>
	<script src="assets/vendors/countdown/countdown.min.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src="assets/vendors/vegas/vegas.min.js"></script>
	<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
	<script src="assets/vendors/timepicker/timePicker.js"></script>
	<script src="assets/vendors/circleType/jquery.circleType.js"></script>
	<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
	<script src="assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>



	<script src="assets/js/insur.js"></script>
</body>


</html>
