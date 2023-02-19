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

    td{
        font-size: 1.2rem;
    }
    h2{
        font-size: 1.4rem !important;
    }
    .leaflet-routing-alt  h3{
        font-size: 1.3rem !important;
    }
   
    .leaflet-popup-content {
        width: 350px !important;
    }

    .leaflet-container a.leaflet-popup-close-button {
        right: -90px !important
    }
</style>

<body>
    <?php include('fragments/header.php'); ?>

    <div class="container home">

        <section class="flex">
            <div class="box">
                <div class="select">
                    <select name="" id="select">
                        <option value="route1">Legacy of centuries</option>
                        <option value="route2">Top 5 interesting Belarusian museums</option>
                        <option value="route3">Polesie tour</option>
                        <option value="route4">Land of Heroes</option>
                        <option value="route5">Hospitable Belarus</option>
                        <option value="route6">Belarus - land of lakes</option>
                    </select>
                </div>
                <div id="map">
                    <div class="leaflet-control coordinate"></div>
                </div>
            </div>
        </section>
    </div>


    <div class="box_ route1" hidden>
        <div class="image">
            <img src="images/routes/route1/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Mir Castle </h3>
            <p>Mir Castle is one of the primary places to visit in Belarus. This sample of Gothic architecture was built
                in the 16th century. </p>
            <a target="_blank" href="routes/route1/Mir Castle.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route1" hidden>
        <div class="image">
            <img src="images/routes/route1/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The Nesvizh Castle (Palace) </h3>
            <p>The construction was initiated by Mikołaj Krzysztof Radziwiłł in 1583. There is no accurate information
                regarding who designed the castle. Some speculate that Mikołaj Krzysztof Radziwiłł designed the project
                himself, and some researches state that an Italian architect Bernardoni took part in the construction at
                some stages.</p>
            <a target="_blank" href="routes/route1/The Nesvizh Castle (Palace).php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route1" hidden>
        <div class="image">
            <img src="images/routes/route1/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The Castle in Golshany</h3>
            <p>Halshany (Golshany) is a small agrotown in the Grodno Region with a rich history and serious heritage. It
                is often called the “open-air museum”, and it is absolutely true. The castle in Halshany is the
                ancestral home of the Halshany and later the Sapieha dynasties.</p>
            <a target="_blank" href="routes/route1/The Castle in Golshany.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route1" hidden>
        <div class="image">
            <img src="images/routes/route1/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>LIDA CASTLE </h3>
            <p>Medieval Lida castle, a fine archeological monument that is officially protected by the state, lies 112km
                north-east of Grodno in the Grodno region of Belarus.</p>
            <a target="_blank" href="routes/route1/LIDA CASTLE.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route1" hidden>
        <div class="image">
            <img src="images/routes/route1/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Palace of the Rumyantsevs and the Paskeviches in Gomel</h3>
            <p>In the late 18th century the Belarusian lands were part of the Russian Empire. Empress Catherine the
                Great gave Gomel to her favorite, General Field Marshal Piotr Rumyantsev-Zadunaisky, for his outstanding
                victories in the war against Turkey. On the bank of the River Sozh there was a wooden castle, which had
                earlier belonged to Michal Fryderyk Czartoryski, the Grand Chancellor of Lithuania. Piotr Rumyantsev had
                the wooded castle demolished and a new one built. </p>
            <a target="_blank" href="routes/route1/Palace of the Rumyantsevs and the Paskeviches in Gomel.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>

    <!-- route 2 starts----------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="box_ route2" hidden>
        <div class="image">
            <img src="images/routes/route2/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Great Patriotic War Museum in Minsk</h3>
            <p>The Museum of the History of the Great Patriotic War is located in the center of Minsk. </p>
            <p class="address">8 Pobeditelei Avenue.</p>
            <a target="_blank" href="routes/route2/Great Patriotic War Museum in Minsk.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route2" hidden>
        <div class="image">
            <img src="images/routes/route2/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The museum of Stones in Minsk</h3>
            <p>The park-museum of stones in the Minsk microdistrict of Uruchye, opened in 1985, is unusual not only for
                Belarus, but also for the whole of Europe ─ such an exposition can be found only on the territory of
                Lithuania. </p>
            <p class="address">Akademika Kuprevicha str., Minsk.</p>
            <a target="_blank" href="routes/route2/The museum of Stones in Minsk.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route2" hidden>
        <div class="image">
            <img src="images/routes/route2/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Museum of the Belarusian Folk Art</h3>
            <p>The Museum of the Belarusian Folk Art in Raubichi was opened at the end 1979. It is located in the former
                Krestogorsk Roman catholic church, built in 1862, and is located near by atheletic building on biathlone
                "Raubichi" 24 kilometers from Minsk. </p>

            <a target="_blank" href="routes/route2/Museum of the Belarusian Folk Art.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route2" hidden>
        <div class="image">
            <img src="images/routes/route2/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Museum complex of ancient crafts and technologies «Dududki»</h3>
            <p>The Museum of Old Crafts “Dudutki” is situated 45 kilometers from Minsk. It is located in a picturesque
                site near the Ptich River. The area of the Museum is 160 hectares. </p>

            <a target="_blank" href="routes/route2/Museum complex of ancient crafts and technologies «Dududki».php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route2" hidden>
        <div class="image">
            <img src="images/routes/route2/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Mark Chagall Museum in Vitebsk</h3>
            <p>The museum consists of two buildings: the House-Museum of Marc Chagall and the Art Centre of Marc
                Chagall. The House-museum of Marc Chagall was opened in 1997. It is located in Pokrovskaya Street in the
                house, built by the artist's father in the early 1900s where Marc Chagall spent his early days. </p>

            <a target="_blank" href="routes/route2/Mark Chagall Museum in Vitebsk.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>

    <!-- route 3 starts --------------------------------------------------------------------------------------------------- -->

    <div class="box_ route3" hidden>
        <div class="image">
            <img src="images/routes/route3/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Turov </h3>
            <p>Turov (Russian: Turow, Lithuanian: Turava, Belarussian: Turaŭ) is one of the oldest Belarusian cities and was once the cultural and economic centre of the Dregoviches (Lithuanian period). Turov was first mentioned in a document in 980, but its history began much earlier. </p>
            <a target="_blank" href="routes/route3/Turov.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route3" hidden>
        <div class="image">
            <img src="images/routes/route3/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Lyaskovichi  </h3>
            <p>Agro-town Lyaskovichi is a small settlement in the extreme south-west of Petrikovsky district in Gomel region, the center of Lyaskovichi village council. The administrative center of the National park «Pripyatsky» is located here.</p>
            <a target="_blank" href="routes/route3/Lyaskovichi.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route3" hidden>
        <div class="image">
            <img src="images/routes/route3/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Pinsk   </h3>
            <p>Pinsk, one of the largest towns in southern Belarus, an ancient cultural, spiritual and historical center, has been known for more than nine centuries. It was first mentioned in chronicles on 5 November 1097. </p>
            <a target="_blank" href="routes/route3/Pinsk.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route3" hidden>
        <div class="image">
            <img src="images/routes/route3/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Motol </h3>
            <p>Motol - agrotown in the Ivanovo district of the Brest region of Belarus. The administrative center of the Motol village council. The village of Motol was transformed into an agrotown, while the status of the rural settlement has not changed. The ancient name of the village - Motyl.</p>
            <a target="_blank" href="routes/route3/Motol.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route3" hidden>
        <div class="image">
            <img src="images/routes/route3/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Belovezhskaya Pushcha</h3>
            <p>Impressive ancient forest with many old trees, thousands of different kinds of plants and animals, rich historical and cultural heritage, where the artifacts of pagan times have survived and reflected the events of ancient and modern history, all this makes your holiday exciting, interesting and  educating.</p>
            <a target="_blank" href="routes/route3/Belovezhskaya Pushcha.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <!-- route 4 starts --------------------------------------------------------------------------------------------------- -->

    <div class="box_ route4" hidden>
        <div class="image">
            <img src="images/routes/route4/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Minsk Victory Square</h3>
            <p>Iconic Minsk Victory Square is both a famous tourist attraction in Belarus and a place of pilgrimage for
                Belarusians remembering those who died in the Great Patriotic War (World War 2). </p>
            <a target="_blank" href="routes/route4/Minsk Victory Square.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route4" hidden>
        <div class="image">
            <img src="images/routes/route4/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The Mound of Glory</h3>
            <p>The majority of guests arriving in Minsk can’t but notice the memorial complex «the Mound of Glory» along
                the way from the airport to the capital. It is located in the 21-st km M2 road Minsk-the national
                airport «Minsk».</p>
            <a target="_blank" href="routes/route4/The Mound of Glory.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route4" hidden>
        <div class="image">
            <img src="images/routes/route4/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Khatyn Memorial</h3>
            <p>Khatyn memorial, in the Minsk region of Belarus, remains one of the most haunting memorials of World War
                2 in all Europe.</p>
            <a target="_blank" href="routes/route4/Khatyn Memorial.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route4" hidden>
        <div class="image">
            <img src="images/routes/route4/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Brest Fortress</h3>
            <p>Brest Fortress is one of the most important places to see in Belarus and by far the largest tourist
                attraction in Brest.</p>
            <a target="_blank" href="routes/route4/Brest Fortress.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route4" hidden>
        <div class="image">
            <img src="images/routes/route4/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Stalin Line Complex</h3>
            <p>The Historical and Cultural Complex Stalin Line was founded to commemorate the 60th anniversary of the
                Soviet People’s Victory in the Great Patriotic War and was opened to the public on 30 January 2005 in
                memory of the defenders of Minsk</p>
            <a target="_blank" href="routes/route4/Stalin Line Complex.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>

    <!-- route 5 starts --------------------------------------------------------------------------------------------------- -->

    <div class="box_ route5" hidden>
        <div class="image">
            <img src="images/routes/route5/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The Berezinsky Biosphere Reserve</h3>
            <p>The huge area of the Berezinsky Reserve - 131,785 hectares - covers the territories of several
                administrative districts: Lepelsky and Dokshitsky Vitebsk region and Borisovsky - Minsk.</p>
            <a target="_blank" href="routes/route5/The Berezinsky Biosphere Reserve.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route5" hidden>
        <div class="image">
            <img src="images/routes/route5/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The National Park "Braslav Lakes"</h3>
            <p>The Braslav Lakes National Park is one of the youngest, but truly unique and well-known far beyond the
                borders of the country. It is located in the extreme north-west of the Republic of Belarus in the
                province with the poetic name "Belarusian Lakeland". </p>
            <a target="_blank" href="routes/route5/The National Park Braslav Lakes.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route5" hidden>
        <div class="image">
            <img src="images/routes/route5/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The National Park Belovezhskaya Pushcha </h3>
            <p>Belovezhskaya Pushcha is one of the most important sights of Belarus. These are the remains of a primeval
                forest that once stretched from the Baltic Sea to the Bug River and from the Oder to the Dnieper.</p>
            <a target="_blank" href="routes/route5/The National Park Belovezhskaya Pushcha.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route5" hidden>
        <div class="image">
            <img src="images/routes/route5/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The National Park "Narochansky" </h3>
            <p>Naroch region is a unique natural treasure and the largest resort region of Belarus. Picturesque
                landscapes, clean lakes and rivers, healing mineral springs attract guests from all over the world.</p>
            <a target="_blank" href="routes/route5/The National Park Narochansky.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route5" hidden>
        <div class="image">
            <img src="images/routes/route5/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>The National Park "Pripyatsky" </h3>
            <p>The pristine nature in the valley of the Pripyat River, unique swamps and floodplain oak forests, rich
                deposits - all this is an amazing land of Polesie, which has no analogues not only in Europe, but also
                in the world.</p>
            <a target="_blank" href="routes/route5/The National Park Pripyatsky.php">read more <i
                    class="fas fa-angle-right"></i></a>
        </div>
    </div>

    <!-- route 6 starts --------------------------------------------------------------------------------------------------- -->

    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Braslav </h3>
            <p>Braslav is probably the most renowned resort town in Belarus. It's surrounded by lakes, has a rich
                history, and hosts Viva Braslav – one of the most popular summer festivals in the country. Back in 1500,
                Princess Elena, the daughter of the Grand Duke of Moscow Ivan III Vasilyevich and the wife of the Grand
                Duke of Lithuania Aliaksandr Jahielončyk, set her heart on the village.</p>
            <a target="_blank" href="routes/route6/Braslav.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Slabodka </h3>
            <p>If you prefer small and cozy places, after a visit to Braslav head to Slabodka – it is the “light”
                version of the popular resort. There are fewer people and less infrastructure, but more lakes and cool
                vistas. Besides, it is, according to tourists, the most picturesque place in the vicinity – so it is
                definitely a must-see.</p>
            <a target="_blank" href="routes/route6/Slabodka.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Druya </h3>
            <p>The next place is also an amazing one and is located on the border with the EU. Druja lies on the very
                edge of Belarus – on the left bank of the Western Dvina River. The right bank is Latvian lands.</p>
            <a target="_blank" href="routes/route6/Druya.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Idolta </h3>
            <p>Then we recommend you to drop by the town of Idolta. An intense architectural walk awaits you here: the
                route includes a church, a chapel-tomb, a vicarage and a manor house. Once these lands belonged to the
                Rudomin-Dusiackis, then to the Sapiehas, later they passed into the possession of Judge Jazep Miloš and
                his son. </p>
            <a target="_blank" href="routes/route6/Idolta.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Camping Mereya </h3>
            <p>For a comfortable outdoor recreation, drive to the camping "Mereya". This is a full-fledged recreation
                center for travelers with parking for "motorhomes", a tent camp, gazebos, barbecues and entertainment.
            </p>
            <a target="_blank" href="routes/route6/Camping Mereya.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ route6" hidden>
        <div class="image">
            <img src="images/routes/route6/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Miory </h3>
            <p>If you stay in the Mereya camping, don't miss a chance to visit Miory as a cultural program.</p>
            <a target="_blank" href="routes/route6/Miory.php">read more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/google-translate.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <script src="js/script.js"></script>

    <script src="https://cdn.anychart.com/geodata/2.2.0/countries/belarus/belarus.js"></script>
    <script src="js/leaflet/belarus.js"></script>
    <script type="text/javascript" src="js/leaflet/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <script src="js/leaflet/L.Control.Locate.js"></script>
    <script type="text/javascript" src="js/leaflet/customized-routes.js"></script>
    <script src="js/leaflet/current-location.js"></script>




</body>

</html>