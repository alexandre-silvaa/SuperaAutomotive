function deletar(urlDeletar)
{
	jQuery("#urlDeletar").val(urlDeletar);
	jQuery("#deleteModal").modal("show");
}		

$(function(){

	/* Ação executadoa */
	jQuery(".btn-confirm-delete").click(function(){

		//Pegando url delete
		var deletar = jQuery("#urlDeletar").val();

		//Pegando valor csrf_field()
		var  csrf = jQuery(".token").val();

		jQuery.ajax({
			url: deletar,
			method: 'DELETE',
			data: {'_token': csrf},
			beforeSend: preloader(),
		})
		.done(function(data){
			if(data == "1"){
				setTimeout(closeDeleteModal, 500);
				reload();		
			}else{
				setTimeout(closeDeleteModal, 500);
				reload();	
			}
		})
		.fail(function(){
			setTimeout(closeDeleteModal, 500);
			toast();
			reload();
		})
		.always(function(){
			setTimeout(endPreloader, 500);
		});
		function preloader()
		{
			jQuery(".preloader").show();
		}
		function endPreloader()
		{
			jQuery(".preloader").hide();
		}
		function reload()
		{
			setTimeout("location.reload()", 2500);
		}
		function closeDeleteModal()
		{
			jQuery("#deleteModal").modal("hide");
		}
		function toast()
		{
			toastr.error('Registro Não Pode Ser Excluído','Erro');
		}	
	});
});