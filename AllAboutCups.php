<?php
include("includes/init.php");
$AllAboutCups_current = "class = 'current'";
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

      <section class="heading">
        <div class="container">
          <h1>Why Meye</h1>
        </div>
      </section>

      <section class="boxes">
        <div class="boxcontainer">
          <div class="lbox">
            <!-- Source: https://www.instyle.com/beauty/menstrual-cup-editor-tested -->
            <img src="./img/cost.png" alt="Picture of menstrual cups on a hand.">
          </div>
          <div class="rbox">
            <h3>COST EFFECTIVE</h3>
            <p>Compared to pads and tampons, which are one time use, menstrual cups last for 10 years making them the perfect product for people who can't afford basic hygiene. Not only that, if bought whole sale, good quality menstrual cups can cost less then a dollar making them the affordable choice for mass distribution.</p>
          </div>
        </div>
      </section>

      <section class="boxes">
        <div class="boxcontainer">
            <div class="rbox">
              <!-- Source: https://www.information-age.com/sustainable-tech-earth-123477343/ -->
              <img src="./img/sust.png" alt="A glass globe on a bed of greenery.">
            </div>
            <div class="lbox">
            <h3>SUSTAINABLE</h3>
            <p>Around 20 billion sanitary napkins, tampons, and applicators are dumped into North American landfills every year. A year's worth of feminine hygiene products leave a carbon footprint of 5.3 kg CO2 equivalent. An average woman uses 11,000 - 15,000 sanitary products in her lifetime. Using menstrual cups, that 11,000 - 15,000 can be reduced to 2-3.</p>
          </div>
        </div>
      </section>

      <section class="boxes">
        <div class="boxcontainer">
          <div class="lbox">
            <!-- Source: https://www.airliquide.com/healthcare/hygiene -->
            <img src="./img/hygiene.png" alt="A hand reaching for soap.">
          </div>
          <div class="rbox">
            <h3>EASY HYGIENE</h3>
            <p>Due to lack of menstrual hygiene products, many women in developing countries use old cotton rags. Due to lack of clean water and soap, these old rags are hard to keep clean causing many vaginal infections and reproductive health problems. Menstrual cups, thus are the perfect alternative as they only require rinsing while in use and boiling after use.</p>
          </div>
        </div>
      </section>

      <section class="heading">
        <div class="container">
          <a class="button_2" href="https://www.gofundme.com/f/Help-Bangladeshi-Girls-Get-The-Rights-They-Deserve">Make a Difference</a>
        </div>
      </section>

      <footer>
        <?php include './includes/footer.php';?>
        Photo Sources: <cite>
            <a href="https://www.instyle.com/beauty/menstrual-cup-editor-tested">InStyle,</a>
            <a href="https://www.information-age.com/sustainable-tech-earth-123477343/">InformationAge,</a>
            <a href="https://www.airliquide.com/healthcare/hygiene">AirLiquide</a>
        </cite>
      </footer>
  </body>
</html>
