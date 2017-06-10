 $(document).on("ready" ,function(){
          //lista();
              ListarCuartel(); //LLAMAR AL METODO META PRESUPUESTAL
     
			});

//-------------- MANTENIMIENTO DE META PRESUPUESTAL----------------------
/*LISTAR LOS META PRESUPUESTAL EN UN DATATABLE*/
               var ListarCuartel=function() 
                {
                    var table=$("#tabla-cuartel").DataTable({
                     "processing":true,
                      "scrollY": 350,
                      "scrollX": true,
                      "scrollCollapse": true,
                      "paging":         true,
                      destroy:true,
                      dataSrc:"",
                         "ajax":{
                                    "url":base_url +"index.php/Cuartel/get_alquiler",
                                    "method":"POST",
                                     "dataSrc":""
                                    },
       //para llenado y busqueda por todo los campos
                                "columns":[
                                    {"data":"id_cuartel"},
                                    {"data":"nombre_cuartel"},
                                    
                                    {"defaultContent":"<button type='button' class='editar btn btn-primary btn-xs' data-toggle='modal' data-target='#VentanaModificarMetaP'><i class='ace-icon fa fa-pencil bigger-120'></i></button><button type='button' class='eliminar btn btn-danger btn-xs' data-toggle='modal' data-target='#'><i class='fa fa-trash-o'></i></button>"}
                                ],

                                "language":idioma_espanol
                    });  
                }
/*FIN DE LISTAR META PRESUPUESTAL EN UN DATATABLE*/


  


       


