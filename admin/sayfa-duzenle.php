<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php';?>			
	
<?php

$id=$_GET["id"];
$sorgu=$vt->query("select * from kurumsal where id='$id' ")->fetch();
?>



            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Kurumsal Sayfa Düzenle</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


<?php 

	  
	 
      if ($_GET["sil"]=="ok") {
        $id =$_GET["id"];
          $sil=$vt->prepare("delete from kurumsal where id=?");
          $sil->execute(array($id));
          if ($sil) {
               echo '
			            <META HTTP-EQUIV="Refresh" content="3;URL=sayfalar.php"/>  <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="fa fa-check label-icon"></i><strong>Başarılı</strong> - Kurumsal Sayfası başarıyla silindi
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
			   ';
              }else{
               echo '   ';
          }
      }
	  
	  
	  ?>

<?php


      if (isset($_POST["guncelle"])) {
        if ($_POST["uyepass"]=="") {
        $id     =$_POST["id"];
        $baslik  =$_POST["baslik"];
		$icerik  	 =$_POST["icerik"];
              $guncelsiteyazilim=$vt->prepare("update kurumsal set baslik=?, icerik=? where id=? ");
              $guncelsiteyazilim->execute(array($baslik,$icerik,$id));
              if ($guncelsiteyazilim) {
               echo '
			              <META HTTP-EQUIV="Refresh" content="2;">   <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="fa fa-check label-icon"></i><strong>Başarılı</strong> - Kurumsal Sayfası başarıyla düzenlendi
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
			   ';
              }else{
               echo '    <META HTTP-EQUIV="Refresh" content="3;">   <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="fa fa-warning label-icon"></i><strong>Uyarı</strong> - Kurumsal Sayfası düzenlenmedi
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
              }
        }else{
        $id     =$_POST["id"];
        $baslik  =$_POST["baslik"];
		$icerik  	 =$_POST["icerik"];
              $guncelsiteyazilim=$vt->prepare("update kurumsal set baslik=?, icerik=? where id=? ");
              $guncelsiteyazilim->execute(array($baslik,$icerik,$id));
              if ($guncelsiteyazilim) {
               echo '
			              <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="fa fa-check label-icon"></i><strong>Başarılı</strong> - Kurumsal Sayfası başarıyla düzenlendi
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
			   ';
              }else{
               echo '  <META HTTP-EQUIV="Refresh" content="3;">     <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                            <i class="fa fa-warning label-icon"></i><strong>Uyarı</strong> - Kurumsal Sayfası düzenlenmedi
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>';
              }
        }
      }
	  
	  
	  
?>
     <form class="needs-validation" action="" method="post" novalidate>
        

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
                                  
<input type="hidden"  name="id" value="<?php echo $sorgu["id"]; ?>">
     
	  
	  

 <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Kurumsal Sayfa Düzenle	
										
										<a style="float:right;" class="btn btn-danger" href="?id=<?php echo $sorgu["id"] ?>&sil=ok">
			<font color="white">Kayıt Sil</font>
			</a></h4>

                                       
			
                                    </div>
                                    <div class="card-body">
                                     <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Sayfa Başlık</label>
                             <input type="text" class="form-control" id="validationCustom01" name="baslik" value="<?php echo $sorgu["baslik"];?>">
                                                 
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
												 
                                                       
                           
											  
									
												
<div class="d-flex flex-column mb-7 fv-row">
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">Sayfa İçerik</span>
												</label>
											 <textarea style="height:600px;" id="summernote" type="text" class="form-control" name="icerik"><?php echo $sorgu["icerik"];?></textarea>
											</div>

 
						
    <script>
      $('#summernote').summernote({
        placeholder: 'Sayfa İçerik',
        tabsize: 2,
        height: 300
      });
    </script>


									
												
									
													
<button class="btn btn-primary" style="width:100%;" type="submit" name="guncelle">Düzenle</button>
     
												</div>
													
                            
								 
                                            </div>

						    </div>
						
						
						    </div>    </div>    </div>
						
						
                    </div>
                </div>









<?php include 'admin-footer.php'; } ?>
				

