@extends('layout')
@section('conteudo')

<script type="text/javascript">

    function edOperacao(url){
   
    dados = $('#OpForm').serialize();
    $.noConflict();
    $.ajax({
        method:'post',
            url: url,
            data: dados,
            dataType:'html',
            success: function (data){
                location.href= '/operacao';
            },
            error:function (argument){
                alert('Erro');
            }
    });  
    
    return false;
    }
    

</script>
 <!--main content start-->
    <section id="main-content">
      
        <div class="row">
          <div class="col-lg-12">
              <h3 class="page-header container" style="color: black; outline-style: solid;  padding: 20px; background-color: white"><i class="fa fa-file-text-o" ></i> Editar Operação</h3>
           
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
         
             <div style="color: black; outline-style: solid;  padding: 20px;" class="panel-body">
                <div class="form" >
                      
                    <form class="form-validate form-horizontal" action="" id="OpForm" onsubmit="return edOperacao('{{ route('operacao.update', $operacao->OpeCod)}}')">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                      <label for="OpeNom" class="control-label col-lg-2">Nome da Operação <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpeNom" name="OpeNom" type="text" required name=OpeNom value="{{$operacao->OpeNom}}" />
                      </div>
                    </div>
                    
                     <div class="form-group ">
                      <label for="OpeMaq" class="control-label col-lg-2">Máquina <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpeMaq" name="OpeMaq" type="text" required name=OpeMaq value="{{$operacao->OpeMaq}}" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="OpeEstTip" class="control-label col-lg-2">TipEst <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpeEstTip" name="OpeEstTip" type="text" required name=OpeEstTip value="{{$operacao->OpeEstTip}}" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="OpeCro" class="control-label col-lg-2">Cronometrista<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpeCro" name="OpeCro" type="text" required name=OpeCro  value="{{$operacao->OpeCro}}" />
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
     
      </section>
      
    <!--main content end-->

@stop

