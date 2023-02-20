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
    .coordinate {
        position: absolute;
        bottom: 10px;
        right: 50%;
    }

    .leaflet-popup-content .image {
        height: 30rem;
    }

    .years {
        font-size: 1.5rem;
        color: var(--color6)
    }

    .leaflet-popup-content-wrapper {
        border-radius: 1rem;
        width:40rem;
        min-height: 15em;
    }

    .leaflet-popup-content {
        width: 100% !important;
    }
</style>

<body>
    <?php include('fragments/header.php'); ?>

    <div class="container home">

        <section class="flex">
            <div class="box">
                <div id="map">
                    <div class="leaflet-control coordinate"></div>
                </div>
            </div>
        </section>
    </div>


    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/1_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Stefania Staniouta</h3>
            <h4 class="years">Minsk (1905-2000)</h4>
            <p>An outstanding actress, a legend of the Belarusian stage. Real success came to her only with age roles.
                Best film work - Daria in the film "Farewell". She appeared on stage until the end of her life, until
                the age of 95.</p>
            <a target="_blank" href="personalities/Stefania Staniouta.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>

    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/2_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vseslav Charogdey</h3>
            <h4 class="years">Polotsk (1029-1101)</h4>
            <p>Vseslav Charogdey is the legendary prince of Polotsk, who ruled from 1044 to 1101. According to legend,
                his birth was associated with pagan witchcraft, he could turn into a wolf and quickly cover long
                distances ─ for this reason the nickname Sorcerer appeared.</p>
            <a target="_blank" href="personalities/Vseslav Charogdey.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/3_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Mykola Radzivil the Red</h3>
            <h4 class="years">Nesvizh (1512-1584)</h4>
            <p>He was one of the first influential magnates to adopt Calvinism, he had a significant impact on the
                dissemination and propaganda of reform ideas. He invited foreign Protestant scientists, founded a higher
                school for Calvinist youth.</p>
            <a target="_blank" href="personalities/Mykola Radzivil the Red.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/4_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Lev Sapega</h3>
            <h4 class="years">Vitebsk (1557-1633)</h4>
            <p>The representative of the old gentry family Lev Sapega was a prominent political, public and military
                figure. Throughout his life, he held high positions in the Grand Duchy of Lithuania, served as a royal
                clerk, chancellor of the principality from 1589 and grand hetman from 1625.</p>
            <a target="_blank" href="personalities/Lev Sapega.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/5_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ignatius Domeiko</h3>
            <h4 class="years">Bolshaya Medvyadka</h4>
            <h4 class="years">(1802-1889)</h4>
            <p>Ignatius Domeiko is outstanding geologist, mineralogist, geographer and ethnologist, rector of the
                University of Chile and a member of many scientific societies, one of the most famous students of Vilna
                University and a national hero of Chile, Belarus, Poland.</p>
            <a target="_blank" href="personalities/Ignatius Domeiko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/6_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Pavel Sukhoi</h3>
            <h4 class="years">Glubokoye</h4>
            <h4 class="years">(1895 – 1975)</h4>
            <p>Pavel Sukhoi is a well-known aircraft designer, Doctor of Technical Sciences, one of the founders of the
                Soviet jet and supersonic aviation.</p>
            <a target="_blank" href="personalities/Pavel Sukhoi.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/7_.png" alt="">
        </div>
        <div class="content">
            <h3>Zhores Alferov </h3>
            <h4 class="years">Vitebsk </h4>
            <h4 class="years">1930-2019</h4>
            <p>Academician Zhores Alferov is the winner of the Nobel Prize in Physics for 2000. He is one of the
                greatest scientists of our time in the field of semiconductor technology, his works are widely known and
                recognized worldwide, included in textbooks and monographs. </p>
            <a target="_blank" href="personalities/Zhores Alferov.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/8_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Peter Klimuk</h3>
            <h4 class="years">Komarovka </h4>
            <h4 class="years">1942</h4>
            <p>Peter Klimuk is twice Hero of the Soviet Union. The duration of its three flights is 78 days 18 hours 18
                minutes 42 seconds. He has the status of a pilot-cosmonaut of the USSR of the third set of the Air
                Force.</p>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/9_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vladimir Kovalyonok</h3>
            <h4 class="years">Beloye</h4>
            <h4 class="years">1942</h4>
            <p>Vladimir Kovalyonok was Colonel General of Aviation (1993). Twice Hero of the Soviet Union (1978, 1981).
                Hero of the GDR (1978). Hero of the MPR (1981). Pilot-cosmonaut of the USSR.</p>
            <a target="_blank" href="personalities/Vladimir Kovalyonok.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/10_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Oleg Novitsky</h3>
            <h4 class="years">Cherven</h4>
            <h4 class="years">1971</h4>
            <p>Pilot-cosmonaut. Hero of the Russian Federation. Colonel in the reserve of the Russian Air Force. </p>
            <a target="_blank" href="personalities/Oleg Novitsky.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/11_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Napoleon Orda</h3>
            <h4 class="years">Vorotsevichi</h4>
            <h4 class="years">1807-1883</h4>
            <p>Napoleon Orda is an artist, writer, composer and musician. He was born in the village of Vorotsevichi,
                Pinsk district, was educated in Vilna, and since 1833 settled in Paris.</p>
            <a target="_blank" href="personalities/Napoleon Orda.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/12_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Euphrosyne of Polotsk</h3>
            <h4 class="years">Polotsk </h4>
            <h4 class="years">(1110-1167)</h4>
            <p>Euphrosyne of Polotsk is an East Slavic educator, the first woman in Belarus to be recognized as a saint.
                She was born in Polotsk in 1104, was the granddaughter of Vseslav Charodey and Vladimir Monomakh on the
                paternal and maternal lines. </p>
            <a target="_blank" href="personalities/Euphrosyne of Polotsk.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/13_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Simeon of Polotsk</h3>
            <h4 class="years">Polotsk </h4>
            <h4 class="years">(1629-1680)</h4>
            <p>Simeon of Polotsk is one of the outstanding figures of not only Belarusian and Russian, but moreover,
                Slavic culture in general. The style of sermons is quite simple, alien to pretentiousness. </p>
            <a target="_blank" href="personalities/Simeon of Polotsk.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/14_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Zair Azgur</h3>
            <h4 class="years">Zastodolye</h4>
            <h4 class="years">(1908-1995)</h4>
            <p>The talent of the young sculptor manifested itself primarily in the creation of sculptural portraits:
                Belarusian educators Francysk Skaryna, Vasily Tyapinsky, writers Yakub Kolas, Yanka Kupala, Zmitrak
                Byaduli, politicians Felix Dzerzhinsky, Alexander Myasnikov and Gracchus Babef, Grigory Ordzhonikidze,
                Joseph Stalin, as well as actress Larisa Alexandrovskaya .</p>
            <a target="_blank" href="personalities/Zair Azgur.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/15_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Francysk Skaryna</h3>
            <h4 class="years">Polotsk </h4>
            <h4 class="years">(1486-1551)</h4>
            <p>In 1517 in Prague, for the first time in the history of the Eastern and Southern Slavs, Skorina printed
                the Bible in a language accessible to the common people. In 1525, his "Apostle" was published, and later
                ─ "A Small Road Book". </p>
            <a target="_blank" href="personalities/Francysk Skaryna.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/16_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Anatoliy Klyshko</h3>
            <h4 class="years">Daneyki</h4>
            <h4 class="years">(1935-2021)</h4>
            <p>From 1961 to 1963 he was senior editor of the script department of the film studio "Belarusfilm", then
                again "Polymya": literary worker of the department of criticism, editor of the department of science and
                art. Since 1971 ─ head of the laboratory for teaching literacy, and then the department of scientific
                literature of the Institute of Pedagogy of the Ministry of Education of the BSSR. </p>
            <a target="_blank" href="personalities/Anatoliy Klyshko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/17_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Aloiza Pashkevich</h3>
            <h4 class="years">Stary Dvor</h4>
            <h4 class="years">(1876-1916)</h4>
            <p>While in St. Petersburg, Pashkevich participated in Belarusian circles and began to publish in illegal
                publications. Returning to her homeland, she became one of the leaders of the Belarusian socialist
                community, for which she ended up in exile. </p>
            <a target="_blank" href="personalities/Aloiza Pashkevich.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/18_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Peter Masherov</h3>
            <h4 class="years">Shirki</h4>
            <h4 class="years">(1918-1980)</h4>
            <p>Peter Masherov is a Soviet Belarusian party leader, the first secretary of the Central Committee of the
                Communist Party of the BSSR from 1965 to 1980. Masherov was born into a poor peasant family, during the
                war he was a volunteer in the Red Army, in the post-war period he began his career as a statesman.</p>
            <a target="_blank" href="personalities/Peter Masherov.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/19_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Kirill Mazurov</h3>
            <h4 class="years">Rudnya-Pribytkovskaya</h4>
            <h4 class="years">(1914-1989)</h4>
            <p>Kirill Mazurov was one of the organizers and leaders of the partisan underground and the partisan
                movement in Belarus during the Great Patriotic War.</p>
            <a target="_blank" href="personalities/Kirill Mazurov.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/20_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Andrei Gromyko</h3>
            <h4 class="years">Starye Gromyki</h4>
            <h4 class="years">(1909-1989)</h4>
            <p>Andrei Gromyko is a well-known Soviet diplomat who worked as the Minister of Foreign Affairs of the USSR
                for almost three decades. He was born in the Gomel region, in the village of Starye Gromyki, studied in
                Gomel and Minsk.</p>
            <a target="_blank" href="personalities/Andrei Gromyko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/21_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Mikhail Savitsky</h3>
            <h4 class="years">Zvenyachi</h4>
            <h4 class="years">1922-2010</h4>
            <p>Mikhail Savitsky is the only person of art who became the Hero of Belarus. This is an artist whose name
                is inextricably linked with the main tragedies of our land of the 20th century - the Second World War
                and the Chernobyl tragedy.</p>
            <a target="_blank" href="personalities/Mikhail Savitsky.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/22_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Marc Chagall</h3>
            <h4 class="years">Liozno</h4>
            <h4 class="years">(1887-1985)</h4>
            <p>Marc Chagall was born in a poor Jewish family. At the age of 19, he began to study painting at the school
                of the artist Yudel Pan, and later in St. Petersburg, Lev Bakst became one of his teachers. motives. In
                Vitebsk, the artist met Bella Rosenfeld, who became his wife and muse. It seems that even other women
                that Chagall painted have her features.</p>
            <a target="_blank" href="personalities/Marc Chagall.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/23_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Gavriil Vashchenko</h3>
            <h4 class="years">Chikalovichi</h4>
            <h4 class="years">(1928-2014)</h4>
            <p>He had a huge impact on the preservation and development of Belarusian culture.</p>
            <a target="_blank" href="personalities/Gavriil Vashchenko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/24_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Olga Korbut</h3>
            <h4 class="years">Grodno</h4>
            <h4 class="years">1955</h4>
            <p>Olga Korbutis a Belarusian gymnast, four-time Olympic champion, Honored Master of Sports of the USSR.</p>
            <a target="_blank" href="personalities/Olga Korbut.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/25_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Yulia Nesterenko</h3>
            <h4 class="years">Brest</h4>
            <h4 class="years">1979</h4>
            <p>At the 2004 Games in Athens, the athlete in the final race for 100 meters, unexpectedly for many experts
                and analysts, was ahead of more eminent runners and finished first with a score of 10.93 and won a medal
                of the highest dignity. </p>
            <a target="_blank" href="personalities/Yulia Nesterenko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/26_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Alexey Grishin</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">1979</h4>
            <p>Aleksey Grishin is a Belarusian freestyler (ski acrobatics), champion of the 2010 Olympic Games in
                Vancouver, bronze medalist of the 2002 Olympic Games in Salt Lake City, repeated winner and prize-winner
                of championships and stages of the World Cup.</p>
            <a target="_blank" href="personalities/Alexey Grishin.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/27_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ekaterina Karsten</h3>
            <h4 class="years">Osechino</h4>
            <h4 class="years">1972</h4>
            <p>Ekaterina Karsten is a Soviet and Belarusian rower. The first two-time Olympic champion in the history of
                independent Belarus; six-time world champion in single sculls. Honored Master of Sports of the USSR. The
                first ever full cavalier of the Belarusian Order of the Fatherland.</p>
            <a target="_blank" href="personalities/Ekaterina Karsten.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/28_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ruslan Salei</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">(1974-2011)</h4>
            <p>Ruslan Salei is one of the best players in the history of Belarusian hockey. He took part in all three
                Olympics (1998, 2002, 2010) in which the national team competed. Champion of Belarus 1993, 1994, 1995.
            </p>
            <a target="_blank" href="personalities/Ruslan Salei.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/29_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vitaly Shcherbo</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">1972</h4>
            <p>Vitaly Shcherbo is a world-famous Belarusian gymnast. Considered one of the best gymnasts of all time.
            </p>
            <a target="_blank" href="personalities/Vitaly Shcherbo.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/30_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Maxim Mirny</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">1977</h4>
            <p>Maxim Mirny is an outstanding Belarusian tennis player, Honored Master of Sports. Considered one of the
                best doubles players in the history of world tennis.</p>
            <a target="_blank" href="personalities/Maxim Mirny.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/31_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Janka Kupala</h3>
            <h4 class="years">Vyazynka</h4>
            <h4 class="years">(1882-1942)</h4>
            <p>Ivan Lutsevich, known under the pseudonym Janka Kupala, was born in the village of Vyazynka in the family
                of a petty gentry.</p>
            <a target="_blank" href="personalities/Janka Kupala.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/32_.png" alt="">
        </div>
        <div class="content">
            <h3>Yakub Kolas</h3>
            <h4 class="years">Stolbtsy</h4>
            <h4 class="years">(1882-1956)</h4>
            <p>Yakub Kolas (real name Konstantin Mitskevich) is one of the classics and founders of Belarusian
                literature. The first collection of the poet ("Songs of pity") was published in Vilna in 1910. The poems
                “Simon-Music” and “New Land”, the trilogy “On Rostany”, and the story “On Prastors Zhytsya” brought
                national fame to the classics.</p>
            <a target="_blank" href="personalities/Yakub Kolas.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/33_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ryhor Borodulin</h3>
            <h4 class="years">Gorodok</h4>
            <h4 class="years">(1935-2014)</h4>
            <p>Ryhor Borodulin is poet of Belarus, essayist, translator who worked for many periodicals. About 70
                collections of poetry by Borodulin were published. He also wrote satirical works, poems for children,
                critical articles. </p>
            <a target="_blank" href="personalities/Ryhor Borodulin.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/34_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vladimir Korotkevich</h3>
            <h4 class="years">Orsha</h4>
            <h4 class="years">(1930-1984)</h4>
            <p>Vladimir Karatkevich, writer, poet, playwright, publicist, is one of the most prominent Belarusian
                writers of the 20th century. </p>
            <a target="_blank" href="personalities/Vladimir Korotkevich.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/35_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ivan Melezh</h3>
            <h4 class="years">Glinische</h4>
            <h4 class="years">(1921-1976)</h4>
            <p>Melezh's first poem "Radzime" was published in 1939 in "Chyrvonai Zmena". Before the war, he was
                published in the newspapers “Litaratura and Mastatstva”, “Balshavik Palessya” and others. </p>
            <a target="_blank" href="personalities/Ivan Melezh.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/36_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Ivan Shamyakin</h3>
            <h4 class="years">Korma</h4>
            <h4 class="years">(1921-2004)</h4>
            <p>Ivan Shamyakin brought widespread fame ─ the first novel "Deep Current". The results of more than 60
                years of creative work of IP Shamyakin are very impressive: 130 books have been published, with a volume
                of 500 printed sheets and a total circulation of over 25 million copies. </p>
            <a target="_blank" href="personalities/Ivan Shamyakin.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/37_.png" alt="">
        </div>
        <div class="content">
            <h3>Kondrat Krapiva</h3>
            <h4 class="years">Nizok</h4>
            <h4 class="years">(1896-1991)</h4>
            <p>Kondrat Krapiva began his career as a satirist poet. His first printed work ─ a feuilleton in verse "Once
                upon a time" was published in the newspaper "Krasnoarmeyskaya Pravda" in 1922. </p>
            <a target="_blank" href="personalities/Kondrat Krapiva.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/38_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Yan Barshchevskiy</h3>
            <h4 class="years">Murogu</h4>
            <h4 class="years">(1794-1851)</h4>
            <p>Yan Barshchevsky as a poet was formed under the influence of Polish classicism. Mickiewicz's passion for
                poetry was reflected in his Polish works (the poem "The Life of an Orphan", the sonnets "Pilgrim's
                Melodies").</p>
            <a target="_blank" href="personalities/Yan Barshchevskiy.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/39_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vikentiy Dunin-Martsinkevich</h3>
            <h4 class="years">Bobruisk</h4>
            <h4 class="years">(1808-1884)</h4>
            <p>Vikentiy Dunin-Martsinkevich is a Belarusian writer, playwright and theater critic. It is considered one
                of the founders of the Belarusian national dramaturgy and theater.</p>
            <a target="_blank" href="personalities/Vikentiy Dunin-Martsinkevich.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/40_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Gennadiy Buravkin</h3>
            <h4 class="years">Rossony</h4>
            <h4 class="years">(1936-2014)</h4>
            <p>He worked in the editorial office of the magazine "Communist of Belarus", as an editor on the Belarusian
                radio, head of the department of literature, deputy editor-in-chief of the newspaper "Litaratura i
                mastatstva". </p>
            <a target="_blank" href="personalities/Gennadiy Buravkin.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/41_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Maxim Bogdanovich</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">(1891-1917)</h4>
            <p>Bogdanovich lived a very short life and died of tuberculosis at the age of 25. Nevertheless, he stood at
                the origins of Belarusian literature and the modern literary Belarusian language.</p>
            <a target="_blank" href="personalities/Maxim Bogdanovich.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/42_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vasil Bykov</h3>
            <h4 class="years">Bychki</h4>
            <h4 class="years">1924-2003</h4>
            <p>Vasil Bykov is a Belarusian folk writer and public figure, a participant in the Great Patriotic War. He
                was born in the village of Bychki, Ushachsky district, Vitebsk region.</p>
            <a target="_blank" href="personalities/Vasil Bykov.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/43_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Lev Dovator</h3>
            <h4 class="years">Khotino</h4>
            <h4 class="years">(1903-1941)</h4>
            <p>In August 1941, he was entrusted to lead a separate cavalry group, formed from several cavalry regiments.
                Under the command of L.M. Dovator, a large cavalry unit for the first time made a raid into the enemy
                rear from August 14 to September 2, 1941, striking at communications, destroying the headquarters,
                transport, warehouses and manpower of the Nazis.</p>
            <a target="_blank" href="personalities/Lev Dovator.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/44_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vera Horuzhaya</h3>
            <h4 class="years">Bobruisk</h4>
            <h4 class="years">(1903-1942)</h4>
            <p>In 1942, Khoruzhaya, at the head of a group of underground workers, was transferred across the front line
                to the city of Vitebsk. Her group carried out a lot of sabotage on the railway, factories, collected
                intelligence data for the command of the Soviet troops. </p>
            <a target="_blank" href="personalities/Vera Horuzhaya.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/45_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vasiliy Korzh</h3>
            <h4 class="years">Khorostovo</h4>
            <h4 class="years">(1899-1967)</h4>
            <p>Vasiliy Korzh is the commander of the Pinsk partisan unit, member of the Pinsk underground regional party
                committee, major general.</p>
            <a target="_blank" href="personalities/Vasiliy Korzh.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/46_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Zinaida Tusnolobova-Marchenko</h3>
            <h4 class="years">Polotsk </h4>
            <h4 class="years">(1920-1980)</h4>
            <p>Zinaida Tusnolobova-Marchenkocarried 123 wounded from the battlefield. On February 2, 1943, in the battle
                for the Gorshechnoye station in the Kursk region, she was seriously wounded, frostbite, and lay among
                the corpses for a day. She lost her arms and legs due to frostbite.</p>
            <a target="_blank" href="personalities/Zinaida Tusnolobova-Marchenko.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/47_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Minai Shmyrev</h3>
            <h4 class="years">Punische</h4>
            <h4 class="years">(1891-1964)</h4>
            <p>Shmyryov's partisan brigade destroyed the enemy cavalry unit, defeated the enemy convoy and burned the
                bridges over the rivers Usvyacha, Turovka, Shlyakhotka. During August - September 1941, the partisans of
                Batka Minai fought 27 battles, destroyed more than 100 Nazis and their accomplices, 14 vehicles, 18 fuel
                tanks, 8 bridges.</p>

        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/48_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Elena Mazanik</h3>
            <h4 class="years">Poddegtyarnya</h4>
            <h4 class="years">(1914-1996)</h4>
            <p>On the night of September 22, 1943, in Minsk, on the instructions of the command of the partisan
                detachment - "Dima", a Hitlerite protege, the General Commissar of Belarus, was killed by a mine
                installed by her, in whose house Mazanik worked as a maid. Subsequently, she performed combat missions
                behind enemy lines.</p>

        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/49_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Maria Osipova</h3>
            <h4 class="years">Serkovets</h4>
            <h4 class="years">(1908-1999)</h4>
            <p>On September 20, 1943, at a huge risk to her life, Osipova delivered a mine with a chemical fuse from a
                partisan detachment to Minsk in a basket of lingonberries and handed it over to Mazanik. </p>
            <a target="_blank" href="personalities/Maria Osipova.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/50_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Nadezhda Troyan</h3>
            <h4 class="years">Verkhnedvinsk</h4>
            <h4 class="years">(1921-2011)</h4>
            <p>Nadezhda Troyan is legendary intelligence officer, Hero of the Soviet Union. During the war years, she
                was a resident of the operational group "Arthur", which operated in Minsk. She took an active part in
                the preparation of the operation to destroy the Gauleiter of Belarus Wilhelm Kube.</p>

        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/51_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Vladimir Omelyanyuk</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">(1917-1942)</h4>
            <p>Vladimir Omelyanyuk was one of the founders of the underground printing house during the Nazi occupation
                of Minsk, the editor of the first issue of the underground newspaper Zvyazda.</p>
            <a target="_blank" href="personalities/Vladimir Omelyanyuk.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/52_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Marat Kazei</h3>
            <h4 class="years">Stankovo</h4>
            <h4 class="years">(1929-1944)</h4>
            <p>In March 1943, the young hero actually saved the partisan detachment. When the punishers surrounded the
                partisans near the village of Rumok, it was Marat who was able to break out of the encirclement and
                bring another partisan detachment to the rescue. In December 1943, in a battle on the Slutsk Highway,
                Marat Kazei obtained valuable enemy documents.</p>
            <a target="_blank" href="personalities/Marat Kazei.php">read
                more <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
    <div class="box_ person" hidden>
        <div class="image">
            <img src="images/personalities/53_.jpg" alt="">
        </div>
        <div class="content">
            <h3>Maria Bruskin</h3>
            <h4 class="years">Minsk</h4>
            <h4 class="years">(1924-1941)</h4>
            <p>From the first days of the occupation of the capital, the young Minsker was actively involved in the work
                of the Minsk underground. At first she went to the Drozdy concentration camp - she brought food and
                water to the prisoners. </p>
            <a target="_blank" href="personalities/Maria Bruskin.php">read
                more <i class="fas fa-angle-right"></i></a>
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
    <script type="text/javascript" src="js/leaflet/customized-personalities.js"></script>
    <script src="js/leaflet/current-location.js"></script>




</body>

</html>