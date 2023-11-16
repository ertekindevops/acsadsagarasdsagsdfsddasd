<?php include 'admin-header.php'; if($kbilgi["yetki"] == 2){ ?>
<?php include 'admin-menu.php';?>			




            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Kurumsal Sayfaları</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


 


						<div class="row">




	
	
                        <div class="col-xl-12">
						
						<?php

	  

      if ($_GET["sil"]=="ok") {
        $id=$_GET["id"];
          $sil=$vt->prepare("delete from kurumsal where id=?");
          $sil->execute(array($id));
          if ($sil) {
             echo '<META HTTP-EQUIV="Refresh" content="2;sayfalar.php"><div class="alert alert-danger" style="width:100%;" role="alert">Kurumsal Sayfası Başarıyla Silindi</div>';
          }else{
            header("Location:no");
          }
      }
	  
	  ?>
	  
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Kurumsal Sayfa Listesi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead>
                                                <tr>
                                                    <th>#</th>
													<th>Başlık</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
											
 <?php $kurumsal  =$vt->query("select * from kurumsal Order By id DESC")->fetchAll(PDO::FETCH_ASSOC); foreach ($kurumsal as $kurumsal) {?>
	
	
                                                <tr>
                                                    <th scope="row"><?php echo $kurumsal["id"];?></th>
													<td><?php echo $kurumsal["baslik"];?></td>
                                                    <td>
			<span style="float:right;">	


<a style=" font-size:13px;" class="btn btn-info" href="sayfa-duzenle?id=<?php echo $kurumsal["id"] ?>">
			<font color="white">Düzenle</font>
			</a>

			
<a style=" font-size:13px;" class="btn btn-danger" href="?id=<?php echo $kurumsal["id"] ?>&sil=ok">
			<font color="white">Sil</font>
			</a>
			
			</span>
			</td>
                                                </tr>
												
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

						
                    </div>
                </div>









 <?php include 'admin-footer.php'; } ?>
				

