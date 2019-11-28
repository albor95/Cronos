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
