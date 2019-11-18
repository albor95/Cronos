@extends('layout')
@section('conteudo')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Cadastro de Elemento</h3>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
             
              <div class="panel-body" style="color: black; outline-style: solid;  padding: 20px;">
                <form class="form-horizontal " method="get">
                  
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Operação</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">faze algu bakana</p>
                    </div>
                  </div>
                  
                    <div class="form-group">
                    <label class="col-lg-2 control-label">Produto</label>
                    <div class="col-lg-10">
                      <p class="form-control-static">algo bakana feito</p>
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nome">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Ritmo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Ritmo">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Intervalo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Intervalo">
                    </div>
                  </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">con</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="con">
                    </div>
                  </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Quantidade de Vezes</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Quantidade de Vezes por Peça</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="">
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

@stop