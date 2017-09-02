@extends('decima-eventos-slsv::base')

@section('container')
@include('decima-cms::blog-css')
@include('decima-cms::blog-post')
<div class="container content-section-a">
  <div class="row">
    <div class="col-12" style="padding-left:0; padding-right:0;">
      <!-- <div id="top-carousel" class="carousel slide" data-ride="carousel" style="width:100%; display: block;">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="http://placehold.it/1140x350">
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="http://placehold.it/1140x350">
          </div>
        </div>
        <ol class="carousel-indicators hidden-sm-down">
          <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#top-carousel" data-slide-to="1"></li>
        </ol>
      </div> -->
      <div id="top-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#top-carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://placehold.it/1140x350" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://placehold.it/1140x350" alt="Second slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#top-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#top-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<section class="content-section-a" style="padding-top:0">
  <div class="container">
    <div class="row">
      @foreach ($blogPosts['blogPosts'] as $index => $blogPost)
        <!-- <div class="col-md-6 col-sm-6 col-12 @if($index >=1) phone-margin-section @endif @if($index >=2) bottom-margin-section @endif"> -->
        <div class="col-md-6 col-sm-6 col-12" style="margin-top:10px;margin-bottom:10px;">
          <div>
            <img class="img-fluid" src="{{$blogPost['header_image_url']}}"/>
            <div class="blog-preview-text-container">
              <p class="blog-preview-post-title">
                {{$blogPost['tittle']}}
              </p>
              <p class="blog-post-resume">
                {{$blogPost['summary']}}... <a class="fake-link obs-footer-link cms-blog-link" onclick="showBlogPost(this, '{{$blogPost['type']=='T'?$url . '/tiangue/' . $blogPost['id']:$url . '/avisos/' . $blogPost['id']}}')" data-insight="{{$blogPost['id']}}" data-avatar="{{$blogPost['avatar']}}" data-header-image="{{$blogPost['header_image_url']}}" data-name="{{$blogPost['name']}}" data-title="{{$blogPost['tittle']}}" data-date="{{$blogPost['date']}}" data-content="{{$blogPost['content']}}">Leer más</a>
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<section class="content-section-b">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Expositores</h2>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
      <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
        <h3>John Smith
          <!-- <small>Job Title</small> -->
        </h3>
        <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
      </div>
    </div>
  </div>
</section>
<section class="content-section-a">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Agenda</h2>
        <div class="agenda">
          <div class="table-responsive">
            <table class="table table-condensed table-bordered">
              <thead>
                  <tr>
                      <th>Día</th>
                      <th>Hora</th>
                      <th>Salón 1</th>
                  </tr>
              </thead>
              <tbody>
                <!-- Single event in a single day -->
                <tr>
                    <td class="agenda-date" rowspan="11">
                        <div class="dayofmonth">16</div>
                        <div class="dayofweek">Sábado</div>
                        <div class="shortdate text-muted">Septiembre, 2017</div>
                    </td>
                    <td class="agenda-time">
                        10:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <!-- <tr>
                    <td class="agenda-time">
                        9:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        10:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr> -->
                <tr>
                    <td class="agenda-time">
                        11:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        12:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        13:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        14:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        15:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        16:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <!-- <tr>
                    <td class="agenda-time">
                        17:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        18:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr> -->

                <!-- Multiple events in a single day (note the rowspan) -->
                <!-- <tr>
                    <td class="agenda-date" rowspan="11">
                        <div class="dayofmonth">2</div>
                        <div class="dayofweek">Wtorek</div>
                        <div class="shortdate text-muted">Listopad, 2014</div>
                    </td>
                    <td class="agenda-time">
                        8:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        9:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        10:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        11:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        12:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        13:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        14:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        15:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        16:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        17:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="agenda-time">
                        18:00
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            Por definir
                        </div>
                    </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content-section-b">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Lugar</h2>
        <div class="embed-responsive embed-responsive-16by9" style="height: 325px;">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1938.3156623076684!2d-89.23700498682686!3d13.680167831993474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6331cd306801db%3A0x80a0564eb3ccaace!2sUCA!5e0!3m2!1sen!2ssv!4v1504299838592" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content-section-a">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Participantes</h2>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
      <div class="col-sm-1 col-xs-3">
        <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/65x65" alt="">
        <h6 class="text-center">John Doe</h6>
      </div>
    </div>
  </div>
</section>
<section class="content-section-b">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Patrocinadores</h2>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Patrocinador 1</a>
            </h4>
            <p class="card-text">Descripción opcional</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Patrocinador 2</a>
            </h4>
            <p class="card-text">Descripción opcional</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Patrocinador 3</a>
            </h4>
            <p class="card-text">Descripción opcional</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Patrocinador 4</a>
            </h4>
            <p class="card-text">Descripción opcional</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('decima-cms::blog-js')
@parent
@stop
