<? include "header.php";?>

		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div>
		</div><section class="page-header">
            <div class="page-header-bg" style="background-image: url(resimler/386-buraya-slogan-gelebilir.webp)">
            </div>
            <div class="page-header-shape-1"><img src="assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Kontakt</h2>
                </div>
            </div>
        </section> 


		<section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Kontakt</p>
                                    <div class="section-title-shape-1">
                                        <img src="assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="contact-page__call-email">
                                <div class="contact-page__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-page__call-email-content">
                                    <h4>
                                        <a href="tel:<?=$sites["telefon"];?>" class="contact-page__call-number"><?=$sites["telefon"];?></a>
                                        <a href="mailto:<?=$sites["mail"];?>"
                                            class="contact-page__email"><?=$sites["mail"];?></a>
                                    </h4>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                               
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
        echo '<META HTTP-EQUIV="Refresh" content="3;"><div class="alert alert-success" style="width:100%;" role="alert">An Forum Management gesendet. Wir werden uns in Kürze mit Ihnen in Verbindung setzen.</div>';
          }else{
            header("Location:");
          }
      }

	  ?>
	  
							   <form action="" class="comment-one__form " method="post">
                                   

								   <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Vorname Familienname" name="ad">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email " name="mail">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Telefon " name="tel">
                                            </div>
                                        </div> 
                                    </div>
									
									
									
									
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="mesaj" placeholder="Ihre Nachricht"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn" name="gonder">Nachricht senden</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
       
   
       <? include "footer.php";?>
