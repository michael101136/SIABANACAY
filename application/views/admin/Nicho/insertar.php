<form class="form-horizontal " id="form-addnicho" action="<?php echo  base_url();?>index.php/Nicho/insertar" method="POST">
	<div class="hr hr-1 dotted hr-double"></div>

	<div class="row">
		DATOS DEL NICHO<br><br>
		<div class="form-group">

			<label class="col-md-1 control-label">Cuartel</label>
			<div class="col-md-3">
				<input id="hdIdcuartel" name="hdIdcuartel" value= "<?=$listarCbxcuartel->id_cuartel;?>" class="form-control" type="hidden">
				<input id="txtCuartel" name="txtCuartel" value="<?=$listarCbxcuartel->nombre_cuartel;?>" class="form-control" type="text" >
			</div>

			<label class="col-md-1 control-label">N° Nicho</label>
			<div class="col-md-3">
				<input id="txt_num_nicho" name="txt_num_nicho" class="form-control" type="text">
			</div>
			<label class="col-md-1 control-label">Nivel</label>
			<div class="col-md-3">
				<input id="txt_nivel_nicho" name="txt_nivel_nicho" class="form-control" type="text">
			</div>

		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Precio</label>
			<div class="col-md-3">
				<input id="txt_precio_nicho" name="txt_precio_nicho" class="form-control" type="text">
			</div>
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id="btnAgregarNichos" name="btnAgregarNichos">Agregar</button>
			</div>
			
		</div>
	</div>

	<br><br>
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Cuarteles</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" name="addTableNichos" id="addTableNichos">
						<thead>
							<tr>
								<td>Nicho</td>
								<td>Nivel</td>
								<td>Precio</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>                                
				</div>
			</div>
	<br>
	<div class="form-group">
		<div class="col-md-12 col-md-offset-3">
			<button id="send" type="submit" class="btn btn-success">
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
		$("#btnAgregarNichos").on('click',function(event) {

			var txt_num_nicho=$("#txt_num_nicho").val();
			var txt_nivel_nicho=$("#txt_nivel_nicho").val();
			var txt_precio_nicho=$("#txt_precio_nicho").val();
			var tempNichos= '<tr>'+
				'<td> <input type="hidden" value='+txt_num_nicho+' name="hdtxt_num_nicho[]"> '+txt_num_nicho+'</td>'+
				'<td> <input type="hidden" value='+txt_nivel_nicho+' name="hdtxt_nivel_nicho[]">'+txt_nivel_nicho+'</td>'+
				'<td> <input type="hidden" value='+txt_precio_nicho+' name="hdtxt_precio_nicho[]">'+txt_precio_nicho+'</td>'+
				'<td class="col-md-1"><a href="#" class="btn btn-warning" onclick="$(this).parent().parent().remove();" style="color: red;font-weight: bold;text-decoration: underline;">Eliminar</a></td>'+
			'</tr>'
			$('#addTableNichos > tbody').append(tempNichos);

		});

	</script>

