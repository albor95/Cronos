@extends('layout')
@section('conteudo')

 <script>

    function edUsuario(url){
   
    dados = $('#usuForm').serialize();
    $.noConflict();
    $.ajax({
    method:'post',
                url: url,
            data:dados,
            dataType:'html',
            success: function (data){
            location.href='/usuario';
            },
            error:function (argument){
            alert('Usuário ta la ainda ');
            }
    });  
    
    return false;
    }

</script>
 <!--main content start-->
    <section id="main-content">
      
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Editar Usuário</h3>
           
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
         
             <div style="color: black; outline-style: solid;  padding: 20px;" class="panel-body">
                <div class="form" >
                      
                    <form class="form-validate form-horizontal "  method="get" action="" id="UsuForm" onsubmit="return edUsuario('{{ route('usuario.update', $usuario->UsuCod) }}')">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                      <label for="Nome" class="control-label col-lg-2">Nome de Usuário <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="USname" name="USNome" type="text" />
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
                    
                     <div class="form-group ">
                      <label for="Nome" class="control-label col-lg-2">Nome Completo <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="NomeC" name="NomeC" type="text" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="Nome" class="control-label col-lg-2">Tipo de Usuário <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="type" name="type" type="text" />
                      </div>
                    </div>
                       
                      <div class="btn-group">
                            <a href="" type="submit" class="btn btn-danger"> Salvar</a>
                      </div>
                      
                  </form>
                      
                </div>
              </div>
                </div>
            </div>
           
         
        <!-- page end-->
      </section>
      
    <!--main content end-->

@stop

@extends('layout')
@section('conteudo')
<script>

    function editProduto(url) {

    dados = $('#formEdit').serialize();
    $.ajax({
    method: 'post',
            url: url,
            data: dados,
            dataType: 'html',
            success: function (data) {
            //Mensagem de sucesso
            location.href = '/produto';
            },
            error: function (argument) {
            //Mensagem de erro
            alert('Produto não Alterado');
            }
    });
    return false
    }

</script>
<div class="main-content col-12" style="padding-left: 10px;">
    <div class="card">
        <div class="card-body bg-dark">
            <h5 class="card-title m-b-0 text-light"><i class="mdi mdi-shopping"></i>Editar Produto</h5>
        </div>
    </div>
    <div class="card">
        <form class="form-horizontal" id="formEdit" action="" onsubmit="return editProduto('{{ route('produto.update', $produto->ProCod) }}')">
            
            @csrf
            @method('patch')
            
            <div class="card-body">
                <div class="form-group row">
                    <label for="nompro" class="col-sm-3 text-left control-label col-form-label">Nome do Produto</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ProNom" value="{{$produto->ProNom}}">
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

</div>
@stop