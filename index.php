<? include 'header.php';?>

<link rel="stylesheet" href="assets/css/insur-dark.csss">				
<img style="width:100%;" src="bg.jpg">	
		
		
		<section class="about-one" style="margin-top:90px">
			<div class="about-one-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
				style="background-image: url(assets/images/dark-mode/about-one-bg.png);"></div>
			<div class="container">
				<div class="row">
			
					<div class="col-xl-12">
						<div class="about-one__right">
							<div class="section-title text-left">
								<div class="section-sub-title-box">
									<p class="section-sub-title">AGB`S</p>
									<div class="section-title-shape-1">
										<img src="assets/images/dark-mode/section-title-shape-1.png" alt="">
									</div>
									<div class="section-title-shape-2">
										<img src="assets/images/dark-mode/section-title-shape-2.png" alt="">
									</div>
								</div>
								<h2 class="section-title__title">AGB`S</h2>
							</div>
							<p class="about-one__text-1"><p style="text-align:justify">
							<?=$sites["hakkimizda"];?> </p>
</p>
							
						
						
						
							
							
						</div>
					</div>
				</div>		
					
					<br><br>
				<form method="post" action="search.php">
						
							<br><br>


<br>
									<input type="text" style="padding:15px;" name="search" placeholder="Suchen..." name="ad" class="form-control">
									<br>
									<button style="color:white; width:100%;" class="btn btn-info">SUCHEN</button>
									
							
						</form>
						<br><br>
						
						
		</section>
		
		
	
		
		
		<section class="get-insurance">
			<div class="get-insurance-bg"
				style="background-image: url(assets/images/backgrounds/get-insurance-bg.png);"></div>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="get-insurance__left">
							<div class="get-insurance__img wow slideInLeft" data-wow-delay="100ms"
								data-wow-duration="2500ms">
							
							</div>
							<div class="get-insurance__author">
								<p>Kontakt</p>
							</div>
						
						</div>
					</div>
					<div class="col-xl-12">
						<div class="get-insurance__right">
							<div class="section-title text-left">
								<div class="section-sub-title-box">
									<p class="section-sub-title">Kontakt</p>
									<div class="section-title-shape-1">
										<img src="assets/images/dark-mode/section-title-shape-1.png" alt="">
									</div>
									<div class="section-title-shape-2">
										<img src="assets/images/dark-mode/section-title-shape-2.png" alt="">
									</div>
								</div>
								<h2 class="section-title__title">info@ngav.ch</h2>
							</div>
							<div class="get-insurance__tab">
								<div class="get-insurance__tab-box tabs-box">
								
									<div class="tabs-content">
										<div class="tab active-tab" id="home2">
											<div class="get-insurance__content">
											
											
  <?php 

      if (isset($_POST['gonder'])) {

        $ad        =$_POST['ad'];
		$mail        =$_POST['mail'];
		$tel        =$_POST['tel'];
		$mesaj        =$_POST['mesaj'];
		$date=date("Y-m-d h:i:sa");

        $ekle= $vt->prepare("insert into iletisim set ad=?, mail=?, tel=?, mesaj=?, date=?");

        $ekle->execute(array($ad,$mail,$tel,$mesaj,$date));
        if ($ekle) {
        echo '<META HTTP-EQUIV="Refresh" content="3;"><div class="alert alert-success" style="width:100%;" role="alert">Forum Yönetime Gönderildi kısa sürede iletişime geçilecektir</div>';
          }else{
            header("Location:");
          }
      }

	  ?>
	  
												<form class="get-insurance__form" method="post" action="">
													<div class="get-insurance__content-box">
														<div class="get-insurance__input-box">
															<input type="text" placeholder="Vorname Familienname" name="ad">
														</div>
														<div class="get-insurance__input-box">
															<input type="email" placeholder="Email "
																name="mail">
														</div>
                                                       
                                                        
                                                        <div class="get-insurance__input-box">
															<input type="text" placeholder="Nummer"
																name="tel">
														</div>
                                                       
                                                          <div class="get-insurance__input-box">
															<input type="text" placeholder="Ihre Nachricht"
																name="mesaj">
														</div>
														
													</div>
													
													<button type="submit" class="thm-btn get-insurance__btn" name="gonder">Schicken</button>
												</form>
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
		
		

		

		
	
		
		


<? include 'footer.php';?>