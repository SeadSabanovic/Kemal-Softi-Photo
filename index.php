<?php
    include "./lang/config.php";
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sead Šabanović">
    <title>Kemal Softić - Photojournalist</title>
    <meta name="description" content="Kemal Softić is Sarajevo based photojournalist, his primary interest is documentary photography.">
    <meta name="keywords" content="Kemal, Softić, kemal, softić, Kemal Softić, kemal softic, softic, Softic, Sarajevo, sarajevo, BiH, bih, Bosnia, Daily, Life, Bosnia Daily Life, bosnia daily life, photojournalist, documentary photography, interest">
    <link rel="shortcut icon" type="image/png" href="./img/KS.png">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link href="https://vjs.zencdn.net/7.10.2/video-js.css" rel="stylesheet" />
    <style>
        body.fixed {
            overflow: hidden !important;
        }
    </style>
</head>

<body class="fixed">

    <div class="cursor"></div>
    <div class="up"><i class="fas fa-angle-double-up"></i></div>

    <div class="intro">
        <div class="loader">
            <svg>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2"
                            result="gooey" />
                        <feComposite in="SourceGraphic" in2="gooey" operator="atop" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>

    <div class="mobile-nav-wrap">
        <svg class="ham ham2" viewBox="0 0 100 100" width="70">
            <path class="line top"
                d="m 70,33 h -40 c -6.5909,0 -7.763966,-4.501509 -7.763966,-7.511428 0,-4.721448 3.376452,-9.583771 13.876919,-9.583771 14.786182,0 11.409257,14.896182 9.596449,21.970818 -1.812808,7.074636 -15.709402,12.124381 -15.709402,12.124381" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom"
                d="m 70,67 h -40 c -6.5909,0 -7.763966,4.501509 -7.763966,7.511428 0,4.721448 3.376452,9.583771 13.876919,9.583771 14.786182,0 11.409257,-14.896182 9.596449,-21.970818 -1.812808,-7.074636 -15.709402,-12.124381 -15.709402,-12.124381" />
        </svg>
    </div>
    <div class="mobile-menu">
        <ul>
            <li class="now">
                <a class="scroll" href="#top"> <?php echo $lang['gallery'] ?> <i class="far fa-images"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec1">Kemal <i class="far fa-id-card"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec2"> <?php echo $lang['work'] ?> <i class="fas fa-camera-retro"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec3"> <?php echo $lang['publications'] ?> <i class="far fa-newspaper"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec4"> <?php echo $lang['contact'] ?> <i class="fas fa-phone"></i></a>
            </li>
        </ul>
        <div class="lang">
            <a href="?lang=en" data-reload class="active">ENG</a>
            <span>.</span>
            <a href="?lang=bs" data-reload>BIH</a>
        </div>
        <div class="socials">
            <small> <a href="https://www.instagram.com/kemalsoftic/?hl=hr" target="_blank"><i
                        class="fab fa-instagram"></i></a> <a href="https://www.facebook.com/softickemal"
                    target='_blank'><i class="fab fa-facebook-square"></i></i></a> <a href="tel:+38762713037"><i
                        class="fas fa-phone"></i></a> </small>
        </div>
    </div>

    <div class="nav-wrap">
        <h1 class="logo">Kemal<br>Softić</h1>
        <ul>
            <li class="now">
                <a class="scroll" href="#top"> <?php echo $lang['gallery'] ?> <i class="far fa-images"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec1">Kemal <i class="far fa-id-card"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec2"> <?php echo $lang['work'] ?> <i class="fas fa-camera-retro"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec3"> <?php echo $lang['publications'] ?> <i class="far fa-newspaper"></i></a>
            </li>
            <li>
                <a class="scroll" href="#sec4"> <?php echo $lang['contact'] ?> <i class="fas fa-phone"></i></a>
            </li>
        </ul>
        <div class="lang">
            <?php
                if($_SESSION['lang'] == 'en') {
                    echo '<a href="?lang=en" data-reload class="active">ENG</a><span>.</span>
                    <a href="?lang=bs" data-reload>BIH</a>';
                } else {
                    echo '<a href="?lang=en" data-reload>ENG</a><span>.</span>
                    <a href="?lang=bs" data-reload class="active">BIH</a>';
                }
            ?>
        </div>
        <div class="socials">
            <small> <a href="https://www.instagram.com/kemalsoftic/?hl=hr" target="_blank"><i
                        class="fab fa-instagram"></i></a> <a href="https://www.facebook.com/softickemal"
                    target='_blank'><i class="fab fa-facebook-square"></i></i></a> <a href="tel:+38762713037"><i
                        class="fas fa-phone"></i></a> </small>
        </div>
    </div>
    <div class="content-wrap" id="top">
        <div class="slider-wrap">
            <div class="slider-over"></div>
            <div class="slider">
                <div class="slide current">
                    <img src="./img/47.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/8.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/16.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/2.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/3.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/4.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/9.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/10.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/12.jpg" alt="izbjeglice">
                </div>
                <div class="slide">
                    <img src="./img/48.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/13.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/14.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/15.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/7.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/17.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/18.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/19.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/20.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/21.jpg" alt="izbjeglice" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/22.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/23.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/24.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/25.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/26.jpeg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/27.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/28.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/29.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/30.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/31.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/32.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/33.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/34.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/35.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/36.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/38.jpg" alt="Bosnia Daily Life" loading="lazy">
                </div>
                <div class="slide">
                    <img src="./img/39.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/40.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/41.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/42.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/43.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/44.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/45.jpg" alt="Bosnia Daily Life">
                </div>
                <div class="slide">
                    <img src="./img/46.jpg" alt="Bosnia Daily Life">
                </div>
            </div>

            <div class="buttons">
                <button id="prev"><i class="fas fa-chevron-left"></i></button>
                <button id="next"><i class="fas fa-chevron-right"></i></button>
                <button id="lock" class="active"><i class="fas fa-lock-open"></i><i class="fas fa-lock"></i></button>
            </div>
        </div>

        <section id="sec1">
            <div class="title" id="title1">
                <span>
                    <h1>Kemal<br>Softić</h1>
                </span>
            </div>
            <div class="" id="img-wrap">
                <img src="./img/kemal.jpg" alt="kemal">
            </div>
            <p id="para1"><?php echo $lang['text1'] ?></p>

        </section>
        <section id="sec2">
            <div class="title" id="title2">
                <span>
                    <h1><?php echo $lang['work'] ?></h1>
                </span>
            </div>

            <p id="para2"><?php echo $lang['text2'] ?></p>

            <video id="my-video" class="video-js" controls data-setup="{}">
                <source src="./img/BDL2.mp4" type="video/mp4" />
                <source src="./img/BDL2.webm" type="video/webm" />
            </video>
        </section>
        <section id="sec3">
            <div class="title" id="title3">
                <span>
                    <h1><?php echo $lang['publications'] ?></h1>
                </span>
            </div>
            <div class="public">
                <small id="public1"><?php echo $lang['text3'] ?>: ABC News, Associated Press, Seattle Times, Star
                    Tribune, Washington Times, Miami Herald, Yahoo, The Sacramento Bee, Kansas City Star, The Charlotte
                    Observer, Lexington Herald-Leader, Fort Worth Star-Telegram, Stars and Stripes, Arkansas Democrat
                    Gazette, El Nuevo Herald, Albany Times Union, The State, KOB-TV (Albuquerque, NM), Wichita Eagle,
                    Fresno Bee, Arizona Daily Star, Greenwich Time, News & Observer, The Modesto Bee, Columbus
                    Ledger-Enquirer, Tacoma News Tribune, San Luis Obispo Tribune, Sun Herald, Mason City Globe Gazette,
                    Idaho Statesman, City News, Bradenton Herald, The Island Packet, Belleville News-Democrat, Billings
                    Gazette, Provo Daily Herald, Benton County Daily Record, Danbury News-Times, Sioux City Journal,
                    Rapid City Journal, Centre Daily Times, Greensboro News & Record, Rock Hill Herald, The Daily News
                    (Longview, WA), The Republic, Reading Eagle, CFTR, The Herald-Sun (Durham, NC), Idaho Press,
                </small>
                <small id="public2">The Daily Progress, Waco Tribune-Herald‎, The Olympian, The Bellingham Herald, The
                    Marietta Daily Journal, The Telegraph (Macon), The Sun News, Bryan-College Station Eagle,
                    Pantagraph, The Beaumont Enterprise, Tri-City Herald, Albany Democrat-Herald, La Crosse Tribune,
                    Merced Sun-Star, Daily Freeman, Odessa American, Register Citizen, Corvallis Gazette-Times, Killeen
                    Daily Herald, Skagit Valley Herald, Midland Reporter-Telegram, The Herald Bulletin, Bluefield Daily
                    Telegraph, Daily Journal (Franklin, IN), CKGL, Winona Daily News, The Chippewa Herald, Lewiston
                    Tribune, Kankakee Daily Journal, Olean Times Herald, The Tribune (Seymour), Fremont Tribune, The
                    Bradford Era, Muscatine Journal, Finger Lakes Times, The Herald (Sharon, PA), Journal Review, Lufkin
                    Daily News, Greensburg Daily News, Ellensburg Daily Record, Daily Iowegian, Courier Express, Citizen
                    Tribune, Lebanon Express, Maryville Forum, Rushville Republican, The Messenger (Madisonville, KY),
                    Atlantic News-Telegraph.</small>
            </div>
        </section>
        <section id="sec4">
            <div class="title" id="title4">
                <span>
                    <h1><?php echo $lang['contact'] ?></h1>
                </span>
            </div>

            <p id="para3"><?php echo $lang['text4'] ?></p>

            <div class="kontakt">
                <form action="">
                    <div class="input-group" id="firstNameGroup">
                        <small class="type"><?php echo $lang['name1'] ?></small>
                        <small class="error nameMsg"></small>
                        <input type="text" placeholder="<?php echo $lang['name4'] ?>. John" autocomplete="off" id="firstName">
                        <i class="fas fa-signature"></i>
                    </div>
                    <div class="input-group" id="lastNameGroup">
                        <small class="type"><?php echo $lang['name2'] ?></small>
                        <small class="error lastNameMsg"></small>
                        <input type="text" placeholder="<?php echo $lang['name4'] ?>. Doe" autocomplete="off" id="lastName">
                        <i class="fas fa-signature"></i>
                    </div>
                    <div class="input-group" id="emailGroup">
                        <small class="type">E-mail</small>
                        <small class="error emailMsg"></small>
                        <input type="text" placeholder="<?php echo $lang['name4'] ?>. johndoe@gmail.com" autocomplete="off" id="mail">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="text">
                        <textarea placeholder="<?php echo $lang['name3'] ?>"></textarea>
                        <small class="error msgMsg"></small>
                    </div>

                    <h3 class="errorMsg"></h3>
                    <h3 id="success"></h3>
                    <button type="submit" id="submitBtn"><?php echo $lang['send'] ?></button>
                </form>
            </div>
        </section>
        <footer>
            <div class="credits">
                <small>&copy; Copyright 2020, <a href="">Kemal Softić</a> <br></small>
                <small>Powered by <a href="https://lab387.com/" target="_blank">Lab387</a> </small>
            </div>
            <div class="socials">
                <small><a href="https://www.instagram.com/kemalsoftic/?hl=hr" target="_blank"><i
                            class="fab fa-instagram"></i></a> <a href="https://www.facebook.com/softickemal"
                        target='_blank'><i class="fab fa-facebook-square"></i></i></a> <a href="tel:+38762713037"><i
                            class="fas fa-phone"></i></a></small>
            </div>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
    <script src="./js/jquery.easeScroll.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        $("html").easeScroll();
        $("html").easeScroll({
            frameRate: 60,
            animationTime: 1000,
            stepSize: 120,
            pulseAlgorithm: 1,
            pulseScale: 8,
            pulseNormalize: 1,
            accelerationDelta: 20,
            accelerationMax: 1,
            keyboardSupport: true,
            arrowScroll: 50,
            touchpadSupport: true,
        });

        let tl = gsap.timeline({
            defaults: {
                ease: "power1.out"
            },
            scrollTrigger: {
                trigger: '#sec1',
                start: 'top center'
            }
        });
        let tl2 = gsap.timeline({
            defaults: {
                ease: "power1.out"
            },
            scrollTrigger: {
                trigger: '#sec2',
                start: 'center bottom'
            }
        });
        let tl3 = gsap.timeline({
            defaults: {
                ease: "power1.out"
            },
            scrollTrigger: {
                trigger: '#sec3',
                start: 'center bottom'
            }
        });
        let tl4 = gsap.timeline({
            defaults: {
                ease: "power1.out"
            },
            scrollTrigger: {
                trigger: '#sec4',
                start: 'center bottom'
            }
        });


        tl.from('#title1', {
            y: 200,
            opacity: 0,
            duration: 1
        }).from('#img-wrap', {
            x: -100,
            opacity: 0,
            duration: 1,
        }, '-=.7').to('#img-wrap', {
            className: "+= on"
        }, '-=.7').from('#para1', {
            x: 100,
            opacity: 0,
            duration: 1,
        }, '-=1');

        tl2.from('#title2', {
            y: 200,
            opacity: 0,
            duration: 1
        }).from('#para2', {
            x: -100,
            opacity: 0,
            duration: 1,
        }, '-=.7');

        tl3.from('#title3', {
            y: 200,
            opacity: 0,
            duration: 1
        }).from('#public1', {
            x: -100,
            opacity: 0,
            duration: 1,
        }, '-=.7').from('#public2', {
            x: 100,
            opacity: 0,
            duration: 1,
        }, '-=1');

        tl4.from('#title4', {
            y: 200,
            opacity: 0,
            duration: 1
        }).from('#para3', {
            x: 100,
            opacity: 0,
            duration: 1,
        }, '-=.7');


        //inputs
        const firstName = $('#firstName');
        const lastName = $('#lastName');
        const mail = $('#mail');
        const msg = $('textarea');

        //groups
        const firstNameGroup = $('#firstNameGroup');
        const lastNameGroup = $('#lastNameGroup');
        const emailGroup = $('#emailGroup');

        //messages
        const nameMsg = $('.nameMsg');
        const lastNameMsg = $('.lastNameMsg');
        const emailMsg = $('.emailMsg');
        const msgMsg = $('.msgMsg');
        const errorMsg = $('.errorMsg');
        const successMsg = $('#success');

        //submit
        const submit = $('#submitBtn');

        //form & regex
        const form = $('form');
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        firstName.focusout(() => {
            if (firstName.val().length < 2) {
                firstNameGroup.addClass('invalid');
                nameMsg.text('<?php echo $lang['nameError'] ?>');
            } else {
                firstNameGroup.removeClass('invalid');
                nameMsg.text('');
            }
        });
        lastName.focusout(() => {
            if (lastName.val().length < 2) {
                lastNameGroup.addClass('invalid');
                lastNameMsg.text('<?php echo $lang['lastNameError'] ?>');
            } else {
                lastNameGroup.removeClass('invalid');
                lastNameMsg.text('');
            }
        });
        mail.focusout(() => {
            if (regex.test(mail.val()) == true) {
                emailGroup.removeClass('invalid');
                emailMsg.text('');
            } else {
                emailGroup.addClass('invalid');
                emailMsg.text('<?php echo $lang['emailError'] ?>');
            }
        });
        msg.focusout(() => {
            if (msg.val().length < 10) {
                msg.removeClass('valid');
                msg.addClass('invalid');
                msgMsg.text('<?php echo $lang['msgError'] ?>');
            } else {
                msg.removeClass('invalid');
                msg.addClass('valid');
                msgMsg.text('');
            }
        });

        form.submit((e) => {

            e.preventDefault();

            if ($('.input-group').hasClass('invalid') || $('textarea').hasClass('invalid')) {
                errorMsg.text(
                    '<?php echo $lang['formError'] ?>');
                return false;
            } else if (successMsg.val().length > 0) {
                return false;
            } else if (firstName.val() == '' || firstName.val().length < 3) {
                errorMsg.text(
                    '<?php echo $lang['formError'] ?>');
            } else if (lastName.val() == '' || lastName.val().length < 3) {
                errorMsg.text(
                    '<?php echo $lang['formError'] ?>');
            } else if (mail.val() == '' || mail.val().length < 3) {
                errorMsg.text(
                    '<?php echo $lang['formError'] ?>');
            } else if (msg.val() == '' || msg.val().length < 3) {
                errorMsg.text(
                    '<?php echo $lang['formError'] ?>');
            } else {

                firstNameVal = firstName.val();
                lastNameVal = lastName.val();
                mailVal = mail.val();
                msgVal = msg.val();
                submitval = submit.val();

                $.ajax({
                    type: 'post',
                    url: './kontaktForm.php',
                    data: {
                        'firstName': firstNameVal,
                        'lastName': lastNameVal,
                        'mail': mailVal,
                        'msg': msgVal,
                        'submit': submitval
                    },
                    success: function (response) {
                        errorMsg.text('');
                        successMsg.text(response);
                        submit.prop('disabled', true);
                    }
                });
            }
        });
    </script>
</body>

</html>