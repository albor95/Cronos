@extends('layout')
@section('conteudo')

<script type="text/javascript">
    function delProduto(id, url){
    confirma = confirm('R U Sure?');
    if (confirma){
    $.noConflict();
    dados = $('#' + id).serialize();
    $.ajax({
    method: 'post',
    url: url,
    data: dados,
    dataType: 'html',
    success: function (data){
    $('#linha' + id).remove();
    },
    error: function(argument){
    alert('DEU MERDA, MOIOU, ZÉ');
    }
    });
    }
    return false;
    }

    // Execute a function when the user releases a key on the keyboard
    input.addEventListener("keyup", function(event) {
    // Number 13 is the "Enter" key on the keyboard
    if (event.keyCode === 13) {
    // Trigger the button element with a click
    alert('ALOHA');
    }
    });

</script>

<!--main content start-->
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
                                <th><i class="icon-task-l"></i>Ações</th>
                            </tr>
                            @foreach ($produtos as $p)
                            <tr id="linhadel{{$p->ProCod}}">
                                <td scope="row">{{$p->ProCod}}</td>
                                <td id="Nom{{$p->ProCod}}">{{$p->ProNom}}</td>
                                <td>
                                    <a id="btn_add_op" class="btn btn-primary" href="operacao"><i class="icon_plus_alt2"></i> Adicionar</a>
                                    <a id="btn_lista_op" class="btn btn-secondary" onclick="abrirModal();"><i class=""></i> Listar</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-secondary" href="" onclick="linhadel{{$p->ProCod}}.contentEditable='true';"><i class="icon_pencil-edit"></i> Editar</a>
                                        <a href="" class="btn btn-danger" onclick="return delProduto('del{{$p->ProCod}}','{{route('produto.destroy', $p->ProCod)}}')"><i class="icon_close_alt2"></i></a>

                                        <form action="" method="post" id="del{{$p->ProCod}}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        <a class="btn btn-success" href=""><i class="icon_plus_alt2"></i> Adicionar Produto</a>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<div id="modal_op" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Operações</h5>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-advance table-hover">
                    <tbody>
                        <tr>
                            <th><i class="icon_id-2"></i>Código</th>
                            <th><i class="icon_pens"></i>Nome</th>
                            <th><i class="icon-task-l"></i>Máquina</th>
                            <th><i class="icon-task-l"></i>Elementos</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Cortar</td>
                            <td>Ri76x</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                    <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Limpar</td>
                            <td>T2B83</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                    <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Costurar</td>
                            <td>T1B5C</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="elemento"><i class="icon_plus_alt2"></i> Add.</a>
                                    <a class="btn btn-secondary" href="/listar_elemento"><i class="icon_table"></i> Listar</a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#"><i class="icon_pencil-edit"></i> Editar</a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!--main content end-->
<script type="text/javascript">
    //knob
    (function () {
    $(".knob").knob({
    'draw': function () {
    $(this.i).val(this.cv + '%')
    }
    })
    });
    //custom select box
    (function () {
    $('select.styled').customSelect();
    });
    function abrirModal() {
    $('#modal_op').modal('show');
    }
    (function (){

    });
</script>


@stop