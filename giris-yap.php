<?php include 'header.php'; ?>
				


				<main class="main-container">


<style>


.b-wrapper{
    display:flex;
    align-items:center;
    min-height: 650px;
    background-color: #fff;
    box-shadow: 0px 3px 10px rgba(0,0,0,.2);
} 
.b-min-height{
    height: 650px;
    background: #1f2d45;    
}

.b-title{
    padding:100px 0px 0px;
}
.b-title h1{
    color:#fff;
    font-weight:600;
}
.b-title p{
    color: #e7e7e7;
    margin:30px 0px 40px;
}
.b-title button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
}
.b-title button:focus{
    outline:none;
}
.b-form{
    width:60%;
    margin:auto;
}
.b-form-title h1{
    color: #1f2d45;
    font-size: 34px;
    font-weight: 900;
}
.b-form-title i{
    width: 50px;
    height: 50px;
    border: 1px solid #ddd;
    border-radius: 36px;
    line-height: 46px;
    font-size: 20px;
    margin: 13px 5px;
    color:#333;
    cursor:pointer;
}
.b-subtext{
    color: #b4b2b2;
    font-size: 14px;
}
.b-form .form-control{
    font-size:14px;
    height: 50px;
    padding-left: 45px;
    background: #edf9fe;
    border-color: #edf9fe;
    color: #333;
}
.b-form .form-control:focus{
    outline:none;
    box-shadow:none;
} 
.form-group{
    position: relative;
}
.b-font{

    top: 18px;
    left: 18px;
    z-index: 10;
    color: #6b6b6b;
    font-size:13px;
}    
.b-form button{
    letter-spacing: 0.4px;
    padding: 15px 85px;
    border-radius: 36px;
    border: 1.5px solid #fff;
    background: #1f2d45;
    color: #fff;
    text-transform: uppercase;
    margin-top:25px;
}
.b-form button:focus{
    outline:none;
}
.b-form .b-forgot{
    border-bottom: 1px solid #e8e4e4;
    padding-bottom: 10px;
    color: #7e7e7e;
    font-size: 14px;
    font-weight: 600;
    cursor:pointer;
    display:none;
}



</style>


<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


	
<?php if ($kbilgi["yetki"]) {?>	

    <div class="row align-items-center justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
            <div class="row b-wrapper"> 
                  <div class="gizle col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
           
                    <div class="b-title text-center"><br><br>
                        <h1 class="user_title"><?=$sites["isim"];?></h1>
                        <p class="user_subTitle">Uyarı </br> şuan giriş yapmış gözüküyorsunuz</p>
						           <button onclick="window.location='hesabim.php';" type="button">Bilgilerim</button>
                    </div>
                </div>
                
				
	
			   <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

                    <div class="b-form text-center">
                        <div class="b-form-title">
                            <h1 class="form_title"><img style="height:90px;" src="assets/use.png"><br><br>
							Hoşgeldiniz <?php echo $kbilgi["username"];?></h1>
                            <p class="b-subtext">Kişisel profil bilgilerinizi güncelleyebilirsiniz</p>
                      
					     

	  
	  
					   </div>
                    </div>
                </div> 

	


	

            </div>
        </div>
    </div>
	<? } ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php if ($kbilgi["yetki"]==0) {?>	



    <div class="row align-items-center justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
            <div class="row b-wrapper"> 
                <div class="gizle col-xs-12 col-sm-5 col-md-5 col-lg-5 b-min-height">
           
                    <div class="b-title text-center"><br><br>
                        <h1 class="user_title"><?=$sites["isim"];?></h1>
                        <p class="user_subTitle">Hesabınız Yoksa </br> ücretsiz kayıt oluşturabilirsiniz</p>
						           <button onclick="window.location='kayit.php';" type="button">Kayıt Oluştur</button>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

                    <div class="b-form text-center">
                        <div class="b-form-title">
                            <h1 class="form_title">Hemen Giriş Yap</h1><br>
                            
	   <?php
					
					     /* Giriş Yap */
      if (isset($_POST["loginol"])) {
        $email  =$_POST["mail"];
        $pass   =$_POST["pass"];
          $kullanicivarmi= $vt->prepare("select * from uyeler where email=? && pass=?");
          $kullanicivarmi->execute(array($email,$pass));
          $row= $kullanicivarmi->rowCount();
          if ($row>0) {
            $_SESSION["mail"]=$email;
            $_SESSION["pass"]=$pass;
            echo'<META HTTP-EQUIV="Refresh" content="2;URL=index.php">
<button type="button" style="border-radius:5px; background-color:#31b577; font-size:12px; width:100%;"><b>Sistem:</b> Bilgileriniz doğru giriş yapılıyor</button><br><br>';
          }else{
           echo'<button type="button" style="border-radius:5px; background-color:orange; font-size:12px; width:100%;"><b>Sistem:</b> Bilgiler yanlış tekrar deneyiniz</button><br><br>';
          }
      }
	  
	   ?>                       
					   </div>
                      
					  <form action="" class="form-horizontal" method="post">
                            <div class="form-group">
                                <input class="form-control" type="email" name="mail" placeholder="E-Mail Adresiniz">
                            </div>
							
							<br>
							
							
                            <div class="form-group">
                                <input class="form-control" type="password" name="pass" placeholder="Şifreniz">
                            </div>
							
                            <button type="submit" style="border-radius:5px; width:100%;" name="loginol">Giriş Yap</button>
                        </form>
						
						<a style="float:right;" href="forgot-password">Şifremi Unuttum</a>	
                    </div>
                </div>
			

            </div>
        </div>
    </div>
	
	
	
	<? } ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>






</main>
<?php include 'footer.php'; ?>
				