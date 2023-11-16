<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php';?>			




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Anasayfa</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
						
						
                           
					<?php
 $uye= $vt->query("select * from iletisim");
 $uye = $uye->rowCount();
 
 
  
  $urunler= $vt->query("select * from urun");
 $urunler = $urunler->rowCount();

 $Fiyat=$vt->prepare("SELECT SUM(amount) AS amount FROM shopierOrder WHERE status='1'");   
 $Fiyat->execute();  $FiyatYaz= $Fiyat->fetch(PDO::FETCH_ASSOC);


 ?>

						   <div class="col-xl-6 col-md-6">
                                <div class="card card-h-100">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-5 lh-1 d-block text-truncate">Toplam PDF</span>
                                                <h4 class="mb-3">
                                                   <?php  echo $urunler; ?>  Adet
                                                </h4>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
        
                           						   
        
                                                       						   <div class="col-xl-6 col-md-6">
                                <div class="card card-h-100">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-5 lh-1 d-block text-truncate">Toplam İletişi</span>
                                                <h4 class="mb-3">
                                                  <?php  echo $uye; ?> Adet
                                                </h4>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
							
							
							
        
                                      						 

							
                        </div><!-- end row-->

                      




						
						
	
						
						
					
 


<div class="row">




	
	
                        <div class="col-xl-12">
											<?php

	  

      if ($_GET["sil"]=="ok") {
        $id=$_GET["id"];
          $sil=$vt->prepare("delete from iletisim where id=?");
          $sil->execute(array($id));
          if ($sil) {
             echo '<META HTTP-EQUIV="Refresh" content="2;iletisim.php"><div class="alert alert-danger" style="width:100%;" role="alert">İletişim Kayıtı Başarıyla Silindi</div>';
          }else{
            header("Location:no");
          }
      }
	  
	  ?>
	
	  
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Son 10 Gelen İletişim Forumları</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Ad Soyad</th>
													<th>Mail Adresi</th>
														<th>Telefon Numarası</th>
													<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
											
 <?php $cek  =$vt->query("select * from iletisim Order By id DESC LIMIT 10")->fetchAll(PDO::FETCH_ASSOC); foreach ($cek as $cek) {?>
	
	
                                                <tr>
                                                    <th scope="row"><?php echo $cek["id"];?></th>
                                                    <td><?php echo $cek["ad"];?></td>
													<td><?php echo $cek["mail"];?></td>
													<td><?php echo $cek["tel"];?></td>
													
                                                    <td>
			<span style="float:right;">	

<button style="border-radius:6px; font-size:12px;" onclick="fireSweetdetay<?php echo $cek["id"] ?>()" class="btn btn-info">Mesajını Göster</button>


			
<a style="font-size:12px;" class="btn btn-danger" href="?id=<?php echo $cek["id"] ?>&sil=ok">
			<font color="white">Sil</font>
			</a>
			
			</span>
			</td>
                                                </tr>
												
												
												
											
  

  

  <script>



    function fireSweetdetay<?php echo $cek["id"] ?>() {

        Swal.fire(

            '<?php echo $cek["adsoyad"] ?><br><?php echo $cek["mail"] ?>',

            '<?php echo $cek["mesaj"] ?>',

            'success'

        )

    }



  </script>




												<?php } ?>
												
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                
                            </div>
           
                        </div>
						
						
						
						
						

							</div>


							
						
						
						
                    </div>
                </div>









<?php include 'admin-footer.php'; } ?>
				

