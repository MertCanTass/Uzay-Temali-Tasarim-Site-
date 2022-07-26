<!DOCTYPE html>
<html>
    <head>
        <title> Uydu Projelerimiz</title>
        <meta charset="utf-8">
        
        <script src="js/jquery-3.6.0.min.js" ></script> 
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/stillerim.css">
        <link rel="stylesheet" type="text/css" href="resimler.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="icon" href="Resimler/logo.png" type="image/x-icon"/>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                i=0;
                $(".parca1").hide();
                $(".parca2").hide();
                $(".parca3").hide();
                $(".parca4").hide();
         
                
                 $("body").animate({scrollTop:0},100);
         
                 $(window).scroll(function() { 
                         
                     if( (window.innerHeight + window.scrollY) >= document.body.scrollHeight )
                         {	
                             i=i+1;
                            if (i==1){ 
                                        //$(".parca31").show("slide",{direction:"up"},1000);
                                        //$(".parca32").show("slide",{direction:"down"},1000);
                                        $(".parca1").fadeIn(2000);
                                        $(".parca2").fadeIn(2000);
                              }			
                            if (i==2){ 
                                        $(".parca3").fadeIn(2000);
                                        $(".parca4").fadeIn(2000);
                               }
                         }
                 });
             });
             </script>
    </head>

    <body>
        <div class="container">
            <div class="row border border-dark">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                <a class="nav-link" href="#">İletişim</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Projelerimiz
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="#">Uydu Projeleri</a></li>
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
            <div class="row mt-2">
                <div class="col">
                    <h1>Uydu Projelerimiz</h1>
                </div>
            </div>
            <div class="row mt-2 ">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active  data-bs-interval="3000">
                            <img src="Resimler/bannr.png" class="d-block w-100" alt="SS">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item  data-bs-interval="3000">
                            <img src="Resimler/bannr2.jpg" class="d-block w-100" alt="SS">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item  data-bs-interval="3000">
                            <img src="Resimler/bannr.png" class="d-block w-100" alt="SS">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div> 
            <div class="row mt-2 row-cols-1 row-cols-md-2 g-4 ">
            <?php
                    $db=new mysqli("localhost","root","","webproje2");
                    mysqli_set_charset($db,"utf8");
                    $sorgu="select * from cards ";
                    $sonuc=$db->query($sorgu);
                    $kayitSayisi=$sonuc->num_rows;
                    for($i=0; $i<$kayitSayisi; $i++) {
                        $kayit=$sonuc->fetch_assoc();  
                        echo'<div class="col">';
                          echo'<div class="card">';
                            echo'<img src="'.$kayit["cardResim"].'"class="card-img-top img-fluid" alt="...">';
                            echo'<div class="card-body">';
                              echo'<h5 class="card-title">'.$kayit["cardBaslik"].'</h5>';
                              echo'<p class="card-text">'.$kayit["cardAcıklama"].'</p>';
                            echo'</div>';
                          echo'</div>';
                        echo'</div>';
            }
            ?>
                        
            </div>
            
            
            <div class="row mt-2 ">
                <div class="col-12">
                    <div class="card text-center">
                        <div class="card-header">
                          Fotoğraf Albümü
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Uydularımızın Çektiği Fotoğrafları Görmek İçin Tıklayın</h5>
                          <br> </br>
                          <a href="index.html" class="btn btn-primary">Şimdi Git</a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row mt-2 ">
                <div class="col-12  border border-dark ">
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
                                            <img src="resimler/iletisim/eposta.jpg" class="img-fluid">
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
            <div class="row ">
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

            
            
           
    </body>
</html>