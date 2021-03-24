<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>
    <?php require "view/_partials/header.view.php"; ?>
    <section>

    <h2 class="text-center title">Imoniu Sarasas</h2>

    <div class="container-fluid d-flex justify-content-center mb-5">
    <table>
        <tr>
            <th>Įmonės pavadinimas</th>
            <th>Kodas</th>
            <th>PVM Kodas</th>
            <th>Adresas</th>
            <th>Tel.</th>
            <th>El.paštas</th>
            <th>Veikla</th>
            <th>Vadovas</th>
        </tr>
        <?php foreach ($tasks->fullList() as $task): ?>
        
        <tr>
            <td><a href="/atsiskaitymas/info/<?= $task['id'] ?>"><?= $task['pavadinimas']; ?></a></td>
            <td><?= $task['kodas']; ?></td>
            <td><?= $task['pvm_kodas']; ?></td>
            <td><?= $task['adresas']; ?></td>
            <td><?= $task['telefonas']; ?></td>
            <td><?= $task['el_pastas']; ?></td>
            <td><?= $task['veikla']; ?></td>
            <td><?= $task['vadovas']; ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
    </div>
    </section>
    </body>
</html>