@extends('layout')
@section('conteudo')
 
 <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header"><i class="fa fa-table"></i> Listar Produtos</h3>
                                <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Início</a></li>
                                    <li><i class="fa fa-table"></i>Produtos</li>
                                    <li><i class="fa fa-th-list"></i>Listar Produtos</li>
                                </ol>
                            </div>
                        </div>
                        <!-- page start-->


                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Produtos Cadastrados
                                    </header>

                                    <table class="table table-striped table-advance table-hover">
                                        <tbody>
                                            <tr>
                                                <th><i class="icon_id-2"></i>Código</th>
                                                <th><i class="icon_pens"></i>Nome</th>
                                                <th><i class="icon-task-l"></i>Operações</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Camisa Xadrez</td>
                                                <td>
                                                    <a id="btn_add_op" class="btn btn-primary" href="cadastro_operacao.html"><i class="icon_plus_alt2"></i> Adicionar</a>
                                                    <a id="btn_lista_op" class="btn btn-secondary" onclick="abrirModal();"><i class=""></i> Listar</a>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Cachecol Tri</td>
                                                <td>
                                                    <a id="btn_add_op" class="btn btn-primary" href="cadastro_operacao.html"><i class="icon_plus_alt2"></i> Adicionar</a>
                                                    <a id="btn_lista_op" class="btn btn-secondary" onclick="abrirModal();"><i class=""></i> Listar</a>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Calça Moletom</td>
                                                <td>
                                                    <a id="btn_add_op" class="btn btn-primary" href="cadastro_operacao.html"><i class="icon_plus_alt2"></i> Adicionar</a>
                                                    <a id="btn_lista_op" class="btn btn-secondary" onclick="abrirModal();"><i class=""></i> Listar</a>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </div>
                        </div>
                        <!-- page end-->
                    </section>
                </section>
            
@stop