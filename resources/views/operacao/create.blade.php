@extends('layout')
@section('conteudo')
<script>

    function addOperacao(url) {
    dados = $('#AddFormOp').serialize();
    $.noConflict();
    $.ajax({
    method: 'post',
            data: dados,
            url: url,
            dataType: 'html',
            success: function (data) {
            location.href = '/operacao';
            },
            error: function (argument) {
            alert('Erro');
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
                <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Cadastro de operação</h3>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">

                    <div class="panel-body" style="color: black; outline-style: solid;  padding: 20px;">
                        <form id="AddFormOp" name="AddFormOp" class="form-horizontal" onsubmit="return addOperacao('{{ route('operacao.store')}}')">
                            @csrf
                            <div class="form-group">
                                <label for="ProCod" class="col-sm-2 control-label">Produto</label>
                                <div class="col-sm-10">
                                    <input type="number" id="ProCod" name="ProCod" class="form-control" required name=ProCod  placeholder="Código do Produto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="OpeNom" class="col-sm-2 control-label">Nome da Operação</label>
                                <div class="col-sm-10">
                                    <input type="text" id="OpeNom" name="OpeNom" class="form-control" required name=OpeNom  placeholder="Nome">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="OpeMaq" class="col-sm-2 control-label">Máquina</label>
                                <div class="col-sm-10">
                                    <input type="text" id="OpeMaq" name="OpeMaq" class="form-control" required name=OpeMaq placeholder="Ritmo">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="OpeTipEst" class="col-sm-2 control-label">TipEst</label>
                                <div class="col-sm-10">
                                    <input type="text" id="OpeTipEst" name="OpeTipEst" class="form-control" required name=OpeTipEst placeholder="TipEst">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="OpeCro" class="col-lg-2 control-label">Cronometrista</label>
                                <div class="col-lg-10">
                                    <input type="text" id="OpeCro" name="OpeCro" class="form-control"  required name=OpeCro placeholder="Cronometrista">
                                </div>
                            </div>





                            <div><button  class="btn btn-success" style=" width: 200px; margin-left: 450px" type="submit">Adicionar</button></div>

                        </form>

                    </div>
                </section>
            </div>
        </div>

        @stop