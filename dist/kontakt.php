<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117984887-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117984887-1');
    </script>


    <meta charset="UTF-8">
    <title>Kontakt - Zwiedzaj z Nami Eko-Busikami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='description' content='Zapraszamy do kontaktu z czerwonymi Eko-Busikami i rezerwacji wycieczki z audio-przewodnikiem po Kazimierzu Dolnym.' />
    <meta name='keywords' content='kontakt, informacja, turystyczne, atrakcje, dzieci, kazimierz, melex, wynajem, wycieczki, przewodnik, elektryczne' />
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Dekko&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" />

    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<header>
    <div class="background">
        <div class="menu">
            <div class="main-logo">
                <a href="http://ekobusik.pl"><img alt="Logo Eko-Busik" src="images/logo/logo-long-resized.png"></a>
            </div>
            <ul class="main-nav">
                <li><a href="klienci-indywidualni.php">Klienci indywidualni</a></li>
                <li><a href="grupy-zorganizowane.php">Grupy zorganizowane</a></li>
                <li><a href="nocne-zwiedzanie.php">Nocne zwiedzanie</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li></li>
            </ul>
        </div>
    </div>
</header>

<section class="main-contact">
    <div class="background">
        <div class="content-box">
            <h2 class="h1">
                Skontaktuj się z nami!
            </h2>
            <hr>
            <div class="title-description">
                <strong>Zainteresowała Cię nasza oferta? Masz pytania? Napisz do nas!</strong>
            </div>
            <p>
                Jeśli jesteś klientem indywidualnym, zapraszamy prosto na nasz parking. Jeśli poszukujesz wycieczki dla grupy zorganizowanej, zadzwoń do nas teraz lub złóż rezerwację na bardziej odległy termin poprzez formularz kontaktowy :)
            </p>
            <div class="info-box">
                <div class="background">
                    <div class="box">
                        <div class="txt">
                            <img class="icon" src="images/icons/user.png">Paweł Czopek
                        </div>
                        <div class="txt">

                            <a href="tel: +48602178024"><img class="icon" src="images/icons/phone.png">602 178 024</a>
                        </div>
                        <div class="txt">

                            <a href="mailto:kontakt@ekobusik.pl"><img class="icon" src="images/icons/email.png">kontakt@ekobusik.pl</a>
                        </div>
                    </div>
                    <div class="logo-2">
                        <img src="images/logo/eko-busik-team.png">
                    </div>
                </div>
            </div>
            <div class="adress">
                <div> PRZEDSIĘBIORSTWO WIELOBRANŻOWE MIX</div>
                <div> Paweł Czopek</div>
                <div> Dąbrówka 76b</div>
                <div> 24-120 Kazimierz Dolny</div>
                <div> NIP: 7161199708</div>
                <div> REGON: 431098577</div>
            </div>
        </div>
        <div class="content-box">
            <h3 class="h1">Formularz kontaktowy:</h3>
            <hr>

            <form action="send.php" method="POST">
                <input type="text" class="form"  name="client" placeholder="Imię i nazwisko*" required>
                <input type="text" class="form"  name="telephone" placeholder="Telefon*" required>
                <input type="email" class="form"  name="email" placeholder="Twój adres e-mail*" required>
                <select class="form" name="road">
                    <option value="">Wybierz trasę</option>
                    <option value="'Ze Spichlerzami'">Trasa "Ze Spichlerzami"</option>
                    <option value="'Z Kirkutem'">Trasa "Z Kirkutem"</option>
                    <option value="pełnej 'B'">Pełna Trasa "B"</option>
                    <option value="'Z Albrechtówką'">Trasa "Z Albrechtówką"</option>
                    <option value="'Zlecenie nietypowe'">Nietypowe zlecenie :)</option>
                </select>
                <input type="text" class="form"  name="person" placeholder="Liczba osób">
                <input type="datetime-local" class="form"  name="date" placeholder="Data wycieczki">
                <textarea class="form wide" rows="5"  name="message"  placeholder="Wiadomość*" required></textarea>
                <input class="btn" type="submit" value="Wyślij wiadomość">
            </form>
            <div class="parking">
                 Po więcej informacji zapraszamy na nasz parking :)
                <div class="arrows blink">
                <img src="images/icons/down-arrow.png">
                <img src="images/icons/down-arrow.png"><img src="images/icons/down-arrow.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <iframe src="https://snazzymaps.com/embed/62391" width="100%" height="400px" style="border:none;"></iframe>
</section>

<footer>
    <div class="background">
        <a href="http://ekobusik.pl"><img class="logo-2" src="images/logo/main-logo.png"></a>
        <div class="contact-footer">
            Wszystkie prawa zastrzeżone &copy;
        </div>
        <div class="contact-footer">
            <div class="txt">Strony internetowe:</div>
            <div class="txt"><a href="tel: +48602178024">662 040 464</a></div>
            <div class="txt">Ujęcia z powietrza:</div>
            <div class="txt"><a href="https://dronamic.pl"> dronamic.pl</a></div>
        </div>
    </div>
</footer>

</body>
</html>