<? include 'header.php';?>


	<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div>
		</div><section class="page-header">
            <div class="page-header-bg" style="background-image: url(resimler/386-buraya-slogan-gelebilir.webp)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index">Anasayfa</a></li>
                        <li><span>/</span></li>
                        <li>PDFs gefunden</li>
                    </ul>
                    <h2>PDFs gefunden</h2>
                </div>
            </div>
        </section>
		
		

										
										
										
										<section class="insurance-page-one">
            <div class="services-one__container">
                <div class="row">
                                        			
  <?php
    if (isset($_POST["search"])) {
      require "baglan.php";  if (count($results) > 0) { foreach ($results as $r) { ?>
	  

		<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
							<div class="services-one__single">
								<div class="service-one__img">
									<img src="<?=$sites["link"];?>//<?=$r["resim"];?>">
								</div>
								<div class="service-one__content">
									
									<h2 class="service-one__title" style="font-size:15px;"><?=$r["urunad"];?></h2>
									<p class="service-one__text">     <?=$r["aciklama"];?></p>
									<br>
								
<a href="<?=$sites["link"];?>//<?=$r["buton"];?>" target="blank_" class="btn" style="background-color:#015fc9; padding:8px; border:0px; color:white; width:100%; border-radius:4px; font-size:13px;">PDF Herunterladen</a>
															

									</div>
								
							</div>
						</div>
 <? } }} ?>




                            </div>
            </div>
        </section>








<? include 'footer.php';?>
