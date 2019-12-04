@extends('layout')
@section('conteudo')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
    <head>
        <title>Cronómetro</title> 
        
        
        
        <style type="text/css">
            * { margin: auto; padding: 0; }
            h1 { padding: 0.5em; text-align: center; }
            #cronometro { padding:10px; border: 1px black double; width: 200px;
                          text-align: center }
            #reloj {  border: 1px solid black; 
                     font: bold 1.5em digital, europa, arial; text-align: center; 
                     }
            #cronometro [type=button]  { margin: 4px; font: normal 9pt arial } 
        </style>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/cronometro.js" type="text/javascript"></script>
        
    </head>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i>Cronometragem</h3>
                <ol class="breadcrumb">
                    

                </ol>
            </div>
        </div>
        <!-- page start-->
<body>
        <h1>CRONOMETRO com Javascript</h1>
        <div id="cronometro">
            <div id="reloj">00 : 00 : 00</div>
            <form name="cron" action="#">
                <input type="button" value="Iniciar" name="empieza" />
                <input type="button" value="Parar" name="para" /><br/>
                <input type="button" value="Continuar" name="continua" />
                <input type="button" value="Reiniciar" name="reinicia" />
                <input type="button" value="Proximo" id="proximo" name="proximo" />
            </form>
        </div>
        
        </br></br>
    
    <table width="60%" border="1">
        <thead>
            <tr>
                <td>N° Cronômetro</td>
                <td>Elemento</td>
                <td>Tempo</td>
            </tr>
        </thead>
        
        <tbody id="corpoTabela"></tbody>
        
        
    </table>
        
    </body>
        <br><br>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <table class="table table-striped table-advance table-hover">
                        <tbody>

                            <tr>
                                <th><i class="icon_pin"></i> Cod.</th>
                                <th><i class="icon_tool"></i> Cronometristra</th>
                                <th><i class="icon_cogs"></i> Tempo</th>
                                 <th><i class="icon_cogs"></i> TomadaTempo</th>
                                  <th><i class="icon_cogs"></i> Produto</th>
                                   <th><i class="icon_cogs"></i> Operação</th>
                            </tr>
                            @foreach($cronometragem as $c)
                            <tr id="linhadel{{$c->CroCod}}">
                                 <td>{{$c->CroCod}}</td>  
                                <td>{{$c->CroCronNom}}</td>  
                                 <td>{{$c->TomCod}}</td>  
                                  <td>{{$c->Tomada_Tempo_OpCod}}</td> 
                                  <td>{{$c->ProCod}}</td> 
                                  <td>{{$c->OpCod}}</td> 
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

@stop
