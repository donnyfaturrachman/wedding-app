<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Syarah & Donny Wedding">
    <meta name="author" content="Syarah & Donny">
    <meta name="keywords" content="wedding">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/modern-normalize@v2.0.0/modern-normalize.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.ico') }}">
    <meta property="og:site_name" content="Syarah & Donny Wedding">
    <meta property="og:title" content="Syarah & Donny Wedding" />
    <meta property="og:description" content="Syarah & Donny Wedding" />
    <meta property="og:image" itemprop="image" content="{{ asset('img/cover-circle-color-resize.png') }}" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="https://syarahdonnywedding.info" />
    <meta name="twitter:title" content="Syarah & Donny Wedding" />
    <meta name="twitter:description" content="Syarah & Donny Wedding" />
    <meta name="twitter:image" content="{{ asset('img/cover-circle-color-resize.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

    <title>SYARAH & DONNY</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5.3.0/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/dist/flipdown.min.css" integrity="sha256-Ns0hLsJnCW1f44p7eahJRJOeiGt/hstfzjozNFJzGjw=" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroes.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css') }}" rel="stylesheet">

    <style>
        body,
        .example h1,
        .example p,
        .example .button {
            transition: all .2s ease-in-out;
        }

        body.light-theme {
            background-color: #151515;
        }

        body.light-theme .example h1 {
            color: #FFFFFF;
        }

        body.light-theme .example p {
            color: #FFFFFF;
        }

        body.light-theme .buttons .button {
            color: #FFFFFF;
            border-color: #FFFFFF;
        }

        body.light-theme .buttons .button:hover {
            color: #151515;
            background-color: #FFFFFF;
        }

        .example {
            font-family: 'Roboto', sans-serif;
            width: 550px;
            /* height: 378px; */
            margin: auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .example .flipdown {
            margin: auto;
        }

        .example h1 {
            text-align: center;
            font-weight: 100;
            font-size: 3em;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .example p {
            text-align: center;
            font-weight: 100;
            margin-top: 0;
            margin-bottom: 35px;
        }

        .example .buttons {
            width: 100%;
            height: 50px;
            margin: 50px auto 0px auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .example .buttons p {
            height: 50px;
            line-height: 50px;
            font-weight: 400;
            padding: 0px 25px 0px 0px;
            color: #333;
            margin: 0px;
        }

        .example .button {
            display: inline-block;
            height: 50px;
            box-sizing: border-box;
            line-height: 46px;
            text-decoration: none;
            color: #333;
            padding: 0px 20px;
            border: solid 2px #333;
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: 700;
            transition: all .2s ease-in-out;
        }

        .example .button:hover {
            background-color: #333;
            color: #FFF;
        }

        .example .button i {
            margin-right: 5px;
        }

        @media(max-width: 550px) {
            .example {
                width: 100%;
                height: 362px;
            }

            .example h1 {
                font-size: 2.5em;
            }

            .example p {
                margin-bottom: 25px;
            }

            .example .buttons {
                width: 100%;
                margin-top: 25px;
                text-align: center;
                display: block;
            }

            .example .buttons p,
            .example .buttons a {
                float: none;
                margin: 0 auto;
            }

            .example .buttons p {
                padding-right: 0px;
            }

            .example .buttons a {
                display: inline-block;
            }
        }
    </style>
</head>

<body>

    <main>
        <h1 class="visually-hidden">Syarah & Donny</h1>

        <section id="header" style="height: 100vh;">
            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto img-fluid mb-4" src="{{ asset('img/cover-circle-color-resize.png') }}"
                    alt="" width="400" height="400">
                <p class="lead">The Wedding of</p>
                <h1 class="display-5 fw-bold">Syarah & Donny</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Bekasi, 27 Agustus 2023</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="#profil"><i class="bi bi-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="b-example-divider"></div>

        <section id="profil">
            <div class="px-4 pt-5 my-5 text-center">
                <h1 class="display-4 fw-bold mb-4">بِسْمِ ٱللَّٰهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead">“Di antara tanda tanda kebesaran-Nya ialah Allah menciptakan pasangan-pasangan
                        untukmu dan dari jenismu sendiri agar kamu cenderung dan merasa tentram kepadanya, serta Allah
                        jadikan rasa kasih dan sayang diantaramu. Sungguh pada demikian itu terdapat tanda-tanda
                        kebesaran Allah bagi kaum yang berpikir”</p>
                    <p><b>QS. Ar-Rum: 21</b></p>
                </div>
            </div>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <p class="text-muted"><i>Calon Pengantin Pria</i></p>
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('img/donny-circle-border.png') }}" class="img-fluid" />
                                </div>
                                <h4 class="mb-2">Donny Faturrachman</h4>
                                <p class="text-muted mb-0">Putra dari pasangan:</p>
                                <p class="text-muted">Bapak Suharyanto & Ibu Tuti Mulyati</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('img/tulip-drawing-flower-clip-art-hand-painted-tulip-7ad907c8bf4a5ad08a908509a4863603.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <p class="text-muted"><i>Calon Pengantin Wanita</i></p>
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('img/syarah-cricle-border.png') }}" class="img-fluid" />
                                </div>
                                <h4 class="mb-2">Syarah Rahmania Zuhri</h4>
                                <p class="text-muted mb-0">Putri dari pasangan:</p>
                                <p class="text-muted">Bapak Saefuddin & Ibu Pipin Supinah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="b-example-divider"></div>

        <section id="acara">
            <div class="px-4 pt-5 my-5 text-center">
                <h1 class="display-4 fw-bold mb-4">Detail Acara</h1>
            </div>
            <div class="example">
                <div id="flipdown" class="flipdown"></div>
            </div>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-12 col-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('icons/wedding-ring.png') }}" class="img-fluid" />
                                </div>
                                <h4 class="mb-2">Akad Nikah</h4>
                                <p class="text-muted mb-0">Ahad, 27 Agustus 2023</p>
                                <p class="text-muted">Pukul 08.00 WIB - 09.00 WIB</p>
                                <p class="text-muted">Gedung Pusdiklat Al-Muhajirien Bekasi Timur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('icons/bride-and-groom.png') }}" class="img-fluid" />
                                </div>
                                <h4 class="mb-2">Resepsi</h4>
                                <p class="text-muted mb-0">Ahad, 27 Agustus 2023</p>
                                <p class="text-muted">Pukul 11.00 WIB - 13.00 WIB</p>
                                <p class="text-muted">Gedung Pusdiklat Al-Muhajirien Bekasi Timur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-5 text-center">
                <a href="https://goo.gl/maps/vfAUuNMzpTdt6SmH7" target="_blank" type="button"
                    class="btn btn-secondary">Liat Peta</a>
            </div>
        </section>

        <div class="b-example-divider"></div>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls.
                        Each required form group has a validation state that can be triggered by attempting to submit
                        the form without completing it.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                        <hr class="my-4">
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                    </form>
                </div>
            </div>
        </div>

        <div class="b-example-divider mb-0"></div>

        <footer>
            <small>
                <a href="https://www.flaticon.com/free-icons/wedding" target="_blank" title="wedding icons">Wedding
                    icons created by IconMarketPK - Flaticon</a> /
                <a href="https://www.flaticon.com/free-icons/couple" title="couple icons">Couple icons created by
                    Hilmy Abiyyu A. - Flaticon</a> /
                <a href="https://www.hiclipart.com/free-transparent-background-png-clipart-iiaup">Lili Flower Image
                    From Hiclipart</a>
                <br>
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script> Syarah & Donny. All Rights Reserved.
            </small>
        </footer>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.1.2/jquery.flip.min.js"></script>
        <script src="{{ asset('js/bootstrap-5.3.0/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/flipdown@0.3.2/src/flipdown.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {

                // Unix timestamp (in seconds) to count down to
                var august27 = 1693094400;

                // Set up FlipDown
                var flipdown = new FlipDown(august27)

                    // Start the countdown
                    .start()

                    // Do something when the countdown ends
                    .ifEnded(() => {
                        console.log('The countdown has ended!');
                    });
            });
            // A $( document ).ready() block.
            $(document).ready(function() {
                console.log("ready!");
            });
        </script>

    </main>
</body>

</html>
