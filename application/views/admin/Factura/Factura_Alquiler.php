<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Provincias españolas en pdf</title>
   <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>

    <style type="text/css">
        body {
         background-color: #fff;
         margin: 10px;
         font-family: Lucida Grande, Verdana, Sans-serif;
         font-size: 14px;
         color: #4F5155;
        }

        a {
         color: #003399;
         background-color: transparent;
         font-weight: normal;
        }

        h1 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 24px 0 2px 0;
         padding: 5px 0 6px 0;
        }

        h2 {
         color: #444;
         background-color: transparent;
         border-bottom: 1px solid #D0D0D0;
         font-size: 16px;
         font-weight: bold;
         margin: 2px 0 2px 0;
         padding: 5px 0 6px 0;
         text-align: center;
        }

        table{
            text-align: center; 
        }

        /* estilos para el footer y el numero de pagina */
        @page { margin: 180px 50px; }
        #header {
            position: fixed;
            left: 0px; top: -180px;
            right: 0px;
            height: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }
        #footer {
            position: fixed;
            left: 0px;
            bottom: -180px;
            right: 0px;
            height: 20px;
            background-color: #333;
            color: #fff;
        }
        #footer .page:after {
            content: counter(page, upper-roman);
        }
    </style>
</head>
<body>
    <!--header para cada pagina-->
    <div id="header">
        <?php echo $title ?>
    </div>
    <!--footer para cada pagina-->
    <div id="footer">
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    </div>
    <h2>Beneficencia</h2>
    <table class="table table-bordered"  width="575" border="2" cellspacing="2">
        <thead>
            <tr colspan="12">
                <th colspan="5" rowspan="3">DIFERENCIAS ENTRE EL PERRO Y EL HOMBRE</th>
                <th colspan="7" rowspan="3">DIFERENCIAS ENTRE EL PERRO Y EL HOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($factura as $factura) { ?>
            <tr colspan="12">
                <td><?php echo $factura->nombrepasaje?></td>
                <td><?php echo $factura->nombre_cuartel?></td>
                <td><?php echo $factura->numero_nicho?></td>
                <td><?php echo $factura->nombre?></td>
                <td><?php echo $factura->responsable?></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
<table width="575" border="2">
   <tr>
    <th colspan="5">Producto</th>

    <th colspan="5">Precio</th>
   </tr>
   <tr>
    <td colspan="12">Tijeras</td>
   </tr>
   <tr>
    <td colspan="12">Tijeras</td>
   </tr>
   <tr>
    <td colspan="1">CANT.</td>
    <td colspan="7">DESCRIPCIÓN</td>
    <td>P.UNIT.</td>
    <td>MPORTE</td>
   </tr>
   <tr>
    <td colspan="1">--</td>
    <td colspan="7">--</td>
    <td>--</td>
    <td>--</td>
   </tr>
   <tr>
    <td colspan="1">--</td>
    <td colspan="7">--</td>
    <td>--</td>
    <td>--</td>
   </tr>
   <tr>
    <td colspan="1">--</td>
    <td colspan="7">--</td>
    <td>--</td>
    <td>--</td>
   </tr>
   <tr>
    <td colspan="1">--</td>
    <td colspan="7">--</td>
    <td>--</td>
    <td>--</td>
   </tr>
   <tr>
        <td colspan="3">Subtotal</td>
        <td>250</td>
   </tr> 
   <tr>
        <td colspan="3">Gastos de envío</td>
        <td>5</td>
       </tr> 
   <tr>
        <td colspan="3">Precio total</td>
        <td>255</td>
   </tr> 
  </table>

         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
</body>
</html>
