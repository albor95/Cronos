@extends('layout')
@section('conteudo')

<script>

    function delOperacao(id, url){
    confirma=confirm("keh memu faze issu?");
    if(confirma){
    $.noConflict();
    dados = $('#' + id).serialize();
    
    $.ajax({
    method:'post',
            url:url,
            data:dados,
            dataType:'html',
            success: function (data){
            $('#linha'+id).remove();
            location.href= '/operacao';
            },
            error:function (argument){
            alert('Erro');
            }
    });  
    }
    return false;
    }

</script>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i>Lista de Operações</h3>
                <ol class="breadcrumb">
                    

                </ol>
            </div>
        </div>
        <!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <table class="table table-striped table-advance table-hover">
                        <tbody>

                            <tr>
                                <th><i class="icon_pin"></i> Cod.</th>
                                <th><i class="icon_document"></i> Nome da Operação</th>
                                <th><i class="icon_pin_alt"></i> Cod. do Produto</th>
                                <th><i class="icon_cog"></i> Máquina</th>
                                <th><i class="icon_profile"></i> Cronometrista</th>
                            </tr>
                            @foreach($operacao as $o)
                            <tr id="linhade{{$o->OpCod}}">
                                <td>{{$o->OpCod}}</td>
                                <td>{{$o->OpNom}}</td>
                                <td>{{$o->ProCod}}</td>
                                <td>{{$o->OpMaq}}</td>  
                                <td>{{$o->OpCron}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('operacao.edit', $o->OpCod)}}" class="btn btn-primary"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a onclick="return delOperacao('del{{$o->OpCod}}','{{route('operacao.destroy', $o->OpCod)}}')"class="btn btn-danger"><i class="icon_close_alt2" ></i> Deletar</a>

                                        <form action="" method="post" id="del{{$o->OpCod}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
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
