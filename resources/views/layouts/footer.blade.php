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