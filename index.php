<?php
include("includes/init.php");
$index_current = "class = 'current'";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width">
    <meta name="description" content="MEYE is an international campaign making it possible for women in poverty to have access to low-cost, hygenic, and sustainable menstrual products.">
    <meta name="keywords" content="Women's Rights Movement, Non-Profit, Menstrual Hygiene, Menstrual Cup, Affordable, Change, menstruation, period, help, donate, girls, education, school, menstrual,">
    <meta name="author" content="Sayeeda Aishee">
    <title>Eliminating Menstrual Poverty | MEYE</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>

  <?php include './includes/nav.php';?>

  <section id="showcase">
        <div class="container">
          <h1>TRANSFORMING LIVES ONE PERIOD AT A TIME</h1>
          <a class="button_1" href="https://www.gofundme.com/f/Help-Bangladeshi-Girls-Get-The-Rights-They-Deserve">Make a Difference Today</a>
        </div>
  </section>

      <section class="quote">
        <div class="container">
          <h1>"More than 800 million people menstruate daily." </h1>
        </div>
      </section>

      <section class="boxes">
        <div class="boxcontainermain">
          <div class="lbox">
            <!-- Source: (original work) Sayeeda Tuz Jahin Aishee -->
            <img src="./img/diag.jpeg" alt="Diagram showing menstrual statistics in different countries.">
          </div>
          <div class="rbox">
            <h3>Why Menstruation</h3>
            <p>Menstruation is natural phenomena that impacts more than half of the female(meye) population, id. 26% of the global population, yet it is stigmatized all around the world. 70% of Indian mothers still believe periods are 'dirty". In a study done on Bangladesh’s garments factory workers, 60% percent of them use dirty rags from the floor for menstrual cloths (House et al. 2012).</p>
          </div>
        </div>
      </section>

      <section class="boxes">
        <div class="boxcontainermain">
          <div class="rbox">
            <!-- Source: https://chaaipani.com/menstrual-cup/ -->
            <img src="./img/whymeye.png" alt="Picture of Mensrual Cups">
          </div>
          <div class="lbox">
            <h3>Why MEYE</h3>
            <p>Combining the stigmas and the lack of hygienic options, girls in Bangladesh suffer from vaginal infections, urinary tract infections, and even death. Addressing this issue here at MEYE, we not only work to distribute menstrual cups, but also provide menstrual hygiene workshops in schools to elevate the stigmas, so that every girl, during period, can live in a comfortable, safe and dignified way. Find out more in our project page.</p>
          </div>
        </div>
      </section>

      <footer>
        <?php include './includes/footer.php';?>
        Photo Sources: <cite>
            <a href="https://www.brookings.edu/blog/education-plus-development/2017/07/27/cycling-to-success-a-road-to-empowerment-for-rural-girls-in-india/">Brookings,</a>
            <a href="https://chaaipani.com/menstrual-cup/">Chaaipani</a>
        </cite>
      </footer>
  </body>
</html>
