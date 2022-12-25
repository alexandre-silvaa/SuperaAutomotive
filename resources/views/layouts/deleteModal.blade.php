<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<p class="text-center">
        		<b>Confirma Exclusão do Registro ?</b>
        	</p>
        	<input type="hidden" class="token" value="{{csrf_token()}}">
        	<input type="hidden" id="urlDeletar" value="">
        	<div class="preloader text-center">
        		<img src="{{url('assets/img/loader.gif')}}">
        		<p>
        			Excluindo Registro...
        		</p>
        	</div>	        
      </div>
      <div class="modal-footer">
	        <button type="button" class="btn btn-sm btn-info" data-dismiss="modal"><i class="fas fa-backward"></i> Voltar</button>
	        <button type="button" class="btn btn-sm btn-danger btn-confirm-delete"><i class="far fa-trash-alt"></i> Exluir</button>
      </div>	      
    </div>
  </div>
</div>