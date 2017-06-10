
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover">Configuración de Usuario</label>
									</div>

								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								CUARTELES
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
								CUARTELES
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
									<div class="col-sm-12">
										<div class="tabbable">
											<ul class="nav nav-tabs" id="myTab">
												<li class="active">
													<a data-toggle="tab" href="#home">
														<i class="green ace-icon fa fa-home bigger-120"></i>
														 Alquiler
													</a>
												</li>

												<li>
													<a data-toggle="tab" href="#messages">
														Nichos  Vencidos
														<span class="badge badge-danger">4</span>
													</a>
												</li>

												<li class="dropdown">
													<a data-toggle="dropdown" class="dropdown-toggle" href="#">
														Dropdown &nbsp;
														<i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
													</a>

													<ul class="dropdown-menu dropdown-info">
														<li>
															<a data-toggle="tab" href="#dropdown1">@fat</a>
														</li>

														<li>
															<a data-toggle="tab" href="#dropdown2">@mdo</a>
														</li>
													</ul>
												</li>
											</ul>

											<div class="tab-content">
											<button class="btn btn-sm btn-primary" id="btn_alquiler" data-toggle="modal" data-target="#modalAlquiler">Alquiler</button>
												<div id="home" class="tab-pane fade in active">
														<div class="row">
															<div class="col-xs-12">
																<!-- PAGE CONTENT BEGINS -->
																<div class="row">
																	<div class="col-xs-12">
																		<div class="clearfix">
																			<div class="pull-right tableTools-container"></div>
																		</div>
																		<div class="table-header">
																		CUARTELES
																		</div>

																		<!-- div.table-responsive -->

																		<!-- div.dataTables_borderWrap -->
																		<div>
																			<table id="tabla-alquiler" class="table table-striped table-bordered table-hover">
																				<thead>
																					<tr>
																						<th>ID</th>
																						<th>NOMBRE CUARTEL</th>
																						<th>CATEGORIA</th>
																						<th>PASAJE</th>
																						<th></th>
																						
																						<th></th>
																					</tr>
																				</thead>

																				<tbody>

																					
																				</tbody>
																			</table>
																		</div>
																	</div>
																</div>

																<!-- PAGE CONTENT ENDS -->
															</div><!-- /.col -->
														</div><!-- /.row -->
												</div>

												<div id="messages" class="tab-pane fade">
													<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
												</div>

												<div id="dropdown1" class="tab-pane fade">
													<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
												</div>

												<div id="dropdown2" class="tab-pane fade">
													<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
												</div>
											</div>
										</div>
									</div><!-- /.col -->
	
								</div><!-- /.row -->

					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

<!-- /.ventana alquiler -->			
<div class="modal fade" id="modalAlquiler" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CUARTEL </h4>
        </div>
        <div class="modal-body">
         <div class="row">
            <div class="col-xs-12">

                 <div class="alert alert-danger" id="erro_alquilerVali" style="text-align:left;">
							  	<strong>¡Importante!</strong> Corregir los siguientes errores.
							  	<div class="list-errors"></div>
					</div>
                  <!-- FORULARIO PARA REGISTRAR NUEVO FUNCION  -->
                <form class="form-horizontal " id="form-addAlquiler" action="<?php echo  base_url();?>Alquiler/AddAlquiler" method="POST">
                      DATOS DEL CUARTEL
                      <div class="hr hr-1 dotted hr-double"></div>
                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Nombre<span class="required">*</span></label>
	                                            <input id="txt_nombredifunto" name="txt_nombredifunto"  type="text">
	                                         </div>
                                      </div>

                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Apellido Paterno y Materno</span></label>
                                                 <input id="txt_apellidodifunto" name="txt_apellidodifunto"  type="text" >
                                            </div>
                                      </div>
                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Fecha de Fallecimiento</span></label>
                                               <input id="txt_fechaf" name="txt_fechaf" type="date">
                                            </div>
                                      </div>
                       </div>
                      DATOS DE ALQUILER
                      <div class="hr hr-1 dotted hr-double"></div>
                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Categoría<span class="required">*</span></label>
	                                            <select id="cbCategoria" name="cbCategoria" class="selectpicker" data-live-search="true"  title="Elija la Categoria">
	                                            </select>
	                                         </div>
                                      </div>
                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Cuartel</span></label>
	                                             <select id="cbCuartel" name="cbCuartel" class="selectpicker" data-live-search="true"  title="Elija el Cuartel"></select>
                                            </div>
                                      </div>
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Nivel <span class="required">*</span></label>
                                               <select id="cbxNivel" name="cbxNivel" class="selectpicker" data-live-search="true"  title="Elija nivel"> </select>
	                                         </div>
                                      </div>
                                      

                       </div>
                       
                      <!--<div class="hr hr-1 dotted hr-double"></div>-->
                       <div class="row">
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Nicho</span></label>
                                               <select id="cbNicho" name="cbNicho" class="selectpicker" data-live-search="true"  title="Elija Nicho"> </select>
                                            </div>
                                      </div>
                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Precio</span></label>
                                               <input id="txt_precio" name="txt_precio"  type="text">
                                            </div>
                                      </div>
                                      <div class="col-md-4">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                               <label  for="textbox"><span class="required">Fecha de alquiler</span></label>
                                               <input id="txt_fechaalquiler" name="txt_fechaalquiler" type="date">
                                            </div>
                                      </div>
                                     
                       </div>
                     <div class="row">
                       				<div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Fecha fin alquiler</span></label>
                                               <input id="txt_fechafinalquiler" name="txt_fechafinalquiler" type="date">
                                            </div>
                                      </div>

                                       <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Detalle</span></label>
                                               <input id="txt_detallealquiler" name="txt_detallealquiler" type="text">
                                            </div>
                                      </div>
                     </div>
                      <div class="hr hr-1 dotted hr-double"></div>
                        DATOS DEL RESPONSABLE
                      <div class="row">
                      				  <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <label  for="textbox"><span class="required">Dni</span></label>
                                               <input id="txt_Dni" name="txt_Dni"  type="text">
                                            </div>
                                      </div>
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Nombre <span class="required">*</span></label>
	                                            <input id="txt_nombreresposable" name="txt_nombreresposable"  type="text">
	                                         </div>
                                      </div>

                                      <div class="col-md-4">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                 <label for="textbox"><span class="required">Apellido</span></label>
                                                 <input id="txt_apellidoresponsable" name="txt_apellidoresponsable"  type="text">
                                            </div>
                                      </div>
                                    
                       </div>

                      <div class="row">
                                      <div class="col-md-4">
	                                        <div class="col-md-6 col-sm-6 col-xs-12">
	                                            <label  for="name">Dirección<span class="required">*</span></label>
	                                            <input id="txt_direccion" name="txt_direccion"  type="text">
	                                         </div>
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
            </div><!-- /.span -->
          </div><!-- /.row -->
        </div>
        <div class="modal-footer">
               <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <div> *Son campos obligatorios </div>
                        </div>
                </div>
        </div>
      </div>
    </div>
  </div>
<!-- /.fin alquiler-->