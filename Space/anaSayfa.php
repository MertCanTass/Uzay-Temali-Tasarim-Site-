<!DOCTYPE html>
<html>
        <head>
            <title>Uzay Bizim İşimiz</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script src="js/jquery-3.6.0.min.js" ></script> 
            <script type="text/javascript" src="js/popper.min.js"></script>
            <script src="js/uzay.js" ></script>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
            <script src="js/bootstrap.min.js" ></script>
            <link rel="stylesheet" type="text/css" href="css/stillerim.css">
            <link rel="stylesheet" type="text/css" href="resimler.css">
            
            
            <link rel="icon" href="Resimler/logo.png" type="image/x-icon"/>
            
             
        </head>
    <body>

        <div class="container">
            <div class="row border border-dark ">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #eee;">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="anaSayfa.html">
                                <img src="Resimler/logo.png" alt="" width="60" height="40" class="d-inline-block align-text-top">
                                Uzay Ve Araştırma Merkezi
                              </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Ana Sayfa</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="index3.php">Uzay</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Projelerimiz
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="index2.html">Uydu Projeleri</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Haberleşme Projeleri</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Bilimsel Araştırmalar</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Veri ve Görüntü İşleme Projeleri</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                              </li>
                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Search">
                              <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="row mt-5">
            <?php

                $db=new mysqli("localhost","root","","webproje2");
                mysqli_set_charset($db,"utf8");

                $sorgu="select * from anabolum";

                $sonuc=$db->query($sorgu);
                $kayitSayisi=$sonuc->num_rows;
                $kayit=$sonuc->fetch_assoc();  
               echo '<div class="col-6 col-md-12 col-xl-6 col-sm-12">';
                  echo  '<img src="'.$kayit["anaBolumResim"].'" alt="spacex" class="img-fluid" >';
              echo  '</div>';
               echo '<div class="col-6 iki-yana-hizala col-md-12 col-xl-6 col-sm-12">';
                 echo   '<p>'.$kayit["anaBolumAcıklama"].'</p>';
               echo '</div>';
            ?>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <h1>Duyurular</h1>
                </div>
            </div>
            <div class="row mt-5">
            <?php
            $db=new mysqli("localhost","root","","webproje2");
                mysqli_set_charset($db,"utf8");

                $sorgu="select * from duyurular";

                $sonuc=$db->query($sorgu);
                $kayitSayisi=$sonuc->num_rows;
                for($i=0; $i<$kayitSayisi; $i++) {
                    $kayit=$sonuc->fetch_assoc();  
                echo'<div class="col-4">';
                    echo'<div class="card1">';
                        echo'<div class="imgBx">';
                            echo'<img src="'.$kayit["duyuruResim"].'" alt="mars" class="img-fluid">';
                        echo'</div>';
                        echo'<div class="content">';
                            echo'<h2> '.$kayit["duyuruBaslik"].' </h2>';
                            echo'<p>'.$kayit["duyuruAciklama"].'</p>';
                       echo' </div>';
                    echo'</div>';
                    
                echo'</div>';
                }
                ?>
            </div>   
            <div class="row mt-2 ">
                <div class="col">
                    <h1>Başarılarımız</h1>
                </div>
            </div>
            <div class="row mt-2 ">
                <div class="col-7">
                <?php
                      $db=new mysqli("localhost","root","","webproje2");
                      mysqli_set_charset($db,"utf8");
      
                      $sorgu="select * from anabolum where anaBolumId=2";
                      $sonuc=$db->query($sorgu);
                      $kayitSayisi=$sonuc->num_rows;
                      $kayit=$sonuc->fetch_assoc();  

                   echo '<img src="'.$kayit["anaBolumResim"].'" alt="" class="img-fluid">';
                echo '</div>';
                echo '<div class="col-5 iki-yana-hizala">';
                   echo '<p>'.$kayit["anaBolumAcıklama"].'</p>';
                echo '</div>';
                ?>
            </div>
            
            <div class="row mt-2 border">
                <div class="col-12 border">
                    <div class="row border">
                        <?php
                        $db=new mysqli("localhost","root","","webproje2");
                        mysqli_set_charset($db,"utf8");
                        
                        $sorgu="select * from basarilar";
                        
                        $sonuc=$db->query($sorgu);
                        $kayitSayisi=$sonuc->num_rows;
                        for($i=0; $i<$kayitSayisi; $i++) {
                            $kayit=$sonuc->fetch_assoc();   
                        echo    '<div class="col-4 border mt-2">';
                        echo    '<div class="card">';
                        echo        '<img src="'.$kayit["resim"].'" class="card-img-top" alt="...">';
                        echo        '<div class="card-body">';
                        echo         ' <p class="card-text">'.$kayit["aciklama"].'</p>';
                        echo        '</div>';
                        echo      '</div>';
                        echo   '</div>';
                        }
                        ?>  
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                   <h1>Destekler/Hibeler</h1> 
                </div>
            </div>
            <div class="row mt-2">
            <?php
                        $db=new mysqli("localhost","root","","webproje2");
                        mysqli_set_charset($db,"utf8");

                        $sorgu="select * from destek";

                        $sonuc=$db->query($sorgu);
                        $kayitSayisi=$sonuc->num_rows;
                        for($i=0; $i<$kayitSayisi; $i++) {
                            $kayit=$sonuc->fetch_assoc();
                echo'<div class="col-4">';
                    echo'<div class="card h-100">';
                        echo'<img src="'.$kayit["destekResim"].'" class="card-img-top" alt="...">';
                        echo'<div class="card-body">';
                          echo'<h5 class="card-title">'.$kayit["destekBaslik"].'</h5>';
                          echo'<p class="card-text">'.$kayit["destekAcıklama"].'</p>';
                        echo'</div>';
                        echo'<ul class="list-group list-group-flush">';
                          echo'<li class="list-group-item">'.$kayit["destekBirinci"].'</li>';
                          echo'<li class="list-group-item">'.$kayit["destekIkıncı"].'</li>';
                          echo'<li class="list-group-item">'.$kayit["destekUcuncu"].'</li>';
                        echo'</ul>';
                        echo'<div class="card-body">';
                          echo'<a href="#" class="card-link">'.$kayit["destekLink"].'</a>';
                          echo'<a href="#" class="card-link">'.$kayit["DestekLinkIki"].'</a>';
                        echo'</div>';
                      echo'</div>';
                echo'</div>';
                 }
                ?>
            </div>
           
            <div class="row mt-4">
                <div class="col-12  ">
                    <div class="row">
                        <div class="col-3 text-black">
                             <h4>HIZLI BAĞLANTILAR</h4>
                             <div class="col-12"><a href="nav-link">İnsan Kaynakları</a></div>
                             <div class="col-12"><a href="nav-link">Gizlilik Politikası</a></div>
                             <div class="col-12"><a href="nav-link">Site Haritası</a></div>
                             
        
                        </div>
                        <div class="col-3 text-black">
                             <h4>MÜŞTERİ HİZMETLERİ</h4>
                             <div class="col-12"><a href="nav-link">İnsan Kaynakları</a></div>
                             <div class="col-12"><a href="nav-link">Gizlilik Politikası</a></div>
                             <div class="col-12"><a href="nav-link">Tüm Kategoriler</a></div>
        
                        </div>
                        <div class="col-3 text-black">
                             <h4>E-BÜLTEN ABONELİĞİ</h4>
                             <div class="col-12">
                                     <h6> Duyurular ile ilgili elektronik posta almak istermisiniz?</h6>
        
                                      <h5>E-mail</h5>
                                     <div class="col-12"><input type="text" class="form-control"></div> 
                                     <div class="col-3"><button class="btn btn-info">Kaydet</button></div>
                             </div>		
                        </div>
        
                        <div class="col-3 text-black">
                            <h4>İletişim</h4>
                            <div class="row p-1">
                                <div class="col-12">
                                    <div class="row p-1">
                                        <div class="col-auto text-center">
                                            <img src="resimler/iletisim/konum.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            NewYork/United States
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row p-1">
                                        <div class="col-auto text-center">
                                            <img src="resimler/iletisim/epost.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            Spacr@gmail.com
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row p-1">
                                        <div class="col-auto text-center">
                                            <img src="resimler/iletisim/tel.jpg" class="img-fluid">
                                        </div>
                                        <div class="col-9">
                                            +1 255 252 66 99
                                        </div>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <div class="footer-social-links">
                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                      </div>
                </div>
            </div>

            

           
        </div>


    </body>


</html>