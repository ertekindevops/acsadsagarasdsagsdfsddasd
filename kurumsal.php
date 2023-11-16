<? include 'header.php';?>
<?php $id=$_GET["id"]; $kurumsal=$vt->query("select * from kurumsal where id='$id' ")->fetch();?>


		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div>
		</div><section class="page-header">
            <div class="page-header-bg" style="background-image: url(resimler/386-buraya-slogan-gelebilir.webp)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
              
                    <h2><?=$kurumsal["baslik"];?></h2>
                </div>
            </div>
        </section><section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            
                            <div class="news-details__content">
                              
                                <h3 class="news-details__title"><?=$kurumsal["baslik"];?></h3>
                                <p class="news-details__text-1">
								<p style="text-align:justify">
							<?=$kurumsal["icerik"];?>
								</p>
</p>
                                
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
		
	<? include 'footer.php';?>
