	<form class="form-horizontal " id="form-addcuartel" action="<?php echo  base_url();?>index.php/Cuartel/insertar" method="POST">
		<div class="row">
			DATOS DEL DIFUNTO<br><br>
			<div class="form-group">
				
				<div class="col-md-3 col-md-offset-1">
					<label class="col-md-1 control-label">Categoria</label>
					<select class="form-control" id="cbxCategoria" name="cbxCategoria">
						<?php foreach ($categoria as $itemp) {?>
						 	<option value="<?= $itemp->id_categoria.','.$itemp->categoria?>" > <?= $itemp->categoria;?> </option>
						<?php }?>
					</select>
				</div>
			
				<div class="col-md-3">
					<label class="col-md-1 control-label">Pasaje</label>
					<select class="form-control" id="cbxPasaje" name="cbxPasaje">
						<?php foreach ($pasajes as $itemp) {?>
							<option value="<?= $itemp->id_pasaje.','.$itemp->nombrepasaje?>"><?= $itemp->nombrepasaje;?></option>
						<?php }?>
					</select>
				</div>
				<div class="col-md-4 ">
					<label class="col-md-1 control-label">Cuartel</label>
					<input id="txt_cuartel" name="txt_cuartel" class="form-control" type="text">
				</div>
			</div>
			<div class="form-group">
				
				<div class="col-md-12 col-md-offset-3">
					<button type="button" class="btn btn-success" id="btnAgregarCuarteles" name="btn_borrar">Agregar</button>
				</div>
			</div>
		</div>
		<div><br>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Cuarteles</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" name="addTableCuarteles" id="addTableCuarteles">
						<thead>
							<tr>
								<td>Categoria</td>
								<td>Pasaje</td>
								<td>Cuartel</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>                                
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-12 col-md-offset-3">
				<button id="btnEnviarFormulario" type="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-floppy-disk"></span>
					Guardar
				</button>
				<button  class="btn btn-danger" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove"></span>
					Cancelar
				</button>
			</div>
		</div>
	</form>
	<script>
		$("#btnAgregarCuarteles").on('click',function(event) {
			
			var posicionSeparador=$("#cbxCategoria").val().indexOf(',');

			var idcbxCategoria=$("#cbxCategoria").val().substring(0,posicionSeparador);
			var categoria     =$("#cbxCategoria").val().substring(posicionSeparador+1,$("#cbxCategoria").val().length);

			var posicionSeparadorPasaje=$("#cbxPasaje").val().indexOf(',');

			var idbxPasaje=$("#cbxPasaje").val().substring(0,posicionSeparadorPasaje);
			var cbxPasaje  =$("#cbxPasaje").val().substring(posicionSeparadorPasaje+1,$("#cbxPasaje").val().length);

			var cuartel=$("#txt_cuartel").val();
			var tepCuartel= '<tr>' +
				'<td> <input type="hidden" value='+idcbxCategoria+' name="hdIdcategoria[]"> '+categoria+'</td>'+
				'<td> <input type="hidden" value='+idbxPasaje+' name="hdIdPasaje[]"> '+cbxPasaje+'</td>'+
				'<td> <input type="hidden" value='+cuartel+' name="Cuartel[]">'+cuartel+'</td>'+
				'<td class="col-md-1"><a href="#" class="btn btn-warning" onclick="$(this).parent().parent().remove();" style="color: red;font-weight: bold;text-decoration: underline;">Eliminar</a></td>'+
			'</tr>'
			$('#addTableCuarteles > tbody').append(tepCuartel);

		});

	</script>
