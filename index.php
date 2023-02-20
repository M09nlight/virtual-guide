<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Belarus</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/L.Control.Locate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />


</head>
<style>
    #map {
        width: 100%;
        min-height: 100vh;
    }

    .coordinate {
        position: absolute;
        bottom: 10px;
        right: 50%;
    }

    .leaflet-popup-content-wrapper {
        border-radius: 1rem;
        width: 35em;
        min-height: 15em;
    }

    .about .container2 {}

    .about .container2 .box {
        min-height: calc(100vh - 45rem) !important;
    }

    .box {
        padding: 0 2rem !important;
    }

</style>

<body>
    <?php include('fragments/header.php'); ?>

    <div class="container home">

        <section class="flex">
            <div class="container about">
                <section class="container2">
                    <div class="box" data-aos="fade-up">
                        <h3>About project "Welcome to Belarus"</h3>
                        <p class="text">The virtual guide "Welcome to Belarus " is designed for students on the lessons
                            of foreign languages while studying topics "My homeland is Belarus, The sights of
                            Belarus, Tourism in Belarus". The purpose of the guide is to increase students' knowledge
                            about their homeland, to provide information about the most significant Belarusian
                            sights.The map is presented in 3 foreign languages: English, French, German.</p>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/google-translate.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <script src="js/script.js"></script>

</body>

</html>