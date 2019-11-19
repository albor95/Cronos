@extends('layout')
@section('conteudo')

 
 <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Editar Usuário</h3>
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
             
             <div style="color: black; outline-style: solid;  padding: 20px;" class="panel-body">
                <div class="form" >
                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                    <div class="form-group ">
                      <label for="Nome" class="control-label col-lg-2">Nome <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="Nome" type="text" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="Senha" class="control-label col-lg-2">Senha <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="Senha" type="password" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ConfirmarSenha" class="control-label col-lg-2">Confirmar Senha <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="confirm_password" name="ConfirmarSenha" type="password" />
                      </div>
                    </div>
                    
                   
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
            </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->


@stop