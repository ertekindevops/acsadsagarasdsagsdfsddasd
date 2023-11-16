<?php include 'header.php';?>	

	


				<main class="main-container">



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
                        <li>Şifremi Unuttum</li>
                    </ul>
                    <h2>Şifremi Unuttum</h2>
                </div>
            </div>
        </section>
		
		<br><br>






<section class="wp-block-tactus-section  " style="">

		<div class="container">





						

											<div style="padding:35px;" class="bg-csp4 card">

												

												<center>



										<h3 class="bg-font">Şifremi <span class="text-primary">Unuttum?</span></h3>

                            <p class="text-muted mt-2">Hesabınızın şifresini unuttuysanız lütfen e-mail adresinizi giriniz

                      <br><br>







<?php $action = $_GET["action"];

$harf = 'ABCDEFGHIJKLMNOPRSTUVYZX';
$harf_sayisi = mb_strlen($harf);
for ($i = 0; $i < 10; $i++){
	$secilen_harf_konumu = mt_rand(0,$harf_sayisi - 1);
	$kod .= mb_substr($harf, $secilen_harf_konumu, 1).rand(0,9);
}

 $code = mb_substr($kod, 0, 50);

switch($action){
  case "reset":
  $code = $_GET["code"];
  $codeRow = $vt->prepare("select * from codes where code=?");
  $codeRow->execute(array($code));
  $z = $codeRow->fetch(PDO::FETCH_ASSOC);
  $controlCode = $codeRow->rowCount();
  if($controlCode){
    $useruid = $z["uid"];
    $userRow = $vt->prepare("select * from uyeler where id=? and codes=?");
    $userRow->execute(array($useruid,$code));
    $userInfo = $userRow->fetch(PDO::FETCH_ASSOC);
    $controlUser = $userRow->rowCount();
    if($controlUser){
      $userid = $userInfo["id"];
      $username = $userInfo["username"];
      if($_POST["recoverypass"]){
        $newpass = $_POST["newpass"];
        $newcode = "";
        $guncelle = $vt->prepare("update uyeler set
								pass=?,
								codes=?
								 where id=?
								 ");
								   $update = $guncelle->execute(array($newpass,$newcode,$userid));
                   if($update){
                     $delete = $vt->prepare("delete from codes where uid=?");
                     $deletenow = $delete->execute(array($userid));
                     $deleteControl = $delete->rowCount();
                     if($deleteControl){
                       if($deletenow){
                         echo '<META HTTP-EQUIV="Refresh" content="2;URL=giris-yap"><center><span style="background: #029573;
                           padding: 0.8rem;
                           border-radius: 2rem;
                           color: white;">Şifreniz başarıyla değiştirildi, yönlendiriliyorsunuz...</span></center>';
                       }
                     }
                   }

      }
  ?>
  <form action="" class="space-y-4 pt-4 lg:space-y-5" method="post">
  <div>
  <label class="block text-13px"><span class="block cursor-pointer pb-2.5 font-normal text-dark/70 rtl:text-right dark:text-light/70">Yeni Şifrenizi Girin <span style="background: #24b47e;
    display: inline-block;
    margin-left: 0.3rem;
    padding: 2px;
    border-radius: 20rem;
    color: white;
    font-weight: 600;"><?=$username?></span></span>
  <input type="password" name="newpass" class="h-11 w-full appearance-none rounded border border-light-500 bg-transparent px-4 py-2 text-13px text-dark ring-[0.5px] ring-light-500 placeholder:text-dark-900 focus:border-brand focus:ring-[0.5px] focus:ring-brand dark:border-dark-600 dark:text-light dark:ring-dark-600 dark:placeholder:text-dark-700 dark:focus:border-brand dark:focus:ring-brand md:h-12 lg:px-5 xl:h-[50px] bg-light dark:bg-dark-300">
  </label></div>

  <button value="recoverypass" name="recoverypass" style="border-radius:6px; padding:15px; font-size:12px; width:100%;border-color:#1874ac; background-color:#1874ac;color:white;" type="submit">
  Şifremi Yenile</button>
</form>
  <?php
}else{
  echo "<center><span style='background: #460000;
    padding: 0.8rem;
    border-radius: 2rem;
    color: white;'>Doğrulama tokeni geçersiz</span></center>";
}
}else{
  echo "<center><span style='background: #460000;
    padding: 0.8rem;
    border-radius: 2rem;
    color: white;'>Doğrulama tokeni geçersiz</span></center>";
}
  break;
  default:
?>
<form action="" class="space-y-4 pt-4 lg:space-y-5" method="post">

<?php
if($_POST['recovery']){


    $email = $_POST["mail"];

    $userRow = $vt->prepare("select * from uyeler where email=?");
      $userRow->execute(array($email));
      $userInfo = $userRow->fetch(PDO::FETCH_ASSOC);
      $userControl = $userRow->rowCount();
        $mailUsername = $userInfo["username"];
	$MailHost		= 'mail.bilimsi.net';
	$SiteMaili		= 'info@bilimsi.net';
	$MailSifre		= "ereneser.";
	$MailiGonder	= $email;
	$MailKonu		= 'Şifre Sıfırlama Bağlantınız!';
	$MesajMetni		= "<center><div style='background: #2a2a2a; width: 50%; height: 50%; border-radius: 2rem;'>
  <br><h3 style='color: white; color: white;
     position: relative;
    top: 0.8rem;'>Şifrenizi Yenileyin</h3>
      <span style='background: #ffffff38;
      padding: 0.4px;
      display: block;
      margin-top: 1.5rem; margin-bottom: 1rem;'></span>

      <span style='color: #979797;
      font-size: 0.9rem;
    '>Aşağıdaki butona tıklayarak şifrenizi yenileyebilirsiniz. <font color='red'>Eğer bu işlemi siz yapmadıysanız bu mail'i görmezden geliniz!</font></span>
  <br>
  <br>
  <br>
  <br>
    <span style='background: #222222;
      padding: 1rem;
      position: relative;
      top: 3rem;
      color: white;
      border: 2px solid #363636;
      border-radius: 1rem;
      font-size: 2rem;
      font-weight: bold;'>$mailUsername</span>
      <br>

      <a style='margin-top: 5rem;
      display: block;
      background: #00a38c;
      padding: 2rem;
      color: white;
      text-decoration: none;
      font-size: 1.5rem; border-bottom-left-radius: 2rem;
    border-bottom-right-radius: 2rem;' href='https://sitelink.com/forgot-password?action=reset&code=$code'>Şifremi Sıfırla</a>
  </div></center>
";
	$MailPort		= 587;
	$MailGuvenlik	= 'tls';
	foreach($_POST as $input=>$value){$MesajMetni;}
	include("mail_ayar.php");

	$v = $vt->prepare("select * from uyeler where email=?");
		$v->execute(array($email));
		$z = $v->fetch(PDO::FETCH_ASSOC);
		$x = $v->rowCount();
		if($x){

if(isset($SiteMaili) and !isset($MailHata)){
  $addCode = $vt->prepare("insert into codes set
   code=?,
   uid=?
");
 $controlAdd = $addCode->execute(array($code,$z["id"]));
 if($controlAdd){
   $updateUser = $vt->prepare("update uyeler set
           codes=?
           where id=?
           ");
           $controlUpdate = $updateUser->execute(array($code,$z["id"]));
           if($controlUpdate){
 echo "<span style='display: block;
    background: #00b25a;
    text-align: center;
    padding: 0.6rem;
    border-radius: 3px;
    color: white;
    font-family: sans-serif;
    font-weight: 500;'>Mail Gönderildi Gelen Kutunuzu ya da Spam Klasörünü kontrol edin.</span><br>";
  }
  }
}else{
    echo "<span style='display: block;
    background: #ff0000a8;
    text-align: center;
    padding: 0.6rem;
    border-radius: 3px;
    color: white;
    font-family: sans-serif;
    font-weight: 500;'>Mail Gönderilirken bir sorun oluştu</span><br>";
}
}else{
        echo "<span style='display: block;
    background: #ff0000a8;
    text-align: center;
    padding: 0.6rem;
    border-radius: 3px;
    color: white;
    font-family: sans-serif;
    font-weight: 500;'>Böyle bir mail adresi bulunmuyor!</span><br>";
}}

?>





<div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="E-Mail Adresiniz" name="mail">
                                            </div>
                                        </div>
										
										


<button value="recovery" name="recovery" style="border-radius:6px; padding:15px; font-size:12px; width:100%;border-color:#1874ac; background-color:#1874ac;color:white;" type="submit">
Şifremi Yenile</button>




</form>

<?php } ?>


</div></div></div></div></div>


   </div>

	

											</div>

	</section>









</main>
<br><br>
<?php include 'footer.php'; ?>

				