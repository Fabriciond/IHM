<?php $this->extend("General"); ?>

<?php $this->section("contenido"); ?>
<div class="col-12">
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Presion</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Medicion</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($tpa as $key => $tem) { ?>
                    <tr>

                        <td>
                            <?= $tem["presion"] ?>
                        </td>
                        <td>
                            <?= $tem["tiempo"] ?>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>
</div>

<?php $this->endSection(); ?>