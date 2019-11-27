@extends('layout')
@section('conteudo')
<script>

    function addProduto(url) {
        dados = $('#AddForm').serialize();
        $.noConflict();
        $.ajax({
            method: 'post',
            data: dados,
            url: url,
            dataType: 'html',
            success: function (data) {
                location.href = '/produto';
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
                        <form id="AddForm" name="AddForm" class="form-horizontal" onsubmit="return addProduto('{{ route('produto.store')}}')">
                            @csrf

                            <div class="form-group">
                                <label for="ProNom" class="col-sm-2 control-label">Nome de Usuário</label>
                                <div class="col-sm-10">
                                    <input type="text" id="ProNom" name="ProNom" class="form-control" placeholder="Produto" required name=ProNom>
                                </div>
                            </div>

                            <div><button  class="btn btn-success" style=" width: 200px; margin-left: 450px" type="submit">Adicionar</button></div>

                        </form>

                    </div>
                </section>
            </div>
        </div>

        @stop
