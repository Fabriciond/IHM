<?php $this->extend("General"); ?>

<?php $this->section("contenido"); ?>
<div class="row">
  <div class="col-12">

    <canvas class="indicador" id="altitud" data-type="radial-gauge" data-width="150" data-height="150" data-units="m"
      data-title="Altitud" data-major-ticks="0,100,200,300,400,500" data-min-value="0s" data-max-value="500"
      data-minor-ticks="2" data-stroke-ticks="true"
      data-highlights='[ {"from": 0, "to": 500, "color": "rgba(0,0, 255, .3)"} ]' data-ticks-angle="225"
      data-start-angle="67.5" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd" data-color-title="#eee"
      data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222" data-border-shadow-width="0"
      data-borders="true" data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
      data-needle-circle-outer="true" data-needle-circle-inner="true" data-animation-duration="10"
      data-animation-rule="linear" data-color-border-outer="#333" data-color-border-outer-end="#111"
      data-color-border-middle="#222" data-color-border-middle-end="#111" data-color-border-inner="#111"
      data-color-border-inner-end="#333" data-color-needle-shadow-down="#333" data-color-needle-circle-outer="#333"
      data-color-needle-circle-outer-end="#111" data-color-needle-circle-inner="#111"
      data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0" data-color-value-box-rect="#222"
      data-color-value-box-rect-end="#333"></canvas>

    <canvas class="indicador" id="tempetarure" data-type="radial-gauge" data-width="150" data-height="150"
      data-units="°C" data-title="Temperature" data-min-value="0" data-max-value="45" data-major-ticks="[0,10,20,30,45]"
      data-minor-ticks="1" data-stroke-ticks="true" data-highlights='[ {"from": 0, "to": 28, "color": "rgba(0,0, 255, .3)"},
        {"from": 28, "to": 45, "color": "rgba(255, 0, 0, .3)"} ]' data-ticks-angle="255" data-start-angle="54"
      data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd" data-color-title="#eee" data-color-units="#ccc"
      data-color-numbers="#eee" data-color-plate="#222" data-border-shadow-width="0" data-borders="true"
      data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7" data-needle-circle-outer="true"
      data-needle-circle-inner="false" data-animation-duration="10" data-animation-rule="linear"
      data-color-border-outer="#333" data-color-border-outer-end="#111" data-color-border-middle="#222"
      data-color-border-middle-end="#111" data-color-border-inner="#111" data-color-border-inner-end="#333"
      data-color-needle-shadow-down="#333" data-color-needle-circle-outer="#333"
      data-color-needle-circle-outer-end="#111" data-color-needle-circle-inner="#111"
      data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0" data-color-value-box-rect="#222"
      data-color-value-box-rect-end="#333"></canvas>
    <canvas class="indicador" id="presion" data-type="radial-gauge" data-width="150" data-height="150" data-units="hPa"
      data-title="Presion" data-min-value="800" data-max-value="1100"
      data-major-ticks="[800,850,900,950,1000,1050,1100]" data-minor-ticks="10" data-stroke-ticks="true"
      data-highlights='[ {"from": 800, "to": 1100, "color": "rgba(0,0, 255, .3)"} ]' data-ticks-angle="255"
      data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd" data-color-title="#eee"
      data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222" data-border-shadow-width="0"
      data-borders="true" data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
      data-needle-circle-outer="true" data-needle-circle-inner="false" data-animation-duration="10"
      data-animation-rule="linear" data-color-border-outer="#333" data-color-border-outer-end="#111"
      data-color-border-middle="#222" data-color-border-middle-end="#111" data-color-border-inner="#111"
      data-color-border-inner-end="#333" data-color-needle-shadow-down="#333" data-color-needle-circle-outer="#333"
      data-color-needle-circle-outer-end="#111" data-color-needle-circle-inner="#111"
      data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0" data-color-value-box-rect="#222"
      data-color-value-box-rect-end="#333"></canvas>
    <canvas class="indicador" id="uv" data-type="radial-gauge" data-width="150" data-height="150" data-units="UV"
      data-title="Indice" data-min-value="1" data-max-value="15"
      data-major-ticks="[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]" data-minor-ticks="1" data-stroke-ticks="true"
      data-highlights='[ {"from": 1, "to": 3, "color": "rgba(0,255, 0)"},{"from": 3, "to": 6, "color": "rgba(255,230, 0)"},{"from": 6, "to": 8, "color": "rgba(240, 130, 57, 1)"},{"from": 8, "to": 11, "color": "rgba(255, 0, 0, 1)"},{"from": 11, "to": 15, "color": "rgba(212, 69, 193, 1)"} ]'
      data-ticks-angle="255" data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd"
      data-color-title="#eee" data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222"
      data-border-shadow-width="0" data-borders="true" data-needle-type="arrow" data-needle-width="2"
      data-needle-circle-size="7" data-needle-circle-outer="true" data-needle-circle-inner="false"
      data-animation-duration="10" data-animation-rule="linear" data-color-border-outer="#333"
      data-color-border-outer-end="#111" data-color-border-middle="#222" data-color-border-middle-end="#111"
      data-color-border-inner="#111" data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
      data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
      data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0"
      data-color-value-box-rect="#222" data-color-value-box-rect-end="#333"></canvas>
    <canvas class="indicador" id="humedad" data-type="radial-gauge" data-width="150" data-height="150" data-units="%"
      data-title="Humedad" data-min-value="0" data-max-value="100" data-major-ticks="[0,10,20,30,40,50,60,70,80,90,100]"
      data-minor-ticks="1" data-stroke-ticks="true"
      data-highlights='[ {"from": 0, "to": 100, "color": "rgba(0, 0,255)"} ]' data-ticks-angle="255"
      data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd" data-color-title="#eee"
      data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222" data-border-shadow-width="0"
      data-borders="true" data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
      data-needle-circle-outer="true" data-needle-circle-inner="false" data-animation-duration="10"
      data-animation-rule="linear" data-color-border-outer="#333" data-color-border-outer-end="#111"
      data-color-border-middle="#222" data-color-border-middle-end="#111" data-color-border-inner="#111"
      data-color-border-inner-end="#333" data-color-needle-shadow-down="#333" data-color-needle-circle-outer="#333"
      data-color-needle-circle-outer-end="#111" data-color-needle-circle-inner="#111"
      data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0" data-color-value-box-rect="#222"
      data-color-value-box-rect-end="#333"></canvas>
    <canvas class="indicador" id="co2I" data-type="radial-gauge" data-width="150" data-height="150" data-units="ppm"
      data-title="Co2" data-min-value="0" data-max-value="500"
      data-major-ticks="[0,100,150,200,250,300,350,400,450,500]" data-minor-ticks="1" data-stroke-ticks="true"
      data-highlights='[ {"from": 0, "to": 100, "color": "rgba(0,255, 0)"},{"from": 100, "to": 300, "color": "rgba(255,230, 0)"},{"from": 300, "to": 400, "color": "rgba(240, 130, 57, 1)"},{"from": 400, "to": 500, "color": "rgba(255, 0, 0, 1)"}]'
      data-ticks-angle="255" data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd"
      data-color-title="#eee" data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222"
      data-border-shadow-width="0" data-borders="true" data-needle-type="arrow" data-needle-width="2"
      data-needle-circle-size="7" data-needle-circle-outer="true" data-needle-circle-inner="false"
      data-animation-duration="10" data-animation-rule="linear" data-color-border-outer="#333"
      data-color-border-outer-end="#111" data-color-border-middle="#222" data-color-border-middle-end="#111"
      data-color-border-inner="#111" data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
      data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
      data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222" data-value-box-border-radius="0"
      data-color-value-box-rect="#222" data-color-value-box-rect-end="#333"></canvas>
  </div>
</div>
<div class="row">
  <div class="col-6" id="chart-container">

    <canvas id="humedadGraf"></canvas>
  </div>
  <div class="col-6" id="chart-containerPresion">
    <canvas id="Presion"></canvas>
  </div>

  <script src="dist/js/chart.js"></script>
  <script src="dist/js/jquery-3.6.0.min.js"></script>

  <script>
    setInterval(function () {
      var myChart;

      function cargarDatos() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatos(data);
          },
          error: function () {
            console.log('Error al cargar los datos.');
          }
        });
      }

      function graficarDatos(data) {
        var canvas = document.getElementById('humedadGraf');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-container');
        div.innerHTML = '<canvas id="humedadGraf"></canvas>';
        canvas = document.getElementById('humedadGraf');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'Humedad (%)',
              data: data.map(function (d) {
                return d.humedad;
              }),
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            },
            ]
          },
          options: {
            animation: {
              duration: 0
            }
          }
        });
      }

      $(document).ready(function () {
        cargarDatos();
      });
    }, 100);
  </script>

  <script>
    setInterval(function () {

      function cargarDatosPresion() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatosPresion(data);
          },
          error: function () {
            console.log('Error al cargar los datos.');
          }
        });
      }

      function graficarDatosPresion(data) {
        var canvas = document.getElementById('Presion');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-containerPresion');
        div.innerHTML = '<canvas id="Presion"></canvas>';
        canvas = document.getElementById('Presion');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'Presión (hPa)',
              data: data.map(function (d) {
                return d.presion;
              }),
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1,
              showLine: true
            }]
          },
          options: {
            animation: {
              duration: 0
            }

          }
        });


      }
      $(document).ready(function () {
        cargarDatosPresion();
      });
    }, 100);
  </script>
</div>
<div class="row">


  <div class="col" id="chart-containerTemperatura">
    <canvas id="temperatur"></canvas>
  </div>
  <div class="col" id="chart-containerAltitud">
    <canvas id="Altitud"></canvas>
  </div>
  <script>
    setInterval(function () {
      var myChart;

      function cargarDatosTemperatura() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatosTemperatura(data);
          },
          error: function () {
            console.log('Error al cargar los datos.');
          }
        });
      }

      function graficarDatosTemperatura(data) {
        var canvas = document.getElementById('temperatur');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-containerTemperatura');
        div.innerHTML = '<canvas id="temperatur"></canvas>';
        canvas = document.getElementById('temperatur');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'Temperatura (°C)',
              data: data.map(function (d) {
                return d.temperatura_dht;
              }),
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            }]
          },
          options: {
            animation: {
              duration: 0
            }
          }
        });
      }

      $(document).ready(function () {
        cargarDatosTemperatura();
      });
    }, 100);
  </script>

  <script>
    setInterval(function () {

      function cargarDatosAltitud() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatosAltitud(data);
          },
          error: function () {
            console.log('Error al cargar los datos.');
          }
        });
      }

      function graficarDatosAltitud(data) {
        var canvas = document.getElementById('Altitud');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-containerAltitud');
        div.innerHTML = '<canvas id="Altitud"></canvas>';
        canvas = document.getElementById('Altitud');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'Altitud (m)',
              data: data.map(function (d) {
                return d.altitud;
              }),
              backgroundColor: 'rgba(255, 206, 86, 0.2)',
              borderColor: 'rgba(255, 206, 86, 1)',
              borderWidth: 1
            }]
          },
          options: {
            animation: {
              duration: 0
            }
          }
        });
      }
      $(document).ready(function () {
        cargarDatosAltitud();
      });
    }, 100);
  </script>

</div>

<div class="row">

  <div class="col" id="chart-containerUv">

    <canvas id="uvGraf"></canvas>
  </div>
  <div class="col" id="chart-containerco2">
    <canvas id="co2"></canvas>
  </div>

  <script src="dist/js/chart.js"></script>
  <script src="dist/js/jquery-3.6.0.min.js"></script>

  <script>
    setInterval(function () {
      var myChart;

      function cargarDatosUv() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatosUv(data);
          },
          error: function () {
            console.log('Error al cargar los datosUv.');
          }
        });
      }

      function graficarDatosUv(data) {
        var canvas = document.getElementById('uvGraf');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-containerUv');
        div.innerHTML = '<canvas id="uvGraf"></canvas>';
        canvas = document.getElementById('uvGraf');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'Indice (uv)',
              data: data.map(function (d) {
                return d.indice_uv;
              }),
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
            },
            ]
          },
          options: {
            animation: {
              duration: 0
            }
          }
        });
      }

      $(document).ready(function () {
        cargarDatosUv();
      });
    }, 100);
  </script>

  <script>
    setInterval(function () {

      function cargarDatosco2() {

        $.ajax({
          url: 'http://api.test/ili',
          dataType: 'json',
          success: function (data) {
            graficarDatosco2(data);
          },
          error: function () {
            console.log('Error al cargar los datos.');
          }
        });
      }

      function graficarDatosco2(data) {
        var canvas = document.getElementById('co2');
        if (canvas) {
          canvas.remove();
        }
        var div = document.getElementById('chart-containerco2');
        div.innerHTML = '<canvas id="co2"></canvas>';
        canvas = document.getElementById('co2');

        var ctx = canvas.getContext('2d');

        var myChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: data.map(function (d) {
              return d.tiempo;
            }),
            datasets: [{
              label: 'C02 (ppm)',
              data: data.map(function (d) {
                return d.co2;
              }),
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1,
              showLine: true
            }]
          },
          options: {
            animation: {
              duration: 0
            }

          }
        });


      }
      $(document).ready(function () {
        cargarDatosco2();
      });
    }, 100);
  </script>
</div>

<?php $this->endSection(); ?>