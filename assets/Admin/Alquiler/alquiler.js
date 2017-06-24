 $(document).on("ready" ,function(){

          ControlAlquiler();
          listaAlquiler();
          lista();
          $("#btn_alquiler").click(function(){
                  get_categoria();
          });
          $("#txt_fechafinalquiler").blur(function(){
            var fecha = new Date();
            fechaA=$("#txt_fechaalquiler").val();
            fechaAFinal=$("#txt_fechafinalquiler").val();
            if(fechaA < fechaAFinal)
              {
              }else
              {
                alert("fecha de inicio de alquiler es mayor");
              }
          })

          $("#cbCategoria").change(function(){
            var categoria=$("#cbCategoria").val();
              get_cuartel(categoria);
          });
          $("#cbCuartel").change(function(){
            var id_cuartel=$("#cbCuartel").val();
             get_nivel(id_cuartel);
          });
          $("#cbxNivel").change(function(){
            var id_cuartel=$("#cbCuartel").val();
            var nivel=$("#cbxNivel").val();
             get_nicho(id_cuartel,nivel);
          });
                //AGREGAR ALQUILER
                $("#form-addAlquiler").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Alquiler/AddAlquiler",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          alert(respuesta);
                          $('#tabla-alquiler').dataTable()._fnAjaxUpdate();
                        }
                    });

                });
                //FIN AGREGAR ALQUILER

                //AGREGAR ALQUILER
                $("#form-ModificarAlquiler").submit(function(event)
                {
                    event.preventDefault();
                    $.ajax({
                        url:base_url+"index.php/Alquiler/ModificarAlquiler",
                        type:$(this).attr('method'),
                        data:$(this).serialize(),
                        success:function(respuesta){
                          alert(respuesta);
                          $('#tabla-alquiler').dataTable()._fnAjaxUpdate();
                        }
                    });

                });
                //FIN AGREGAR ALQUILER




			});
        var get_categoria=function(){
          html="";
                    $("#cbCategoria").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/Get_categoria",
                        type:"POST",
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_categoria"]+"> "+registros[i]["categoria"]+" </option>";
                            };
                            $("#cbCategoria").html(html);//para modificar las entidades
                        }
                    });
        }
        //para el control de pagos
        var  ControlAlquiler=function(){

              $.ajax({
                        "url":base_url +"index.php/Alquiler/ControlAlquiler",
                        type:"POST",
                        data:{},
                        success:function(respuesta){

                        }
                    });

        }
        //fin control de pagos
        var get_cuartel=function(categoria){
          html="";
                    $("#cbCuartel").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_cuartel",
                        type:"POST",
                        data:{categoria:categoria},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["id_cuartel"]+"> "+registros[i]["nombre_cuartel"]+" </option>";
                            };
                            $("#cbCuartel").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
        }
        var  get_nivel=function(id_cuartel){
                    html="";
                    $("#cbxNivel").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_nivel",
                        type:"POST",
                        data:{id_cuartel:id_cuartel},
                        success:function(respuesta){
                          var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                              html +="<option value="+registros[i]["nivel"]+"> "+registros[i]["nivel"]+" </option>";
                            };
                            $("#cbxNivel").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');

                       //alert(respuesta);
                        }
                    });
        }
        var  get_nicho=function(id_cuartel,nivel){
                    html="";
                    $("#cbNicho").html(html);
                    event.preventDefault();
                    $.ajax({
                        "url":base_url +"index.php/Alquiler/get_nicho",
                        type:"POST",
                        data:{id_cuartel:id_cuartel,nivel:nivel},
                        success:function(respuesta){
                           var registros = eval(respuesta);
                            for (var i = 0; i <registros.length;i++) {
                                 if(registros[i]["estado"]==1)
                                 {
                                     html +="<option style='color:red' disabled='disabled' value="+registros[i]["id_nicho"]+">" +registros[i]["numero_nicho"]+" Ocupado</option>";
                                 }else{
                                   html +="<option value="+registros[i]["id_nicho"]+"> "+registros[i]["numero_nicho"]+" </option>";
                                 }
                            };
                            $("#cbNicho").html(html);//para modificar las entidades
                            $('.selectpicker').selectpicker('refresh');
                        }
                    });
        }
      var listaAlquiler=function()
                {
                    var table=$("#tabla-alquiler").DataTable({
                     "processing":true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      "scrollY":        "200px",
        "scrollCollapse": true,
                      "serverSide": false,
                         "ajax":{
                                    "url": base_url+"index.php/Alquiler/get_alquiler",
                                    "type":"POST",
                                    "dataSrc":""
                                    },
                                "columns":[
                                     {"data":"id_nicho_detalle","visible": false},
                                    {"data":"nombrepasaje"},
                                    {"data":"categoria"},
                                    {"data":"nombre_cuartel"},
                                    {"data":"numero_nicho"},
                                    {"data":"nivel"},
                                    {"data":"id_difunto","visible": false},
                                    {"data":"tnombre"},
                                    {"data":"tapellido"},
                                    {"data":"fecha_fallecimiento","visible": false},
                                    {"data":"idresponsable","visible": false},
                                    {"data":"Dni_responsable","visible": false},
                                    {"data":"nombre_responsable"},
                                    {"data":"apellido_responsable"},
                                    {"data":"fecha_inicio"},
                                    {"data":"fecha_final"},
                                    {"data":"MontoAlquiler"},
                                    {"data": "EstadoA", "defaultContent": "<button>Estado</button>", "class": "center","render": function ( data, type, full, meta )
                                        {
                                          var i=data;
                                          if(i==1)
                                          {
                                            return '<a href="'+data+'"><span class="label label-sm label-success"> Pago</span></a>'
                                          }else{
                                            return '<a href="'+data+'"><span class="label label-sm label-danger"> Vencido</span></a>'
                                          }
                                       }
                                     },
                                    {"defaultContent":"<button class='btn btn-xs btn-danger' data-toggle='modal' data-target='#' data-rel='tooltip' title='Eliminar'><i class='ace-icon fa fa-trash-o bigger-120'></i> </button> <button class='editar btn btn-xs btn-info' data-toggle='modal' data-target='#VentanaModificarAlquiler' data-rel='tooltip' title='Editar'><i class='ace-icon fa fa-pencil bigger-120'></i> </button>"}

                                ],

                                "language":idioma_espanol,
                                "lengthMenu": [[4, 10, 20,100], [4, 10, 20, 100]],

                    });
                   Datalquiler("#tabla-alquiler",table);  //obtener data de la division funcional para agregar  AGREGAR
                }
                var  Datalquiler=function(tbody,table)
                {
                    $(tbody).on("click","button.editar",function(){
                        var data=table.row( $(this).parents("tr")).data();
                          $('#Id_alquileINichoDetalle').val(data.id_nicho_detalle);
                          $('#txt_nombredifuntoModicar').val(data.tnombre);
                          $('#txt_apellidodifuntoModicar').val(data.tapellido);
                          $('#id_difuntoModificar').val(data.id_difunto);


                          $('#txt_fechafDifucionModicar').val(data.fecha_fallecimiento);
                          //fecha de alquiler
                          $('#txt_fechaalquilerModicar').val(data.fecha_inicio);
                          $('#txt_fechafinalquilerModicar').val(data.fecha_final);
                          //fin fecha de alquiler

                          //Datos del responsable
                          $('#txt_nombreresposableModicar').val(data.nombre_responsable);
                          $('#txt_apellidoresponsableModicar').val(data.apellido_responsable);
                          $('#txt_DniModicar').val(data.Dni_responsable);
                          $('#txt_idresponsableModificar').val(data.idresponsable);

                          //fin datos del responsable


                    });

                }



        var idioma_espanol=
                {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }

     function lista()
					{
						event.preventDefault();
						$.ajax({
              "url": base_url+"index.php/Alquiler/get_alquiler",
							type:"POST",
							success:function(respuesta){
								console.log(respuesta);

							}
						});
					}
