@extends('layout')
@section('conteudo')

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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="css/elegant-icons-style.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
        <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
        <!-- Custom styles -->
        <link rel="stylesheet" href="css/fullcalendar.css">
        <link href="css/widgets.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />
        <link href="css/xcharts.min.css" rel=" stylesheet">
        <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
            <!--header start-->
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
                                <li><a class="" href="listar_produto.html">Listar Produtos</a></li>
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
                            <a class="" href="relatorios.html">
                                <i class="icon_paperclip"></i>
                                <span>Relatórios</span>
                            </a>
                        </li>
                        <li>
                            <a class="" href="usuarios.html">
                                <i class="icon_profile"></i>
                                <span>Usuários</span>

                            </a>

                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" class="">
                                <i class="icon_documents_alt"></i>
                                <span>Pages</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                            <ul class="sub">
                                <li><a class="" href="profile.html">Perfil</a></li>
                                <li><a class="" href="login.html"><span>Página de Login</span></a></li>
                                <li><a class="" href="contato.html"><span>Página de Contato</span></a></li>
                                <li><a class="" href="blank.html">Blank Page</a></li>
                                <li><a class="" href="404.html">404 Error</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa-table"></i> Listar Produtos</h3>
                            <ol class="breadcrumb">
                                <li><i class="fa fa-home"></i><a href="index.html">Início</a></li>
                                <li><i class="fa fa-table"></i>Produtos</li>
                                <li><i class="fa fa-th-list"></i>Listar Produtos</li>
                            </ol>
                        </div>
                    </div>
                    <!-- page start-->


                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Produtos Cadastrados
                                </header>

                                <table class="table table-striped table-advance table-hover">
                                    <tbody>
                                        <tr>
                                            <th><i class="icon_id-2"></i>Código</th>
                                            <th><i class="icon_pens"></i>Nome</th>
                                            <th><i class="icon-task-l"></i>Operações</th>
                                            <th><i class="icon-task-l"></i>Ações</th>
                                        </tr>
                                        @foreach ($produtos as $p)
                                        <tr>
                                            <td scope="row">{{$p->ProCod}}</td>
                                            <td>{{$p->ProNom}}</td>
                                            <td>
                                                <a id="btn_add_op" class="btn btn-primary" href="operacao"><i class="icon_plus_alt2"></i> Adicionar</a>
                                                <a id="btn_lista_op" class="btn btn-secondary" onclick="abrirModal();"><i class=""></i> Listar</a>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-secondary" href="{{route('produto.edit', $p->ProCod)}}"><i class="icon_pencil-edit"></i> Editar</a>
                                                    <a class="btn btn-danger" onclick="return delProduto('del{{$p->ProCod}}', '{{route('produto.destroy', $p->ProCod)}}');" href=""><i class="icon_close_alt2"></i></a>
                                                    
                                                    <form action="" method="post" id="del{{$p->ProCod}}}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    <a class="btn btn-success" href="#"><i class="icon_plus_alt2"></i> Adicionar Produto</a>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                    <!-- page end-->
                </section>
            </section>
            <div id="modal_op" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Operações</h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped table-advance table-hover">
                                <tbody>
                                    <tr>
                                        <th><i class="icon_id-2"></i>Código</th>
                                        <th><i class="icon_pens"></i>Nome</th>
                                        <th><i class="icon-task-l"></i>Máquina</th>
                                        <th><i class="icon-task-l"></i>Elementos</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Cortar</td>
                                        <td>Ri76x</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                                <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Limpar</td>
                                        <td>T2B83</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                                <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Costurar</td>
                                        <td>T1B5C</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                                <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content end-->
            <div class="text-right">
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                    -->
                    Designed by <a href="https://bootstrapmade.com/">Me</a>
                </div>
            </div>
        </section>
        <!-- container section end -->

        <!--main content end-->
    </section>
    <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

    <script type='text/javascript'>
        //knob
        $(function () {
            $(".knob").knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%')
                }
            })
        });
        //custom select box
        $(function () {
            $('select.styled').customSelect();
        });
        function abrirModal() {
            $('#modal_op').modal('show');
        }
        $(function (){
            
        });
    </script>

</body>

</html>

@stop