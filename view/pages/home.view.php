
<!DOCTYPE html>
<html>
<?php require "view/_partials/head.view.php"; ?>
    <body>
    <?php require "view/_partials/header.view.php"; ?>
    <section>
    <?php if(isset($_SESSION['user_id'])): ?>
    <h1 class="text-center mt-5">Sveiki prisijungę</h1>
    <a href="/atsiskaitymas/logout"><h2 class="text-center mt-5">Atsijungti</h2></a>
    <?php else: ?>
        <h2 class="text-center title">Prisijungimas</h2>

        <div class="container-fluid log">
            <form method="post">
            <div class="row d-flex justify-content-center mt-5 mb-2">
                <input type="text" name="email" id="email" placeholder="Iveskite el. paštą" required/>
            </div>
            <div class="row d-flex justify-content-center mb-4">
                <input type="password" name="password" id="password" placeholder="Iveskite slptažodį" required/>
            </div>
            <div class="row d-flex justify-content-center mb-5">
                <input type="submit" id="login" name="login" value="Prisijungti" />
            </div>
            </form>
        </div>

        <h2 class="text-center title">Registracija</h2>

        <div class="container-fluid reg">
            <form method="post">
            <div class="row d-flex justify-content-center mt-5 mb-2">
                <input type="text" name="vardas" id="vardas" placeholder="Iveskite vardą" required/>
            </div>
            <div class="row d-flex justify-content-center mb-2">
                <input type="text" name="emailas" id="emailas" placeholder="Iveskite el. paštą" required/>
            </div>
            <div class="row d-flex justify-content-center mb-4">
                <input type="password" name="slaptazodis" id="slaptazodis" placeholder="Iveskite slaptažodį" required/>
            </div>
            <div class="row d-flex justify-content-center">
                <input type="submit" id="register" name="register" value="Registruotis" />
            </div>
            </form>
        </div>
        
    <?php endif; ?>
    </section>
    <script src="view\script\script.js"></script>
    </body>
</html>