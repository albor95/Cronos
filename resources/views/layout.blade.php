<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>SA - Tempos e Métodos</title>

  <!-- Bootstrap CSS -->
  <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{url('/')}}/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{url('/')}}/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{url('/')}}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{url('/')}}/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="{{url('/')}}/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{url('/')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="{{url('/')}}/stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="{{url('/')}}/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="{{url('/')}}/stylesheet" href="css/fullcalendar.css">
  <link href="{{url('/')}}/css/widgets.css" rel="stylesheet">
  <link href="{{url('/')}}/css/style.css" rel="stylesheet">
  <link href="{{url('/')}}/css/style-responsive.css" rel="stylesheet" />
  <link href="{{url('/')}}/css/xcharts.min.css" rel=" stylesheet">
  <link href="{{url('/')}}/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->

      <a href="index.html" class="logo">Tempos e <span class="lite">Métodos</span></a>

      <!--logo end-->

    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Painel Principal</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_cart"></i>
                          <span>Produtos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="adicionar_produto.html">Adicionar Produtos</a></li>
              <li><a class="" href="{{url('/')}}/produto">Listar Produtos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_clock"></i>
                          <span>Operações</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="adicionar_operacao.html">Adicionar Operações</a></li>
              <li><a class="" href="adicionar_elementos.html">Adicionar Elementos</a></li>
              <li><a class="" href="listar_ops-elementos.html">Listar Op's e Elementos</a></li>
            </ul>
          </li>
          <li>

            <a href="javascript:;" class="">
                          <i class="icon_paperclip"></i>
                          <span>Relatórios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
          </li>
          <li class="sub-menu">
           
            <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>Usuários</span>
                          <span class="menu-arrow arrow_carrot-right"></span>

                      </a> 
             <ul class="sub">
              <li><a class="" href="{{url('/')}}/usuario/create">Adicionar Usuário</a></li>
              <li><a class="" href="{{url('/')}}/usuario">Listar Usuários</a></li>
            </ul>

          </li>

         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
        @yield('conteudo')
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
       
        </div>
      </div>
  
  <!-- javascripts -->
  <script src="{{url('/')}}/js/jquery.js"></script>
  <script src="{{url('/')}}/js/jquery-ui-1.10.4.min.js"></script>
  <script src="{{url('/')}}/js/jquery-1.8.3.min.js"></script>
  <script type="{{url('/')}}/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="{{url('/')}}/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{url('/')}}/js/jquery.scrollTo.min.js"></script>
  <script src="{{url('/')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{url('/')}}/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="{{url('/')}}/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="{{url('/')}}/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="{{url('/')}}/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="{{url('/')}}/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{url('/')}}/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="{{url('/')}}/js/calendar-custom.js"></script>
    <script src="{{url('/')}}/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="{{url('/')}}/js/jquery.customSelect.min.js"></script>
    <script src="{{url('/')}}/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="{{url('/')}}/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="{{url('/')}}/js/sparkline-chart.js"></script>
    <script src="{{url('/')}}/js/easy-pie-chart.js"></script>
    <script src="{{url('/')}}/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('/')}}/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('/')}}/js/xcharts.min.js"></script>
    <script src="{{url('/')}}/js/jquery.autosize.min.js"></script>
    <script src="{{url('/')}}/js/jquery.placeholder.min.js"></script>
    <script src="{{url('/')}}/js/gdp-data.js"></script>
    <script src="{{url('/')}}/js/morris.min.js"></script>
    <script src="{{url('/')}}/js/sparklines.js"></script>
    <script src="{{url('/')}}/js/charts.js"></script>
    <script src="{{url('/')}}/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
