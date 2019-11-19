@extends('layout')
@section('conteudo')

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
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nome">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Senha</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" placeholder="Senha">
                    </div>
                  </div>
                  
                </form>
             
           <br><br>
             
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="control-label col-lg-2" for="inputSuccess">Tipo de Usuário</label>
                    <div class="col-lg-10">
                     

                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                  Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                  Option two can be something else and selecting it will deselect option one
                                              </label>
                      </div>

                    </div>
                  </div>
                  
                </form>
              </div>
            </section>
          </div>
        </div>
       
        <!-- page end-->
      </section> 
        <button class="btn btn-success" style=" width: 200px; margin-left: 450px" type="submit">Adicionar</button>
    </section>
    <!--main content end-->
    
@stop