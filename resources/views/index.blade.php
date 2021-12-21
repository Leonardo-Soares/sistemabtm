<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Btm - Distribuidora</title>
  <meta content="Btm - Distribuidora" name="description">
  <meta content="Btm - Distribuidora" name="keywords">

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
        <a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$linkwhatsapp}}" class="facebook"><i class="icofont-whatsapp"></i> {{$whatsapp}} </a>
        <a href="mailto:{{$email}}" class="facebook"><i class="icofont-envelope"></i> {{$email}} </a>
        <a target="_blank" href="{{$instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="_blank" href="{{$facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a target="_blank" href="https://banco.bradesco/html/classic/produtos-servicos/mais-produtos-servicos/segunda-via-boleto.shtm" class="facebook" style="color: rgb(241, 248, 12);">{{$boleto}}</a>
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
            {{-- <button type="button" class="btn  btn-inicio"> {{$menu5}} </button> --}}
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

        <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; "> {{$receita1}} <span style="font-weight: bold;"> {{$receita2}} </span> </h1>

          
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-top" data-aos="fade-up"  data-aos-delay="100">
              <h3 style="text-transform: uppercase; padding-left: 25px;">  {{$receita3}} <span style="color: rgb(66, 164, 177);"> {{$receita4}} </h3></span> </h3>

              <h5 class="titulo-receita"> {{$receita7}} </h5>
              <p style="padding-left: 25px;"> {{$receita5}} </p>

              <h5 class="titulo-receita"> {{$receita6}} </h5>
              <p style="padding-left: 25px;"> {{$receita10}} </p>

              <div class="col-12 mt-3 mb-2 ">
                <a target="_blank" href="{{$receita11}}">
                  <button type="button" class="btn btn-receita">{{$receita8}}</button>
                </a>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 content d-flex flex-column justify-content-center" data-aos="zoom-out" data-aos-delay="100">
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