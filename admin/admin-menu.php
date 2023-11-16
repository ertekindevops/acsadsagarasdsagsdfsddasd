
<!doctype html>
<html lang="tr">

    <head>
        <meta charset="utf-8" />
        <title>Site Kontrol Paneli</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="admin/vs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="admin/pre.css" type="text/css" />
        <link href="admin/bootstrap.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link href="admin/icon.css" rel="stylesheet" type="text/css" />
		<link href="admin/all.css" rel="stylesheet" type="text/css" />
        <link href="admin/app.css" id="app-style" rel="stylesheet" type="text/css" />
		<link href="admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>


        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                         <br>
						 <span class="logo-lg">
                           <b>KONTROL</b>PANELİ
                           </span> </a>

                  
                        </div>

                        <button type="button" style="margin-top:20px;" class="btn btn-sm px-3 font-size-13 header-item" id="vertical-menu-btn">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </button>

                       
                    </div>
					
                    <div class="d-flex">


     
                        
						
				

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $kbilgi["username"];?></span>
                            </button>
							
							
                            <div class="dropdown-menu dropdown-menu-end">
                     <a class="dropdown-item" href="../index.php"><i class="font-size-16 align-middle me-1"></i> Siteyi Göster</a>
                                <a class="dropdown-item" href="logout.php"><i class="font-size-16 align-middle me-1"></i> Çıkış Yap</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="index.php">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Anasayfa</span>
                                </a>
                            </li>





							
							

							
							

                            <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="box"></i>
                                    <span data-key="t-ui-elements">PDF İşlemleri <span style="float:right;">  <i data-feather="plus"></i></span></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
									<li><a href="a-urunekle.php" data-key="t-lightbox">PDF Ekle</a></li>
                                    <li><a href="a-urunler.php" data-key="t-range-slider">PDF Listesi</a></li>
                                </ul>
                            </li>
							

							
							   
							
			
							
							
							
								             <li>
                                <a href="javascript: void(0);">
                                    <i data-feather="circle"></i>
                                    <span data-key="t-ui-elements">Kurumsal Sayfası<span style="float:right;">  <i data-feather="plus"></i></span></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
									<li><a href="kurumsal-ekle.php" data-key="t-lightbox">Sayfa Ekle</a></li>
                                    <li><a href="sayfalar.php" data-key="t-range-slider">Eklenen Sayfalar</a></li>
                                </ul>
                            </li>
							
							
												<?php


 $siparisler= $vt->query("select * from satilanurunler");
 $siparisler = $siparisler->rowCount();
 
 
 
 $basvuru= $vt->query("select * from basvuru");
 $basvuru = $basvuru->rowCount();
 
 $iletisim= $vt->query("select * from iletisim");
 $iletisim = $iletisim->rowCount();
 


 ?>


  
							
							


							
   
        <li>
                                <a href="iletisim.php">
                                    <i data-feather="send"></i>
                                    <span data-key="t-horizontal">İletişim Forumları <span style="float:right;"> <?php  echo $iletisim; ?> </span></span>
                                </a>
                            </li>
							
							
							

							
							




						   
						         <li>
                                <a href="ayarlar.php">
                                    <i data-feather="settings"></i>
                                    <span data-key="t-horizontal">Genel Ayarlar</span>
                                </a>
                            </li>	


	


			
						   

							
                

                          

                        </ul>

                       
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
