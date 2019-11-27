@extends('layout')
@section('conteudo')
<script>

    function addUsuario(url) {
        dados = $('#AddForm').serialize();
        $.noConflict();
        $.ajax({
            method: 'post',
            data: dados,
            url: url,
            dataType: 'html',
            success: function (data) {
                location.href = '';
            },
            error: function (argument) {
                alert('erro ');
            }
        });
     
          return false;
    }

</script>


<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Cadastro de Usuário</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <div class="panel-body" style="color: black; outline-style: solid;  padding: 20px;">
                        <form id="AddForm" name="AddForm" class="form-horizontal" onsubmit="return addUsuario('{{ route('usuario.store')}}')">
                            @csrf




                            <div class="form-group">
                                <label for="UsuName" class="col-sm-2 control-label">Nome de Usuário</label>
                                <div class="col-sm-10">
                                    <input type="text" id="UsuName" name="UsuName" class="form-control" placeholder="Nome de Usuário" required name=UsuName>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="UsuSen" class="col-sm-2 control-label">Senha</label>
                                <div class="col-sm-10">
                                    <input type="password" id="UsuSen" name="UsuSen" class="form-control" placeholder="Senha" required name=UsuSen>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="UsuNom"  class="col-sm-2 control-label">Nome Completo</label>
                                <div class="col-sm-10">
                                    <input type="text" id="UsuNom" name="UsuNom" class="form-control" placeholder="Nome Completo" pattern="[a-z\s]+$" required name=UsuNom title="Sem Números">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="UsuTip"  class="col-sm-2 control-label">Tipo de Usuário</label>
                                <div class="col-sm-10">
                                    <input type="text" id="UsuTip" name="UsuTip" class="form-control" placeholder="Tipo de Usuário(A ou P)" max-length="1" pattern="[A,P]+$"  required name=UsuTip title="Apenas A ou P">

                                </div>
                            </div>

                            <div><button  class="btn btn-success" style=" width: 200px; margin-left: 450px" type="submit">Adicionar</button></div>

                        </form>

                    </div>
                </section>
            </div>
        </div>

        @stop