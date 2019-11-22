@extends('layout')
@section('conteudo')
<script>

    function addUsuario(request){
    dados = $('#' + request).serialize();
    $.ajax({
    method:'post',
            data:dados,
            dataType:'html',
            success: function (data){
            location.href='/usuario.index';
            },
            error:function (argument){
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
                <form class="form-horizontal " method="get">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nome de Usuário</label>
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
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Nome Completo</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Nome Completo">
                    </div>
                  </div>
                      <div class="form-group">
                    <label class="col-sm-2 control-label">Tipo de Usuário</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Tipo de Usuário">
                    </div>
                  </div>
                  
                </form>
          
              </div>
            </section>
          </div>
        </div>
       
        <!-- page end-->
      </section> 
        <a onclick="return addUsuario('{{route('usuario.store')}}')" class="btn btn-success" style=" width: 200px; margin-left: 450px" type="submit">Adicionar</a>
    </section>
    <!--main content end-->
    
@stop