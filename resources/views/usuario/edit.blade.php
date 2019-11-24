@extends('layout')
@section('conteudo')

<script type="text/javascript">

    function edUsuario(url){
   
    dados = $('#UsuForm').serialize();
    $.noConflict();
    $.ajax({
        method:'post',
            url: url,
            data: dados,
            dataType:'html',
            success: function (data){
                location.href= '/usuario';
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
                      
                    <form class="form-validate form-horizontal" action="" id="UsuForm" onsubmit="return edUsuario('{{ route('usuario.update', $usuario->UsuCod)}}')">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                      <label for="UsuName" class="control-label col-lg-2">Nome de Usuário <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="UsuName" name="UsuName" type="text" value="{{$usuario->UsuName}}" />
                             
                      </div>
                    </div>
                    
                     <div class="form-group ">
                      <label for="UsuNom" class="control-label col-lg-2">Nome Completo <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="UsuNom" name="UsuNom" type="text" value="{{$usuario->UsuNom}}" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="UsuTip" class="control-label col-lg-2">Tipo de Usuário <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="UsuTip" name="UsuTip" type="text" value="{{$usuario->UsuTip}}" />
                      </div>
                    </div>
                       
                      <div class="btn-group">
                            <button href="" type="submit" class="btn btn-success">Salvar</button>
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

