@extends('layouts.app')

@section('content')


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scroll-wrapper scrollbar-inner" style="position: relative;">
    <div class="scrollbar-inner scroll-content scroll-scrolly_visible" style="height: auto; margin-bottom: -17px; margin-right: -17px; max-height: 616px;">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand">
          <img src="{{Storage::url($slide1)}}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->

        <div class="collapse navbar-collapse" id="sidenav-collapse-main">

          <!-- MENU LATERAL -->
          <ul class="navbar-nav">
              
            <li class="nav-item">
              <a class="nav-link active" href="#">
              <i class='bx bxs-message-alt-edit'></i>
                <span class="nav-link-text"> Informações</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class='bx bxs-user' ></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li> -->
          </ul>

        </div>

      </div>
    </div><div class="scroll-element scroll-x scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 0px;"></div></div></div><div class="scroll-element scroll-y scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="height: 483px; top: 0px;"></div></div></div></div>
  </nav>
        

    <div class="container">
        <div class="row justify-content-center">


            <div class="col-lg-11 col-md-11" style="margin-left: 250px;">

                <div class="col-lg-6 col-7" style="padding-left: 0px;">
                    <h6 class="h2 text-black d-inline-block mb-0" >Painel de Informações</h6>
                    <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                        </ol>
                    </nav> -->
                </div>

          
                <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Topo 1</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Menu</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Slide</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">Rodapé Slide</a>
                            </li>

                            <li class="nav-item">
                                <a  class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">Quem Somos</a>
                            </li>

                            <li class="nav-item">
                                <a style="background-color: #1111;" class="nav-link  mb-sm-3 mb-md-0" id="tabs-icons-text-6-tab" data-toggle="modal" data-target="#exampleModal" data-toggle="tab" href="#tabs-icons-text-6" role="tab" aria-controls="tabs-icons-text-6" aria-selected="false" >
                                    Áreas de Atuação
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">Associados</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-8-tab" data-toggle="tab" href="#tabs-icons-text-8" role="tab" aria-controls="tabs-icons-text-8" aria-selected="false">Receita</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-9-tab" data-toggle="tab" href="#tabs-icons-text-9" role="tab" aria-controls="tabs-icons-text-9" aria-selected="false">Rodapé</a>
                            </li>
                        </ul>
                </div>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body" style="text-align: center;">
          <h1>EM CONSTRUÇÃO</h1>
      </div>
      <div class="modal-footer" style="margin: auto;">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- MODAL -->
            
                <!-- TABELA DE INFO -->
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">

                                <!-- PAINEL 1 -->
                                <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <form action="{{route('topo1')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Telefone</label>
                                                <input name="telefone" value="{{$telefone}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">WhatsApp</label>
                                                <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">E-mail</label>
                                                <input name="email" value="{{$email}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Instagram</label>
                                                <input name="instagram" value="{{$instagram}}" type="text" class="form-control">
                                            </div>
                                            
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Facebook</label>
                                                <input name="facebook" value="{{$facebook}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6" style="margin-top: 30px; margin-bottom: 30px;">
                                                <label class="form-control-label" for="basic-url">Sistema Boleto</label>
                                                <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                            </div>

                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="subimt">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 2 -->
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Menu 1</label>
                                                <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Menu 2</label>
                                                <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Menu 3</label>
                                                <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Menu 4</label>
                                                <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                            </div>

                                    
                                            <div class="description col-md-6" >
                                                <label class="form-control-label" for="basic-url">Logo Menu</label>
                                                <input name="logo1" type="file" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <img style="width: 30%; margin-top: 15px; "  src="{{Storage::url($logo1)}}" alt="">
                                            </div>

                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 3 -->
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                    <form action="{{route('slide')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Slide 1</label>
                                                <input name="slide1" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide1)}}" alt="">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Slide 2</label>
                                                <input name="slide2" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide2)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Slide 3</label>
                                                <input name="slide3" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($slide3)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                            </div>

                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 4 -->
                                <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                    <form action="{{route('rodapeslide')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Descrição 1</label>
                                                <input name="rodapeslide4" value="{{$rodapeslide4}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Logo 1</label>
                                                <input name="rodapeslide1" type="file" class="form-control">
                                                <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Descrição 2</label>
                                                <input name="rodapeslide5"  type="text" class="form-control" value="{{$rodapeslide5}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Logo 2</label>
                                                <input name="rodapeslide2" type="file" class="form-control">
                                                <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide2)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Descrição 3</label>
                                                <input name="rodapeslide6"  type="text" class="form-control" value="{{$rodapeslide6}}">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Logo 3</label>
                                                <input name="rodapeslide3" type="file" class="form-control">
                                                <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide3)}}" alt="">
                                            </div>
                            
                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 5 -->
                                <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                                    <form action="{{route('menu')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                    
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Imagem</label>
                                                <input name="menu1" type="file" class="form-control" placeholder="Logo">
                                            </div>

                                            <div class="description col-md-6">
                                                <img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($menu1)}}" alt="">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                <input style="margin-bottom: 20px;" name="menu2" value="{{$menu2}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                <input style="margin-bottom: 20px;" name="menu3" value="{{$menu3}}" type="text" class="form-control" >
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Texto</label>
                                                <input style="margin-bottom: 20px;" name="menu4" value="{{$menu4}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Botão</label>
                                                <input style="margin-bottom: 20px;" name="menu5" value="{{$menu5}}" type="text" class="form-control" >
                                            </div>

                            
                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 6 -->
                                <!-- <div class="tab-pane fade" id="tabs-icons-text-6" role="tabpanel" aria-labelledby="tabs-icons-text-6-tab">
                                    <div class="row">
                                        <div class="description col-md-6">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>

                                        <div class="description col-md-6">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>

                                        <div class="description col-md-6" style="margin-top: 30px;">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>

                                        <div class="description col-md-6" style="margin-top: 30px;">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>
                                        
                                        <div class="description col-md-6" style="margin-top: 30px;">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>

                                        <div class="description col-md-6" style="margin-top: 30px; margin-bottom: 30px;">
                                        <input type="text" class="form-control" placeholder="Default input">
                                        </div>

                                        <button class="btn btn-icon btn-primary" style="margin: auto;" type="button">
                                            <span class="btn-inner--text">Atualizar</span>
                                        </button>
                                    </div>
                                </div> -->

                                <!-- PAINEL 7 -->
                                <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-7-tab">
                                    <form action="{{route('associados')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 1</label>
                                                <input style="margin-top: 20px"  name="associados1" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados1)}}" alt="">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 2</label>
                                                <input style="margin-top: 20px"  name="associados2" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados2)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 3</label>
                                                <input style="margin-top: 20px"  name="associados3" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados3)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 4</label>
                                                <input style="margin-top: 20px"  name="associados4" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados4)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 5</label>
                                                <input style="margin-top: 20px"  name="associados5" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados5)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 6</label>
                                                <input style="margin-top: 20px"  name="associados6" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados6)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 7</label>
                                                <input style="margin-top: 20px"  name="associados7" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados7)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 8</label>
                                                <input style="margin-top: 20px"  name="associados8" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados8)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 9</label>
                                                <input style="margin-top: 20px"  name="associados9" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados9)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 10</label>
                                                <input style="margin-top: 20px"  name="associados10" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados10)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 11</label>
                                                <input style="margin-top: 20px"  name="associados11" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados11)}}" alt="">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Parceiro 12</label>
                                                <input style="margin-top: 20px"  name="associados12" type="file" class="form-control">
                                                <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados12)}}" alt="">
                                            </div>

                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 8 -->
                                <div class="tab-pane fade" id="tabs-icons-text-8" role="tabpanel" aria-labelledby="tabs-icons-text-8-tab">
                                    <form action="{{route('receita')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                <input style="margin-bottom: 20px;" name="receita1" value="{{$receita1}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 1.2</label>
                                                <input style="margin-bottom: 20px;" name="receita2" value="{{$receita2}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                <input style="margin-bottom: 20px;" name="receita3" value="{{$receita3}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 2.1</label>
                                                <input style="margin-bottom: 20px;" name="receita4" value="{{$receita4}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Texto</label>
                                                <input style="margin-bottom: 20px;" name="receita5" value="{{$receita5}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                <input style="margin-bottom: 20px;" name="receita6" value="{{$receita6}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 4</label>
                                                <input style="margin-bottom: 20px;" name="receita7" value="{{$receita7}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Botão</label>
                                                <input style="margin-bottom: 20px;" name="receita8" value="{{$receita8}}" type="text" class="form-control" >
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Imagem</label>
                                                <input style="margin-top: 20px"  name="receita9" type="file" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <img style="width: 40%; margin-top: 15px;"  src="{{Storage::url($receita9)}}" alt="">
                                            </div>
                                          
                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- PAINEL 9 -->
                                <div class="tab-pane fade" id="tabs-icons-text-9" role="tabpanel" aria-labelledby="tabs-icons-text-9-tab">
                                    <form action="{{route('footer')}}" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                        @csrf
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Facebook</label>
                                                <input style="margin-bottom: 20px;" name="footer1" value="{{$footer1}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Instagram</label>
                                                <input style="margin-bottom: 20px;" name="footer2" value="{{$footer2}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Twitter</label>
                                                <input style="margin-bottom: 20px;" name="footer3" value="{{$footer3}}" type="text" class="form-control" >
                                            </div>
                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Skype</label>
                                                <input style="margin-bottom: 20px;" name="footer4" value="{{$footer4}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">LinkedIn</label>
                                                <input style="margin-bottom: 20px;" name="footer5" value="{{$footer5}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">youtube</label>
                                                <input style="margin-bottom: 20px;" name="footer6" value="{{$footer6}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Cnpj</label>
                                                <input style="margin-bottom: 20px;" name="footer7" value="{{$footer7}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                <input style="margin-bottom: 20px;" name="footer8" value="{{$footer8}}" type="text" class="form-control" >
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 2</label>
                                                <input style="margin-bottom: 20px;" name="footer9" value="{{$footer9}}" type="text" class="form-control">
                                            </div>

                                           <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 3</label>
                                                <input style="margin-bottom: 20px;" name="footer10" value="{{$footer10}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 4</label>
                                                <input style="margin-bottom: 20px;" name="footer11" value="{{$footer11}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Titulo 5</label>
                                                <input style="margin-bottom: 20px;" name="footer12" value="{{$footer12}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <label class="form-control-label" for="basic-url">Logo</label>
                                                <input style=""  name="footer13" type="file" class="form-control">
                                            </div>

                                            <div class="description col-md-6">
                                                <img style="background: black; width: 40%; margin-top: 15px;"  src="{{Storage::url($footer13)}}" alt="">
                                            </div>
                                          
                                        <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                            <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                <span class="btn-inner--text">Atualizar</span>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                <!-- END TABELA DE INFO -->

                    <div class="card">
                        <div class="card-header">Início</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="accordion" id="accordionExample">

                                <!-- TOPO 1 -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            TOPO 1
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('topo1')}}" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col">
                                                        <input name="telefone" value="{{$telefone}}" type="text" class="form-control" placeholder="Telefone">
                                                    </div>
                                                    <div class="col">
                                                        <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control" placeholder="WhatsApp">
                                                    </div>
                                                </div>

                                                <div class="container row">
                                                    <div class="col">
                                                    <input name="email" value="{{$email}}" type="text" class="form-control" placeholder="E-mail">
                                                    </div>
                                                    <div class="col">
                                                    <input name="instagram" value="{{$instagram}}" type="text" class="form-control" placeholder="Instagram">
                                                    </div>
                                                </div>

                                                <div class="container row">
                                                    <div class="col">
                                                    <input name="facebook" value="{{$facebook}}" type="text" class="form-control" placeholder="Facebook">
                                                    </div>
                                                    <div class="col">
                                                    <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- MENU -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            MENU
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row" style="margin-bottom: 30px;">
                                                        <div class="col">
                                                            <input name="logo1" type="file" class="form-control" placeholder="Logo">
                                                        </div>
                                                        <div class="col">
                                                            <!-- editar -->
                                                                <img style="width: 30%" src="{{Storage::url($logo1)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <!-- 2 MENU -->
                                                    <div class="container row" style="margin-bottom: 30px;">
                                                        <div class="col">
                                                            <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                                        </div>
                                                        <div class="col">
                                                            <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                                        </div>
                                                    </div>

                                                    <!-- 2 MENU -->
                                                    <div class="container row">
                                                        <div class="col">
                                                            <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                                        </div>
                                                        <div class="col">
                                                            <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                                        </div>
                                                    </div>


                                                    <div style="text-align: center; margin-top: 20px;"> 
                                                        <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            
                                <!-- SLIDE -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                            SLIDE
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('slide')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row">
                                                        <div class="col">
                                                            <input name="slide1" type="file" class="form-control" placeholder="Slide">
                                                        </div>
                                                        <div class="col">
                                                            <img style="width: 30%" src="{{Storage::url($slide1)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="container row">
                                                        <div class="col">
                                                        <input name="slide2"  type="file" class="form-control" placeholder="Slide">
                                                        </div>

                                                        <div class="col">
                                                        <img style="width: 30%" src="{{Storage::url($slide2)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="container row">
                                                        <div class="col">
                                                            <input name="slide3"  type="file" class="form-control" placeholder="Slide">
                                                        </div>

                                                        <div class="col">
                                                            <img style="width: 30%" src="{{Storage::url($slide3)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <div style="text-align: center; margin-top: 20px;"> 
                                                        <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- RODAPE SLIDE -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                            RODAPÉ SLIDE
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('rodapeslide')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row">
                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide1" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; width: 30%" src="{{Storage::url($rodapeslide1)}}" alt="">
                                                        </div>

                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide2" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; width: 30%" src="{{Storage::url($rodapeslide2)}}" alt="">
                                                        </div>

                                                        <div class="col" style="text-align: center;">
                                                            <input name="rodapeslide3" type="file" class="form-control" placeholder="Slide">
                                                            <img style="background: black; text-align: center; width: 30% " src="{{Storage::url($rodapeslide3)}}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="container row" style="margin-top: 30px">
                                                        <div class="col">
                                                            <input name="rodapeslide4" value="{{$rodapeslide4}}" type="text" class="form-control">
                                                        </div>

                                                        <div class="col">
                                                            <input name="rodapeslide5" value="{{$rodapeslide5}}" type="text" class="form-control">
                                                        </div>

                                                        <div class="col">
                                                            <input name="rodapeslide6" value="{{$rodapeslide6}}" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div style="text-align: center; margin-top: 20px;"> 
                                                        <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card" style="margin-top: 50px;  ">
                        <div class="card-header">Secções do Menu</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="accordion" id="accordionExample">

                                <!-- QUEM SOMOS -->
                                <div class="card">
                                    <div class="card-header" id="heading1">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                            QUEM SOMOS
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('menu')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="menu1" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($menu1)}}" alt="">
                                                    </div>
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="menu2" value="{{$menu2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu3" value="{{$menu3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu4" value="{{$menu4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="menu5" value="{{$menu5}}" type="text" class="form-control" >
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- AREAS DE ATUAÇÃO -->
                                <div class="card">
                                    <div class="card-header" id="heading2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        ÁREAS DE ATUAÇÃO
                                        </button>
                                    </h2>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">

                                    <div class="card-body">
                                            <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row" style="margin-bottom: 30px;">
                                                    <div class="col">
                                                        <input name="logo1" type="file" class="form-control" placeholder="Logo">
                                                    </div>
                                                    <div class="col">
                                                            <img style="width: 30%" src="{{Storage::url($logo1)}}" alt="">
                                                    </div>
                                                </div>

                                                <div class="container row" style="margin-bottom: 30px;">
                                                    <div class="col">
                                                        <input name="logo2"  type="text" class="form-control" value="{{$logo2}}">
                                                    </div>
                                                    <div class="col">
                                                        <input name="logo3"  type="text" class="form-control" value="{{$logo3}}">
                                                    </div>
                                                </div>

                                                <div class="container row">
                                                    <div class="col">
                                                        <input name="logo4"  type="text" class="form-control" value="{{$logo4}}">
                                                    </div>
                                                    <div class="col">
                                                        <input name="logo5"  type="text" class="form-control" value="{{$logo5}}">
                                                    </div>
                                                </div>


                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- ASSOCIADOS -->
                                <div class="card">
                                    <div class="card-header" id="heading3">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            ASSOCIADOS
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                                        <!-- INPUTS -->
                                        <div class="card-body">
                                                <form action="{{route('associados')}}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="container row" >
                                                        <div class="col-lg-6" >
                                                            <input style="margin-top: 20px"  name="associados1" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados2" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados3" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados4" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados5" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados6" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados7" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados8" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados9" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados10" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados11" type="file" class="form-control">
                                                            <input style="margin-top: 20px"  name="associados12" type="file" class="form-control">

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados1)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados2)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados3)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados4)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados5)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados6)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados7)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados8)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados9)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados10)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados11)}}" alt=""> <br>
                                                            <img style="width: 22%; margin-top: 18px;" src="{{Storage::url($associados12)}}" alt=""> <br>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <input style="margin-top: 20px; margin-bottom: 20px;" name="associados13" value="{{$associados13}}" type="text" class="form-control" >
                                                            <input style="margin-bottom: 20px;" name="associados14" value="{{$associados14}}" type="text" class="form-control" >
                                                        </div>
                                                    </div>

                                                    <div style="text-align: center; margin-top: 20px;"> 
                                                        <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- RECEITA BTM -->
                                <div class="card">
                                    <div class="card-header" id="heading4">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                            RECEITAS BTM
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('receita')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="receita1" value="{{$receita1}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita2" value="{{$receita2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita3" value="{{$receita3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita4" value="{{$receita4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita5" value="{{$receita5}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita6" value="{{$receita6}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita7" value="{{$receita7}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="receita8" value="{{$receita8}}" type="text" class="form-control" >
                                                    </div>

                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="receita9" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($receita9)}}" alt="">
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- FOOTER -->
                                <div class="card">
                                    <div class="card-header" id="heading5">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                            BARRA DE CONTATO (FOOTER)
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('footer')}}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="container row">
                                                    <div class="col">
                                                        <input style="margin-bottom: 20px;" name="footer1" value="{{$footer1}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer2" value="{{$footer2}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer3" value="{{$footer3}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer4" value="{{$footer4}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer5" value="{{$footer5}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer6" value="{{$footer6}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer7" value="{{$footer7}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer8" value="{{$footer8}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer9" value="{{$footer9}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer10" value="{{$footer10}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer11" value="{{$footer11}}" type="text" class="form-control" >
                                                        <input style="margin-bottom: 20px;" name="footer12" value="{{$footer12}}" type="text" class="form-control" >

                                                    </div>

                                                    <div class="col" style="text-align: center; margin-bottom: 30px;">
                                                        <input name="footer13" type="file" class="form-control" placeholder="Logo">
                                                        <img style="width: 50%; margin-top: 10px;" src="{{Storage::url($footer13)}}" alt="">
                                                    </div>
                                                </div>

                                                <div style="text-align: center; margin-top: 20px;"> 
                                                    <button  type="submit" class=" btn btn-primary">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>           

                </div>


            </div>
        </div>
    </div>
@endsection