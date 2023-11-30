<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fooldal_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>
    <header class="header">
        <nav>
            <input type="checkbox" name="" id="check">
            <label for="check" class="checkbtn">
                <i class="bi bi-list"></i>
            </label>
            <label class="logo">
                <img src="../pics/logo.png" alt="">
                onfejlesztes.com</label>
            <ul>
                <li><a href="index.php">Kezdőlap</a></li>
                <li><a href="oktatoanyagok.php">Oktatóanyagok</a></li>
                <li><a href="videogaleria.php">Videógaléria</a></li>
                <li><a href="kapcsolat.php">Kapcsolat</a></li>
                <div class="reg-gomb">
                    <a href="regisztracio.php" style="text-decoration: none;"><button class="gomb">Regisztráció</button></a>
                </div>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="foglalkozom">
            <div class="row">
                <div class="col">
                    <h1><span>Mivel</span> foglalkozom?</h1>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-7 foglalkozas-szoveg">
                <p>salkdkajfjdklfjsdlkfjklsdjfkjsdlkfjlksdjflkjsdlkfjlksdjflkjslkjslkdjkldsjflkjkjflksdjkfljsdkljfklsjdklfjsdkljflksdjklfjslkfjksdjfklsjdlkfjskdjlkjdlkfjslkdjksfdjljfl</p>
            </div>
            <div class="col-5 kep">
                <img src="../pics/portré.png" alt="">
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#404040" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,133.3C320,139,400,181,480,186.7C560,192,640,160,720,128C800,96,880,64,960,69.3C1040,75,1120,117,1200,122.7C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
    <div class="kepgaleria-hatter">
        <div class="container">
            <div class="kepgaleria">
                <h1>Képgaléria</h1>
            </div>

            <div id="carouselExampleFade" class="carousel slide carousel-fade pb-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../pics/kep1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../pics/kep2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../pics/kep3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../pics/kep4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#404040" fill-opacity="1" d="M0,128L60,133.3C120,139,240,149,360,154.7C480,160,600,160,720,165.3C840,171,960,181,1080,181.3C1200,181,1320,171,1380,165.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>

    <div class="container">

        <div class="hirlevel">
            <h1>Iratkozz fel a hírlevelemre!</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="hirlevel-form">

                    <div class="sor">
                        <span>
                            <input class="gate" id="class" type="text" /><label for="class">Neved:</label>
                        </span><br>
                        <span>
                            <input class="gate" id="element" type="text" /><label for="element">E-mail címed:</label>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col my-auto">
                <div class="miert-erdemes ">
                    <h1 style="font-style:italic; float:right;">De miért is érdemes feliratkozni?</h1>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fdaa2c" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,197.3C672,192,768,224,864,197.3C960,171,1056,85,1152,64C1248,43,1344,85,1392,106.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <div class="kartyak">
        <div class="container">
            <div class="row mb-3">
                <div class="col balrol-kartya ">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">1.</p>
                        <hr>
                        <b style="text-align: center;">Frissítések és értesítések</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Mindig az elsők között értesülhetsz a legfrissebb tartalmakról, új oktatóanyagokról, videókról és eseményekről. Ne maradj le semmiről!</p>
                    </div>
                </div>
                <div class="col kartya-fentrol">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">2.</p>
                        <hr>
                        <b style="text-align: center;">Exkluzív tartalmak</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Hírlevelünk olvasói számára különleges tartalmakat és exkluzív ajánlatokat készítünk. </p>
                    </div>
                </div>
                <div class="col jobbrol-kartya">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">3.</p>
                        <hr>

                        <b style="text-align: center;">Inspiráló tartalom</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Hírleveleink tele vannak inspiráló történetekkel, motivációs üzenetekkel és hasznos tippekkel. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col balrol-kartya mx-auto text-center">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">4.</p>
                        <hr>

                        <b style="text-align: center;">Egyedi tartalom és útmutatás</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Hírlevelünkben olyan egyedi tartalmakat és útmutatást kínálunk, amelyek segítenek felfedezni a saját potenciálodat. </p>
                    </div>
                </div>
                <div class="col kartya-lentrol">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">5.</p>
                        <hr>

                        <b style="text-align: center;">Közösség és kapcsolatépítés</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Csapatunk aktívan részt vesz a hírlevél közösségében, és szeretettel várjuk visszajelzéseidet, kérdéseidet és véleményedet. </p>
                    </div>
                </div>
                <div class="col jobbrol-kartya">
                    <div class="card mx-auto">
                        <p style="text-align:center; font-size:2.3rem;">6.</p>
                        <hr>

                        <b style="text-align: center;">Személyre szabott ajánlások</b>
                        <p style="text-align:justify; margin-bottom:0.5rem;"> Az alapján, hogy milyen témák és érdeklődési körök érdekelnek, személyre szabott ajánlásokat kapsz tőlünk. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="kozossegi-media">
            <div class="kozossegi_media">
                <h1>Közösségi média platformok</h1>
            </div>


            <div class="center">
                <div class="row">

                    <div class="col">
                        <a class="btn btn-fb" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <h1 class="social-alulrol">facebook</h1>
                    </div>
                    <div class="col">
                        <a class="btn btn-tk" href="#">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <h1 class="social-alulrol">tiktok</h1>
                    </div>

                    <div class="col">
                        <a class="btn btn-ig" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <h1 class="social-alulrol">instagram</h1>
                    </div>
                    <div class="col">
                        <a class="btn btn-yt" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <h1 class="social-alulrol">youtube</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <footer class="bg-dark  border-top py-5 text-light">

        <div class="container">

            <div class="row">
                <div class="col">
                    <p class="ft-bold text-info">Ügyfélszolgálat</p>
                    <p class="my-1 fw-bold"><a href="#" class="text-decoration-none text-secondary">GymRoll</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">5600 Békéscsaba</a></p>
                    <p class="my-1"><a href="mailto:info@webshop.hu" class="text-decoration-none text-secondary">GymRoll@gmail.com</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">+ 36 30 755 9817</a></p>
                </div>



                <div class="col">

                    <p class="ft-bold text-info">Információ</p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Konditerem szabályzat</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Nyitvatartás</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Fizetési mdódok</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">Feleősségvállalás</a></p>
                </div>


                <div class="col">
                    <p class="ft-bold text-info">Gyakori kérdések</p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                    <p class="my-1"><a href="#" class="text-decoration-none text-secondary">--</a></p>
                </div>
            </div>
        </div>

    </footer>
    <script src="../js/fooldal_script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>