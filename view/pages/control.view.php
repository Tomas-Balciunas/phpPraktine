<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>
    <?php require "view/_partials/header.view.php"; ?>
    <section>
    
    <h2 class="text-center title">Kurti įmonę</h2>

    <div class="container-fluid">
        <form method="post">
        <div class="row d-flex justify-content-center mt-5 mb-1">
            <input type="text" name="pavadinimas" id="pavadinimas" placeholder="Iveskite įmonės pavadinimą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="kodas" id="kodas" placeholder="Iveskite įmonės kodą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="pvmkodas" id="pvmkodas" placeholder="Iveskite įmonės PVM kodą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="adresas" id="adresas" placeholder="Iveskite įmonės adresą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="tel" id="tel" placeholder="Iveskite įmonės telefoną"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="elpastas" id="elpastas" placeholder="Iveskite įmonės el. paštą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="veikla" id="veikla" placeholder="Iveskite įmonės veiklą"/>
        </div>
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="vadovas" id="vadovas" placeholder="Iveskite įmonės vadovo vardą ir pavardę"/>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <input type="submit" id="send" name="send" value="Pridėti" />
        </div>
        </form>
    </div>

    <h2 class="text-center title">Šalinti įmonę</h2>
        <form method="post">
        <div class="row d-flex justify-content-center mt-1 mb-1">
            <input type="text" name="delkodas" id="delkodas" placeholder="Iveskite įmonės kodą"/>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <input type="submit" id="del" name="del" value="Šalinti" />
        </div>
        </form>
    <div class="container-fluid">

    </div>
    </section>
    </body>
</html>