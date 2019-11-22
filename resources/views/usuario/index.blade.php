@extends('layout')
@section('conteudo')

<script>

    function delUsuario(id, url){
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
                <h3 class="page-header"><i class="fa fa-table"></i>Lista de Usuários</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>

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
                                <th><i class="icon_profile"></i> Nome de Usuário</th>
                                <th><i class="icon_question"></i> Tipo</th>
                                <th><i class="icon_question"></i> Nome Completo</th>
                                <th><i class="icon_cogs"></i> Ação</th>
                            </tr>
                            @foreach($usuarios as $u)
                            <tr id="linhadel{{$u->UsuCod}}">
                                <td>{{$u->UsuCod}}</td>
                                <td>{{$u->UsuName}}</td>
                                <td>{{$u->UsuTip}}</td>
                                <td>{{$u->UsuNom}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('usuario.edit', $u->UsuCod)}}" class="btn btn-primary"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a href="" onclick="return delUsuario('del{{$u->UsuCod}}','{{route('usuario.destroy', $u->UsuCod)}}')"class="btn btn-danger"><i class="icon_close_alt2"></i> Deletar</a>

                                        <form action="" method="post" id="del{{$u->UsuCod}}">
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