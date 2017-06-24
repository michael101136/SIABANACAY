<!DOCTYPE html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <title>Basic initialization</title>
  <script>
    var base_url = '<?php echo base_url(); ?>';
    </script>
</head>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/gant/codebase/dhtmlxgantt.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/gant/codebase/dhtmlxgantt.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/gant/samples/common/testdata.js"></script>
  <style type="text/css">
    html, body{ height:100%; padding:0px; margin:0px; overflow: hidden;}
  </style>
<body>
  <div id="gantt_here" style='width:100%; height:100%;'></div>
  <script type="text/javascript">



        lista();
         function lista()
          {
            $.ajax({
              "url": base_url+"index.php/Cuartel/get_cuartel",
              type:"POST",
              data:$(this).serialize(),
              success:function(respuesta){
                var registros = eval(respuesta);
                  alert(respuesta);
                   gantt.config.xml_date = "%Y-%m-%d %H:%i:%s";
                   gantt.init("gantt_here");



              }
            });
          }

        /*var tasks =  {
            data:[
                {id:1, text:"Project #2", start_date:"01-04-2013", duration:18,order:10,
                    progress:0.4, open: true},
                {id:2, text:"Task #1",    start_date:"02-04-2013", duration:8, order:10,
                    progress:0.6, parent:1},
                {id:3, text:"Task #2",    start_date:"11-04-2013", duration:8, order:20,
                    progress:0.6, parent:1}
            ],
                    links:[
            { id:1, source:1, target:2, type:"1"},
            { id:2, source:2, target:3, type:"0"},
            { id:3, source:3, target:4, type:"0"},
            { id:4, source:2, target:5, type:"2"},
        ]
        };*/



  </script>
</body>
