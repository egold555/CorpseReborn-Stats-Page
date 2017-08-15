<?php
   include("fusioncharts.php");
?>
<html>

   <head>
    <title>CorpseReborn Stats</title>

     <script type="text/javascript" src="js/fusioncharts.js"></script>

     <style>
     .inlineChart div { display: inline }
     </style>

   </head>
   <body>
    <?php
       
        $versionChart = new FusionCharts("doughnut2d", "versionChart" , 450, 450, "versionChart-js", "jsonurl", "software.json");
        $softwareChart = new FusionCharts("doughnut2d", "softwareChart" , 450, 450, "softwareChart-js", "jsonurl", "version.json");

        
        $versionChart->render();
        $softwareChart->render();
    ?>
    
      <span class="inlineChart">
        <div id="versionChart-js"><!-- Fusion Charts will render here--></div>
        <div id="softwareChart-js"><!-- Fusion Charts will render here--></div>
      </span>
   </body>
</html>