@extends('layout')
@section('conteudo')

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
                    <th><i class="icon_profile"></i> Nome</th>
                    <th><i class="icon_question"></i> Tipo</th>
                    <th><i class="icon_cogs"></i> Ação</th>
                  </tr>
                  <tr>
                    <td>Alisson Bornhausen</td>
                    <td>Admin</td>
                    <td>
                      <div class="btn-group">
                          <a class="btn btn-success" href="editar_usuario.html"><i class="icon_pencil"></i>  Editar</a>
                        <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i>  Excluir</a>
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
    <!--main content end-->

@stop