<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>

    <?php require "view/_partials/header.view.php"; ?>
    <section>

    <h2 class="text-center mt-5 mb-5">Įmonės info</h2>
    
    <div class="container-fluid d-flex justify-content-center">
        <div>
        <?php foreach ($tasks->info($id) as $task): ?>
            <p><b>Pavadinimas:</b> <?= $task['pavadinimas']; ?></p>
            <p><b>Kodas:</b> <?= $task['kodas']; ?></p>
            <p><b>PMV Kodas:</b> <?= $task['pvm_kodas']; ?></p>
            <p><b>Adresas:</b> <?= $task['adresas']; ?></p>
            <p><b>Tel:</b> <?= $task['telefonas']; ?></p>
            <p><b>El. paštas:</b> <?= $task['el_pastas']; ?></p>
            <p><b>Veikla:</b> <?= $task['veikla']; ?></p>
            <p><b>Vadovas:</b> <?= $task['vadovas']; ?></p>
        <?php endforeach; ?>
        </div>
    </div>
    </section>
    </body>
</html>