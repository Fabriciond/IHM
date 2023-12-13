<?php $this->extend("General"); ?>

<?php $this->section("contenido"); ?>

<script src="dist/js/three.min.js"></script>
<script src="dist/js/OBJLoader.js"></script>
<script src="dist/js/OrbitControls.js"></script>
<div id="modelo-3d">
    <canvas id="canvas"></canvas>
</div>
<script>
    // Crea la escena, la cámara y la renderer
    var scene = new THREE.Scene();

    var camera = new THREE.PerspectiveCamera(75, 435 / 600, 0.1, 1000);

    camera.position.z = 5;

    var renderer = new THREE.WebGLRenderer({ canvas: document.querySelector("#canvas") });
    renderer.setSize(435, 600);



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

<?php $this->endSection(); ?>