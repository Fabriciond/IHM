<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Horus</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <script src="//cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.7/all/gauge.min.js"></script>
  <link rel="stylesheet" href="dist/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/principal.css">
  <?php $this->renderSection('maps'); ?>
</head>

<body>
  <div>
    <header id="header">
      <img src="dist\img\AdminLTELogo.png" alt="">
    </header>
    <div class="container-fluid">


      <?php $this->renderSection("contenido"); ?>


    </div>
  </div>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    setInterval(function () {
      $.ajax({
        url: "http://api.test/datosMax",
        type: "GET",
        dataType: "json",
        success: function (data) {
          console.log(data);
          temp = data.map(function (d) {
            return d.temperatura;
          });
          alt = data.map(function (d) {
            return d.altitud;
          });
          uv = data.map(function (d) {
            return d.uv;
          });
          humedad = data.map(function (d) {
            return d.humedad;
          });
          pres = data.map(function (d) {
            return d.presion;
          });
          co2 = data.map(function (d) {
            return d.co2;
          });
          $("#tempetarure").attr("data-value", temp);
          $("#altitud").attr("data-value", alt);
          $("#uv").attr("data-value", uv);
          $("#humedad").attr("data-value", humedad);
          $("#presion").attr("data-value", pres);
          $("#co2I").attr("data-value", co2);

        }
      });

    }, 100);
  </script>
</body>

</html>