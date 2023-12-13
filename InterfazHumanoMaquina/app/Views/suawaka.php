<?php $this->extend("General"); ?>
<?php $this->section("maps"); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkBJfhNExN6dUnB0UBEYSjtWJ7icdkUIY"></script>
<script>
    function initMap() {

        var et = { lat: 27.967560, lng: -110.918477 };
        var ubicacion = { lat: 27.977845, lng: -111.130468 }; // Cambia las coordenadas a las que desees
        var mapa = new google.maps.Map(document.getElementById('map'), {
            center: et,
            zoom: 14, // Puedes ajustar el nivel de zoom
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            rotateControl: false,
            fullscreenControl: false,
            mapTypeId: 'satellite'
        });

        var marcador = new google.maps.Marker({
            position: et,
            map: mapa,
            title: 'Suawaka' // Cambia el título del marcador según tus necesidades
        });
        var marcador = new google.maps.Marker({
            position: ubicacion,
            map: mapa,
            title: 'Suawaka' // Cambia el título del marcador según tus necesidades
        });
    }
</script>
<?php $this->endSection(); ?>

<?php $this->section("contenido"); ?>
<div class="row">
    <div class="col-lg-4">
        <canvas data-type="linear-gauge" data-width="240" data-height="600" data-units="M" data-min-value="0"
            data-max-value="1000" data-major-ticks="0,100,200,300,400,500,600,700,800,900,1000" data-minor-ticks="2"
            data-stroke-ticks="true" data-color-plate="#F6F2F2" data-border-shadow-width="0" data-borders="false"
            data-needle-type="arrow" data-needle-width="2" data-animation-duration="1500" data-animation-rule="linear"
            data-tick-side="left" data-number-side="left" data-needle-side="left" data-bar-stroke-width="7"
            data-bar-begin-circle="false" data-value="600">
        </canvas>
        <img style="position:absolute; bottom:30%;" src="https://cdn-icons-png.flaticon.com/128/1492/1492908.png"
            alt="">
        <h3 style="position:absolute; bottom:15.5%; left:60%; color:#B3B1B1;">Vibraciones</h3>
        <h4 style="position:absolute; bottom:5.4%; left:68%; border:4px solid #636363; border-radius:8px; padding:10px 20px 10px 20px; background:#BABAB2;" >164</h4>
    </div> 
    <div class="col-lg-4"
        style="margin:0; padding:0; display: flex; flex-wrap: wrap;    align-content: stretch;    justify-content: space-around;">
        <canvas class="indicador" data-type="radial-gauge" data-width="150" data-height="150" data-units="m/s"
            data-title="Aceleracion" data-min-value="800" data-max-value="1100"
            data-major-ticks="[0,100,200,300,400,500,600,700,800,900,1000]" data-minor-ticks="2"
            data-stroke-ticks="true" data-highlights='[ {"from": 800, "to": 1100, "color": "rgba(255,0, 0, .3)"} ]'
            data-ticks-angle="255" data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd"
            data-color-title="#eee" data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222"
            data-border-shadow-width="0" data-borders="true" data-needle-type="arrow" data-needle-width="2"
            data-needle-circle-size="7" data-needle-circle-outer="true" data-needle-circle-inner="false"
            data-animation-duration="10" data-animation-rule="linear" data-color-border-outer="#333"
            data-color-border-outer-end="#111" data-color-border-middle="#222" data-color-border-middle-end="#111"
            data-color-border-inner="#111" data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
            data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
            data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222"
            data-value-box-border-radius="0" data-color-value-box-rect="#222"
            data-color-value-box-rect-end="#333"></canvas>
        <canvas class="indicador" data-type="radial-gauge" data-width="150" data-height="150" data-units="hPa"
            data-title="Presion" data-min-value="800" data-max-value="1100"
            data-major-ticks="[800,850,900,950,1000,1050,1100]" data-minor-ticks="10" data-stroke-ticks="true"
            data-highlights='[ {"from": 800, "to": 1100, "color": "rgba(0,0, 255, .3)"} ]' data-ticks-angle="255"
            data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd" data-color-title="#eee"
            data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222" data-border-shadow-width="0"
            data-borders="true" data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
            data-needle-circle-outer="true" data-needle-circle-inner="false" data-animation-duration="10"
            data-animation-rule="linear" data-color-border-outer="#333" data-color-border-outer-end="#111"
            data-color-border-middle="#222" data-color-border-middle-end="#111" data-color-border-inner="#111"
            data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
            data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
            data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222"
            data-value-box-border-radius="0" data-color-value-box-rect="#222"
            data-color-value-box-rect-end="#333"></canvas>
        <canvas class="indicador" data-type="radial-gauge" data-width="150" data-height="150" data-units="%"
            data-title="Bateria" data-min-value="0" data-max-value="100"
            data-major-ticks="[0,10,20,30,40,50,60,70,80,90,100]" data-minor-ticks="1" data-stroke-ticks="true"
            data-highlights='[ {"from": 0, "to": 20, "color": "rgba(255,0, 0, .3)"},{"from": 20, "to": 60, "color": "rgba(255,255, 0, .3)"},{"from": 60, "to": 100, "color": "rgba(0,255, 0, .3)"} ]'
            data-ticks-angle="255" data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd"
            data-color-title="#eee" data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222"
            data-border-shadow-width="0" data-borders="true" data-needle-type="arrow" data-needle-width="2"
            data-needle-circle-size="7" data-needle-circle-outer="true" data-needle-circle-inner="false"
            data-animation-duration="10" data-animation-rule="linear" data-color-border-outer="#333"
            data-color-border-outer-end="#111" data-color-border-middle="#222" data-color-border-middle-end="#111"
            data-color-border-inner="#111" data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
            data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
            data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222"
            data-value-box-border-radius="0" data-color-value-box-rect="#222"
            data-color-value-box-rect-end="#333"></canvas>
        <canvas class="indicador" data-type="radial-gauge" data-width="150" data-height="150" data-units="m/s"
            data-title="Velocidad" data-min-value="1" data-max-value="9"
            data-major-ticks="[0,100,200,300,400,500,600,700,800,900,1000]" data-minor-ticks="2"
            data-stroke-ticks="true" data-highlights='[ {"from": 1, "to": 9, "color": "rgba(0,255, 255, .3)"} ]'
            data-ticks-angle="255" data-start-angle="54" data-color-major-ticks="#ddd" data-color-minor-ticks="#ddd"
            data-color-title="#eee" data-color-units="#ccc" data-color-numbers="#eee" data-color-plate="#222"
            data-border-shadow-width="0" data-borders="true" data-needle-type="arrow" data-needle-width="2"
            data-needle-circle-size="7" data-needle-circle-outer="true" data-needle-circle-inner="false"
            data-animation-duration="10" data-animation-rule="linear" data-color-border-outer="#333"
            data-color-border-outer-end="#111" data-color-border-middle="#222" data-color-border-middle-end="#111"
            data-color-border-inner="#111" data-color-border-inner-end="#333" data-color-needle-shadow-down="#333"
            data-color-needle-circle-outer="#333" data-color-needle-circle-outer-end="#111"
            data-color-needle-circle-inner="#111" data-color-needle-circle-inner-end="#222"
            data-value-box-border-radius="0" data-color-value-box-rect="#222"
            data-color-value-box-rect-end="#333"></canvas>
        <div id="map" style="width: 100%; height: 300px;"></div>
        <script>
            initMap();
        </script>
    </div>
    <div class="col-lg-4" style="margin:0; padding:0;">
        <script src="dist/js/three.min.js"></script>
        <script src="dist/js/OBJLoader.js"></script>
        <script src="dist/js/OrbitControls.js"></script>
        <div id="modelo-3d">
            <canvas id="canvas"></canvas>
        </div>
        <script>
            // Crea la escena, la cámara y la renderer
            var scene = new THREE.Scene();

            var camera = new THREE.PerspectiveCamera(75, 450 / 600, 0.1, 1000);

            camera.position.z = 0;
            camera.position.y = -90;
            camera.position.x = 0;

            var renderer = new THREE.WebGLRenderer({ canvas: document.querySelector("#canvas") });
            renderer.setSize(450, 600);

            // Crear ejes de referencia
            const axesHelper = new THREE.AxesHelper(200); // El número 2 define la longitud de los ejes
            scene.add(axesHelper);

            const controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true; // Añade suavidad al movimiento
            controls.dampingFactor = 0.1;

            var light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(1, 0, 0);
            scene.add(light);



            var AmbientLight = new THREE.AmbientLight(0xffffff, 0.5);

            scene.add(AmbientLight);


            // Carga el modelo GLTF
            var loader = new THREE.OBJLoader();
            loader.load('<?= base_url() ?>dist/img/Modulo.obj', function (obj) {
                scene.add(obj);
            });

            // Agrega controles de órbita

            // Renderiza la escena
            function animate() {
                requestAnimationFrame(animate);
                renderer.render(scene, camera);
            }
            animate();
        </script>

    </div>

</div>
<?php $this->endSection(); ?>