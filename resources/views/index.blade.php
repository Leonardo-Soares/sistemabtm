<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Btm - Distribuidora</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= MENU CONTATO ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
      </div>
      <div class="social-links">
        <a class="twitter"><i class="icofont-phone"></i> {{$telefone}} </a>
        <a target="__blanck" href="" class="facebook"><i class="icofont-whatsapp"></i> {{$whatsapp}}</a>
        <a href="mailto:{{$email}}" class="facebook"><i class="icofont-envelope"></i> {{$email}} </a>
        <a target="__blanck" href="{{$instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="__blanck" href="{{$facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="__blanck" href="https://banco.bradesco/html/classic/produtos-servicos/mais-produtos-servicos/segunda-via-boleto.shtm" class="facebook" style="color: rgb(241, 248, 12);">{{$boleto}}</a>
      </div>
    </div>
  </div>
  <!-- ======= END MENU CONTATO ======= -->

  <!-- ======= MENU ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="#" class="logo mr-auto">
        <img src="{{Storage::url($logo1)}}"  alt="">
      </a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="#section1">{{$logo2}}</a></li>
          <li><a href="" data-toggle="modal" data-target="#construcao">{{$logo3}}</a></li>
          <li><a href="#parceiros">{{$logo4}}</a></li>
          <li><a href="#receita">RECEITAS</a></li>
          <li><a href="" data-toggle="modal" data-target="#construcao">{{$logo5}}</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End MENU -->

  <!-- INICIO -->
  <section id="hero" class="hero d-flex align-items-center" style="padding: 0px; background: url({{Storage::url($slide2)}}) top left">
    <div class="container">
      <div class="row">

        <div class="div-img1 col-md-12">
          <h1 id="txt-mobile1" data-aos="fade-up" class="aos-init aos-animate">
            {{$slide4}} <b> {{$slide5}} <br> {{$slide6}} </b> {{$slide7}} <span> {{$slide8}} </span>
          </h1>
        </div>

        <div class="div-img2 col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center">

          <h1 id="txt-web1" data-aos="fade-up" class="aos-init aos-animate">
            {{$slide4}} <b> {{$slide5}} <br> {{$slide6}} </b> {{$slide7}} <span> {{$slide8}} </span>
          </h1>

          <img id="img2" src="{{Storage::url($slide1)}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
          <img id="img1" src="{{Storage::url($slide3)}}" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
  <!-- FIM INICIO -->

  <main id="main">

    <!-- MODAL -->
    <div class="modal fade" id="construcao" tabindex="-1" aria-labelledby="construcaoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body" style="text-align: center;">
            <h1>EM CONSTRUÇÃO</h1>
          </div>
          <div class="modal-footer" > 
            <button style="margin: auto;" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL -->

    <!-- ======= RODAPÉ SLIDE ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">
        <div class="row">
          <div class="section-icons1 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0">
              <div class="col-lg-3">
                <div class="icon" style="text-align: center;">
                  <img class="icones-svg"  src="{{Storage::url($rodapeslide1)}}" alt="">
                </div>
              </div>
              <div class="col-lg-10 ropae-slide">
                <h4 class="title" style="color: #fff;"> {{$rodapeslide4}} </h4>
              </div>

          </div>

          <div class="section-icons1 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >
            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{Storage::url($rodapeslide2)}}" alt="">
              </div>
            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide5}} </h4>
            </div>
          </div>

          <div class="section-icons2 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >
            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{Storage::url($rodapeslide3)}}" alt="">
              </div>
            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide6}} </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FIM RODAPÉ SLIDE  -->

    <!-- ======= BEM VINDO  ======= -->
    <section id="section1" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{Storage::url($menu1)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3 style="text-transform: uppercase; padding-left: 25px;">
              {{$menu2}} <br>
              <span style="color: rgb(66, 164, 177);"> {{$menu3}} </h3></span>
            </h3>
            <p style="padding-left: 25px;">
              {{$menu4}}
            </p>
            <button type="button" class="btn  btn-inicio"> {{$menu5}} </button>
          </div>
        </div>

      </div>
    </section>
    <!-- FIM BEM VINDO  -->


    <!-- CARROSEL PARCEIROS WEB -->
    <section class="about layout-web" id="parceiros" style="background-color: rgb(221, 221, 221);">
      <div class="container aos-init aos-animate" data-aos="fade-up" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
          style="margin-top:  25px; margin-bottom: 25px;">

          <ol class="carousel-indicators" style="bottom: -60px;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
              style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: rgb(0, 0, 0)">
            </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados1)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados2)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados3)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados4)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados5)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados6)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados7)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados8)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados9)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados10)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados11)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados12)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- FIM CARROSEL PARCEIROS WEB -->

    <!-- CARROSEL PARCEIROS MOBILE -->
    <section class="about layout-mobile-pacreiros"  id="parceiros" style="background-color: rgb(221, 221, 221);">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
          style="margin-top:  25px; margin-bottom: 50px;">

          <ol class="carousel-indicators" style="bottom: -60px;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
              style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" style="background-color: rgb(0, 0, 0)">
            </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados1)}}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados2)}}"
                    class="card-img-top" alt="...">

                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados3)}}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados4)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados5)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados6)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados7)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados8)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados9)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados10)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados11)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados12)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->

          </div>

        </div>
      </div>
    </section>
    <!-- FIM CARROSEL PARCEIROS MOBILE -->


    <!-- ======= RECEITA ======= -->
    <section id="receita" class="about">
      <div class="container" data-aos="fade-up">

        <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
        {{$receita1}} <span style="font-weight: bold;"> {{$receita2}} </span>
        </h1>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3 style="text-transform: uppercase; padding-left: 25px;"> {{$receita3}}
              <span style="color: rgb(66, 164, 177);"> {{$receita4}} </h3></span>
            </h3>
            
            <p style="padding-left: 25px;">
              {{$receita5}}
            </p>
            <h5 class="titulo-receita">{{$receita6}}</h5>
            <h5 class="titulo-receita">{{$receita7}}</h5>
            <button type="button" class="btn btn-receita">{{$receita8}}</button>

          </div>
          <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-out" data-aos-delay="100" style="text-align: center; margin-top: 30px;">
            <img src="{{Storage::url($receita9)}}" style="margin: auto;" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- FIM RECEITA -->



    <!-- CARROSEL SOCIAL WEB-->
    <section id="instagram" class="about layout-web2" style="background-color: rgb(197, 228, 233);">
      <div class="container aos-init aos-animate " data-aos="fade-up">
        <div id="carouselExampleIndicators2" class=" carousel slide" data-ride="carousel" style="margin-bottom: 25px; margin-top: 25px;">

          <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">Feed do <span style="font-weight: bold;">Instagram</span></h1>
          <div class="elfsight-app-5afc8908-93fd-496d-8d25-e867b8e499f3"></div>    

        </div>
      </div>
    </section>
    <!-- FIM CARROSEL SOCIAL WEB -->

    <!-- CARROSEL SOCIAL MOBILE -->
    <!-- <section class="about layout-mobile-social" style="background-color: rgb(197, 228, 233);">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
          style="margin-bottom: 45px; margin-top: 25px;">

          <ol class="carousel-indicators" style="bottom: -55px;">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" style="background-color: rgb(0, 0, 0);"
              class="active">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color: rgb(0, 0, 0);">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2" style="background-color: rgb(0, 0, 0);">
            </li>
          </ol>

          <div class="carousel-inner">

            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              Feed do <span style="font-weight: bold;">Instagram</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta1.png" class="card-img-top"
                    alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta2.png" class="card-img-top"
                    alt="...">
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta3.png" class="card-img-top"
                    alt="...">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- FIM CARROSEL SOCIAL MOBILE -->




    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Check our <span>Pricing</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact" style="text-align: center;">
            <img src="{{Storage::url($footer13)}}" style="width: 200px;" alt="">
            <div class="social-links mt-3">
            {!!$footer1 == '' ? '' :"<a target='_blank' href='$footer1' class='facebook'><i style='font-size: 30px;' class='bx bxl-facebook'></i></a>"!!}
            {!!$footer2 == '' ? '' :"<a target='_blank' href='$footer2' class='instagram'><i style='font-size: 30px;' class='bx bxl-instagram'></i></a>"!!}
            {!!$footer3 == '' ? '' :"<a target='_blank' href='$footer3' class='twitter'><i style='font-size: 30px;' class='bx bxl-twitter'></i></a>"!!}
            {!!$footer4 == '' ? '' :"<a target='_blank' href='$footer4' class='google-plus'><i style='font-size: 30px;' class='bx bxl-skype'></i></a>"!!}
            {!!$footer5 == '' ? '' :"<a target='_blank' href='$footer5' class='linkedin'><i style='font-size: 30px;' class='bx bxl-linkedin'></i></a>"!!}
            {!!$footer6 == '' ? '' :"<a target='_blank' href='$footer6' class='linkedin'><i style='font-size: 30px;' class='bx bxl-youtube'></i></a>"!!}
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <div class="descircao-contato">
              <p> {{$footer7}} </p>
              <p> {{$footer8}} <br>
              {{$footer9}} </p>
              <p> {{$footer10}} <br>
              {{$footer11}} <br>
              {{$footer12}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 footer-links">        
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              @if (!empty($message))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                  </div>
              @endif


            <form method="POST" action="{{url('sendmail/send')}}">
              @csrf
              <div class="form-group">
                <input class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" placeholder="Nome">
              </div>
              <div class="form-group">
                <input class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" type="email" placeholder="E-mail">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Mensagem" rows="3"></textarea>
              </div>
              <div class="submit-form">
                <button type="submit" class="btn btn-form">Enviar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- INSTAGRAM -->
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
</body>

</html>