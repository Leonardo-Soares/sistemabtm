@extends('layouts.head')

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
        <img src="{{ $logo1 }}"  alt="ogo btm distribuidora">
      </a>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="#section1">{{$logo2}}</a></li>
          <li><a href="" data-toggle="modal" data-target="#construcao">{{$logo3}}</a></li>
          <li><a href="#parceiros">{{$logo4}}</a></li>
          <li><a href="#receita">{{$logo6}}</a></li>
          <li><a href="" data-toggle="modal" data-target="#construcao">{{$logo5}}</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End MENU -->

  {{-- CARROSEL WEB --}}
  <span class="carrousel-web">
    <section id="hero" class="hero d-flex align-items-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="titulo-carrosel">
              <h1> {{$slide1titulo1}} <b> {{$slide1titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide1titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide1titulo4}} </span> </h1>
            </div>
            <img src="{{$slide1}}" class="d-block w-100 h-100" alt="btm distribuidora">
          </div>

          <div class="carousel-item">
            <div class="titulo-carrosel">
              <h1> {{$slide2titulo1}} <b> {{$slide2titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide2titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide2titulo4}} </span> </h1>
            </div>
            <img src=" {{$slide2}} " class="d-block w-100" alt="btm distribuidora">
          </div>

          <div class="carousel-item">
            <div class="titulo-carrosel">
              <h1> {{$slide3titulo1}} <b> {{$slide3titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide3titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide3titulo4}} </span> </h1>
            </div>
            <img src=" {{ $slide2 }} " class="d-block w-100" alt="btm distribuidora">
          </div>

        </div>
        <button class="carousel-control-prev next-carrosel" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="icofont-circled-left"></i></span>
          <span class="sr-only">Anterior</span>
        </button>
        <button class="carousel-control-next next-carrosel mr-2" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="icofont-circled-right"></i></span>
          <span class="sr-only">Proxímo</span>
        </button>
      </div>
    </section>
  </span>

  {{-- CARROSEL MOBILE --}}
  <span class="carrousel-mobile">
    <section id="hero" class="hero d-flex align-items-center">
      <div id="carroselmobile" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="titulo-carrosel">
              <h1> {{$slide1titulo1}} <b> {{$slide1titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide1titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide1titulo4}} </span> </h1>
            </div>
            <img src=" {{ $mobileslide1 }} " class="img-fluid" alt="btm distribuidora">
          </div>
          <div class="carousel-item">
            <div class="titulo-carrosel">
              <h1> {{$slide1titulo1}} <b> {{$slide1titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide1titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide1titulo4}} </span> </h1>
            </div>
            <img src=" {{ $mobileslide2 }} " class="img-fluid" alt="...">
          </div>
          <div class="carousel-item">
            <div class="titulo-carrosel">
              <h1> {{$slide1titulo1}} <b> {{$slide1titulo2}} </b> </h1>
            </div>
            <div class="titulo-carrosel-segundo">
              <h1> <b> {{$slide1titulo3}}</b> <span style="color:rgb(241, 248, 12)"> {{$slide1titulo4}} </span> </h1>
            </div>
            <img src=" {{ $mobileslide3 }} " class="img-fluid" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev next-carrosel" type="button" data-target="#carroselmobile" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="icofont-circled-left"></i></span>
          <span class="sr-only">Anterior</span>
        </button>
        <button class="carousel-control-next next-carrosel mr-2" type="button" data-target="#carroselmobile" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="icofont-circled-right"></i></span>
          <span class="sr-only">Proxímo</span>
        </button>
      </div>
    </section>
  </span>

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
                  <img class="icones-svg"  src="{{ $rodapeslide1 }}" alt="">
                </div>
              </div>
              <div class="col-lg-10 ropae-slide">
                <h4 class="title" style="color: #fff;"> {{$rodapeslide4}} </h4>
              </div>

          </div>

          <div class="section-icons1 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >
            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{ $rodapeslide2 }}" alt="">
              </div>
            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide5}} </h4>
            </div>
          </div>

          <div class="section-icons2 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >
            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{ $rodapeslide3 }}" alt="">
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
            <img src="{{ $menu1 }}" class="img-fluid" alt="">
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
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: rgb(0, 0, 0)"> </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados1 }}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados2 }}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados3 }}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados4 }}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados5 }}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados6 }}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados7 }}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados8 }}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados9 }}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados10 }}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados11 }}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{ $associados12 }}" class="card-img-top " alt="...">
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
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
          style="margin-top:  25px; margin-bottom: 50px;">

          <ol class="carousel-indicators" style="bottom: -60px;">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active" style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="3" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="4" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="5" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="6" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="7" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="8" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="9" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="10" style="background-color: rgb(0, 0, 0)"> </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="11" style="background-color: rgb(0, 0, 0)"> </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active" >
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados1 }}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>


            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados2 }}"
                    class="card-img-top" alt="...">

                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados3 }}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados4 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados5 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados6 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados7 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados8 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados9 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados10 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados11 }}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{ $associados12 }}"
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
              <img src="{{ $receita9 }}" style="margin: auto;" class="img-fluid" alt="">
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
          <div class="elfsight-app-7d92ceb8-f5b9-4169-8cc4-ea49f320e79d"></div>

        </div>
      </div>
    </section>
    <!-- FIM CARROSEL SOCIAL WEB -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @extends('layouts.footer')
  <!-- End Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

  @extends('layouts.scripts')

</body>

</html>
