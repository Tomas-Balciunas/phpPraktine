<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>
    <?php require "view/_partials/header.view.php"; ?>
    <section>

    <h2 class="text-center title">Imoniu Sarasas</h2>

    <div class="container-fluid d-flex justify-content-center mb-5">
    <table class="table-condensed">
        <tr>
            <th scope="col">Įmonės pavadinimas</th>
            <th scope="col">Kodas</th>
            <th scope="col">Adresas</th>
            <th scope="col">El.paštas</th>
        </tr>
        <?php foreach ($tasks->fullList() as $task): ?>
        
        <tr>
            <td scope="col"><a href="/atsiskaitymas/info/<?= $task['id'] ?>"><?= $task['pavadinimas']; ?></a></td>
            <td scope="col"><?= $task['kodas']; ?></td>
            <td scope="col"><?= $task['adresas']; ?></td>
            <td scope="row"><?= $task['el_pastas']; ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
    </div>
    </section>
    </body>
</html>