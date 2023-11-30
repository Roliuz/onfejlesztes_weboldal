<?php

include '../includes/adatbazis_kapcsolat.php';


if (isset($_POST['regisztracio'])) {
    $teljesnev = $_POST['teljesnev'];
    $teljesnev = filter_var($teljesnev, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $jelszo = sha1($_POST['jelszo']); //jelszó titkosítás
    $jelszo = filter_var($jelszo, FILTER_SANITIZE_STRING);
    $jelszo_megerosit = sha1($_POST['jelszo_megerosit']); //jelszó titkosítás
    $jelszo_megerosit = filter_var($jelszo_megerosit, FILTER_SANITIZE_STRING);

    $select_felhasznalok = $conn->prepare("SELECT * FROM `felhasznalok` WHERE email = ? ");
    $select_felhasznalok->execute([$email]);

    $felhasznalo_fetch_id = $select_felhasznalok->fetch(PDO::FETCH_ASSOC); //felhasználó id kikódolása

    if ($select_felhasznalok->rowCount() > 0) {
        $uzenet[] = "Ezzel az email címmel már van regisztrálva fiók!";
    } else {
        if ($jelszo != $jelszo_megerosit) {
            $uzenet[] = 'A két jelszó nem egyezik!';
        } else {
            $felhasznalok_beszuras = $conn->prepare('INSERT INTO felhasznalok (teljes_nev, jelszo) VALUES(?,?) ');
            $felhasznalok_beszuras->execute([$teljesnev, $jelszo_megerosit]);
            $uzenet[] = "Sikeres regisztráció!";
        }
    }
}


foreach ($uzenet as $e) {
    echo '<div class="uzenet">
        <span>' . $e . '<i class="fa fa-times" onclick="this.parentElement.remove();"></i>
</span>
    </div>';
}

?>


<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regisztracio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Regisztráció</title>
</head>

<body>
    <!-- <section class="felhasznalo_regisztracio">
        <form action="" method="POST">
            <h3>Regisztráció</h3>


        </form>
    </section> -->


    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Bejelentkezés</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Regisztráció</label>

            <div class="login-form">
                <div class="sign-up-htm">
                    <form action="" method="POST">

                        <div class="group">
                            <label for="user" class="label">Teljes név:</label>
                            <input id="user" type="text" class="input" name="teljesnev">
                        </div>
                        <div class="group">
                            <label for="pass1" class="label">Jelszó:</label>
                            <input id="pass1" type="password" class="input" data-type="password" name="jelszo">
                        </div>
                        <div class="group">
                            <label for="pass2" class="label">Jelszó ismét:</label>
                            <input id="pass2" type="password" class="input" data-type="password" name="jelszo_megerosit">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email cím</label>
                            <input id="email" type="text" class="input" name="email">
                        </div>
                        <div class="group">
                            <a href="../pages/index.php"><input type="submit" class="button" value="Regisztráció" name="regisztracio"></a>
                        </div>

                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Already Member?</a>
                        </div>
                </div>
                </form>

                <div class="sign-in-htm">
                    <div class="group">
                        <label for="email1" class="label">E-mail cím:</label>
                        <input id="email1" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Jelszó</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>

                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>