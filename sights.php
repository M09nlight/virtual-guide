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
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@lasights/dist/leaflet-routing-machine.css" />


</head>
<style>

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

  <!----------------------------------------------------------------------------------------------Vitebsk--->
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Vitebsk</h3>
      <p>Vitebsk is the Mecca of Belarusian artists, the birthplace of Marc Chagall and Ossip Zadkine.</p>

      <a target="_blank" href="sights/vitebsk/Vitebsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Devil's Beard</h3>
      <p>The reserve was established in 1980 to protect rare plants. </p>

      <a target="_blank" href="sights/vitebsk/Devil's Beard.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Arboretum in Luzhesno</h3>
      <p>Luzhesno was first mentioned in documentary sources in 1579 - the place is marked on the map of Polotsk and
        Vitebsk provinces.</p>

      <a target="_blank" href="sights/vitebsk/Arboretum in Luzhesno.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Quarries in Ruba</h3>
      <p>In 1931, a lime factory was founded near Ruba, around which a factory settlement grew. </p>

      <a target="_blank" href="sights/vitebsk/Quarries in Ruba.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Farmstead in Zdravnevo</h3>
      <p>Repin bought the Zdravnevo estate after the successful sale of the painting "Cossacks write a letter to the
        Turkish Sultan." </p>

      <a target="_blank" href="sights/vitebsk/Farmstead in Zdravnevo.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Large and Small Lettsy</h3>
      <p>The village of Malye Letsy is known for having two famous sanatoriums and springs with mineral water.</p>

      <a target="_blank" href="sights/vitebsk/Large and Small Lettsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sosnovka </h3>
      <p>You can cycle to Sosnovka to enjoy poplar alleys, forests and endless fields.</p>

      <a target="_blank" href="sights/vitebsk/Sosnovka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/8_4.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Obol</h3>
      <p>Obol is an ancient place with deep roots. It was first mentioned in 1503 as a village in the Polotsk
        Voivodeship of the Grand Duchy of Lithuania, when it was owned by Zenovichi.</p>

      <a target="_blank" href="sights/vitebsk/Obol.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/9_3.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Orsha</h3>
      <p>Orsha attracts many tourists with its thousand years of history, religion, culture and a large number of
        attractions.</p>

      <a target="_blank" href="sights/vitebsk/Orsha.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/10_.png" alt="">
    </div> -->
    <div class="content">
      <h3>Jesuit Collegium</h3>
      <p>The complex of the Jesuit Collegium adorns all the photographs of the city. The building was restored in the
        17th century.</p>

      <a target="_blank" href="sights/vitebsk/Jesuit Collegium.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ethnographic Museum Mlyn</h3>
      <p>The ethnographic complex is located near the railway station. This is a small open air museum. </p>

      <a target="_blank" href="sights/vitebsk/Ethnographic Museum Mlyn.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Children's Park Fairyland</h3>
      <p>The children's amusement park "Fairy Land" in Orsha appeared in 2008 and is the same age as its young visitors
        who come here with their parents.</p>

      <a target="_blank" href="sights/vitebsk/Children's Park Fairyland.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>St. Elijah Church</h3>
      <p>Church canons prescribe the construction of churches on the highest and most beautiful place, so St. Elias
        Church was placed opposite the castle on the left bank of the Dnieper. </p>

      <a target="_blank" href="sights/vitebsk/St. Elijah Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial complex Katyusha</h3>
      <p>A military machine with an affectionate name was included in all textbooks telling about the Great Patriotic
        War.</p>

      <a target="_blank" href="sights/vitebsk/Memorial complex Katyusha.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Liozno</h3>
      <p>Liozno is an urban village of the Vitebsk region, a green corner of Belarus with its difficult and beautiful
        history.</p>

      <a target="_blank" href="sights/vitebsk/Liozno.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial complex "Adamenskaya Gorka"</h3>
      <p>Adamenska Gorka is a holy place in Liozno, it was here that the last resting place of the warriors who returned
        peace to this Earth was found.</p>

      <a target="_blank" href="sights/vitebsk/Memorial complex Adamenskaya Gorka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <!-- ------------------------------------------------------------------------- -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to the Liberators - Tank T-34</h3>
      <p>At the entrance to Liozno on the Vitebsk-Smolensk highway, in memory of the fallen soldiers, a monument to the
        liberators was erected - a T-34 tank on a concrete pedestal.</p>

      <a target="_blank" href="sights/vitebsk/Monument to the Liberators Tank T-34.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Glubokoye</h3>
      <p>Glubokoe is a city in the Vitebsk region of Belarus, the administrative center of the Glubokoe district.</p>

      <a target="_blank" href="sights/vitebsk/Glubokoye.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral of the Nativity of the Blessed Virgin Mary</h3>
      <p>The Orthodox Cathedral of the Nativity of the Blessed Virgin Mary is located in the building of the former
        Carmelite Church and is an architectural monument.</p>

      <a target="_blank" href="sights/vitebsk/Cathedral of the Nativity of the Blessed Virgin Mary.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Trinity</h3>
      <p>The Trinity Church is a cultural and historical monument of architecture, which belongs to the Vilna Baroque
        style. A clear silhouette of the church is formed by two towers and a high gable above the apse.</p>

      <a target="_blank" href="sights/vitebsk/Church of the Holy Trinity.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Plane-monument to P. Sukhoi</h3>
      <p>A symbolic monument to one of the founders of Soviet supersonic and jet aviation was erected on a pedestal near
        the road. Su-17M tail number 101, a formidable aircraft nicknamed "drying", is preparing to take off right at
        the entrance to the city. </p>

      <a target="_blank" href="sights/vitebsk/Plane-monument to P. Sukhoi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Polotsk</h3>
      <p>Polotsk is one of the most beautiful cities in Belarus. It is located in a picturesque place where the Polota
        River flows into the Western Dvina.</p>

      <a target="_blank" href="sights/vitebsk/Polotsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Boris stone</h3>
      <p>There are several unique monuments in Belarus called Boris stones. These are hefty boulders with embossed
        inscriptions and crosses. </p>

      <a target="_blank" href="sights/vitebsk/Boris stone.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sophia Cathedral in Polotsk</h3>
      <p>Sophia Cathedral in Polotsk is one of the most ancient Christian shrines located in Belarus. In the 11th
        century, it became the fourth temple of Hagia Sophia in the world.</p>

      <a target="_blank" href="sights/vitebsk/Sophia Cathedral in Polotsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Jesuit Collegium in Polotsk</h3>
      <p>Today, the former Jesuit Collegium is one of the main attractions of Polotsk, open to tourists. Visitors can
        walk around the courtyard, admire the Renaissance buildings of the architectural complex, view the exposition.
      </p>

      <a target="_blank" href="sights/vitebsk/Jesuit Collegium in Polotsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Printing in Polotsk</h3>
      <p>On September 8, 1990, on the day of the 500th anniversary of Francysk Skaryna, the Book Printing Museum was
        opened in his hometown - this is part of the National Polotsk Historical and Cultural Museum-Reserve, which, in
        addition to it, includes 10 more similar institutions.</p>

      <a target="_blank" href="sights/vitebsk/Museum of Printing in Polotsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to the letter "Ў"</h3>
      <p>The monument to the unusual letter "ў" is located in Polotsk, the most ancient city in Belarus. The monument is
        unique and original, it has no analogues anywhere. </p>

      <a target="_blank" href="sights/vitebsk/Monument to the letter Ў.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to Francysk Skaryna</h3>
      <p>Francysk Skaryna is one of the "universal geniuses" of the Renaissance. A contemporary of Raphael and Leonardo
        da Vinci, he was a philosopher, scientist, inventor and physician. </p>

      <a target="_blank" href="sights/vitebsk/Monument to Francysk Skaryna.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/29_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Spaso-Evfrosinevsky Monastery</h3>
      <p>Polotsk is one of the oldest cities in Kievan Rus. The history of this principality is closely connected with
        the name of Efrosinya of Polotsk, a princess canonized by the Orthodox Church. </p>

      <a target="_blank" href="sights/vitebsk/Spaso-Evfrosinevsky Monastery.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dubrovno</h3>
      <p>Today, Dubrovno is a regional center in the Vitebsk region, picturesquely nestled on two banks of the Dnieper
        and two rivers flowing into it. Just a few centuries ago, watches were made here that were superior in
        reliability to Swiss ones, and fabrics, the quality of which went down in history.</p>

      <a target="_blank" href="sights/vitebsk/Dubrovno.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>BERNARDINE MONASTERY IN DUBROVNO</h3>
      <p>The Bernardine Monastery was built in 1809 of brick on the high bank of the Dubrovenka River on the site of a
        wooden monastery built in 1630. It is a monument of baroque architecture. It is a two-story T-shaped building
        with gable roofs, the ends of which are completed with triangular gables. The decor of the building is modest:
        pilasters, finely profiled cornices, belts.</p>

    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>FACTORY "DNEPROVSKAYA MANUFACTURE" IN DUBROVNO</h3>
      <p>Cloth factory "Dneprovskaya manufactory" in Dubrovno is one of the oldest Belarusian enterprises that processed
        flax. It operated from 1900 to 1941. The building of red brick, located on the eastern outskirts of the city,
        not far from the modern flax mill, reminds of those times.</p>

      <a target="_blank" href="sights/vitebsk/FACTORY DNEPROVSKAYA MANUFACTURE IN DUBROVNO.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <!-- ------------------------------------>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Tolochin</h3>
      <p>Tolochin is a small town on the Drut River. Its population is about 10 thousand people. Tolochin received the
        status of the city in 1955 and today is a favorite place for lovers of a quiet and relaxing holiday in Belarus.
      </p>

      <a target="_blank" href="sights/vitebsk/Tolochin.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/34_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Intercession Monastery</h3>
      <p>The first stone building of the temple was built in 1604 by Lev Sapieha. In 1615, he donated 5 plots of land
        with five peasant households in the village of Katuzhino to the church. In 1726 the church was handed over to
        the Uniates. </p>

      <a target="_blank" href="sights/vitebsk/Holy Intercession Monastery.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/35_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Anthony</h3>
      <p>On the site of the current church of St. Anthony, there was once a wooden one, but in 1812 it was burned by the
        French. Soon the construction of a new stone temple in the eclectic style began.</p>

      <a target="_blank" href="sights/vitebsk/Church of St. Anthony.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/36_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Milepost</h3>
      <p>5 km from the district center on the road to Krugloye, near the village of Goncharovka, there is a partially
        destroyed brick pillar. Its height is 2.4 m, width is 1.5 m. There are two versions about the purpose of this
        structure. According to one version, the pillar was built under Catherine II and marked the main road. The
        pillar is located on the old road of the 18th century leading to Drutsk-Mogilev. Another claims that the
        structure marked the border between the Commonwealth and the Russian Empire after 1772. This is a monument of
        national importance.</p>

    </div>

  </div>



  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/37_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Chashniki</h3>
      <p>The small town of Chashniki is located 90 kilometers west of the regional center of Vitebsk. Chashniki attract
        the attention of connoisseurs of recreation in Belarus due to their unique nature, rich history and
        centuries-old legends.</p>

      <a target="_blank" href="sights/vitebsk/Chashniki.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/38_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>SPASO-TRANSFORMATION CHURCH IN CHASHNIKI</h3>
      <p>The Church of the Transformation of the Savior was built in 1843-1845. at the expense of Ignatius Volodkovich.
        It is an architectural monument of classicism.</p>

      <a target="_blank" href="sights/vitebsk/SPASO-TRANSFORMATION CHURCH IN CHASHNIKI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/39_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The Chashnik Historical Museum</h3>
      <p>The Chashnik Historical Museum was opened to visitors in 1991. The local merchant Gurevich once lived in the
        museum building.</p>

      <a target="_blank" href="sights/vitebsk/The Chashnik Historical Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/40_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Beshenkovichi</h3>
      <p>Today Beshenkovichi is an urban settlement located in the north of Belarus and is part of the Vitebsk region.
        The distance from it to the regional center barely exceeds 50 kilometers.</p>

      <a target="_blank" href="sights/vitebsk/Beshenkovichi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/41_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Elias Church</h3>
      <p>Perhaps the temple was erected in Beshenkovichi in 1447. It was one of six churches built by order of the Grand
        Duke of Lithuania Casimir IV Jagiellonchik in honor of the prophet Elijah - on the day of this saint, July 20,
        his wife Elizabeth was saved from drowning. </p>

      <a target="_blank" href="sights/vitebsk/Elias Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/42_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Khreptovich Palace</h3>
      <p>It was erected in the 70s of the XVIII century in the style of a city mansion and consisted of three buildings.
        The central one was two-story - with halls and offices, living rooms were placed in one-story side wings. </p>

      <a target="_blank" href="sights/vitebsk/Khreptovich Palace.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/43_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Beshenkovichi Museum of Local Lore</h3>
      <p>Tourists interested in the war should visit the Beshenkovichi Museum of Local Lore, founded in 1979 as a museum
        of military glory. Four of the nine museum halls are dedicated to the most tragic event of the past century.
      </p>

      <a target="_blank" href="sights/vitebsk/Beshenkovichi Museum of Local Lore.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/44_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gorodok</h3>
      <p>Gorodok is a regional center in the north of the Vitebsk region. Located 30 kilometers from Vitebsk</p>

      <a target="_blank" href="sights/vitebsk/Gorodok.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/45_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Life-Giving Trinity</h3>
      <p>A belfry was attached to the temple. In the architecture of the church, elements of the architecture of the
        previous building, which is of historical importance for the parish, were used.</p>

      <a target="_blank" href="sights/vitebsk/Church of the Holy Life-Giving Trinity.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/46_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gorodok Regional Museum of Local Lore</h3>
      <p>The Gorodok Regional Museum of Local Lore was established in Gorodok in 1974 and was opened to visitors in
        1976. </p>

      <a target="_blank" href="sights/vitebsk/Gorodok Regional Museum of Local Lore.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/47_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lepel</h3>
      <p>Lepel is a small town in the Vitebsk region of Belarus, the administrative center of the Lepel district. </p>

      <a target="_blank" href="sights/vitebsk/Lepel.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/48_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lepel Lake</h3>
      <p>This reservoir is located on the northern outskirts of Lepel. Along its perimeter there are several more
        settlements: Shunty, Zavidichi, Old Lepel.</p>

      <a target="_blank" href="sights/vitebsk/Lepel Lake.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/49_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF ST. CASIMIR</h3>
      <p>This temple was built for almost 20 years: from 1857 to 1876, funds for it were donated by the landowner of the
        Lepel district, collegiate assessor Malchevsky.</p>

      <a target="_blank" href="sights/vitebsk/CHURCH OF ST. CASIMIR.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/50_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MONUMENT TO LEV SAPEGA</h3>
      <p>The monument to Lev Sapega in Lepel Oganov was opened on September 11, 2010. The initiator of its creation was
        the priest Andrei Aniskevich, and the author was the sculptor Lev Oganov. </p>

      <a target="_blank" href="sights/vitebsk/MONUMENT TO LEV SAPEGA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/51_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MONUMENT TSMOKU</h3>
      <p>On the shores of Lake Lepel in the city park in September 2013, a real dragon settled. True, bronze,
        single-headed and very kind. </p>

      <a target="_blank" href="sights/vitebsk/MONUMENT TsMOKU.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/52_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Shumilino</h3>
      <p>Shumilino is an urban settlement, which is the administrative center of the Shumilinsky district of the Vitebsk
        region. </p>

      <a target="_blank" href="sights/vitebsk/Shumilino.php">read more <i class="fas fa-angle-right"></i></a>
    </div>Virgin Mary

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/53_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Assumption of the Blessed Virgin Mary</h3>
      <p>The Assumption Church in the village of Pobeda was built in 1898 of red brick, not plastered. An architectural
        monument of the retrospective Russian style. </p>

      <a target="_blank" href="sights/vitebsk/Church of the Assumption of the Blessed Virgin Mary.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/54_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>REPUBLICAN LANDSCAPE RESERVE "KOZYANSKY"</h3>
      <p>Republican landscape reserve "Kozyansky" was established in 1999. Today it is a whole swamp-forest complex,
        whose total area is more than 26,000 hectares. </p>

      <a target="_blank" href="sights/vitebsk/REPUBLICAN LANDSCAPE RESERVE KOZYANSKY.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/55_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Devil's stone</h3>
      <p>In the Shumilinsky district, 750 meters from the village of Gorki (55.192222, 29.488611), there is a natural
        attraction - the largest stone in Belarus. </p>

      <a target="_blank" href="sights/vitebsk/Devil's stone.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <!-- Stop here -->
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/56_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ushachi</h3>
      <p>On Swiss mineral water maps of Europe in the 16th century, Ushachi was listed as a place with healing
        properties, on the military - during the Second World War - as the capital of a partisan zone.</p>

      <a target="_blank" href="sights/vitebsk/Ushachi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/57_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF SAINT LAVRENTIA</h3>
      <p>Church of St. Lawrence - a monument of neo-Gothic architecture. It was built in 1908-1913.</p>

      <a target="_blank" href="sights/vitebsk/CHURCH OF SAINT LAVRENTIA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/58_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MEMORIAL COMPLEX "PRORIV"</h3>
      <p>The memorial complex is located seven kilometers west of the urban village of Ushachi, between the villages of
        Paperino, Dvor-Plino and Novoye Selo.</p>

      <a target="_blank" href="sights/vitebsk/MEMORIAL COMPLEX PRORIV.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/59_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dokshitsy</h3>
      <p>Dokshitsy is a city in the Vitebsk region, located 200 kilometers from Vitebsk. It is the administrative center
        of the district of the same name.</p>

      <a target="_blank" href="sights/vitebsk/Dokshitsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/60_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Intercession Church</h3>
      <p>The Holy Intercession Church is made in a retrospective Russian style, the modern building was built in
        1900-1903, and at the same time the Orthodox church was lit in honor of the Intercession of the Virgin.</p>

      <a target="_blank" href="sights/vitebsk/Holy Intercession Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/61_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Begoml Museum of National Glory</h3>
      <p>The history of the Begoml Museum of Folk Glory began on May 8, 1970, when it opened its doors to the first
        visitors. </p>

      <a target="_blank" href="sights/vitebsk/Begoml Museum of National Glory.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/62_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Postavy</h3>
      <p>Postavy traces its history back to the beginning of the 15th century, although in fact this settlement is
        probably much older, just no evidence of its more distant past has been preserved. </p>

      <a target="_blank" href="sights/vitebsk/Postavy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/63_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF ST. ANTONY OF PADUAN</h3>
      <p>The Church of St. Anthony of Padua is a monument of neo-Gothic architecture. It was erected from red
        unplastered brick in 1898-1904 according to the project of architect Arthur Goibel.</p>

      <a target="_blank" href="sights/vitebsk/CHURCH OF ST. ANTONY OF PADUAN.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/64_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>TYZENGAUZ PALACE</h3>
      <p>The palace complex in the style of classicism was built in Postavy in the second half of the 18th century for
        Anthony Tyzengauz according to the design of the Italian architect Giuseppe di Sacco.</p>

      <a target="_blank" href="sights/vitebsk/TYZENGAUZ PALACE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/79_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Senno Museum of Local History</h3>
      <p>The Senno Local History Museum was founded on August 30, 1995 by the decision of the Senno District Executive
        Committee, and has been open to the public since September 1, 1995. </p>

      <a target="_blank" href="sights/vitebsk/Senno Museum of Local History.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/66_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Trinity in Glubokoe</h3>
      <p>Catholic church in the town of Glubokoe (Vitebsk region). A monument of architecture in the Baroque style,
        built in 1764-1782, rebuilt in 1902-1908.</p>

      <a target="_blank" href="sights/vitebsk/Church of the Holy Trinity in Glubokoe.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/67_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Braslav </h3>
      <p>Braslav is a resort town with a population of about ten thousand people. It is located in the northwestern part
        of Belarus, close to the border with Latvia and Lithuania.</p>

      <a target="_blank" href="sights/vitebsk/Braslav.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/68_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Braslav Lakes National Park</h3>
      <p>The Braslav Lakes National Park is one of the youngest, but truly unique and well-known far beyond the borders
        of the country.</p>

      <a target="_blank" href="sights/vitebsk/Braslav Lakes National Park.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/69_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>BRASLAV MUSEUM OF TRADITIONAL CULTURE</h3>
      <p>The exposition was opened in 1997. The museum is located on the shore of Lake Drivyaty in the building of an
        old mill - an architectural monument of the beginning. XX century, which is adjoined by additional extensions,
        creating a representative complex, which houses the hotel "Zayezdny Dvor". </p>

      <a target="_blank" href="sights/vitebsk/BRASLAV MUSEUM OF TRADITIONAL CULTURE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/70_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>THE CASTLE MOUNTAIN</h3>
      <p>The settlement "Castle Hill" with a height of 14 meters and an area of two hectares is an archeological
        monument of the 9th-15th centuries. </p>

      <a target="_blank" href="sights/vitebsk/THE CASTLE MOUNTAIN.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/71_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Miory</h3>
      <p>The small cozy town of Miory is located 190 kilometers northwest of Vitebsk. The streets of the city, whose
        population is about 8 thousand people, are spread along the shores of the picturesque Miory Lake.</p>

      <a target="_blank" href="sights/vitebsk/Miory.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/72_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The Church of the Assumption of the Virgin Mary</h3>
      <p>The main and in fact the only attraction of the city of Miory is the Church of the Assumption of the Virgin
        Mary. </p>

      <a target="_blank" href="sights/vitebsk/The Church of the Assumption of the Virgin Mary.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/73_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Verkhnedvinsk</h3>
      <p>Verhnedvinsk is the administrative center of the district of the same name in the Vitebsk region. </p>

      <a target="_blank" href="sights/vitebsk/Verkhnedvinsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/74_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Nativity of the Virgin Mary</h3>
      <p>The Church of the Nativity of the Virgin Mary is located in the very center of the city. The temple was erected
        in 1809, rebuilt in 1867.</p>

      <a target="_blank" href="sights/vitebsk/Church of the Nativity of the Virgin Mary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/75_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas</h3>
      <p>The temple in honor of St. Nicholas was built in 1819 in the then popular style of classicism. </p>

      <a target="_blank" href="sights/vitebsk/Church of St. Nicholas.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/76_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sharkovshchina</h3>
      <p>Sharkovshchina is located 210 km from the city of Vitebsk and 195 km from the city of Minsk. </p>

      <a target="_blank" href="sights/vitebsk/Sharkovshchina.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/77_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Icon of the Mother of God</h3>
      <p>Church of the Icon of the Mother of God is a historical building of the late 19th century in Sharkovshchina, an
        architectural monument (number 213Г000828). Located in the center of the village, on Engels street.</p>

      <a target="_blank" href="sights/vitebsk/Church of the Icon of the Mother of God.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/vitebsk/78_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Senno</h3>
      <p>Senno is a small town surrounded by five lakes, 58 kilometers southwest of Vitebsk, with a population of just
        over seven thousand people. </p>

      <a target="_blank" href="sights/vitebsk/Senno.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <!----------------------------------------------------------------------------------------------Brest--->


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>BREST</h3>
      <p>Brest is a cozy old Belarusian regional center, a city that just recently turned 1000 years old. At one time,
        the city was the center of the Berestey land and one of the most important cities of Kievan Rus and the
        Galicia-Volyn principality.</p>

      <a target="_blank" href="sights/brest/BREST.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial complex "Brest Hero Fortress"</h3>
      <p>The Brest Fortress was built in the 30s - early 40s of the 19th century at the intersection of the Western Bug
        and Mukhavets rivers on the site of old Brest.</p>

      <a target="_blank" href="sights/brest/Memorial complex Brest Hero Fortress.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Citadel</h3>
      <p>On June 22, 1941, the garrison of the fortress received the first blows of the Nazi invaders and for more than
        a month kept the defense in complete encirclement.</p>

      <a target="_blank" href="sights/brest/Citadel.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Nicholas Church</h3>
      <p>The architectural center of the Citadel is the garrison St. Nicholas Church, built in 1851-76.</p>

      <a target="_blank" href="sights/brest/Nicholas Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument "Courage"</h3>
      <p>The compositional center of the ensemble is the Courage monument, a chest sculpture of a warrior 33.5 m high,
        on the reverse side of which there are relief compositions telling about individual episodes of the heroic
        defense of the fortress.</p>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sculptural composition "Thirst"</h3>
      <p>The sculptural composition "Thirst" depicts a Soviet soldier who, leaning on a machine gun, is trying with all
        his might to reach the river and scoop up water with a helmet. The monument is dedicated to the courage of the
        defenders of the fortress, who held the defense for many days without food or drink.</p>

    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>National Park "Belovezhskaya Pushcha"</h3>
      <p>Belovezhskaya Pushcha is one of the most important sights of Belarus. These are the remains of a primeval
        forest that once stretched from the Baltic Sea to the Bug River and from the Oder to the Dnieper.</p>

      <a target="_blank" href="sights/brest/National Park Belovezhskaya Pushcha.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/8_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Residence of Father Frost in Belovezhskaya Pushcha</h3>
      <p>Father Frost's residence in Belovezhskaya Pushcha opened in December 2003. Picturesque nature, fabulous
        atmosphere and unique features have made it one of the most visited places in Belarus.</p>

      <a target="_blank" href="sights/brest/Residence of Father Frost in Belovezhskaya Pushcha.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/9_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Kamenets tower</h3>
      <p>In the city of Kamenets, Brest region, there is a unique monument of architecture and defensive architecture of
        the second half of the 13th century - the Kamenets Tower (Kamenets Pillar, Kamenets Vezha).</p>

      <a target="_blank" href="sights/brest/Kamenets tower.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/10_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ruzhany castle</h3>
      <p>The town of Ruzhany (today Pruzhany district, Brest region) was first mentioned in written sources at the end
        of the 15th century. It is known that until 1552 it belonged to the Tyszkiewicz family. In those days, Ruzhany
        was famous for the production of cloth and carpets, artistic belts, and ceramics. There were also big fairs.</p>

      <a target="_blank" href="sights/brest/Ruzhany castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Palace of the Puslovskys in Kossovo</h3>
      <p>The town of Kossovo (today Ivatsevichy district, Brest region) has been known since 1494, when the Grand Duke
        of Lithuania Alexander Yagielonchik presented these lands to Marshal Jan Khreptovich.</p>

      <a target="_blank" href="sights/brest/Palace of the Puslovskys in Kossovo.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Railway Museum</h3>
      <p>The Museum of Railway Engineering in Brest was opened in 2002 near the memorial complex Brest Hero Fortress</p>

      <a target="_blank" href="sights/brest/Railway Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor Nemtsevichi</h3>
      <p>In the small village of Skoky in the Brest region there is a unique architectural monument of the 18th century
        - the family estate of the Nemtsevich gentry.</p>

      <a target="_blank" href="sights/brest/Manor Nemtsevichi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral of Saint Simeon the Stylite</h3>
      <p>St. Simeon Cathedral in Brest stands at the intersection of Masherov Ave. and st. K. Marx. Mentions of the
        Simeonovskaya church and monastery in ancient Brest date back to the 14th century.</p>

      <a target="_blank" href="sights/brest/Cathedral of Saint Simeon the Stylite.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Zero kilometer</h3>
      <p>Zero kilometer of Brest is the place where the countdown of the mileage of roads in the Brest region begins.
      </p>

      <a target="_blank" href="sights/brest/Zero kilometer.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Remains of the Cistercian monastery in Vistychi</h3>
      <p>The settlement has been known since 1471. In 1678, one of the representatives of the well-known gentry family
        of Tyszkiewicz, Eustafiy, founded the monastery of the Cistercian order here - this Catholic order was founded
        in 1098 in Burgundy (modern France).</p>

      <a target="_blank" href="sights/brest/Remains of the Cistercian monastery in Vistychi.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Ascension Church in Velyamovichi</h3>
      <p>In 1899, according to the project of I. Kalenkevich, the Holy Ascension Church was erected here. It is one of
        the largest in the Brest region.</p>

      <a target="_blank" href="sights/brest/Holy Ascension Church in Velyamovichi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Trinity Church in Chernavchitsy</h3>
      <p>The representative of one of the most famous magnate families of the Commonwealth, Nikolai Christopher Sirotka,
        founded the Trinity Church in one of his estates in 1585.</p>

      <a target="_blank" href="sights/brest/Trinity Church in Chernavchitsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Cosmonautics in Tomashovka</h3>
      <p>The only museum of cosmonautics in Belarus is located in this village.</p>

      <a target="_blank" href="sights/brest/Museum of Cosmonautics in Tomashovka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dubica Station</h3>
      <p>The station building was built no later than 1887 and has been preserved in its original form - the only one in
        Belarus of this scale. Thanks to this, in recent years, the Dubitsa station has become an object of close
        interest of filmmakers - many episodes of the Russian films Cadets, The Saga of the Khanty, Tungus. Sniper”,
        “Brest Fortress”, “Role”, “Hunting the Gauleiter” and others.</p>

      <a target="_blank" href="sights/brest/Dubica Station.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Biosphere Reserve "Pribuzhskoye Polissya"</h3>
      <p>Created in 2003 on the basis of the republican reserve of the same name, a year later received the official
        status of a UNESCO biosphere reserve.</p>

      <a target="_blank" href="sights/brest/Biosphere Reserve Pribuzhskoye Polissya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor of the classic of Polish literature Maria Rodzevich in the village of Grushevo</h3>
      <p>Maria Rodzevich was born in 1864, her parents were exiled to Siberia for helping the rebels of 1863. At the age
        of 23, she became the owner of the Grushevo estate (the current Kobrin district).</p>

      <a target="_blank" href="sights/brest/Manor of the classic of Polish literature Maria Rodzevich in the village of Grushevo.php">read more
        <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Tadeusz Kosciuszko in Maly Siechnovichi</h3>
      <p>One of the alleged birthplaces of Tadeusz Kosciuszko (the second alleged birthplace is the Merechevshchina farm
        near the town of Kossovo, Ivatsevichi district).</p>

      <a target="_blank" href="sights/brest/Museum of Tadeusz Kosciuszko in Maly Siechnovichi.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Pozhezhinskiy king-oak</h3>
      <p>On the road P17 Brest - Kovel, near the sign for the village of Dubichno, Maloritsky district, we make a turn.
        Our goal is to see the oldest tree in Belarus - the Pozhezhin Tsar-oak.</p>

      <a target="_blank" href="sights/brest/Pozhezhinskiy king-oak.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Military History Museum named after A.V. Suvorov in Kobrin</h3>
      <p>Founded in 1946. The exposition was located in the manor house, where Alexander Vasilyevich Suvorov, one of the
        outstanding commanders of Europe, lived in 1797 and 1800.</p>

      <a target="_blank" href="sights/brest/Military History Museum named after A.V. Suvorov in Kobrin.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ostrich farm in the village of Kozische</h3>
      <p>Over 300 adults of the South African black ostrich live on a specialized farm founded in 2003 and located near
        the village of Kozische, Kobrin district, 20 kilometers from the regional center.</p>

      <a target="_blank" href="sights/brest/Ostrich farm in the village of Kozische.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The place of the appearance of the Virgin in the village of Lukovo</h3>
      <p>In the village of Lukovo, Malorita district, there is a chapel located on a peninsula washed by the waters of
        Lake Lukovskoye.</p>

      <a target="_blank" href="sights/brest/The place of the appearance of the Virgin in the village of Lukovo.php">read more <i
          class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Transfiguration in Khmelev</h3>
      <p>The Church of the Transfiguration of the Savior in Khmelev, Zhabinka District, built in 1725, partially rebuilt
        in the 19th century, is an architectural monument, combining baroque features with elements of classicism.</p>

      <a target="_blank" href="sights/brest/Church of the Transfiguration in Khmelev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/29_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum "5th Fort"</h3>
      <p>There are 9 forts in Brest and its environs, one of which has now been turned into the 5th Fort Museum and is
        open to visitors. This unique defensive system was built and fortified in the late 19th and early 20th
        centuries.</p>

      <a target="_blank" href="sights/brest/Museum 5th Fort.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Rescued Artifacts</h3>
      <p>Perhaps this unusual institution, which is a branch of the Brest Regional Museum of Local Lore, has no
        analogues in the world. In border Brest, local customs often confiscate valuables when trying to illegally
        export them from the country. Among them are ancient icons, paintings, jewelry and other items.</p>

      <a target="_blank" href="sights/brest/Museum of Rescued Artifacts.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Archaeological Museum "Berestye"</h3>
      <p>The only museum in Europe of a medieval East Slavic city is located on the territory of the Brest Fortress,
        where ancient Berestye was born many centuries ago before its appearance.</p>

      <a target="_blank" href="sights/brest/Archaeological Museum Berestye.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum-estate "Zaosye"</h3>
      <p>The house-museum in Novogrudok is not the only memorial place associated with the life of Adam Mickiewicz in
        Belarus.</p>

      <a target="_blank" href="sights/brest/Museum-estate Zaosye.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/brest/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Napoleon Orda in Vorotsevichi</h3>
      <p>Napoleon Orda is a truly unique personality in the history of Belarusian and European culture. A talented
        musician, composer, teacher, scientist, and most importantly, an amazing artist - a master of sketches of
        architectural monuments, urban and rural landscapes, native places of prominent people, including Tadeusz
        Kosciuszko, Adam Mickiewicz, Stanislav Moniuszko...</p>

      <a target="_blank" href="sights/brest/Museum of Napoleon Orda in Vorotsevichi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <!---------------------------------------------------------------------------------------------------------- Gomel -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CASTLE IN BRAGINA</h3>
      <p>Historians disagree when Bragin acquired his own castle, which played an important role as a border
        fortification. It is reliably known that its construction was carried out by the Vishnevetsky princes.</p>
      <a target="_blank" href="sights/gomel/CASTLE IN BRAGINA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>ASCENSION CHURCH IN KOMARINO</h3>
      <p>The first church built in the village of Komarin was closed in 1935. Religious life here resumed only in the
        1990s. of the last century, when it was decided to rebuild one of the civil buildings into a temple.</p>
      <a target="_blank" href="sights/gomel/ASCENSION CHURCH IN KOMARINO.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>OAK IN KOMARINO</h3>
      <p>The area of the oak grove, located on the territory of the village of Komarin, is about 1 ha. Due to its
        proximity to the settlement, it is used as a venue during various holidays (primarily Kupala).</p>
      <a target="_blank" href="sights/gomel/OAK IN KOMARINO.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MONUMENT TO THE LIBERATORS IN KOMARINO</h3>
      <p>Few people know that the village of Komarin became the first settlement on the territory of Belarus, which was
        liberated during the Great Patriotic War. In memory of those events, a monument was erected here.</p>
      <a target="_blank" href="sights/gomel/MONUMENT TO THE LIBERATORS IN KOMARINO.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>TELMANOVSKY PARK</h3>
      <p>The main attraction of the Bragin district is located in the village of Telman - fragments of the castle of the
        Vishnevetsky princes and Telmanovsky park, a classic example of garden and park architecture of the 18th
        century.</p>
      <a target="_blank" href="sights/gomel/TELMANOVSKY PARK.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF SAINT NICHOLAS IN BRAGINA</h3>
      <p>Perhaps the St. Nicholas Church existed in Bragin since the 17th century, but the exact time of its
        construction is unknown. In any case, the old temple in the urban settlement has not been preserved - it was
        destroyed in 1936.</p>
      <a target="_blank" href="sights/gomel/CHURCH OF SAINT NICHOLAS IN BRAGINA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <!-- part 1 ended -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Krinitsa in the village of Selets</h3>
      <p>Near the village of Selets there is a spring, which has long been considered holy among the locals, and its
        water is healing. Many pilgrims flocked here during the Christian holidays. This tradition is still alive today.
        Many come just to get water, which is of high quality, or to communicate with nature.</p>
      <a target="_blank" href="sights/gomel/Krinitsa in the village of Selets.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/8_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas the Wonderworker</h3>
      <p>If you find yourself in Buda-Koshelevo, it is worth visiting the Church of St. Nicholas the Wonderworker - a
        temple with a very difficult fate. Its predecessor was closed during the Soviet era. The building in the
        retrospective-Russian style, which today adorns the city, appeared in the 1990s.</p>
      <a target="_blank" href="sights/gomel/Church of St. Nicholas the Wonderworker.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <!-- part 2 ended -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/9_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>House of Merchant Groshikov</h3>
      <p>The building in which it is housed is an important landmark in itself. We are talking about the former house of
        the merchant Groshikov, which was built at the turn of the 19th and 20th centuries in the Art Nouveau style.
        Inside, there are icons, samples of applied art and other items that will help you learn more about who the Old
        Believers really were and what mark they left in Belarusian culture.</p>
      <a target="_blank" href="sights/gomel/House of Merchant Groshikov.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/10_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Estate complex</h3>
      <p>In the village of Khalch there is one of the most significant monuments of the classicism era in the Belarusian lands - the Voynich-Senozhetsky estate. In fairness, it should be noted that at the end of the 18th century, representatives of a different kind, the Khaletskys, began to build it. However, because of the support given to Napoleon, they lost their property, which was sold to other owners.</p>
      <a target="_blank" href="sights/gomel/Estate complex.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>"Red Square"</h3>
        <p>The Old Believers, who moved to Vetkovshchina from the lands that were part of the Muscovite state, tried to create a copy of the homeland that they had to leave in a new place. That is why the central square of the district center is called Red.</p>
      <a target="_blank" href="sights/gomel/Red Square.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Wooden architecture</h3>
      <p>The same nostalgia that led to the appearance of Red Square forced the inhabitants of Vetka to decorate their houses in the usual style. </p>
      <a target="_blank" href="sights/gomel/Wooden architecture.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sozh</h3>
      <p>The Sozh flows through the entire region - one of the few large rivers in Belarus, which has remained in a state close to natural.</p>
      <a target="_blank" href="sights/gomel/Sozh.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF ST. NICHOLAS</h3>
      <p>Acquaintance with religious architecture is definitely worth continuing with the church of St. Nicholas, which was built in the second half of the 19th century in the village of Zhelezniki. </p>
      <a target="_blank" href="sights/gomel/CHURCH OF ST. NICHOLAS.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor house</h3>
      <p>The manor house in the village of Pervomaisky, although in a fairly dilapidated form, has survived to this day. It was built at the turn of the 19th and 20th centuries in the Art Nouveau style. Even in spite of many years of decline, the remains of rich decor can still be seen on the walls. In any case, on the territory of all three estates.</p>
    </div>

  </div>
  <!-- part 3 ended -->


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Rumyantsev-Paskevich Palace</h3>
      <p>This majestic palace and park ensemble is a visiting card not only of the district, but of the entire region. This is a striking example of classicism, which has been perfectly preserved to this day (largely due to the fact that the building housed a museum).</p>
      <a target="_blank" href="sights/gomel/Rumyantsev-Paskevich Palace.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/16_2.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gomel architecture</h3>
      <p>It may seem that Gomel is one of the most Sovietized cities in Belarus. Actually it is not. Even if we forget about the palace of the Rumyantsevs-Paskevichs, there will remain many places closely connected with the past of Gomel. Many buildings were erected in a short period in the same style, which allows you to feel the atmosphere of the XIX century. For example,apartment house Lavyanov in Gomel.</p>

    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gomel Alps</h3>
      <p>On the western outskirts of Gomel there are real mountains, not much inferior to the famous Soligorsk waste heaps. </p>
      <a target="_blank" href="sights/gomel/Gomel Alps.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas the Wonderworker in Stara Belitsa</h3>
      <p>Polissya is famous for its folk kinship traditions, which were most clearly manifested during the construction of wooden temples. Some of them claim to be included in the UNESCO World Heritage List</p>
      <a target="_blank" href="sights/gomel/Church of St. Nicholas the Wonderworker in Stara Belitsa.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Round Lake</h3>
      <p>There is a lake 20 km southwest of Gomel, which has such a regular round shape that it has given rise to a whole wave of theories. According to one of them, during the Second World War, a nuclear weapon was allegedly sightsed here, according to another, this reservoir was formed as a result of a meteorite fall.</p>
      <a target="_blank" href="sights/gomel/Round Lake.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>PETER AND PAUL CATHEDRAL</h3>
      <p>The second most important landmark of Gomel, as well as the entire region, is the Peter and Paul Cathedral, which was built in the immediate vicinity of the Rumyantsev-Paskevich Palace at the same time</p>
      <a target="_blank" href="sights/gomel/PETER AND PAUL CATHEDRAL.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MUSEUM OF CRIMINALISTICS</h3>
      <p>The Museum of Criminalistics in Gomel is an exposition that was created on the basis of the Gomel Regional Museum of Military Glory. It tells about the work of local law enforcement agencies and covers a large time period from 1917 to the 2000s. Here are various items that were used by both criminals and those who opposed them.</p>
      <a target="_blank" href="sights/gomel/MUSEUM OF CRIMINALISTICS.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Catherine</h3>
      <p>In Gadichevo, of course, the church of St. Catherine, the construction of which was completed in 1822. It is distinguished by an unusual combination of two materials: brick and wood. As a result, the lower part is a typical example of classicism in architecture, while the wooden superstructure continues the traditions of folk architecture.</p>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Homestead in the village of Kornevka</h3>
      <p>The estate, which today can be seen in the village of Korenevka, is well preserved. It was built in the second half of the 19th century, when the style called romanticism dominated. This is reflected in the appearance of the building, which is characterized by a combination of simplicity and sophistication. The manor house is surrounded by an old park with a pond.</p>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>friendship monument</h3>
      <p>The Friendship Monument, a majestic memorial, has become a permanent place of traditional meetings and folk holidays of the three fraternal peoples - Belarusians, Ukrainians and Russians.</p>
      <a target="_blank" href="sights/gomel/friendship monument.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Bridges over Iput</h3>
      <p>The city of thirteen bridges is called Dobrush. The beautiful Iput breaks into numerous branches, forming islands and creeks that wrap around our city with openwork lace. And bridges, large and small, connect the microdistricts of the city into one whole. Such a number of bridges, which is in Dobrush, is almost never found in small, quiet towns like ours.</p>
      <a target="_blank" href="sights/gomel/Bridges over Iput.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Intercession and the shrine with the relics of John Kormyansky</h3>
      <p>In 1760, when the Polish magnates Chartariysky owned the village of Korma, the inhabitants built a wooden church in the name of the Intercession of the Mother of God, but by the end of the 19th century it had fallen into disrepair and could not accommodate all the parishioners.</p>
      <a target="_blank" href="sights/gomel/Church of the Intercession and the shrine with the relics of John Kormyansky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dobrush paper factory</h3>
      <p>In 1870, Prince Paskevich "His Grace Prince Warsaw, Count Fyodor Ivanovich Paskevich Erivansky" founded a stationery factory in Dobrush, which ranked first in the group of enterprises of paper machines and printing products in Russia.</p>
      <a target="_blank" href="sights/gomel/Dobrush paper factory.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dobrush Regional Museum of Local Lore</h3>
      <p>A school for the children of factory workers existed at the Dobrush stationery factory from the 70s of the 19th century and occupied the first place in terms of the number of students among the schools of stationery factories in Russia. In 1909, a new brick building was built at the expense of Princess Irina Ivanovna Paskevich. In 1910, craft classes named after Emperor Alexander II were opened at the school.</p>
      <a target="_blank" href="sights/gomel/Dobrush Regional Museum of Local Lore.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/29_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Trinity Church </h3>
      <p>The main attraction of Yelsk and the entire region is the Trinity Church, which dates back to the 1770s. A century later, it underwent a major restructuring. As a result, this wooden temple, which is considered a monument of folk architecture, harmoniously combines the features of the late Baroque and retrospective Russian style in its appearance.</p>
      <a target="_blank" href="sights/gomel/Trinity Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. James the Apostle</h3>
      <p>The Church of St. James the Apostle in Yelsk was built relatively recently. The architectural appearance of this temple, which is a modern interpretation of neo-Gothic, is laconic.</p>
      <a target="_blank" href="sights/gomel/Church of St. James the Apostle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
<!--elsk end -->
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Stone cross</h3>
      <p>In the cemetery, located near the village of Zapesochye, there is a stone cross, which, as the locals assure, literally grows from the ground. Many are skeptical about this phenomenon, but this place has already become an object of real pilgrimage. Often it is visited even by people who are far from religion.</p>

    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ancient settlement</h3>
      <p>Today it is difficult to imagine that Turov is one of the most ancient Belarusian cities, whose history goes back more than 1000 years. Today it does not have the status of a regional center, which it lost in 1962, and once this city was the capital of an independent principality, which gave the world several prominent religious and political figures.</p>
      <a target="_blank" href="sights/gomel/Ancient settlement.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>King-pine</h3>
      <p>This is the name of one of the most popular tourist routes laid through the territory of the Pripyatsky National Park. Walking along it is perhaps the best way to get acquainted with the nature of this region. You will see oaks aged 100-200 years, and a picturesque forest stream flowing among blooming calla, and much more.</p>
      <a target="_blank" href="sights/gomel/King-pine.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/34_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Pripyat or Sluch</h3>
      <p>It is the floodplains of the Polissya rivers that are a kind of hallmark of this region. First of all, Pripyat. In spring and early summer, it really is a unique sight: during the flood, the shores turn into a real archipelago of many islands, which literally boil with bird life.</p>
      <a target="_blank" href="sights/gomel/Pripyat or Sluch.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/35_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Jewish cemetery</h3>
      <p>The village of Lenin has long been inhabited by a large Jewish community, destroyed during the Second World War. The only reminder is the cemetery, with the oldest burial dating from the second half of the 16th century.</p>
      <a target="_blank" href="sights/gomel/Jewish cemetery.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/36_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>ALL SAINTS CHURCH</h3>
      <p>Polissya is famous for its wooden architecture, which is one of the hallmarks of this region. </p>
      <a target="_blank" href="sights/gomel/ALL SAINTS CHURCH.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/37_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral of Cyril and Lavrenty of Turov </h3>
      <p>Cathedral of Cyril and Lavrenty of Turov, which adorns the city center. This majestic building in a retrospective Russian style, completed in 2013, is the architectural dominant of Turov. The ensemble also includes a two-tiered bell tower and a pavilion-chapel. Another medieval stone cross is kept under its roof. Do not forget to also visit the monument to Cyril of Turov, located next to the ancient settlement.</p>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/38_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Turovsky Meadow </h3>
      <p>Hundreds of foreign tourists visit Turov every year to see rare bird species that live both in the city itself and in its environs. </p>
      <a target="_blank" href="sights/gomel/Turovsky Meadow.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/39_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lake Chervonoe</h3>
      <p>Another natural attraction of the Zhitkovichi region is Lake Chervonoe, which is the third largest body of water in Belarus. </p>
      <a target="_blank" href="sights/gomel/Lake Chervonoe.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>












  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/40_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial to children - victims of the Great Patriotic War (Red Coast)</h3>
      <p>A monument-memorial of republican significance, dedicated to the memory of children - victims of the war in the settlement. </p>
      <a target="_blank" href="sights/gomel/Memorial to children - victims of the Great Patriotic War.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

 <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/41_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to soldiers-liberators of 1941 (Zhlobin)</h3>
      <p>In Zhlobin there is a place especially revered by every resident of the city and the region - the Liberators Square.</p>
      <a target="_blank" href="sights/gomel/Monument to soldiers-liberators of 1941.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/42_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Pirevichi Church of All Saints (village Pirevichi)</h3>
      <p></p>
      <a target="_blank" href="sights/gomel/Pirevichi Church of All Saints.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/43_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Intercession Church in the town of Streshin - an architectural monument of classicism</h3>
      <p>This majestic temple was erected in 1807. According to some historical facts, the
                      construction of the temple was not without the participation of Count Osterman, who was granted the
                    place by the Russian Empress Catherine II.</p>
      <a target="_blank" href="sights/gomel/Holy Intercession Church in the town of Streshin - an architectural monument of classicism.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/44_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>
Republican landscape reserve "Smychok"
</h3>
      <p>On the territory of the Zhlobin district there is a republican landscape reserve "Smychok". Its purpose is to preserve in its natural state unique natural complexes with populations of rare and endangered species of plants and animals listed in the Red Book of the Republic of Belarus. </p>
      <a target="_blank" href="sights/gomel/Republican landscape reserve Smychok.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/45_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Palace and park ensemble in the village Red Coast</h3>
      <p>In Krasny Bereg, the only monument of palace and park architecture of the 2nd half of the 19th century has been preserved in the region. </p>
      <a target="_blank" href="sights/gomel/Palace and park ensemble in the village Red Coast.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/46_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ice Hockey and Swimming Olympic Reserve Center (Zhlobin)</h3>
      <p>The Center of the Olympic Reserve for Ice Hockey and Swimming in Zhlobin is the only sports complex in the Republic of Belarus that combines three sports and recreation facilities: the Ice Palace, the Swimming Pool and the Water Park.</p>
      <a target="_blank" href="sights/gomel/Ice Hockey and Swimming Olympic Reserve Center.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/47_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>FORMER COLLEGIUM OF THE JESUITES IN YUROVICHI</h3>
      <p>The complex of the Jesuit Collegium in the village of Yurovichi was built in 1710–1746. on the site of a former wooden monastery of the second half of the 17th century.</p>
      <a target="_blank" href="sights/gomel/FORMER COLLEGIUM OF THE JESUITES IN YUROVICHI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/48_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>STATION OF THE PRIMARY MAN IN YUROVICHI</h3>
      <p>According to archaeological data, a man settled on the site of modern Yurovichi about 26 thousand years BC. This is evidenced by the oldest site of primitive man on the territory of Belarus, discovered by scientists in 1929 on the high bank of the Pripyat.</p>
      <a target="_blank" href="sights/gomel/STATION OF THE PRIMARY MAN IN YUROVICHI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/49_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>LONG-TERM FIRE POINT DOT-405 "STAROSELIE"</h3>
      <p>The long-term firing point bunker 405 "Staroselye" is located on the eastern outskirts of the village of the same name. It was part of the Mozyr fortified area, built in 1931-1932. near the Soviet-Polish border.</p>
      <a target="_blank" href="sights/gomel/LONG-TERM FIRE POINT DOT-405 STAROSELIE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/50_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MONUMENT AT THE SITE OF THE DEATH CAMP IN OZARICHI</h3>
      <p>On the territory of the modern Kalinkovichi district in March 1944 there was a complex of German concentration camps, which is known as the Ozarich death camp. </p>
      <a target="_blank" href="sights/gomel/MONUMENT AT THE SITE OF THE DEATH CAMP IN OZARICHI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/51_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>HORWATT MANOR IN LIPOW</h3>
      <p>The Gorvatts manor in Lipov appeared in the middle of the 19th century. Its main decoration is still a two-story manor house, the construction of which was completed in 1862. </p>
      <a target="_blank" href="sights/gomel/HORWATT MANOR IN LIPOW.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/52_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF THE KAZAN ICON OF THE MOTHER OF GOD IN KALINKOVICHI</h3>
      <p>Church of St. Nicholas, which adorned the center of Kalinkovichi in pre-revolutionary times, with the advent of Soviet power, was turned into a warehouse and significantly rebuilt. </p>
      <a target="_blank" href="sights/gomel/CHURCH OF THE KAZAN ICON OF THE MOTHER OF GOD IN KALINKOVICHI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/53_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF ST. NICHOLAS IN KALINKOVICHI</h3>
      <p>A temple in the name of St. Nicholas existed in Kalinkovichi from the 16th century: it is known that around 1560 a wooden Orthodox church of St. Nicholas the Wonderworker was built here. The construction of a new stone St. Nicholas Church was completed in 1856, in 1857 the church was consecrated.</p>
      <a target="_blank" href="sights/gomel/CHURCH OF ST. NICHOLAS IN KALINKOVICHI.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/54_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Panteleimon Lepeshinsky</h3>
      <p>In the agricultural town of Litvinovichi, it is worth visiting the memorial museum dedicated to this famous public and political figure. </p>
      <a target="_blank" href="sights/gomel/Museum of Panteleimon Lepeshinsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/55_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>THE ESTATE OF DORIA-DERNOLOVICH</h3>
      <p>The main decoration of the regional center is the estate of the Doria-Dernolovichs "Stefanovo-Sarsk", or rather, what is left of it. </p>
      <a target="_blank" href="sights/gomel/THE ESTATE OF DORIA-DERNOLOVICH.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/56_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ruins of the Church of St. Nicholas </h3>
      <p>Churches of St. Nicholas was much less fortunate. From the once majestic temple, which was erected in the 1830s, only ruins remained (they can be seen on a hill located near the bridge).</p>
      <a target="_blank" href="sights/gomel/Ruins of the Church of St. Nicholas.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/57_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>
Church of St. Nicholas the Wonderworker in Korma
</h3>
      <p>In the 1990s, on the opposite side of the city, it was decided to build a church of St. Nicholas the Wonderworker in a retrospective Russian style.</p>
      <a target="_blank" href="sights/gomel/Church of St. Nicholas the Wonderworker in Korma.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/58_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The only church organ in the Gomel region</h3>
      <p>The concert and liturgical organ for 14 votes was recently donated to the Church of the Sacred Heart of Jesus and the Mother of God of Fatima in Lelchitsy. This ancient instrument, brought from Warsaw, consists of 900 pipes.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/59_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Trinity Church</h3>
      <p>Noteworthy is the Holy Trinity Church of the modern construction of 1993-2000. The temple was erected as a result of the restoration of the church community. Previously, there was the Trinity Church in Lelchitsy, the first mention of which dates back to 1650. But in 1935 the building was turned into a granary, and in 1938 it was finally destroyed. The building of the current church fits well into the park area.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/60_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lenin monument</h3>
      <p>Trivial at first glance, the monument to Lenin on the central square is unusual in that during the Nazi occupation, the pedestal served as a kind of pillbox, a firing point. After the war, the pedestal was repaired and a new monument was erected on it.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/61_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>ESTATE "SUTKOV" IN ALTERATION</h3>
      <p>Since the 17th century, most of the Loevshchina with the surrounding lands and forests, including Sutkov and Peredelka, was the hereditary possession of the Yuditsky family. </p>
      <a target="_blank" href="sights/gomel/ESTATE SUTKOV IN ALTERATION.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/62_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>GEOLOGICAL EXPOSURE OF "LOY"</h3>
      <p>Ice Age in Loev - such words can be heard when talking about the Loevsky geological outcrop.</p>
      <a target="_blank" href="sights/gomel/GEOLOGICAL EXPOSURE OF LOY.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/63_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>HOUSE OF THE MERCHANT DOLGIN IN LOEV</h3>
      <p>Not many historical buildings have been preserved in Loev, but there are still interesting objects, for example, the oldest house in the urban village, which belonged to the merchant Naum Dolgin and is listed in the Republican Register of Architectural Monuments.</p>
      <a target="_blank" href="sights/gomel/HOUSE OF THE MERCHANT DOLGIN IN LOEV.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/64_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>THE PLACE OF THE SOZH RIVER INTO THE DNEPR RIVER</h3>
      <p>The place where the Sozh flows into the Dnieper is rightfully considered one of the most beautiful corners of Polissya. The hill offers a breathtaking view of both rivers and the surrounding landscape, which was declared a republican reserve (it is called “Dnepro-Sozhsky”).</p>
      <a target="_blank" href="sights/gomel/THE PLACE OF THE SOZH RIVER INTO THE DNEPR RIVER.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/65_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>HOLY TRINITY CHURCH IN LOEV</h3>
      <p>The temple of the same name existed here in the 19th century, but it was destroyed in Soviet times. In 1990, with funds raised by parishioners, the restoration of the shrine began. The result of the work was the Church of the Holy Trinity in Loev, which is distinguished by its laconic appearance. Nevertheless, some decorative elements allow us to attribute it to the retrospective Russian style.</p>
      <a target="_blank" href="sights/gomel/HOLY TRINITY CHURCH IN LOEV.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/66_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>THE FAMOUS 1958 BRIDGE</h3>
      <p>Bridge over the river Pripyat, which is also called the old one, was put into operation in 1958. The length of the bridge was originally 924 meters. After reconstruction, it became 957 meters long.</p>
      <a target="_blank" href="sights/gomel/THE FAMOUS 1958 BRIDGE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/67_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MOZYR DRAMA THEATER IM. IVAN MELEZH</h3>
      <p>In the very heart of Mozyr, it is hard not to notice the building of the Mozyr Drama Theater on the central Leninskaya Street, one of the attractions of Mozyr.</p>
      <a target="_blank" href="sights/gomel/MOZYR DRAMA THEATER IM. IVAN MELEZH.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/68_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MOZYR CASTLE ON THE MOUNTAIN</h3>
      <p>Mozyr castleis located in the historical center of Mozyr atMount Kommunarov, 8.</p>
      <a target="_blank" href="sights/gomel/MOZYR CASTLE ON THE MOUNTAIN.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/69_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>PARK OF CULTURE AND RECREATION "POBEDA"</h3>
      <p>Park "Victory"has always been considered a favorite vacation spot for residents and visitors. Given hislocation, the park became the first attraction of Mozyr.</p>
      <a target="_blank" href="sights/gomel/PARK OF CULTURE AND RECREATION POBEDA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/70_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>MEMORIAL COMPLEX "KURGAN OF GLORY"</h3>
      <p></p>
      <a target="_blank" href="sights/gomel/MEMORIAL COMPLEX KURGAN OF GLORY.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/71_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>LEGENDARY MOZYR TRAM</h3>
      <p>The famous landmark of Mozyr is a tram, about which there is a separate.</p>
      <a target="_blank" href="sights/gomel/LEGENDARY MOZYR TRAM.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/72_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>STREET LENINSKAYA</h3>
      <p>Deservedly the most beautiful, municipal Leninskaya streetin the center of the city, which can be reached from Lenin Square, the leader of which points directly in her direction.</p>
      <a target="_blank" href="sights/gomel/STREET LENINSKAYA.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/73_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>BEACH</h3>
      <p>A really huge (several kilometers) and picturesque beach along the Pripyat River, where we would not dare to advise you to swim (the purity of the water leaves much to be desired), but walking along it would be just a great idea!</p>
      <a target="_blank" href="sights/gomel/BEACH.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/74_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CENTRAL LENIN SQUARE</h3>
      <p>Lenin Square- the central square of the city. Here you will definitely find what to see in Mozyr: a three-storeytrade house, a shopping center, a fountain, a monument to Lenin, jewelry stores, banks and much more are located in the very center of the city.</p>
      <a target="_blank" href="sights/gomel/CENTRAL LENIN SQUARE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/75_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Palace and park ensemble in Narovlya</h3>
      <p>Estates that once belonged to representatives of the Gorvatt family can be seen in various parts of Eastern Polissya. However, the complex in Narovlya noticeably surpasses them in scope. The manor began to be built in the middle of the 19th century, when classicism dominated in architecture.</p>
      <a target="_blank" href="sights/gomel/Palace and park ensemble in Narovlya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/76_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Przewalski's horses</h3>
      <p>In the early 1990s, they were brought from the Askania-Nova reserve and released in the
                    Ukrainian part of the Chernobyl zone. The presence of the state border did not embarrass the
                    animals. Increasingly, small herds of horses with a characteristic black mane standing erect can be
                    seen on the territory of the Narovlya region. Needless to say, many photographers and just nature
                    lovers dream of meeting this species in the wild, which is one of the rarest on Earth.</p>
      <a target="_blank" href="sights/gomel/Przewalski's horses.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/77_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Pripyat</h3>
      <p>More recently, the Polessky Radiation-Ecological Reserve was a completely closed territory, which only its employees and scientists could legally visit. However, in 2019, a course was taken to develop tourism, including such a direction as amateur fishing.</p>
      <a target="_blank" href="sights/gomel/Pripyat.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/78_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Age-old oaks</h3>
      <p>Upstream of the Pripyat, very close to Narovlya, there is an old floodplain oak forest. It looks especially impressive during spring floods, when the trees stand in the water. There are many oaks here, they are of different age and size.</p>
      <a target="_blank" href="sights/gomel/Age-old oaks.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/79_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>FACTORY</h3>
      <p></p>
      <a target="_blank" href="sights/gomel/FACTORY.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/80_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The Gorvatts Manor in Golovchitsy</h3>
      <p>The village of Golovchitsy boasts another manor that once belonged to the Gorvatts. It is not so impressive for its size, but the manor house in the style of classicism has been preserved much better. Around it is a landscape park, where you can still see some exotic trees (they are over 100 years old), as well as a system of ornamental ponds.</p>
      <a target="_blank" href="sights/gomel/The Gorvatts Manor in Golovchitsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/81_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Paraskeva Pyatnitsa in Verbovichi</h3>
      <p>In the village of Verbovichi there is a church of St. Paraskeva Pyatnitsa, which dates back to the 18th century. It is considered an example of the Baroque, although it is difficult to tell from the external appearance of the temple, which is distinguished by its simplicity. The faceted bulbous dome gives it the features of a retrospective Russian style.</p>
    </div>

  </div>



















  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/82_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF THE INTERCESSION</h3>
      <p>The Intercession Church, which combines the traditions of folk architecture with elements of a retrospective Russian style, is a modern interpretation of the Gothic.</p>
      <a target="_blank" href="sights/gomel/CHURCH OF THE INTERCESSION.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/83_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>CHURCH OF ST. MICHAEL THE ARCHANGEL</h3>
      <p>
Church of St. Michael the Archangel is a modern interpretation of the Gothic. The temple was built relatively recently.
</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/84_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Assumption Church</h3>
      <p>The Church of the Most Pure Mother of God (Assumption Church) is a monument of wooden architecture. Built in 1642. It is located in the middle of the cemetery of the village of Koshevichi.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/85_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Temple of the Ascension</h3>
      <p>Church of the Ascension of the Lord - built in 1890, closed in 1930. Since 1940, the church building has been used as a salt warehouse.</p>
      <a target="_blank" href="sights/gomel/Temple of the Ascension.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/86_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas the Wonderworker</h3>
      <p>The Church of St. Nicholas the Wonderworker is located on a high hill above Pripyat. It was built in the shape of a cross in 1939 on the site of a wooden church built in 1772 that burned down during a thunderstorm. Until 1941, the temple was used as a flour warehouse, and in wartime it was cleaned and worship was held. The temple is currently active.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/87_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Tomb of Talash</h3>
      <p>The grave of Talash V.I. (1844-1946) - a famous Belarusian partisan, a participant in the partisan movement in Belarus during the Civil and Great Patriotic Wars.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/gomel/88_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mass grave</h3>
      <p>Mass grave - located in the city cemetery of Petrikov. 69 soldiers, partisans and underground fighters who died in the Great Patriotic War were buried. Among the buried soldiers during the liberation of the city from the Nazi invaders.</p>

    </div>

  </div>
  
  <!-- <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/89_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Gorodidische</h3>
      <p>Like any medieval city, Rechitsa had its own fortifications. On the right bank of the Dnieper, at the confluence with the Rechitsa River, there is an ancient settlement.</p>
      <a target="_blank" href="sights/gomel/Gorodidische.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/90_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Holy Trinity Church</h3>
      <p></p>
      <a target="_blank" href="sights/gomel/Holy Trinity Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/91_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Holy Dormition Cathedral</h3>
      <p>Very close to the Holy Trinity Church is the main Orthodox church of Rechitsa - the Holy Assumption Cathedral. This is one of the oldest buildings in the city, but its fate was in jeopardy.</p>
      <a target="_blank" href="sights/gomel/Holy Dormition Cathedral.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/92_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Chapel of St. Euphrosyne of Polotsk</h3>
      <p>The dominant of the Dnieper embankment and one of the most recognizable sights of Rechitsa is the chapel of St. Euphrosyne of Polotsk. </p>
      <a target="_blank" href="sights/gomel/Chapel of St. Euphrosyne of Polotsk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/93_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Monument to M. V. Dovnar-Zapolsky</h3>
      <p>Rechitsa is the birthplace of the outstanding historian and ethnographer, the "father" of Belarusian historiography Mitrofan Dovnar-Zapolsky.</p>
      <a target="_blank" href="sights/gomel/Monument to M. V. Dovnar-Zapolsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/94_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Monument "Rechytsy sons who died far from his homeland"</h3>
      <p>On the alley of Warriors-Internationalists there is a poignant memorial "Rechytsy to the sons who died far from homeland". </p>
      <a target="_blank" href="sights/gomel/Monument Rechytsy sons who died far from his homeland.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/95_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Art Gallery of Alexander Isachev</h3>
      <p>The fate of one of the most mysterious artists of Belarus of the 20th century, Alexander Isachev, is connected with Rechitsa. The future master was born in the village of Ozarichi (Kalinkovichi district) on January 11, 1955. He moved to Rechitsa with his mother at the age of three.</p>
      <a target="_blank" href="sights/gomel/Art Gallery of Alexander Isachev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/96_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Museum "Belorusneft"</h3>
      <p>More than half a century ago, an oil field was discovered in the vicinity of Rechitsa, and two years after this landmark event - in 1966 - the Belorusneft association appeared. </p>
      <a target="_blank" href="sights/gomel/Museum Belorusneft.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/97_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Monument to Sgushenka</h3>
      <p>This product, without exaggeration, is a real symbol of the Rogachev region. Local condensed milk, made “according to the same recipe”, is exported to many countries where it is well known and loved. For many Belarusians, this is a real taste of childhood.</p>
      <a target="_blank" href="sights/gomel/Monument to Sgushenka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/98_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Trinity Church</h3>
      <p>Like many other regions of Polissya, Rogachev region managed to create its own school of wooden architecture. Unfortunately, many buildings created by local craftsmen have not survived to this day. However, an idea of the local traditions of folk architecture is given by a wooden church, preserved in the village of Palace.</p>
      <a target="_blank" href="sights/gomel/Trinity Church2.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/99_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Dnieper</h3>
      <p>This legendary river, which from time immemorial has played an important role in the life of the Slavic peoples, crosses the entire Rogachev region, the city itself was founded in the place where the Drut flows into it.</p>
      <a target="_blank" href="sights/gomel/Dnieper.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div> -->
  
  <!-- <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/100_.jpg" alt="">
    </div>
    <div class="content">
      <h3>CHURCH OF ST. ANTHONY OF PADUAN</h3>
      <p>The hallmark of Rogachev, as well as the entire region, can be considered the church of St. Anthony of Padua. This temple was erected in 1912 on the site of a wooden predecessor. The combination of red brick with elements characteristic of the neo-Gothic style gives the church of St. Anthony of Padua is a very expressive figure.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/101_.jpg" alt="">
    </div>
    <div class="content">
      <h3>NEW CHURCH OF ST. ALEXANDER NEVSKY</h3>
      <p>Less fortunate was the Cathedral of St. Alexander Nevsky, which existed in Rogachev since the end of the 19th century. According to archival data, it had a monumental five-dome composition. During World War II, the Cathedral of St. Alexander Nevsky was destroyed. Only in 1989 the city was decorated with a new Orthodox church in a retrospective Russian style.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/102_.jpg" alt="">
    </div>
    <div class="content">
      <h3>House of the merchant Belenky  </h3>
      <p>On the whole, Rogachev managed to preserve his historical buildings, including residential buildings built at the turn of the 19th and 20th centuries. Among them are the mansions named after the former owners: Spiridonov and Belenky, as well as the buildings of the teacher's seminary, the zemstvo council, and the real school.</p>

    </div>

  </div>

  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/103_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of the Intercession of the Holy Mother of God in Dovsk</h3>
      <p>One of the most picturesque churches in the Gomel region is located in the village of Dovsk. The construction of the Church of the Intercession was completed in 1864. It is considered a model of neoclassicism, but in the appearance of this temple one cannot but notice the features inherent in the retrospective Russian style: onion cupolas, kokoshniks. They give the Intercession Church an elegant appearance.</p>

    </div>

  </div>

  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/104_.jpg" alt="">
    </div>
    <div class="content">
      <h3>BOOK HOUSE</h3>
      <p>The building was built in 1914 of brick. In Soviet times, there was the Palace of Labor, later on the first floor - the central city library named after V.I. Lenin, on the second - a center for extracurricular activities and a pioneer organization.</p>
      <a target="_blank" href="sights/gomel/BOOK HOUSE.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

















  

  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/105_.jpg" alt="">
    </div>
    <div class="content">
      <h3>HOLY CROSS CHURCH</h3>
      <p>Holy Cross Church in Svetlogorsk is located on the banks of the Berezina. The first mention of a Catholic church on the territory of this settlement, which was then called Shatilki, dates back to the middle of the 17th century.</p>
      <a target="_blank" href="sights/gomel/HOLY CROSS CHURCH.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/106_.jpg" alt="">
    </div>
    <div class="content">
      <h3>CHURCH OF THE TRANSFORMATION OF THE LORD</h3>
      <p>The Church of the Transfiguration of the Lord in Svetlogorsk dates back to 1995. It was then that the Orthodox parish of the same name was registered. However, for a long time, services were held in the prayer house.</p>
      <a target="_blank" href="sights/gomel/CHURCH OF THE TRANSFORMATION OF THE LORD.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/107_.jpg" alt="">
    </div>
    <div class="content">
      <h3>MEMORIAL "GRIEFING BELL"</h3>
      <p>Svetlogorsk is also interesting for its sculptures dedicated to military events. In the center of the city there is a memorial "Grieving Bell" and a monument to Afghan soldiers. The local House of Culture is famous for the painting “Land of Svetlogorsk”, which was made in 1972 by the famous Belarusian artist Gavriil Vashchenko.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/108_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Tract Nikolin Ostrov </h3>
      <p>The tract Nikolin Ostrov, which is located 4 km west of the village. Silently, it is decorated with an old windmill built in 1883. Initially, it was located in the village of Lyady, Zhlobin district, but then it was moved to a new location. This monument of wooden architecture is surprisingly well preserved, despite its advanced age.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/109_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Manor and park ensemble</h3>
      <p>Everyone who visits the park ensemble will probably catch himself thinking: antiquity and modernity have settled here in the immediate neighborhood. Yellow paving stones around the manor house, centuries-old trees.</p>
      <a target="_blank" href="sights/gomel/Manor and park ensemble.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/110_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Polessky radiation-ecological reserve</h3>
      <p>The largest among the reserves and national parks of Belarus and the only one of its kind in the world. Its total area is 216093 hectares. </p>
      <a target="_blank" href="sights/gomel/Polessky radiation-ecological reserve.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/112_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Pine with royal status</h3>
      <p>Before reaching a few kilometers to the main entrance to Khoiniki, on the left, near the car camping, a pine tree with a special status, the Queen, grows. Its fluffy branches unanimously stretch towards the sun, and the crown resembles a royal headdress.</p>
      <a target="_blank" href="sights/gomel/Pine with royal status.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/113_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Manor Yastrzhembsky in the village of Borisovshchina</h3>
      <p>Amazing in its beauty, the estate, whose history begins at the end of the XIX century.</p>
      <a target="_blank" href="sights/gomel/Manor Yastrzhembsky in the village of Borisovshchina.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/114_.jpg" alt="">
    </div>
    <div class="content">
      <h3>House-Museum of Ivan Melez</h3>
      <p>Many personal items were inherited from Ivan Melezh in the Museum House. By the way, it was built after the death of the writer, since the parental house was sold, and the former owners did not agree to give the house away.</p>
      <a target="_blank" href="sights/gomel/House-Museum of Ivan Melez.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/115_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Town hall</h3>
      <p>This building is interesting already because it was erected in Chechersk after the annexation of this city to the Russian Empire, i.e. one of the last on the Belarusian lands. This became possible thanks to the new owner of Chechersk, Governor-General Zakhary Chernyshev.</p>
      <a target="_blank" href="sights/gomel/town hall.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/116_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Transfiguration Church</h3>
      <p>This temple makes an equally strong impression on those who see it for the first time.</p>
      <a target="_blank" href="sights/gomel/Transfiguration Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/118_.png" alt="">
    </div>
    <div class="content">
      <h3>Bread Museum</h3>
      <p>In the agricultural town of Botvinovo there is a Bread Museum. It presents various items that are somehow connected with the production of this most important product: from sowing a field to baking a loaf. All of them were donated by local residents.</p>
      <a target="_blank" href="sights/gomel/Bread Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/119_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Chernyshev-Kruglikov Palace in Chechersk</h3>
      <p>In addition to the town hall and the Holy Transfiguration Church, Chechersk is rightfully proud of the Chernyshev-Kruglikov Palace. This monument of classicism was built in the 19th century. In addition to the palace itself, the complex also includes a front gate, an old park, outbuildings and the manager's house (now there is a forestry).</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/120_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Chechersk winery </h3>
      <p>Fans of industrial architecture should see the building of the former distillery. In its appearance there are features characteristic of the Art Nouveau style. This elegant building with wall paintings and carved architraves, erected at the turn of the 19th and 20th centuries, is one of the visiting cards of the city. Interestingly, the distillery is still operating.</p>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/gomel/121_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Castle Hill</h3>
      <p>If you are interested in history, be sure to visit the Castle Hill. It is located on the northeastern outskirts of the city, occupying the coast of Chechora. Detinets, where the fortifications were located, and the roundabout city have an area of 3 hectares. You can still see the remains of earthen fortifications, including a 5 m high rampart. The finds made here made it possible to prove that Chechersk was founded in the 10th century AD.</p>
    </div>

  </div> -->
  



















  <!-- grodno -------------------------------------------------------------------->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Transfiguration of the Lord in Velyka Berestovitsa</h3>
      <p>The Church of the Transfiguration of the Lord in Velyka Berestovitsa was built at the beginning of the 20th century with funds donated by Count Kosakovsky. </p>
      <a target="_blank" href="sights/grodno/Church of the Transfiguration of the Lord in Velyka Berestovitsa.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Squirrel Museum</h3>
      <p>In 2012, the district center acquired another iconic attraction: the former pre-revolutionary fire station houses the Squirrel Museum, one of the few in the world dedicated to this animal. </p>
      <a target="_blank" href="sights/grodno/Squirrel Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Virgin Mary</h3>
      <p>In large Eismonty there is a church of the Virgin Mary dating back to the middle of the 19th century. Its appearance is defined by the features characteristic of classicism, including the pediment, decorated with the image of the all-seeing eye and supported by four columns. The main decoration of the interior are carved wooden baroque altars.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas</h3>
      <p>Church of St. Nicholasin Bolshaya Berestovitsa was built in 1868 on the site where a wooden church used to be. The money needed for this was allocated from the treasury, part of the amount was donated by the parishioners and Count Kosakovsky. </p>
      <a target="_blank" href="sights/grodno/Church of St. Nicholas.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Belarusian Maldives</h3>
      <p>The real pearl of this region, as well as the entire Grodno region, are flooded quarries located near the village of Krasnoselsky. </p>
      <a target="_blank" href="sights/grodno/Belarusian Maldives.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Archangel Michael</h3>
      <p>A special place among the attractions of the Volkovysk region is the Church of St. Archangel Michael in Gniezno, which dates back to the beginning of the 16th century.</p>
      <a target="_blank" href="sights/grodno/Church of St. Archangel Michael.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Most Holy Virgin Mary</h3>
      <p>The majestic, dignified Church of the Most Holy Virgin Mary, built in 1902-1909, rises in the center of the village.</p>
      <a target="_blank" href="sights/grodno/Church of the Most Holy Virgin Mary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/8_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Trinity Church</h3>
      <p>Trinity Churchin Shilovichi, whose construction was completed in 1914, is considered one of the highest churches in Belarus.</p>
      <a target="_blank" href="sights/grodno/Trinity Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/9_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Voronovo</h3>
      <p>The territory of this district is divided into 12 village councils and one village council. As of 2018, its population was 24.911 people. The basis of the local economy is agriculture. However, the convenient location at the very borders of the European Union, the visa-free regime and rich cultural heritage create good conditions for the development of tourism.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/10_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>The most unusual house in Belarus.</h3>
      <p>The brighsights attraction of the Voronovsky district is the house-fortress in the village of Gaytyushniki. </p>
      <a target="_blank" href="sights/grodno/The most unusual house in Belarus..php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Village Radun</h3>
      <p>Village Radunwas once a thriving Jewish town. During World War II, the Jewish community was destroyed. </p>
      <a target="_blank" href="sights/grodno/Village Radun.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>TRINITY CHURCH</h3>
      <p>Trinity Churchin the village of Germanishki, which was built at the turn of the 19th and 20th centuries, is a typical example of the neo-Gothic style. The combination of rubble stone with brick walls and plastered decorative elements gives this building a picturesque appearance.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Assumption of the Virgin Mary</h3>
      <p>Nevertheless, the Church of the Assumption of the Virgin Mary in Nacha should undoubtedly be recognized as the most striking example of this trend in architecture. </p>
      <a target="_blank" href="sights/grodno/Church of the Assumption of the Virgin Mary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of Our Lady of the Rozhentsova in Radun</h3>
      <p>The Church of Our Lady of the Ruzhentsova in Radun began to be built in 1929, when this settlement was still part of Poland. </p>
      <a target="_blank" href="sights/grodno/Church of Our Lady of the Rozhentsovain Radun.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sovetskaya street</h3>
      <p>The paving stones, laid back in 1938 on Sovetskaya Street, have not been driven by cars for a long time: this is the main pedestrian place in the city. </p>
      <a target="_blank" href="sights/grodno/Sovetskaya street.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Old and New castles</h3>
      <p>In the city of princes and kings, there are two castles at once -Old and New. Centuries later, both buildings appear to tourists not in their original form, as they were repeatedly destroyed and rebuilt, but even today they are impressive. </p>
      <a target="_blank" href="sights/grodno/Old and New castles.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Viewpoint</h3>
      <p>You can admire the historical center of Grodno from the left bank of the Neman: there is a special observation deck with comfortable benches, viewing binoculars and a beautiful rotunda. The bright roof of the building is made in the form of a flower - a symbolFestival of National Cultures.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Palace of the Vice-Governor of Grodno Konstantin Maksimovich</h3>
      <p>During the war of 1812, the palace of the Grodno vice-governor, built in the style of classicism, was so liked by Napoleon's brother, the King of Westphalia, Jerome Bonaparte, that he preferred balls and luxurious banquets to military operations. </p>
      <a target="_blank" href="sights/grodno/Palace of the Vice-Governor of Grodno Konstantin Maksimovich.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Water towers Kasya and Basya</h3>
      <p>Another point of the tourist program in Grodno is to go to the highest place in the old city and try to guess why the two water towers located there are called Kasya and Basya. The architectural "twins" today house the workshops of local artists.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>River taxi along the Neman</h3>
      <p>In Grodno, you can also visit a water excursion - a "cruise" along the Neman. </p>
      <a target="_blank" href="sights/grodno/River taxi along the Neman.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gilibert Park</h3>
      <p>The beautiful park-garden of the city above the Neman is named after the famous physician, botanist and biologist, educator of his time, Jean Emmanuel Gilibert. </p>
      <a target="_blank" href="sights/grodno/Gilibert Park.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Augustow Canal</h3>
      <p>In the vicinity of Grodno there is the most famous artificial water artery in Europe - the Augustow Canal.</p>
      <a target="_blank" href="sights/grodno/Augustow Canal.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral Church of St. Francis Xavier</h3>
      <p>An architectural gem and the main Catholic church in Grodno is the Cathedral Church of St. Francis Xavier (in the people Farny, i.e. "main, parish"). The building is one of the three small basilicas in Belarus and impresses with its decoration: a multi-figure (more than 40 sculptures) carved altar 21 meters high and a tower clock - one of the oldest operating in Eastern Europe.</p>
      <a target="_blank" href="sights/grodno/.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Borisoglebskaya (Kolozhskaya) Church</h3>
      <p>Orthodox church of the 12th century, founded in honor of Saints Boris and Gleb, was built in the tract Kolozhan ("the place where springs flow") and today is one of the oldest functioning churches in Belarus. </p>
      <a target="_blank" href="sights/grodno/Borisoglebskaya (Kolozhskaya) Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>St. John's Lutheran Church</h3>
      <p>Lutheran churchin Grodno was built with the money of the German community in the middle of the 19th century. Today it is the only functioning Lutheran church in Belarus.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Catholic church and monastery of the Bernardines</h3>
      <p>The urban legend says that under the church, whose architecture strikes with a combination of three styles at once - baroque, gothic and renaissance, there are underground passages dug by Bernardine monks and nuns. In addition, it was in this church that the wedding of the famous writer Eliza Ozheshko and the nobleman Peter took place.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Intercession Cathedral</h3>
      <p>The cathedral, built in a retrospective Russian style at the beginning of the 20th century, unlike many other religious buildings in Grodno, did not stop working either during the German occupation or during the years of Soviet persecution of the church.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Great Choral Synagogue</h3>
      <p>Great Choral SynagogueGrodno is one of the oldest in Europe. During the Great Patriotic War, this building turned out to be in the center of the ghetto: Jews were brought here for temporary detention before being sent to concentration camps. Today, the building of the current synagogue also houses a Jewish museum.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/29_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Kostelnaya Gora - the historical center of Zelva</h3>
      <p>The first mention of Zelva, dated 1258, is found in the Ipatiev Chronicle. Later, information about Bolshaya Zelva is found in written sources in 1470, when the owner of the settlement, Mikhail Nachovich, laid the wooden church of the Holy Apostle Yakub and Michael the Archangel on the sandy (Kostelnaya) mountain above the pond.</p>
      <a target="_blank" href="sights/grodno/Kostelnaya Gora - the historical center of Zelva.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Zelvenskoe reservoir</h3>
      <p>The Zelvenskoye reservoir is located in the Zelvensky district to the south of the settlement. Zelva, occupies the 18th place in terms of area in the Republic and is the largest reservoir in the Grodno region.</p>
      <a target="_blank" href="sights/grodno/Zelvenskoe reservoir.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Biological reserve "Medukhovo"</h3>
      <p>"Medukhovo" is a biological reserve of republican significance. Included in the "great upland trinity of Belarus". </p>
      <a target="_blank" href="sights/grodno/Biological reserve Medukhovo.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Geological monument of nature of local importance "Stone-boulder Pasutichsky"</h3>
      <p>The length of the stone is 3.45 meters, width - 2.45, height - 1.70. The boulder is made of red-brown granite. Looks like the top of a mountain. One side of the stone has a chip of artificial origin.</p>
      <a target="_blank" href="sights/grodno/Geological monument of nature of local importance Stone-boulder Pasutichsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Geological monument of nature of local importance "Fortified settlement Valkevichskoe"</h3>
      <p>The area of the natural monument is 0.07 sq. km. The absolute mark of the highest place on the surface is 185.2 m above sea level. Geomorphologically, this is a typical lumpy hillock, which was formed approximately 180-150 thousand years ago after the retreat of the Sozh stage of the Dnieper glacier in areas of dead ice melting. The mountain has an ideal conical shape with a narrow top and very steep slopes, the steepness of which reaches 30-32 degrees.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/34_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Geological natural monument of local importance</h3>
      <p>The monument of nature is located near the section of the road between the villages of Aleksandrovshchina and Korolino in a depleted and reclaimed quarry, in sq. 234 State Forest Fund. </p>
      <a target="_blank" href="sights/grodno/Geological natural monument of local importance.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/35_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor house in the village of Alexandrovshchina</h3>
      <p>A monument of neoclassical architecture. Built at the end of the 19th century.</p>
      <a target="_blank" href="sights/grodno/Manor house in the village of Alexandrovshchina.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/36_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Holy Trinity Church</h3>
      <p>A monument of classicism architecture. It was built in 1815 as a Uniate church designed by Alexander Gradetsky on the foundation of a wooden Orthodox church of 1443. </p>
      <a target="_blank" href="sights/grodno/Holy Trinity Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/37_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Trinity</h3>
      <p>Designed by Jozef Pius Dekonski in 1913. in neo-gothic style. Consecrated under the title of the Immaculate Conception of the Blessed Panna Mary. </p>
      <a target="_blank" href="sights/grodno/Church of the Holy Trinity.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/38_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Synkovichi church-fortress of St. Michael the Archangel</h3>
      <p>Covered with legends, the Synkovichi Church of the Holy Archangel Michael has been attracting human souls for six centuries. </p>
      <a target="_blank" href="sights/grodno/Synkovichi church-fortress of St. Michael the Archangel.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/39_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Derechinskaya Spaso-Preobrazhenskaya Church</h3>
      <p>An architectural monument of the Byzantine style in the village of Derechin, Zelvensky district, Grodno region. </p>
      <a target="_blank" href="sights/grodno/Derechinskaya Spaso-Preobrazhenskaya Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/40_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Assumption of the Blessed Virgin Mary in Derechin</h3>
      <p>It was built of red brick at the beginning of the 20th century in the
                                    north-eastern part of the village.</p>
      <a target="_blank" href="sights/grodno/Church of the Assumption of the Blessed Virgin Mary in Derechin.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/41_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>St. Michael's Church in the village of Lukonitsa</h3>
      <p>St. Michael's Church - a monument of late baroque architecture. Erected in 1782, reconstructed in the middle of the 19th, late 20th centuries. The baroque bell tower adjoins the church.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/42_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Most Holy Body of God and St. George</h3>
      <p>The church is a monument of Renaissance architecture in the village of Kremyanitsa, Zelvensky district. </p>
      <a target="_blank" href="sights/grodno/Church of the Most Holy Body of God and St. George.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/43_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mir Castle</h3>
      <p>It is unlikely that this object, included in the UNESCO World Heritage List, needs to be introduced. It has long become one of the tourist brands of Belarus. Various cultural events that are held within the walls of the Mir Castle contributed to this.</p>
      <a target="_blank" href="sights/grodno/Mir Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/44_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Yeshiva in the World</h3>
      <p>In Mir, the building of a yeshiva (an educational institution where rabbis were trained), which was founded in 1815 and was famous far beyond the borders of Belarus, has been preserved. </p>
      <a target="_blank" href="sights/grodno/Yeshiva in the World.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/45_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Barbara in Reitz.</h3>
      <p>Church of St. The barbarians in Reitz look more like a medieval knight's castle. This is partly due to the fact that the temple was originally built as a church, but in 1863, when the uprising of Kastus Kalinovsky was suppressed, it was decided to transfer it to the Orthodox community.</p>
      <a target="_blank" href="sights/grodno/Church of St. Barbara in Reitz.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/46_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Republican hydrological reserve "Miranka"</h3>
      <p>Grafskaya Pushcha, which also has a protected status, was once the hunting grounds of the Radziwills. Until now, lime forests, very rare for Belarus, have been preserved here, and in the floodplain of the Neman, replete with picturesque old women, there are ancient oak forests that are flooded every spring.</p>
      <a target="_blank" href="sights/grodno/Republican hydrological reserve Miranka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/47_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Nativity of John the Baptist in Malye Zhukhovichi</h3>
      <p>The Church of the Nativity of John the Baptist, located nearby in the village of Malye Zhukhovichi, looks completely different. It is also customary to date it to the end of the 18th century. A hundred years later, this wooden temple was rebuilt, as a result of which it acquired the features of a retrospective Russian style.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/48_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Intercession in Turets</h3>
      <p>The Church of the Intercession in Turets, whose construction was carried out from 1886 to 1888, belongs to the retrospective Russian style, like most Orthodox churches that were built on the territory of Belarus in the second half of the 19th century (they are also commonly called "ants").</p>
      <a target="_blank" href="sights/grodno/Church of the Intercession in Turets.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/49_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Peter and Paul in Korelichi</h3>
      <p>Church of St. Peter and Paul in Korelichi was erected in 1866. However, later this temple was repeatedly rebuilt, so that its original appearance, which combines features of different styles (retrospective Russian, classicism, etc.), also underwent changes.</p>
      <a target="_blank" href="sights/grodno/Church of St. Peter and Paul in Korelichi.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/50_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lida Castle</h3>
      <p></p>
      <a target="_blank" href="sights/grodno/Lida Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/51_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Water Mill</h3>
      <p>On the basis of this tourist center, various folklore events and historical reconstructions are held. </p>
      <a target="_blank" href="sights/grodno/Water Mill.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/52_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Plant "Lida beer"</h3>
      <p>The history of the plant, which produces the famous Lida beer, has more than a hundred years. This drink is one of the main brands not only in the Grodno region, but throughout Belarus. So there is nothing surprising in the fact that many would like to see how he is born.</p>
      <a target="_blank" href="sights/grodno/Plant Lida beer.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/53_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Glassworks "Neman"</h3>
      <p>We are talking about another legendary enterprise. Its visit will appeal not only to fans of industrial tourism. Glass making is a complex and very interesting process, and during the tour there is a unique opportunity to participate in it.</p>
      <a target="_blank" href="sights/grodno/Glassworks Neman.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/54_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dokudovsky Reserve</h3>
      <p>Not far from the regional center is the Dokudovsky reserve. This natural complex consists of fragments of a raised bog, which is famous for its rich stocks of cranberries, and forested areas. </p>
      <a target="_blank" href="sights/grodno/Dokudovsky Reserve.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/55_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor Dembovetsky</h3>
      <p>Several old estates have been preserved in Lidchin. One of them, which belonged to the Dembovetskys, is located in the village of Berdovka. </p>
      <a target="_blank" href="sights/grodno/Manor Dembovetsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/56_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Romer's estate</h3>
      <p>Even better preserved is the Romer estate in Maly Mozheykovo. In addition to the landscape park, you can see restored outbuildings here: an oil mill, a stable, etc. Nevertheless, the core of this architectural complex is a classicist manor house of the 19th century, decorated with a portico with four columns.</p>

    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/57_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Body of God in Ag. Castle</h3>
      <p>The Temple of the Body of God is an architectural monument in the Neo-Baroque style with some elements of the Neo-Renaissance (arched windows in the towers, the main entrance with an arched opening in a rusticated frame). </p>
      <a target="_blank" href="sights/grodno/Church of the Body of God in Ag. Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/58_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Assumption of the Blessed Virgin Mary</h3>
      <p>The Church of the Assumption of the Blessed Virgin Mary was built in 1646 by Kazimir Lev Sapieha, as evidenced by the inscription on the pediment above the frantal in Latin: "For the glory of Almighty God and in honor of the Ascension of the Most Pure, this temple was built by Casimir Lev Sapieha, sub-chancellor of the Grand Duchy of Lithuania, Slonim Derzhavtsa 1646 N. X.". </p>
      <a target="_blank" href="sights/grodno/Church of the Assumption of the Blessed Virgin Mary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/59_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral of the Holy New Martyrs and Confessors of the Russian Church</h3>
      <p>The Cathedral of the Holy New Martyrs and Confessors of the Russian Church is an Orthodox cathedral in honor of the New Martyrs and Confessors of the Russian Church, which took 100 years to build. </p>
      <a target="_blank" href="sights/grodno/Cathedral of the Holy New Martyrs and Confessors of the Russian Church.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/60_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Apostles Peter and Paul</h3>
      <p>The temple belongs to the Grodno diocese. An architectural monument in the Baroque style, built in the second half of the 18th century on the site of an older church of the 15th century. </p>
      <a target="_blank" href="sights/grodno/Church of the Holy Apostles Peter and Paul.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
      
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/61_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Casimir</h3>
      <p>Kazimierz Church in Lipnishki was built of wood until 1510, which burned down during the war with Sweden. Until 1744, the church was rebuilt at the expense of the owner of the town, Count Galyan Bezborodka. </p>
      <a target="_blank" href="sights/grodno/Church of St. Casimir.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>











  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/62_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Mother of God</h3>
      <p> Already in the 1990s, the construction of the Church of the Mother of God began. </p>
      <a target="_blank" href="sights/grodno/Church of the Mother of God.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/63_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Nativity of the Virgin</h3>
      <p> In the Mostovsky district there are many churches that belong to the retrospective Russian style, reflecting different views on this direction in architecture. </p>
      <a target="_blank" href="sights/grodno/Church of the Nativity of the Virgin.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/64_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Nicholas</h3>
      <p> 
The five-domed composition of the Church of St. Nicholas in the village of Dubno, dating from the middle of the 19th century, is typical of ancient Russian architecture, as are some decorative elements. At the same time, this temple shows features of classicism, including the pediments that adorn all four facades.
</p>

    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/65_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ruins of Novogrudok castle</h3>
      <p> Novogrudok Castle is a defensive structure built on the Castle Hill. According to legend, the castle was built in the 13th century by Prince Mindovg, who became the first Grand Duke of Lithuania. </p>
      <a target="_blank" href="sights/grodno/Ruins of Novogrudok castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/66_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to Adam Mickiewicz</h3>
      <p>Monument to Adam Mickiewicz-monumentin the town Novogrudok Grodno region Belarus.
                    dedicated Polish poet Belarusian origin Adam Mitskevich, which together withJuliusz SlovackiandZygmunt
                    Krasinskyconsidered one of the founders of the Polishromanticism. The author of the monument is the
                    Belarusian sculptor Valerian Yanushkevich. </p>
      <a target="_blank" href="sights/grodno/Monument to Adam Mickiewicz.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/67_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to St. Elisey Lavrishevsky</h3>
      <p> he monument to St. Elisey Lavrishevsky in Novogrudok was consecrated on November 10,
                    2007 by Metropolitan Filaret of Minsk and Slutsk, Patriarchal Exarch of All Belarus.</p>
      <a target="_blank" href="sights/grodno/Monument to St. Elisey Lavrishevsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/68_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Trinity in Gervyaty (category 2)</h3>
      <p> Roman Catholic temple. Built in 1899-1903 in neo-gothic style. </p>
      <a target="_blank" href="sights/grodno/Church of the Holy Trinity in Gervyaty (category 2).php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/grodno/69_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Ascension of the Holy Cross in the village of Bystrica</h3>
      <p> A monument of early baroque architecture. It was built in the middle of the 16th century by order of the Polish king Sigismund I. In 1760 it was rebuilt in the Rococo style.</p>
      <a target="_blank" href="sights/grodno/Church of the Ascension of the Holy Cross in the village of Bystrica.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <!-- <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/70_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of St. Michael the Archangel</h3>
      <p> Decorative decoration of the interior of the church: nine altars, high-relief
                    compositions and ornamental reliefs, pulpit, lattice of side chapels. </p>
      <a target="_blank" href="sights/grodno/Church of St. Michael the Archangel.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/71_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Golshany Castle</h3>
      <p> Golshany Castle - a monument of palace and park architecture of the first half of the 17th century, the prototype of the castle from the famous work of the classic of Belarusian literature Vladimir Korotkevich "The Black Castle of Olshansky" </p>
      <a target="_blank" href="sights/grodno/Golshany Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/72_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of St. Michael the Archangel (Oshmyany)</h3>
      <p> It was originally built with the money of the Polish king Vladislav Jagiello in the 15th century. </p>
      <a target="_blank" href="sights/grodno/Church of St. Michael the Archangel (Oshmyany).php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/73_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of the Resurrection of Christ (Oshmyany)</h3>
      <p> The estimate and project for construction were approved in 1875. (project author M.M.Chagin). </p>
      <a target="_blank" href="sights/grodno/Church of the Resurrection of Christ (Oshmyany).php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/74_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of the Assumption of the Virgin Mary in the village of Novy Dvor</h3>
      <p> The Church of the Assumption of the Virgin Mary in the village of Novy Dvor was built of wood in 1749 on the site of a church built in 1670. It was renovated in 1880. The church is a monument of wooden architecture. The church has a rectangular octagonal tower of the main volume and a pentagonal sacristy.</p>
      </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/75_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Manor and park ensemble of Butovt-Andreykovichi</h3>
      <p> The estate of Butovt-Andreyevich is located in the Grodno region, the town of Porozovo. Date of construction refers to the middle of the 19th century. The architecture of this building belongs to the Zakopane style. This building consists of a small wooden house and a park adjacent to it. In early 1937, the estate was bought by ordinary residents.</p>

    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/76_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of St. Michael the Archangel in Porozovo</h3>
      <p> The modern history of the temple dates back to 1825-1828, when a new majestic stone building was erected on the site of a burnt wooden church. </p>
      <a target="_blank" href="sights/grodno/Church of St. Michael the Archangel in Porozovo.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/77_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Zhirovichi Monastery</h3>
      <p> This monastery was founded at the end of the 15th century. It is here that the icon of Our Lady of Zhirovichi is kept, which is revered as miraculous.</p>
      <a target="_blank" href="sights/grodno/Zhirovichi Monastery.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/78_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Farny Church of St. Andrew in Slonim</h3>
      <p>Slonim is rightfully proud of its Catholic shrines. Farny Church of St. Apostle Andrew was built in 1775. </p>
      <a target="_blank" href="sights/grodno/Farny Church of St. Andrew in Slonim.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/79_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Slonim synagogue</h3>
      <p> This temple, which belonged to the local Jewish community until 1940, is today considered one of the most important synagogues in Europe, which require restoration.</p>
      <a target="_blank" href="sights/grodno/Slonim synagogue.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/80_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Kreva Castle</h3>
      <p>The castle, located on the outskirts of Kreva, is considered one of the most important historical monuments not only by Belarusians, but also by Lithuanians. </p>
      <a target="_blank" href="sights/grodno/Kreva Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/81_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Manor Oginsky</h3>
      <p>Not far from the village of Zalesye is the estate of the Oginsky family, who owned these lands since the 18th century. For a long time the main buildings remained wooden. </p>
      <a target="_blank" href="sights/grodno/Manor Oginsky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/82_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of Our Lady of Rozhentseva</h3>
      <p> The Church of Our Lady of the Rozhentsova in Soly belongs to the neo-Baroque style. </p>
      <a target="_blank" href="sights/grodno/Church of Our Lady of Rozhentseva.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/83_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Reserve "Kotra"</h3>
      <p> The northern part of the Shchuchinsky district is covered with dense forest. The reserve "Kotra" was created on this territory, but in the past it was a place of grand ducal and royal hunting. </p>
      <a target="_blank" href="sights/grodno/Reserve Kotra.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/84_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Church of the Nativity of the Blessed Virgin in Murovanka</h3>
      <p> In the village of Murovanka, there is the Church of the Nativity of the Virgin, built at the beginning of the 16th century (although some researchers believe that it may be a whole century older). </p>
      <a target="_blank" href="sights/grodno/Church of the Nativity of the Blessed Virgin in Murovanka.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/grodno/85_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Trinity Church</h3>
      <p> The Trinity Church in Ishchelno is considered a striking example of the late Baroque. The construction of this temple according to the project of the famous architect was completed in 1758.</p>
      <a target="_blank" href="sights/grodno/Trinity Church2.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div> -->





















  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Independence Avenue</h3>
      <p>Acquaintance with Minsk begins with this 15-kilometer highway, which cuts the city into two halves</p>
      <a target="_blank" href="sights/minsk/Independence Avenue.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Red Church of Saints Simeon and Helena</h3>
      <p>According to the good Belarusian tradition, a stone's throw from the monument to Lenin, there is a temple on the square -Red Church of Saints Simeon and Helena(st. Sovetskaya 15, Minsk), built in 1910.</p>
      <a target="_blank" href="sights/minsk/Red Church of Saints Simeon and Helena.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>National Library</h3>
      <p>The book storage site attracts tourists primarily with an observation deck from which you can view Soviet mosaics on houses along Independence Avenue, the spills of the Slepyanskaya water system and new ambitious construction projects in the city.</p>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gorky Park</h3>
      <p>The central Minsk "recreational area" with children's attractions, a couple of simple cafes and a training base for the Yunost hockey club (near which even in summer you can lie in the snow, which is formed when cleaning the rink). We advise you to make a circle or two on the Ferris wheel, just jump into closed cabins - it is more convenient to see the city from them.</p>

    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Chelyuskintsev Park</h3>
      <p>A beautiful park with old pine trees, which was built in 1928-1931. Turn off the main paths to walk in silence and get some fresh air, feed the squirrels, watch the grandpas playing chess in warm weather. Be sure to ride the old rides from 30 years ago (our favorite is the Rook) or more modern ones, gobble up cotton candy and feel like a child again.</p>

    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Botanical Garden</h3>
      <p>This garden is a monument of nature and landscape architecture. Today, the botanical garden in Minsk is one of the largest botanical gardens in Europe, both in terms of collections and area. </p>
      <a target="_blank" href="sights/minsk/Botanical Garden.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Drozdy reservoir area</h3>
      <p>The best way to be in nature without leaving the city. Here you have forest waterfalls, and a red dam, and a wheat field, and views of the lights of a big city. </p>
      <a target="_blank" href="sights/minsk/Drozdy reservoir area.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/8_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Opera and Ballet theatre</h3>
      <p>A monument to Soviet constructivism. As planned, the building was planned to have four floors, but money ran out during construction. </p>
      <a target="_blank" href="sights/minsk/Opera and Ballet theatre.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/9_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>National Art Museum</h3>
      <p>the main collection of art in Belarus. It contains a large collection of classical Russian paintings, old Belarusian icons and Sarmatian portraits of the Radziwill family. </p>
      <a target="_blank" href="sights/minsk/National Art Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/10_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>National History Museum</h3>
      <p>National History Museum located very close to the art. Inside - a complete retrospective of the life of Belarusians: from the eras of ancient tribes to the present.</p>
      <a target="_blank" href="sights/minsk/National History Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of the History of Belarusian Cinema</h3>
      <p>A small building is hidden behind the Red ChurchMuseum of the History of Belarusian Cinema(Sverdlova street, 4,)and the former building of the Dairy Kitchen - one of the most striking examples of constructivism in Minsk; now the space functions hereArtFabrikawhere various cultural and educational events take place.</p>
      <a target="_blank" href="sights/minsk/Museum of the History of Belarusian Cinema.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gallery "Art-Belarus"</h3>
      <p>Gallery "Art-Belarus"(st. Kozlova, 3)in the Palace of Arts, he more or less regularly holds exhibitions of contemporary art and constantly exhibits the Belgazprombank collection, which includes Marc Chagall, Chaim Soutine, Leon Bakst, Valenty Vankovich, Osip Zadkine and other art stars.</p>

    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Hydropark of the sanatorium "Sosnovy Bor"</h3>
      <p>This small miracle of water-architectural thought was built in 1983 according to a special project of Belgiprovodkhoz</p>
      <a target="_blank" href="sights/minsk/Hydropark of the sanatorium Sosnovy Bor.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Folk Architecture and Life of Strochitsy</h3>
      <p>An ideal place if you want to leave the city for the day, adding an educational element to your walk. </p>
      <a target="_blank" href="sights/minsk/Museum of Folk Architecture and Life of Strochitsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Nalibokskaya Pushcha</h3>
      <p>This is the nearest forest area of huge proportions to Minsk, where, in addition to the impenetrable natural wilderness, there is also something to see. </p>
      <a target="_blank" href="sights/minsk/Nalibokskaya Pushcha.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Minsk settlement</h3>
      <p>The settlement is located just 10 km from Minsk, not far from the Museum of Folk Architecture and Life. This is an archaeological complex of the 9th-11th centuries, where, according to historical information, ancient Minsk was located. </p>
      <a target="_blank" href="sights/minsk/Minsk settlement.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Luban chalk quarries</h3>
      <p>The farthest location from Minsk on this list, but you can still drive there and back in a day without difficulty. Moreover, the place is very beautiful and, as they like to say, “as if not in Belarus”: pines, cliffs and water of such colors that no filters are needed for photos later!</p>
      <a target="_blank" href="sights/minsk/Luban chalk quarries.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Park and Manor Hutten-Czapski</h3>
      <p>And this place is for those who want to walk not just in the park, but in the park with history. In the past, Stankovo had many different famous owners, but the place reached its maximum prosperity under the Gutten-Chapskys. </p>
      <a target="_blank" href="sights/minsk/Park and Manor Hutten-Czapski.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ecotrail "Springs of the holy springs"</h3>
      <p>Surprisingly beautiful and not the most hyped location. According to legend, a church once stood on the site of the springs, which then went underground. And instead of it, springs appeared, which the locals called "saints".</p>
      <a target="_blank" href="sights/minsk/Ecotrail Springs of the holy springs.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  











  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/1_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>House of Soviets</h3>
      <p>The building began to be built in 1938 after the plans of the Soviet government to move the capital from Minsk to Mogilev.</p>
      <a target="_blank" href="sights/mogilev/House of Soviets.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/2_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mogilev pedestrian street</h3>
      <p>The street in its current form began to take shape 17 years ago and for Mogilev residents it is not just a tourist attribute, but a city artery - in the morning you can see workers and schoolchildren with students hurrying to work and study, and in the evenings life is seething here.</p>
      <a target="_blank" href="sights/mogilev/Mogilev pedestrian street.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/3_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of the History of Mogilev</h3>
      <p>The Museum of the History of Mogilev was opened in 1992 in the building of the former Bishop's Palace.</p>
      <a target="_blank" href="sights/mogilev/Museum of the History of Mogilev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/4_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mogilev Museum of Local Lore</h3>
      <p>Now there are more than 300 thousand museum items in the museum funds.</p>
      <a target="_blank" href="sights/mogilev/Mogilev Museum of Local Lore.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/5_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Ethnography</h3>
      <p>In 1981, the Mogilev Museum of Ethnography was opened. It belongs to the Mogilev Regional Museum of Local Lore. Initially, the museum exposition was placed in a wooden house built in the early 20th century.</p>
      <a target="_blank" href="sights/mogilev/Museum of Ethnography.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/6_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Time Cafe "Sky"</h3>
      <p>This is one of the few spaces in the city where various meetings, discussions, open dance lessons and Mafia games are held. The very center of the city, a pleasant atmosphere and a constantly updated poster of events.</p>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/7_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Glory Square</h3>
      <p>Glory Square, which was Soviet for a long time, has changed dramatically in recent years.</p>
      <a target="_blank" href="sights/mogilev/Glory Square.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/8_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Art museums of Byalynitsky-Biruli and Maslennikov</h3>
      <p>A bizarre building that can be seen on a two-hundred-ruble bill. The center of cultural life is the exhibition hall next to the Drama Theatre. Look for the current poster of exhibitions, there is always something going on.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/9_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mogilev Drama Theater</h3>
      <p>Not only is it located in an amazing old building, but the people working in it make real art. Tickets can be bought online, so it's easy to plan a theater evening when preparing your trip.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/10_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Puppet Theatre</h3>
      <p>His productions have long gone beyond the usual prejudice that puppet theater is only for children. Although there is something for children to see here.</p>

    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/11_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Red Star</h3>
      <p>One of the few well-preserved monuments of constructivism in all its glory in Belarus.</p>
    </div>

  </div>
  























  <!-- Minsk region start-------------------------------------------------------------------- -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Radziwill Castle in Nesvizh</h3>
      <p>The Radziwill Castle in Nesvizh is included in the UNESCO heritage list. The palace was designed by the Italian Jesuit monarch and architect Giovanni Maria Bernardoni.</p>
      <a target="_blank" href="sights/minsk/Radziwill Castle in Nesvizh.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>


  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Fairyland Malivur (Logoisk district)</h3>
      <p>The park is located in the village of Dobrenevo. The estate is still under construction. The legend of the emerald sword was taken as the basis. </p>
      <a target="_blank" href="sights/minsk/Fairyland Malivur.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Sula Interactive History Park Museum</h3>
      <p>The manor and park complex in Sula is a place where the separation between the present and the past disappears.</p>
      <a target="_blank" href="sights/minsk/Sula Interactive History Park Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lake Naroch</h3>
      <p>Lake Naroch is the largest lake in Belarus, its area is almost 80 square meters. </p>
      <a target="_blank" href="sights/minsk/Lake Naroch.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Joseph and Bram (Rubezevichy)</h3>
      <p>The temple building is made in neo-gothic style. The Rubezhevichi lands passed from hand to hand of different gentry families.</p>
      <a target="_blank" href="sights/minsk/Church of St. Joseph and Bram.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Chapsky Manor (Stankovo)</h3>
      <p>The manor house of the Czapski family did not survive, but you can still see outbuildings on the estate - an outbuilding, a stable, a barn and a library. </p>
      <a target="_blank" href="sights/minsk/Chapsky Manor.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor of Yakub Kolas Akinchitsy (Columns)</h3>
      <p>Konstantin Mickiewicz, a classic of Belarusian literature, was born in the town (Lithuanian for “dungeons”) of Akinchitsy, who took the pseudonym Yakub Kolas. In Akinchitsy, the writer's house and outbuildings were restored. </p>
      <a target="_blank" href="sights/minsk/Manor of Yakub Kolas Akinchitsy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Myadel Calvary</h3>
      <p>The origin of the Myadel calvaria is legendary. According to legend, the Virgin Mary appeared to the owner of these places, Antonio Koshchits, and pointed to the place where a complex of chapels should be built.</p>
      <a target="_blank" href="sights/minsk/Myadel Calvary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>House with devils (Ratomka)</h3>
      <p>This house has become especially famous in Belarus after 2017. The building is in private hands and is a residential building, very unusually decorated. </p>
      <a target="_blank" href="sights/minsk/House with devils.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
   
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor and park complex Dukorsky Maentak</h3>
      <p>This complex is a monument to the Belarusian gentry culture. Dukorsky Maentak belonged to the family of Oshtorpov. Of the entire manor complex, the entrance gate has been preserved - a beautifully decorated gate, as well as an outbuilding in which the museum is located.</p>
      <a target="_blank" href="sights/minsk/Manor and park complex Dukorsky Maentak.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ecotourism Center (Stankovo)</h3>
      <p>The organization is located 40 km from Minsk. This place is very popular among Minsk residents and residents of the Minsk region. </p>
      <a target="_blank" href="sights/minsk/Ecotourism Center.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Aquapark Lebyazhy (Minsk)</h3>
      <p>This water park is the largest in Belarus. It is located directly in Minsk on Pobediteley Avenue, 120. In the water park you can ride 11 water slides. There are 2 water playgrounds for children.</p>
      <a target="_blank" href="sights/minsk/Aquapark Lebyazhy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Aviation Technology (Borovaya)</h3>
      <p>The first museum of aviation technology in Belarus was created on the basis of the Minsk flying club.</p>
      <a target="_blank" href="sights/minsk/Museum of Aviation Technology.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/34_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Architectural Miniatures Strana Mini (Minsk)</h3>
      <p>Miniature copies of the sights of Belarus are collected in the "Strana Mini". The museum operates in the Palace of Trade Unions. </p>
      <a target="_blank" href="sights/minsk/Museum of Architectural Miniatures Strana Mini.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/35_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Ancient Folk Crafts and Technologies Dudutki</h3>
      <p>The Dudutki complex will introduce visitors to the world of the ancient Slavs, their crafts, crafts and production technologies, as well as the life of the Belarusian gentry.</p>
      <a target="_blank" href="sights/minsk/Museum of Ancient Folk Crafts and Technologies Dudutki.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/36_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Museum of Folk Architecture and Life (Ozertso)</h3>
      <p>This is an open-air ethnographic museum, the exposition introduces Belarusian folk architecture and traditional interiors.</p>
      <a target="_blank" href="sights/minsk/Museum of Folk Architecture and Life.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/37_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ethnographic complex Melnitsa (Zaslavl)</h3>
      <p>The ethnographic complex introduces folk Belarusian culture and architecture. </p>
      <a target="_blank" href="sights/minsk/Ethnographic complex Melnitsa.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/38_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Mount Dzerzhinskaya</h3>
      <p>Mount Dzerzhinskaya is the highest point in Belarus, the absolute height of which is 345 m. Until 1958, the hill was called the “Holy Mountain”. </p>
      <a target="_blank" href="sights/minsk/Mount Dzerzhinskaya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/39_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Landscape reserve Naliboksky</h3>
      <p>These places had protected status in the period from 1940 to 1951. And in 1960 one of the first Belarusian reserves was formed here.</p>
      <a target="_blank" href="sights/minsk/Landscape reserve Naliboksky.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/40_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Stone of love (Minsk region)</h3>
      <p>The glacial boulder, called the Stone of Love, is recognized as a geological natural monument. Perhaps this name is due to the fact that the remnant was supposedly used for religious purposes, for example, as an altar. </p>
      <a target="_blank" href="sights/minsk/Stone of love.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/41_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Cathedral of the Resurrection of Christ (Borisov)</h3>
      <p>Borisov Cathedral, built in 1874, represents the pseudo-Russian style and is the most prominent representative of this stylistic trend.</p>
      <a target="_blank" href="sights/minsk/Cathedral of the Resurrection of Christ.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/42_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Assumption of the Blessed Virgin Mary (Budslau)</h3>
      <p>The Catholic parish in Budslav appeared long before the construction of the stone church. The ruler of the Grand Duchy of Lithuania donated a piece of land near the Servach River.</p>
      <a target="_blank" href="sights/minsk/Church of the Assumption of the Blessed Virgin Mary.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/minsk/43_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Mary of Egypt (Vileika)</h3>
      <p>The Church of Mary of Egypt was built in the retrospective Russian style in 1865. The building of the shrine was designed by Alexey Polozov.</p>
      <a target="_blank" href="sights/minsk/Church of St. Mary of Egypt.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>












  
  <!-- Mogilev region start-------------------------------------------------------------------- -->

  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/12_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Shklov City Hall</h3>
      <p>The Town Hall is a very unusual type of urban building for Belarus. The city of Shklov underwent significant restructuring after the 50s of the 18th century.</p>
      <a target="_blank" href="sights/mogilev/Shklov City Hall.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
  
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/13_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lake Khotomlya</h3>
      <p>Khotomlya among the locals is called the Holy Lake and there is a legend about it. Locals believe that in ancient times there was a village with a church in the center in its place.</p>
      <a target="_blank" href="sights/mogilev/Lake Khotomlya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/14_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Bobruisk fortress</h3>
      <p>The fortress in Bobruisk was built at the beginning of the 19th century to defend the borders of the Russian Empire. </p>
      <a target="_blank" href="sights/mogilev/Bobruisk fortress.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/15_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Bulgakov's estate (Zhylichi)</h3>
      <p>The Bulgakov Palace and Park Ensemble is recognized as a historical and cultural value of the Republic of Belarus. </p>
      <a target="_blank" href="sights/mogilev/Bulgakov's estate.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/16_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Potemkin Palace in Krichev</h3>
      <p>The main attraction of Krichev is the palace of Grigory Potemkin, who received it as a gift from the Russian Empress already at the end of the 18th century. </p>
      <a target="_blank" href="sights/mogilev/Potemkin Palace in Krichev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/17_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Zhilichi historical complex-museum</h3>
      <p>The Zhilichi Historical Museum is located in the former estate of Bulgakov. The construction of the estate was started in the 1820s by the gentry Ignatius Bulgak and continued in subsequent decades.</p>
      <a target="_blank" href="sights/mogilev/Zhilichi historical complex-museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/18_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Art Museum. Poplavsky in Bobruisk</h3>
      <p>The Bobruisk Art Museum was created to preserve the heritage of the region's artists.</p>
      <a target="_blank" href="sights/mogilev/Art Museum. Poplavsky in Bobruisk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/19_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Gorki Historical and Ethnographic Museum</h3>
      <p>The ethnographic museum was founded in 1984. This included collections collected during the operation of the old museum center since 1922, obtained from the wide noble collection of Prince Mikhail Alexandrovich Dondukov-Korsakov.</p>
      <a target="_blank" href="sights/mogilev/Gorki Historical and Ethnographic Museum.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/20_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Belarusian ethnographic village of the 19th century</h3>
      <p>The historical and ethnographic complex is not quite a museum in the classical sense. The Belarusian village is an open installation representing ancient buildings. Visitors can see the shops of artisans - a weaver, a potter, a carpenter, a baker, etc.</p>
      <a target="_blank" href="sights/mogilev/Belarusian ethnographic village of the 19th century.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/21_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Manor Tolstoy (Grudinovka)</h3>
      <p>The abandoned estate in Grudinovka is located between Mogilev and Bykhov. Count Dmitry Tolstoy received land from the Russian Empress, was distinguished by great enthusiasm and activity.</p>
      <a target="_blank" href="sights/mogilev/Manor Tolstoy.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/22_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Merchant's House Katsnelson (Bobruisk)</h3>
      <p>The Katsnelson house is distinguished by an interesting stylistic decision - modern. The exterior of the building is decorated with carved window frames and a mezzanine.</p>
      <a target="_blank" href="sights/mogilev/Merchant's House Katsnelson.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/23_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Chodkevich and Sapieha Castle (Bykhovsky)</h3>
      <p></p>
      <a target="_blank" href="sights/mogilev/Chodkevich and Sapieha Castle.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/24_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Shopping malls in Mstislavl</h3>
      <p>Mstislav shopping malls are included in the list of historical and cultural values of Belarus. </p>
      <a target="_blank" href="sights/mogilev/Shopping malls in Mstislavl.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/25_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>City Hall in Mogilev</h3>
      <p>Mogilev City Hall is a symbol of the city's self-government. </p>
      <a target="_blank" href="sights/mogilev/City Hall in Mogilev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/26_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Former water tower in Bobruisk</h3>
      <p>The Bobruisk water tower differs from other similar structures in that it did not remain abandoned, as is often the case - it even housed a restaurant. </p>
      <a target="_blank" href="sights/mogilev/Former water tower in Bobruisk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/27_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to Peter Mstislavets (Mstislavl)</h3>
      <p>Pyotr Mstislavets is known as a printing pioneer, is considered a follower of the printing pioneers of Pole Francysk Skaryna and Russian Ivan Fedorov.</p>
      <a target="_blank" href="sights/mogilev/Monument to Peter Mstislavets.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/28_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Monument to the Beaver in Bobruisk</h3>
      <p>You can see the sculpture at the intersection of Socialist and Karl Marx streets. The monument was designed by Vladimir Gavrilenko. Locals call the object Beaver Samuilovich.</p>
      <a target="_blank" href="sights/mogilev/Monument to the Beaver in Bobruisk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/29_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial complex Buinichskoe Pole</h3>
      <p>It was decided to equip the "Buinichskoye Pole" on the site of the most fierce battles for Mogilev during the Great Patriotic War.</p>
      <a target="_blank" href="sights/mogilev/Memorial complex Buinichskoe Pole.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/30_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ludchitska Height</h3>
      <p>The memorial dedicated to military glory, "Ludchitska Height" was built to perpetuate the feat of the soldiers who defended Belarus from February to June 1944. </p>
      <a target="_blank" href="sights/mogilev/Ludchitska Height.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/31_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Memorial complex in the village of Lesnaya</h3>
      <p>This memorable place is dedicated to the distant events of the Northern War, since it was at the village of Lesnaya that one of the most important events took place - the battle in 1708. </p>
      <a target="_blank" href="sights/mogilev/Memorial complex in the village of Lesnaya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/32_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Pustynsky Holy Dormition Monastery</h3>
      <p>This is one of the oldest Orthodox monasteries in the Mogilev region, known since 1380. The Holy Dormition Monastery was founded by the son of the Lithuanian prince Olgerd Lugven, who in Orthodoxy was called Simeon. </p>
      <a target="_blank" href="sights/mogilev/Pustynsky Holy Dormition Monastery.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/33_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Ascension Monastery in Borkolabovo</h3>
      <p>The founder of the convent was the politician and Orthodox patron of the Grand Duchy of Lithuania Bogdan Wilhelmovich Stetkevich in 1623.</p>
      <a target="_blank" href="sights/mogilev/Ascension Monastery in Borkolabovo.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/34_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of St. Anthony (Princesses)</h3>
      <p>The Catholic church belonged to the Dominican order. Now it is in a ruined state, its ruins can be seen in the village of Knyazhitsy. The construction of the church lasted about 30 years, from about the 1750s to the 80s of the same century.</p>
      <a target="_blank" href="sights/mogilev/Church of St. Anthony.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/35_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church in honor of the icon of the Mother of God Belynichskaya</h3>
      <p>Interestingly, the icon of the Mother of God of Belynichskaya was revered as miraculous by both Catholics and Orthodox. For centuries, information has been disseminated about the miracles performed by the image of the Virgin.</p>
      <a target="_blank" href="sights/mogilev/Church in honor of the icon of the Mother of God Belynichskaya.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/36_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Church of the Holy Trinity (Polykovichi)</h3>
      <p>The Orthodox Holy Trinity Church was built in the small town of Polykovichi in the late 90s of the twentieth century on the site of an old church dedicated to the holy martyr Paraskeva Pyatnitsa.</p>
      <a target="_blank" href="sights/mogilev/Church of the Holy Trinity.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/37_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Temple of George the Victorious in Bobruisk</h3>
      <p>St. George's Church in Bobruisk was founded in 1905 by architect Vladimir Chagin. </p>
      <a target="_blank" href="sights/mogilev/Temple of George the Victorious in Bobruisk.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/38_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Lake Karmanovskoe</h3>
      <p>Karmanovskoe Lake near the small village of Karmanovka is great for fishing. Both locals and visitors love to sit here with a fishing rod. The shores of the reservoir are sloping, covered with grassy vegetation.</p>
      <a target="_blank" href="sights/mogilev/Lake Karmanovskoe.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/39_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Dnepr River</h3>
      <p>The Dnieper is one of the largest rivers in Europe. The river takes its source precisely on the territory of Belarus. </p>
      <a target="_blank" href="sights/mogilev/Dnepr River.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <!-- <div class="image">
      <img src="images/mogilev/40_.jpg" alt="">
    </div> -->
    <div class="content">
      <h3>Teterinskoe reservoir</h3>
      <p>The reservoir on the Drut River was created in the 50s of the twentieth century for energy purposes and for fishing. The reservoir is still very rich in a variety of fish: bream, perch, rudd and so on.</p>
      <a target="_blank" href="sights/mogilev/Teterinskoe reservoir.php">read more <i class="fas fa-angle-right"></i></a>
    </div>

  </div>
    
  <div class="box_ sights" hidden>
    <div class="image">
      <img src="images/mogilev/41_.jpg" alt="">
    </div>
    <div class="content">
      <h3>Caves Forest Park in Mogilev</h3>
      <p>One of the large forests, which Belarus is so rich in, is located in the valley of one of the tributaries of the Dnieper. </p>
      <a target="_blank" href="sights/mogilev/Caves Forest Park in Mogilev.php">read more <i class="fas fa-angle-right"></i></a>
    </div>
    <!-- <div class="route-block">
      <div class="flex_ no-wrap">
        <input type="checkbox" name="route1" class="mr-1 route" id="400" onchange="changeRoute()">
        <label for="route" class="checkbox-text">Show route</label>
      </div>
    </div> -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="js/google-translate.js"></script>
  <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
  <script src="js/script.js"></script>
  
  <script>

    let checkboxList = document.getElementsByClassName('route');
  </script>
    <script src="js/imagesSrcArray.js"></script>
  
<script src="https://cdn.anychart.com/geodata/2.2.0/countries/belarus/belarus.js"></script>
<script src="js/leaflet/belarus.js"></script>
  <script type="text/javascript" src="js/leaflet/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@lasights/dist/leaflet-routing-machine.js"></script>

  <script src="js/leaflet/L.Control.Locate.js"></script>
  <script type="text/javascript" src="js/leaflet/customized-map.js"></script>
  <script src="js/leaflet/current-location.js"></script>



</body>

</html>