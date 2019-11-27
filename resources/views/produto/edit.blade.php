@extends('layout')
@section('conteudo')

<script type="text/javascript">

    function edProduto(url){
   
    dados = $('#ProForm').serialize();
    $.noConflict();
    $.ajax({
        method:'post',
            url: url,
            data: dados,
            dataType:'html',
            success: function (data){
                location.href= '/produto';
            },
            error:function (argument){
                alert('Erro ');
            }
    });  
    
    return false;
    }
    

</script>
 <!--main content start-->
    <section id="main-content">
      
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Editar Produto</h3>
           
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
         
             <div style="color: black; outline-style: solid;  padding: 20px;" class="panel-body">
                <div class="form" >
                      
                    <form class="form-validate form-horizontal" action="" id="ProForm" onsubmit="return edProduto('{{ route('produto.update', $produto->ProCod)}}')">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                      <label for="ProNom" class="control-label col-lg-2">Produto <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="ProNom" name="ProNom" type="text" pattern="[a-z\s]+$" required name=ProNom value="{{$produto->ProNom}}" />
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
