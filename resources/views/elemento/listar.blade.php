@extends('layout')
@section('conteudo')

<section id="main-content">
    <section class="wrapper">
        <div class="row" id="tabela_el">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Elementos Cadastrados
                    </header>

                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th><i class="icon_id-2"></i>Código</th>
                                <th><i class="icon_pens"></i>Nome</th>
                                <th><i class="icon-task-l"></i>Ritmo</th>
                                <th><i class="icon-task-l"></i>Int.</th>
                                <th><i class="icon-task-l"></i>Con.</th>
                                <th><i class="icon-task-l"></i>Qtd. Vezes</th>
                                <th><i class="icon-task-l"></i>Qtd. P/ Peça</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Pegar</td>
                                <td>Rápido</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>3</td>
                                <td>1</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Colocar</td>
                                <td>Rápido</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>3</td>
                                <td>1</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fazer</td>
                                <td>Rápido</td>
                                <td>NA</td>
                                <td>NA</td>
                                <td>3</td>
                                <td>1</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <a class="btn btn-success" href="elemento"><i class="icon_plus_alt2"></i> Adicionar Elemento</a>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>
</section>

@stop