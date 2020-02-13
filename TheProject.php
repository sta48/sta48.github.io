<?php
include("includes/init.php");
$TheProject_current = "class = 'current'";?>
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

      <section>
        <div id="boxcontainerproject">
          <div id="smallbox">
            <div id="leftbox">
              <h1> THE PROJECT </h1>
                <ol>
                  <li>Distribute menstrual cups to more than 1000 public school girls and women living in slums of Bangladesh</li>
                  <li>Hold workshops for the public in Bangladesh to raise awareness about periods and elevate stigmas.</li>
                </ol>
                <button class="button_3">Make a Difference</button>
              </div>
          </div>
          <div id="bigbox">
            <div id= rightbox>
              <!-- Source: https://www.mariondurand.com/ -->
              <img src="./img/proj.jpeg" alt="A picture of girls in school uniform.">
            </div>
        </div>
      </div>
      </section>

      <section id="timeboxes">
        <div class="boxcontainerproject">
          <h1>TIMELINE</h1>
          <div class="timebox1">
            <h3>NOW - MAY</h3>
            <p>Finish fund raising and raising awareness about the project.</p>
          </div>
          <div class="timebox2">
            <h3>MAY - JUL.</h3>
            <p>Contact companies and order menstrual products.</p>
          </div>
          <div class="timebox3">
            <h3>AUGUST</h3>
            <p>Distribute products and hold workshops about menstruation.</p>
          </div>
        </div>
      </section>

      <section>
        <div class="boxcontainer">
          <div id="budgetbox">
          <h1>BUDGET</h1>
          <h2>100% of donations will go to the cause.</h2>
        </div>
        <div id="budgetdescbox">
          <ul>
            <li>Menstrual cups cost around $2 when bought in bulk. We budget to spend $1500 for these products, which will be distributed to school girls and women living in slums of Bangladesh.</li>
            <li>Enacting local menstrual awareness workshops will cost around $500.</li>
            <li>Any extra money donated will go towards buying more menstrual products.</li>
          </ul>
        </div>
      </div>
      </section>


      <footer>
        <?php include './includes/footer.php';?>
        Photo Sources:<cite> <a href="https://www.mariondurand.com/#/feminist-school/">Marion Durand</a>
        </cite>
      </footer>
  </body>
</html>
