
<form class="form-horizontal " id="form-addpreciosNichos" action="<?php echo  base_url();?>index.php/Nicho/updatePrecios" method="POST">
	<div class="row">
		<div class="col-md-7">
			 PRECIOS DE NICHO POR CUARTEL <?php echo $nombreCuartel->nombre_cuartel ?> 
			 <input id="txt_IdCuartel" name="txt_IdCuartel" value="<?php echo $nombreCuartel->id_cuartel ?>" class="form-control" type="text" notValidate>
		</div>
	</div></br>
	<div class="row">
			<div class="col-md-3">
				 <select class="form-control" id="combo_Nivel" name="combo_Nivel" notValidate>
				 	<?php foreach ($listarNichosCuarteleId as $value) {?>
				 			 <option value="<?=$value->nivel ?>">Nivel <?=$value->nivel ?></option>
				 	<?php }?>
				 </select>
			</div>
			<label>Precios</label>
			<div class="col-md-3">
				<input id="txt_nivel_Precios" name="txt_nivel_Precios" class="form-control" type="text">
			</div>
	
	</div>

	<div class="row" style="text-align: right;">
			<button type="submit" id="btnEnviarFormulario" class="btn btn-success">Agregar Precios .</button>
			<button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		</div>
</form>
<script>
		
	$(function()
		{
			$('#form-addpreciosNichos').formValidation(
			{
				framework: 'bootstrap',
				excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
				live: 'enabled',
				message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
				trigger: null,
				fields:
				{
					txt_nivel_Precios:
					{
						validators: 
						{
							notEmpty:
							{
								message: '<b style="color: red;">El campo "Cuartel" es requerido.</b>'
							}
						}
					}
				}
			});

		});
	$('#btnEnviarFormulario').on('click', function(event)
	{

		
		event.preventDefault();

		$('#form-addpreciosNichos').data('formValidation').validate();

		if(!($('#form-addpreciosNichos').data('formValidation').isValid()))
		{
			return;
		}
		
		paginaAjaxJSON($('#form-addpreciosNichos').serialize(), '<?=base_url();?>index.php/Nicho/updatePrecios', 'POST', null, function(objectJSON)
		{
			$('#modalTemp').modal('hide');

			objectJSON=JSON.parse(objectJSON);

			swal(
			{
				title: '',
				text: objectJSON.mensaje,
				type: (objectJSON.proceso=='Correcto' ? 'success' : 'error') 
			},
			function()
			{
				window.location.href='<?=base_url();?>index.php/Cuartel/index/'+objectJSON.idEstudioInversion;

				renderLoading();
			});
		}, false, true);
	});

	</script>

