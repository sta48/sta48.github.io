<?php
include("includes/init.php");
$Sponsors_current = "class = 'current'";
$show_form = TRUE;

$show_name_feedback = FALSE;
$show_email_feedback = FALSE;
$show_phone_feedback = FALSE;
$show_messege_feedback = FALSE;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $is_form_valid = TRUE;

  $dob= filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
  $choice= filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  if (empty($name) == TRUE) {
    $is_form_valid = FALSE;
    $show_name_feedback = TRUE;
  }

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
  if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
    $is_form_valid = FALSE;
    $show_email_feedback = TRUE;
  }

  $messege = filter_input(INPUT_POST, 'messege', FILTER_SANITIZE_STRING);
  if (empty($messege) == TRUE) {
    $is_form_valid = FALSE;
    $show_messege_feedback = TRUE;
  }

  $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
  if ($phone > 9999999999 || $phone <= 1000000000){
    $is_order_valid = FALSE;
    $show_phone_feedback = TRUE;
  }

  $show_form = !$is_form_valid;
}
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

        <section id="sponsorshowcase">
        <div class="containerspons">
          <h1>BE THE FOREFRONT OF A PROGRESSIVE MOVEMENT</h1>
          <a class="button_4" href="https://www.gofundme.com/f/Help-Bangladeshi-Girls-Get-The-Rights-They-Deserve">Sponsor Today</a>
        </div>
        </section>

        <section class="boxcontainerproject">
            <div class="lboxspons">
                <!-- Source: https://www.vecteezy.com/vector-art/128471-free-feminine-hygiene-icons-vector -->
                <img src="./img/sponsorquote.jpg" alt="A graphic of different menstrual products">
            </div>
            <div class="rboxspons">
                <h2> Why Sponsor?</h2>
                <ul>
                    <li>Make a difference in the real world.</li>
                    <li>Give the voiceless an oppurtunity to grow.</li>
                    <li>Gain positive exposure.</li>
                </ul>
            </div>
         </section>

         <section id="form">
              <div class= "container">
                <div id= "formlbox">
                    <h2>Connect With US</h2>
                    <p>ProjectMeye@gmail.com</p>
                    <p>(956) 662-3129</p>
                </div>
                <div id="formrbox">
                    <?php if ($show_form) { ?>
                        <form class="form" method="post" action="Sponsors.php" novalidate>

                            <div>
                                <label>Full Name</label>
                                <div>
                                <input type= "text" name="name" placeholder="Mary Jane"value = <?php echo htmlspecialchars($name);?> >
                                </div>
                            </div>
                            <?php if($show_name_feedback){
                            echo "<p class='form_feedback'>Please provide your Full Name!</p>";
                            }?>

                            <div>
                                <label> Email</label>
                                <div>
                                <input type="email" name="email" placeholder="example@company.com" value = <?php echo htmlspecialchars($email);?>>
                                </div>
                            </div>
                            <?php if($show_email_feedback){
                            echo "<p class='form_feedback'>Please provide a valid email address!</p>";
                            }?>

                            <div>
                                <label> Phone Number</label>
                                <div>
                                <input type= "tel" name="phone" placeholder="xxxxxxxxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value=<?php echo htmlspecialchars($phone);?> >
                                </div>
                            </div>
                            <?php if($show_phone_feedback){
                            echo "<p class='form_feedback'>Please provide a valid phone number without any spaces!</p>";
                            }?>

                            <div>
                              <label> Choose One</label>
                              <div id="radio">
                              <input type="radio" name="choice" value="Company Associate"> <p>Company Associate</p>
                              <input type="radio" name="choice" value="Independent Individual"> <p>Independent Individual</p>
                             </div>
                            </div>

                            <div>
                              <label> Date</label>
                              <div>
                              <input type="date" name="dob" value=<?php echo htmlspecialchars($dob);?>/>
                             </div>
                            </div>

                            <div>
                                <label> How can we help?</label>
                                <div>
                                <textarea type="text" name="messege" placeholder="Type your comments or concerns here."value=<?php echo htmlspecialchars($messege);?>></textarea>
                                </div>
                            </div>
                            <?php if($show_messege_feedback){
                            echo "<p class='form_feedback'>Please provide a brief description.</p>";
                            }?>

                            <button class="button_1" type="Submit" value="Place Holder">Send</button>

                        </form>

                    <?php } else { ?>
                        <div id="confirmation">
                            <h2> Thank You For Contacting Us <?php echo htmlspecialchars($name)?>! </h2>
                            <p>Here is the information you provided:</p>
                            <ul>
                              <li>Phone Number: <?php echo htmlspecialchars($phone)?></li>
                              <li>Email: <?php echo htmlspecialchars($email)?></li>
                              <li>Choice: <?php echo htmlspecialchars($choice)?></li>
                              <li>Date: <?php echo htmlspecialchars($dob)?></li>
                              <li>Messege: <?php echo htmlspecialchars($messege)?></li>
                             </ul>
                            <p> We'll get back to you as soon as possible. </p>
                            <p><a href="Sponsors.php">Resubmit</a></p>
                        </div>
                    <?php } ?>
              </div>
        </section>

      <footer>
      <?php include './includes/footer.php';?>
        Photo Sources: <cite>
            <a href="https://www.vecteezy.com/vector-art/128471-free-feminine-hygiene-icons-vector">Vecteezy,</a>
            <a href="https://www.shutterstock.com/image-vector/hygiene-elements-seamless-pattern-on-pink-404305711">Shutterstock</a>
        </cite>
      </footer>
    </body>
</html>
