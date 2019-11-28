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
                      
                    <form class="form-validate form-horizontal" action="" id="OpForm" onsubmit="return edOperacao('{{ route('operacao.update', $operacao->OpCod)}}')">
                    @csrf
                    @method('patch')
                    <div class="form-group ">
                      <label for="OpNom" class="control-label col-lg-2">Nome da Operação <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpNom" name="OpNom" type="text" required name=OpNom value="{{$operacao->OpNom}}" />
                      </div>
                    </div>
                    
                     <div class="form-group ">
                      <label for="OpMaq" class="control-label col-lg-2">Máquina <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpMaq" name="OpMaq" type="text" required name=OpMaq value="{{$operacao->OpMaq}}" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="OpCron" class="control-label col-lg-2">Cronometrista<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="OpCron" name="OpCron" type="text" required name=OpCron  value="{{$operacao->OpCron}}" />
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

