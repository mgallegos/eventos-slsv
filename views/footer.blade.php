  <footer class="text-center" role="contentinfo">


  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  <div class="container clearfix">
    <!-- <div class="col-lg-12 col-md-12"> -->
      <div class="row">

        <div class="col-md-6">
          <div class="card footer-card-background" style="border:none;">
            <div class="card-block" style="padding: 1.25em 0 !important">
              <h4 class="card-title-footer">Lista de Correo</h4>
              <p class="card-text-footer" style="text-align:justify;">Entérate de todos los eventos que organiza nuestra comunidad.</p>
              {!! Form::open(array('id' => 'ob-fa-form', 'url' => URL::to('cms/eventos-slsv/cliente'), 'role' => 'form', 'onsubmit' => 'return false;')) !!}
                <div class="form-group cs-ac">
                  {!! Form::text('ob-fa-name', null , array('id' => 'ob-fa-name', 'class' => 'form-control',  'placeholder'  =>  'Nombre', 'data-mg-required' => '')) !!}
                </div>
                <div class="form-group cs-ac">
                  {!! Form::text('ob-fa-surname', null , array('id' => 'ob-fa-surname', 'class' => 'form-control',  'placeholder'  =>  'Apellido', 'data-mg-required' => '')) !!}
                </div>
                <div class="form-group cs-ac">
                  {!! Form::text('ob-fa-email', null , array('id' => 'ob-fa-email', 'class' => 'form-control',  'placeholder'  =>  'Correo electrónico',  'data-mg-required' => '')) !!}
                </div>
                <!-- <div class="form-group cs-ac">
                  {!! Form::date('ob-fa-date-birth', array('class' => 'form-control', 'data-mg-required' => '', 'placeholder' => 'Fecha de nacimiento dd/mm/yy')) !!}
                </div> -->
                  <!-- <p class="help-block" style="color:#FFFFFF; margin-bottom:20px">**Todos los campos son requeridos**</p> -->
              {!! Form::close() !!}
              <button id="ob-fa-btn" class="btn btn-dark btn-footer-suscribe" type="submit">¡ S u s c r í b e m e !</button>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card footer-card-background" style="border:none;">
            <div class="card-block" style="padding-top: 1.25em;padding-bottom:0">
              <div class="row">
                <div class= "col-lg-12 col-lg-12">
                  <div class="card-text-footer" style="text-align: left">
                    <p>
                      <a class="fa fa-envelope-o footer-icon-color"  style"display: inline-block; line-height: 5px; color:#FFFFFF" href="mailto:info@eventos-slsv.com" target="_blank"></a>
                      <a href="mailto:info@slsv.org" class="obs-social-link" style="font-size: 1.5em">info@slsv.org</a>
                    </p>
                    <p>
                      <a class="fa fa-facebook-official footer-icon-color"  style"display: inline-block; line-height: 5px;" href="http://fb.me/SylvannaMonG/" target="_blank"></a>
                      <a href="https://www.facebook.com/slsv.org"  class="obs-social-link" target="_blank" style="font-size: 1.5em">@slsv.org</a>
                    </p>
                    <p>
                      <a class="fa fa-twitter footer-icon-color" style"display: inline-block; line-height: 5px;"  href="https://twitter.com/slsv_org" target="_blank"></a>
                      <a href="https://www.instagram.com/dressed.to.chill"  class="obs-social-link" target="_blank" style="font-size: 1.5em">@slsv_org</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card footer-card-background" style="border:none;">
              <div class="card-block" style="padding-bottom:0; padding-top:0">
                <p class="card-text-footer" style="text-align: justify;">
                  La Comunidad Salvadoreña de Software Libre está conformada por comunidades y personas que apoyan la difusión, utilización y desarrollo de Software Libre en El Salvador, con la convicción de que la libertad informática es una manera de ampliar el acceso y la difusión del conocimiento en nuestro país.
                </p>
                <!-- <p class="card-text-footer"><a class="fake-link obs-footer-link" style="text-decoration:underline;" data-toggle="modal" data-target="#obs-terminosycondiciones">Ver términos y condiciones</a></p> -->
                <!-- <p class="card-text-footer" style="line-height:0 !important">Sitio desarrollado por <a href="http://www.decimaerp.com" class="obs-footer-link" target="_blank">DecimaERP</a></p> -->
              </div>
            </div>

          </div>
        </div>



      </div>
    <!-- </div> -->
  </div>
</footer>
