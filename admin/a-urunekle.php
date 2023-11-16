<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php';?>			




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Yeni PDF Ekle</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


	  
	  

 <div class="row">
 
 
 
	<form enctype="multipart/form-data"  method="POST" action="" >

  <?php 
      if (isset($_POST['ekle'])) {

		$uploads_dir = '../resimler';
		@$tmp_name = $_FILES['resim']["tmp_name"];
		@$name = $_FILES['resim']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$rsmyol= $uploads_dir."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		
		
		
		$uploads_dir = '../pdf';
		@$tmp_name = $_FILES['buton']["tmp_name"];
		@$name = $_FILES['buton']["name"];
		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);

		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
		$pdfyol= $uploads_dir."/".$benzersizad.$name;
		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
		
		
		
		
        $urunad        =$_POST['urunad'];
		$aciklama        =$_POST['aciklama'];
		
		
          $ekle= $vt->prepare("insert into urun set urunad=?, aciklama=?, resim=?, buton=?");
          $ekle->execute(array($urunad,$aciklama,$rsmyol,$pdfyol));
          if ($ekle) {
           echo '<META HTTP-EQUIV="Refresh" content="3;"><div class="alert alert-success" style="width:100%;" role="alert">Ürün Eklenildi</div>';
          }else{
            header("Location:");
          }
      }
	  ?>
	  
	  



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <buton href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


 




                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">




											
											
											
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">PDF Başlık</span>
												</label>
											 <input type="text" class="form-control" name="urunad">
											</div>
											

	<br>
	
	

	
	
	
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">PDF Dosyası</span>
												</label>
											 <input type="file" class="form-control" name="buton">
											</div>
											
											

	<br>
	
	
	
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">PDF Kapak Resim</span>
												</label>
											 <input type="file" class="form-control" name="resim">
											</div>
											
											
											<br>




														
														
														
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">PDF Açıklaması</span>
												</label>
											 <textarea style="height:50px;" type="text" class="form-control" name="aciklama"></textarea>
											</div>

 
						





<br>
													
													
													
													
														    <button class="btn btn-primary" style="font-size:11px; width:100%;" name="ekle"  type="submit">
                                    Ekle

                                </button>	 </form>	


<br><br>
													
                            
								 
                                            </div>

						    </div>
						
						
						    </div>    </div>  



						
                    </div>
                </div>

						
                    </div>
                </div>









 <?php include 'admin-footer.php'; } ?>
				

