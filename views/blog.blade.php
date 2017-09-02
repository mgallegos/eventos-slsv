@extends('decima-eventos-slsv::base')

@section('container')
<style>
  .current-page-tiangue
  {
    color: yellow !important;
  }

  /*---------------*/
  /***** Honey *****/
  /*---------------*/
  /*.grid {
    background: #fff;
  }*/

  .grid figure figcaption {
  	color: #fff;
  }

  .grid figure, figure.effect-honey {
  	/*background: #f2c12e;*/
  	background: rgb(3,144,154);
  }

  figure.effect-honey figcaption::before {
  	background: #d13f32;
  }
</style>
<div class="row">
  <div class="col-12">
    <!-- <div  class="cinta-secciones cinta-seccion-tiangue clearfix">
      <span class="float-right imagen-cinta">
        <img class="card-img-bottom img-fluid float-right" src="https://storage.googleapis.com/decimaerp/organizations/8/s3_2.png">
      </span>
      <div class="titulo-secciones" style="">
        EL TIANGUE
      </div>
      <div class="descripcion-secciones" style="">
        Es el colectivo creativo que da vida a Ob's World, Las Pacitas, El Pana y otros emprendimientos culturales, cuyo objetivo es promover la identidad de la zona oriental y de El Salvador a través del arte, la ilustración, la fotografía, los audiovisuales, la gastronomía y el turismo.
        <br>
        En El Tiangue encontrarás reseñas, opiniones, videos, fotografías e ilustraciones inéditas de nuestro sabor y calor oriental.
      </div>
    </div> -->
  </div>
</div>
@include('decima-cms::blog')
@parent
@stop
