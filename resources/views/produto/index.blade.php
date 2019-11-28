@extends('layout')
@section('conteudo')

<script>

    function delProduto(id, url){
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
            },
            error:function (argument){
            alert('Usuário ta la ainda ');
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
                <h3 class="page-header"><i class="fa fa-table"></i>Lista de Produtos</h3>
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
                                <th><i class="icon_tool"></i> Produto</th>
                                <th><i class="icon_cogs"></i> Ação</th>
                            </tr>
                            @foreach($produtos as $p)
                            <tr id="linhadel{{$p->ProCod}}">
                                 <td>{{$p->ProCod}}</td>  
                                <td>{{$p->ProNom}}</td>  
                                <td><a href="{{url('/')}}/operacao/create" class="btn btn-primary">Operações</a><a href="{{url('/')}}/operacao" class="btn btn-primary">Listar Ops.</a></td>
                                
                                <td>
                                    <div class="btn-group">
                                        
                                        <a href="{{route('produto.edit', $p->ProCod)}}" class="btn btn-primary"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a onclick="return delProduto('del{{$p->ProCod}}','{{route('produto.destroy', $p->ProCod)}}')"class="btn btn-danger"><i class="icon_close_alt2" ></i> Deletar</a>

                                        <form action="" method="post" id="del{{$p->ProCod}}">
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
