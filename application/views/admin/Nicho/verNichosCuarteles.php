	<div class="hr hr-1 dotted hr-double">
		
	</div>
	<div class="row">
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"></h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover" name="addTableNichos" id="addTableNichos">
						<thead>
							<tr class="bg-success">
								<td>Nivel</td>
								<td>Cuartel</td>
								<td>Numero Nicho</td>
								<td>Precio</td>
							</tr>
						</thead>
						<tbody>
							  <?php foreach ($CuartelesPadres as $itemp1) {?>
									 <tr>
									    <td> <?= $itemp1->nivel?> </td>
									      <?php foreach ($listarNichosCuarteleId as $itemp) {?>
										   		<tr>
										   		 <?php if($itemp->nivel==$itemp1->nivel){?>
										   		 	 <td>  </td>
										   		 	 <td> <?= $itemp->nombre_cuartel?> </td>
											   		 <td> <?= $itemp->numero_nicho?> </td>
											   		 <td> S/. <?= $itemp->precio?> </td>
											    <?php }?>
											    </tr>
									   	 <?php }?>
									 </tr>
							  	<?php }?>
						</tbody>
					</table>                                
				</div>
			</div>
	<br>