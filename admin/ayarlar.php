<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php'; $sites  = $vt->query("select * from siteayar")->fetchAll(PDO::FETCH_ASSOC); foreach ($sites as $sites) ?>			




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Genel Ayarlar</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->





	  

                        <div class="row">
						
						

  <form method="POST" class="d-flex flex-column mb-4" action="">
  
  
  
                            <div class="col-12">
													
<?php


	  


      if (isset($_POST["siteayar"])) {
        if ($_POST["siteayar"]=="") {
          $site_baslik     =$_POST["site_baslik"];
		  $isim     =$_POST["isim"];
		  $telefon     =$_POST["telefon"];
		  $mail     =$_POST["mail"];
		  $instagram     =$_POST["instagram"];
		  $youtube     =$_POST["youtube"];
		  $hakkimizda     =$_POST["hakkimizda"];
		  
              $siteayar=$vt->prepare("update siteayar set site_baslik=?, isim=?, telefon=?, mail=?, instagram=?, youtube=?, hakkimizda=?");
              $siteayar->execute(array($site_baslik,$isim,$telefon,$mail,$instagram,$youtube,$hakkimizda));
              if ($siteayar) {
             echo '<META HTTP-EQUIV="Refresh" content="1;"><div class="alert alert-success" style="width:100%;" role="alert">Site Ayarları Düzenlendi</div>';
              }else{
               echo '<META HTTP-EQUIV="Refresh" content="1;">';
              }
        }
      }

?>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Site Ayarları</h4>
                       
                                    </div>
                 
									
									
									
									
							
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
												
												    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Site Başlık</label>
                                                        <input class="form-control" type="text" name="site_baslik" value="<?php echo $sites["site_baslik"]; ?>">
                                                    </div> 
													
													
									
													
													
													     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Site İsimi</label>
                                                        <input class="form-control" type="text" name="isim" value="<?php echo $sites["isim"]; ?>">
                                                    </div> 
				
				
		
													
			
			<br>	
				<center>İletişim Ayarları</center><br>
				
				     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Telefon Numarası</label>
                                                        <input class="form-control" type="text" name="telefon" value="<?php echo $sites["telefon"]; ?>">
                                                    </div>
														


     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Mail Adresi</label>
                                                        <input class="form-control" type="text" name="mail" value="<?php echo $sites["mail"]; ?>">
                                                    </div>	
													
												

     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Anasayfa Hakkımızda Kısa Yazı</label>
         <textarea class="form-control" type="text" name="hakkimizda"> <?php echo $sites["hakkimizda"]; ?></textarea>
                                                    </div>	
													
																								
													
													
													
													<br>	
				<center>Sosyal Media</center><br>
				
				     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">İnstagram</label>
                                                        <input class="form-control" type="text" name="instagram" value="<?php echo $sites["instagram"]; ?>">
                                                    </div>
														


     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Youtube</label>
                                                        <input class="form-control" type="text" name="youtube" value="<?php echo $sites["youtube"]; ?>">
                                                    </div>	
													
													
													  
													
													
													    
                                                </div>
                                            </div>

                                  
                                        </div>
										
										
 <button class="btn btn-primary" style="font-size:14px; width:100%;" name="siteayar"  type="submit">
               Kaydet

                                </button>
										
                                    </div>
									
									
                                </div>
                            </div>
                        </div>
            
						
						
						
						
						
						
                    </div>
                </div>









<?php include 'admin-footer.php'; } ?>
				

