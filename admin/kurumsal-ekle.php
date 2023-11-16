<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php';?>			




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Kurumsal Sayfası Ekle</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


	  
	  

 <div class="row">
 
 
 
	<form enctype="multipart/form-data"  method="POST" action="" >

  <?php 
      if (isset($_POST['ekle'])) {

		
        $baslik        =$_POST['baslik'];
		$icerik        =$_POST['icerik'];
          $ekle= $vt->prepare("insert into kurumsal set baslik=?, icerik=?");
          $ekle->execute(array($baslik,$icerik));
          if ($ekle) {
           echo '<META HTTP-EQUIV="Refresh" content="3;"><div class="alert alert-success" style="width:100%;" role="alert">Kurumsal Eklenildi</div>';
          }else{
            header("Location:");
          }
      }
	  ?>
	  
	  





                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">




											
											
											
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Sayfa Başlık</span>
												</label>
											 <input type="text" class="form-control" name="baslik">
											</div>
											

											<br>

	
												<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Sayfa Açıklaması</span>
												</label>
											 <textarea type="text" class="form-control" name="icerik"></textarea>
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
				

