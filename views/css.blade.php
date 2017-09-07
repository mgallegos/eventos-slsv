<style>
  @import url('https://fonts.googleapis.com/css?family=Anton|Cabin:400,700');
  @import url('https://fonts.googleapis.com/css?family=Pacifico');

  html {
    position: relative;
    min-height: 100%;
  }

  body {
    font-family: 'Cabin', sans-serif;
    font-size: .85rem !important;
    padding-top: 45px !important;
    /*background-image: url('https://storage.googleapis.com/decimaerp/organizations/8/mosaico_cuadrado.jpg');*/
  }

  footer {
    position: relative;
    bottom: 0;
    /*background: rgba(109,145,38,0.6) !important;*/
    background: rgb(109,145,38) !important;
    width: 100%;
    height: auto !important;
    /*background-color: #000;*/
    /*opacity: 0.7;*/
    /*filter: alpha(opacity=70);*/
    /*height: 370px;*/
  }

  label {
    font-size: 1rem !important;
  }

  .top-bar {
    /*background-color: #D6D6D6;*/
    /*background: rgba(252,252,252,0.7) !important;*/
    /*border: 1px solid #6d9126;*/
    /*background-color: #6d9126;*/
    /*background-color: rgb(247, 247, 247);*/
  }

  .nav-item > a {
    /*color: #ba53a6 !important;*/
    /*font-family: 'Pacifico', cursive !important;*/
    color: #6d9126 !important;
  }


  .content-section-a {
    padding: 30px 0;
    /*background-color: #fff;*/
  }

  .content-section-b {
    padding: 30px 0;
    background-color: #f8f8f8;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
  }

  .section-title {
    /*margin-top: 1.5rem!important;*/
    margin-bottom: 1.5rem!important;
  }

  .footer-margin {
    /*height:30px;*/
  }

  /*Boton de formulrio de amigos*/
  .btn-footer-suscribe {
    padding: 0px;
    font-size: 1.8em;
    /*font-family: 'Cabin', sans-serif;*/
    /*width: 300px !important;*/
    width: 100%;
    height: 31px !important;
    /*background-color: #937CA7 !important;*/
    /*color: #FFFFFF !important;*/
    /*border-color: #937CA7 !important;*/
    /*font-family: 'Questrial', sans-serif !important;*/
    /*border-radius: 0;*/
  }

  .btn-footer-suscribe:hover {
    color: #937CA7 !important;;
    background-color: #FFFFFF !important;
    border-color: #FFFFFF !important;
  }

  .btn-footer-suscribe:disabled {
    background-color: #FFFFFF !important;
    color: #fff !important;
  }


  /*tamaño campos formulario footer */
  .cs-ac
  {
    /*width: 300px !important;*/
    /*height: 31px !important;*/
  }

  .cs-ac, .cs-af {
    margin-bottom: 10px;
  }

  .cs-ac p {
    text-align: left !important;
  }

  .cs-ac input {
    border-color: #937CA7;
  }

  .fb-like, .fb_iframe_widget {

    /*width: 200px !important;*/
  }

  /*color texto helper*/
  .help-block {
    color: #777373;
  }

 /*Tipografía títulos, botones y filtros */
  .tittle-filter-buttons-font, .card-title-nos, .card-title-abc, .card-title-footer, .img-txt-header, .fake-link{
    font-family: 'Cabin', sans-serif !important;
    color: #FFFFFF !important;
  }

  /*Top bar titles color*/
  .nav-link {
    font-family: 'Cabin', sans-serif !important;
    /*font-size:1.34em;*/
    color: #FFFFFF !important;
  }

  /*Directorio de Marcas*/
  .abecedary-font {
    font-family: 'Lato', sans-serif;;
    font-weight: bold !important;
  }

  /*Directorio de Marcas*/
  .abc-list {
    width: 198px
  }

  /*Títulos card Marcas*/
 .card-title-abc {
    font-size: 19px;
    line-height: 24px;
 }

 /*Títulos card Nosotros*/
 .card-title-nos {
    font-size: 48px;
    margin-bottom: 24px;
 }

 /*Títulos card Nosotros*/
 .card-title-footer {
    font-family: 'Anton', sans-serif !important;
    font-size: 2.45em;
    text-align: left;
 }

 /*Texto card Marcas*/
 .card-text-abc {
    font-size: 16px;
    line-height: 24px;
 }

 /*Textos card Nosotros*/
 .card-text-nos {
    font-size: 16px;
    line-height: 24px;
 }

 /*Textos card Nosotros*/
 .card-text-nos-h {
    font-size: 24px;
    line-height: 31px;
 }

 /*Textos card footer*/
 .card-text-footer {
   color: #FFFFFF;
   font-size: 1.25em !important;
   line-height: 1.4em !important;
   text-align: left;
 }

 .card-inverse, .card-img, .image-filter {
   border-radius: 0px;
   min-width: 1140px;
 }

 /*Image headers*/
 .img-txt-header {
   font-size: 72px;
   color: #000000 !important;
   text-align: right;
   padding-top: 120px !important;
   padding-right: 90px !important;
 }

 .image-filter {
   filter: opacity(50%);
 }

  /*Carousel*/
  .carousel {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }

  .carousel-item.active,
  .carousel-item-next,
  .carousel-item-prev {
  display: block !important;
  }

  /*Tienda Virtual*/
  /*.btn-outline-info{
    background-color: #937CA7 !important;
    filter:opacity(30);
    color: #ffffff !important;
    border-color: #937CA7 !important;
    font-family: 'Questrial', sans-serif !important;
    border-radius: 0;
  }

  .btn-outline-primary{
    background-color: #937CA7 !important;
    filter:opacity(30);
    color: #ffffff !important;
    border-color: #937CA7 !important;
    font-family: 'Questrial', sans-serif !important;
    border-radius: 0;
  }

  .btn-outline-info:hover {
    color: #937CA7 !important;;
    background-color: #fff !important;
    border-color: #937CA7 !important;
  }

  .btn-outline-primary:hover {
    color: #937CA7 !important;;
    background-color: #fff !important;
    border-color: #937CA7 !important;
  }

  .btn-outline-info.disabled, .btn-outline-primary:disabled {
    background-color: #FFFFFF !important;
    color: #fff !important;
  }

  .dt-os-filters .form-control, .dt-os-filters .input-group-addon{
    border-color: #937CA7;
    color: #c9b975;
    border-radius: 0;
  }*/

  .product-name > a > p {
    color: #23241e !important;
    /*font-family: 'Questrial', sans-serif !important;*/
  }

  .box-price > p{
    /*font-family: 'Lato', sans-serif !important;*/
  }

  .badge-primary {
    background-color: #23241e !important;
  }

  .items {
    width: 100% !important;
  }

  .dt-os-pager-pages-info, .dt-os-pager-pages-info.disabled, .dt-os-pager-pages-info:disabled,
  .cms-blog-pager-pages-info, .cms-blog-pager-pages-info.disabled, .cms-blog-pager-pages-info:disabled {
    background-color: #fff !important;
    border-color: #937CA7 !important;
    color: #937CA7 !important;
  }

  .btn-shpng-crt .fa, .btn-float-fltrs .fa {
    font-size: 2em;
  }

  /* Social icons*/
  .navbar-social-icon {
    margin-left: -0.6rem !important;
  }

  .footer-icon-color {
    color: #fff;
    font-size: 1.5em;
  }

  /*Blog posts*/

  .grid figure figcaption {
  	display: none;
  }

  .blog-post-resume {
    margin-bottom: 0.2rem;
  }

  .blog-post-meta-top {
  	display: none;
  }

  .blog-preview-post-title {
    margin-top: 0.2rem;
    margin-bottom: 0.2rem;
    font-weight: bold;
    font-size: 1.1rem !important;
    text-align: justify;
  }

  .blog-preview-text-container {
    background-color: #cccccc;
    padding: 5px;
    min-height: 175px;
  }

  .blog-post-meta {
    color: #999;
  }


  /*Extra small devices (portrait phones, less than 576px)*/
  @media (max-width: 575px) {

    body {
      /*padding-top: 110px;*/
    }

    .header-height {
      max-height:90px;
    }

    .phone-margin-section {
      margin-top: 20px;
    }
  }

  /*From Small devices to extra large*/
  @media (min-width: 576px) {

    .header-height {
      max-height:200px;
    }
  }

  /*Small devices (landscape phones, 576px and up)*/
  @media (min-width: 576px) and (max-width: 767px) {
    body {
      /*padding-top: 110px;*/
    }


  }

  /*Extra small devices and Small devices*/
  @media (max-width: 767px){

    .nv-decima-web {
       margin-left: 0 !important;
    }

    .navbar-brand {
      display: inline !important;
    }

    .navbar-brand > img {
      width: 35%;
      height: auto;
    }

    .btn-float-fltrs {
    	right:19% !important;
    }

    figure.effect-honey h2 {
    	padding: 0.5em 0.5em !important;
      font-size: 1.5rem !important;
    }
  }

  /*From Medium devices to extra large*/
  @media (min-width: 768px) {
    body {
      /*padding-top: 110px;*/
    }
  }

  /*Medium devices (tablets, 768px and up)*/
  @media (min-width: 768px) and (max-width: 991px) {

  }

  /*Small and medium devices (landscape phones, 576px and up)*/
  @media (min-width: 576px) and (max-width: 991px) {
    .bottom-margin-section {
      margin-top: 20px;
    }
  }

  /*Medium devices and Large devices*/
  @media (min-width: 768px) and (max-width: 1199px)
  {
    figure.effect-honey h2 {
    	padding: 0em 0.5em !important;
      font-size: 1.5rem !important;
    }
  }

  /*Extra small devices, Small devices and medium devices*/
  @media (max-width: 991px) {
    /*body {
      padding-top: 90px !important;
    }*/

    .btn-comic-title {
      font-size: 2em;
    }

    .nav-link {
      font-size:1.40em;
      text-align: center;
    }

    .imagen-cinta {
      width:40%;
    }

  }

  /*Large devices (desktops, 992px and up)*/
  @media (min-width: 992px) and (max-width: 1199px) {
    .btn-comic-title {
      font-size: 1.7em;
    }
  }

  /*Large and Extra large devices*/
  @media (min-width:992px) {
    .nav-link {
      font-size:1.34em;
      margin-left: 40px;
    }
    .imagen-cinta {
      width:15%;
    }

    /*body {
      padding-top: 0px !important;
    }*/
    /*.nav-link {
      margin-left: 40px;
    }*/

  }

  /*Extra large devices (large desktops, 1200px and up)*/
  @media (min-width: 1200px) {
    .btn-comic-title {
      font-size: 2em;
    }
  }

  /*Custom*/
  @media (min-width: 768px) and (max-width: 863px)
  {
    .btn-float {
  		top:12% !important;
  	}

    .btn-float-fltrs {
      top:20% !important;
    }
  }

  /*Custom*/
  @media (max-width: 1199px), (max-height:679px)
  {

  }

</style>
