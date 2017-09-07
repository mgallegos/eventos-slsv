@extends('decima-eventos-slsv::base')

@section('container')
<style>
</style>
<div class="content-section-a">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12">
        <div class="card">
          <h4 class="card-header">Formulario de registro</h4>
          <div class="card-body">
            {!! Form::open(array('id'=>'registration-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('eventos-slsv/registration'))) !!}
              {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
              <div class="alert alert-dark" role="alert">
                <h5 class="card-title">Crea una cuenta en la plataforma de <strong>La Comunidad Salvadoreña de Software Libre</strong> para confirmar tu asistencia a este evento. Esta cuenta la podrás utilizar para registrarte y participar en futuros eventos que se organicen.</h5>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="firstname">Nombre</label>
              					<div class="input-group">
              						<span class="input-group-addon">
              							<i class="fa fa-user"></i>
              						</span>
              		    		{!! Form::text('firstname', null, array('id'=>'firstname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            			    	</div>
              				</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="lastname">Apellido</label>
              					<div class="input-group">
              						<span class="input-group-addon">
              							<i class="fa fa-user"></i>
              						</span>
              		    		{!! Form::text('lastname', null, array('id'=>'lastname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            			    	</div>
              				</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="password">Contraseña</label>
              					<div class="input-group">
              						<span class="input-group-addon">
              							<i class="fa fa-key"></i>
              						</span>
              		    		{!! Form::password('password', array('id'=>'password', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            			    	</div>
              				</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="password-confirmation">Confirmar contraseña</label>
              					<div class="input-group">
              						<span class="input-group-addon">
              							<i class="fa fa-key"></i>
              						</span>
              		    		{!! Form::password('password-confirmation', array('id'=>'password-confirmation', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            			    	</div>
              				</div>
                    </div>
                  </div>
                  <div class="form-group mg-hm">
                    <label for="email">Correo electrónico</label>
          					<div class="input-group">
          						<span class="input-group-addon">
          							<i class="fa fa-envelope-o"></i>
          						</span>
          		    		{!! Form::text('email', null, array('id'=>'email', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
        			    	</div>
          				</div>
                  <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="gender">Género</label>
              					{!! Form::select('gender', array('' => '', 'M' => 'Masculino', 'F' => 'Femenino', 'O' => 'Otro'), null, array('id'=>'gender', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            				</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="form-group mg-hm">
                        <label for="contact">Número de contacto</label>
              					<div class="input-group">
              						<span class="input-group-addon">
              							<i class="fa fa-phone"></i>
              						</span>
              		    		{!! Form::text('contact', null, array('id'=>'contact', 'class'=>'form-control')) !!}
            			    	</div>
              				</div>
                    </div>
                  </div>
                  <div class="form-group mg-hm">
                    <label for="institution">Represento a la institución</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-university"></i>
                      </span>
                      {!! Form::text('institution', null, array('id'=>'institution', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                    </div>
                  </div>
                  <div class="form-group mg-hm">
                    <label for="email">Utilizo las siguientes distibuciones Linux:</label>
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Debian
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Ubuntu
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Linux Mint
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Arch Linux
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Slackware
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> openSUSE
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Knoppix
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> CentOS
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Damn Small Linux
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Dream Linux
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Elementary OS
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Fedora
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Gentoo
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> LXLE
                          </label>
                        </div>
                      </div>
                    </div>
          				</div>
                  <div class="form-group mg-hm">
                    <label for="email">En el Software Freedom Day 2017 me gustaría:</label>
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Asistir al evento
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Colaborar como ponente
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Colaborar como voluntario
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Colaborar en la organización
                          </label>
                        </div>
                      </div>
                    </div>
          				</div>
                  <div class="form-group mg-hm">
                    <label for="email">Pertenezco a las siguientes comunidades:</label>
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Comunidad Salvadoreña de Software Libre
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Comunidad Debian El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Comunidad Linux Mint El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> GULSM
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> LinUES
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Open Hardware El Salvador
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Mozilla El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Arduino El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Docker El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Node js El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Ionic El Salvador
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value=""> Horchata JS
                          </label>
                        </div>
                      </div>
                    </div>
          				</div>
                  {!! Form::button('Registrarse', array('id'=>'btn-registration', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="card">
          <h4 class="card-header">{{ Lang::get('security/login.loginFormLegend') }}</h4>
          <div class="card-body">
            <!-- <h4 class="card-title">Special title treatment</h4> -->
            {!! Form::open(array('id'=>'login-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('eventos-slsv/login'))) !!}
              {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
              <div class="form-group mg-hm">
                <!-- <label for="">&nbsp;</label> -->
      					<div class="input-group">
      						<span class="input-group-addon">
      							<i class="fa fa-envelope-o"></i>
      						</span>
      		    		{!! Form::text('email', null, array('id'=>'email', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => Lang::get('security/user-management.email'))) !!}
      			    	</div>
      				</div>
      				<div class="form-group mg-hm">
      					<div class="input-group">
      						<span class="input-group-addon">
      							<i class="fa fa-key"></i>
      						</span>
      						{!! Form::password('password', array('id'=>'password', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => Lang::get('security/user-management.password'))) !!}
      			    	</div>
      				</div>
      				<!-- <div class="form-group mg-hm checkbox">
      					<label class="control-label">

      					</label>
      					{{-- Html::link(URL::to('password-reminder'), Lang::get('security/login.forgottenPassword'), ['id'=>'forgotten-password', 'class' => 'pull-left']) --}}
      				</div> -->
              {!! Form::button(Lang::get('security/login.loginButton'), array('id'=>'btn-login', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
    				{!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@parent
@stop
