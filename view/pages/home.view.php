<!DOCTYPE html>
<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>
    <?php require "view/_partials/header.view.php"; ?>
    <section>
    
    <h2 class="text-center title">Įmonių paieška</h2>

    <div class="container-fluid">
        <form method="post">
        <div class="row d-flex justify-content-center mt-5 mb-3">
            <input type="text" name="search" id="search" placeholder="Iveskite įmonės pavadinimą ar kodą"/>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <input type="submit" id="submit" name="submit" value="Search" />
        </div>
        </form>
    </div>
    </section>
    </body>
</html>