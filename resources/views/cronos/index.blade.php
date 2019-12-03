@extends('layout')
@section('conteudo')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
    <body>
        <h1>CRONOMETRO com Javascript</h1>
        <div id="cronometro">
            <div id="reloj">00 : 00 : 00</div>
            <form name="cron" action="#">
                <input type="button" value="Iniciar" name="empieza" />
                <input type="button" value="Parar" name="para" /><br/>
                <input type="button" value="Continuar" name="continua" />
                <input type="button" value="Reiniciar" name="reinicia" />
                 <input type="button" value="Proximo" name="proximo" />
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
</html>

@stop
