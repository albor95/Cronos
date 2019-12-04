@extends('layout')
@section('conteudo')

<script>

    function delOperacao(id, url){
    confirma=confirm("Tem certeza de que deseja deletar a operação?");
    if(confirma){
    $.noConflict();
    dados = $('#' + id).serialize();
    
    $.ajax({
    method:'get',
            url:url,
            data:dados,
            dataType:'html',
            success: function (data){
            $('#'+id).remove();
            },
            error:function (argument){
            alert('Erro ao excluir a operação!');
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
                                <th><i class="icon_document"></i> Produto</th>
                                <th><i class="icon_cog"></i> Máquina</th>
                                <th><i class="icon_cog"></i> Tipo</th>
                                <th><i class="icon_profile"></i> Cronometrista</th>
                            </tr>
                            @foreach($operacao as $o)
                            <tr id="linhadel{{$o->OpeCod}}">
                                <td>{{$o->OpeCod}}</td>
                                <td>{{$o->OpeNom}}</td>
                                <td>{{$o->ProCod}}</td>
                                <td>{{$o->OpeMaq}}</td>
                                <td>{{$o->OpeTipEst}}</td>
                                <td>{{$o->OpeCro}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('operacao.edit', $o->OpeCod)}}" class="btn btn-primary"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a onclick="return delOperacao('linhadel{{$o->OpeCod}}','{{route('operacao.destroy', $o->OpeCod)}}')"class="btn btn-danger"><i class="icon_close_alt2" ></i> Deletar</a>

                                        <form action="" method="post" id="del{{$o->OpeCod}}">
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
