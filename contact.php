<?php
$thisPage="contact";
$title="Contactformulier | Kwartierstaat van Rudi Ponthier";
$description="Contactformulier | Kwartierstaat van Rudi Ponthier";
?>
<?php require 'head.inc.php'; ?>

<div class="poster" id="poster-6">
</div>

<div id="content">
    <?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<h1>Contactformulier</h1>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <fieldset>
      <ul>
        <li>
          <label for="naam">Naam:</label>
          <input id="naam" name="naam" type="text" placeholder="Naam" required>
        </li>
        <li>
          <label for="email">E-mailadres:</label>
          <input id="email" name="email" type="email" placeholder="E-mailadres" required>
        </li>
        <li>
          <label for="message">Uw vraag of opmerking:</label>
          <textarea id="message" name="message" placeholder="Schrijf hier je vraag of opmerking" rows=5 required></textarea>
        </li>
      </ul>
    </fieldset>
    <fieldset>
      <button type="submit" class="button" name="submit" value="Verzenden" title="Verstuur je vraag">Verstuur</button>
    </fieldset>
  </form>

  <?php
} else {  // the user has submitted the form
  // Check if the "email" input field is filled out
  if (isset($_POST["email"])) {
    // Check if "email" email address is valid
    $mailcheck = spamcheck($_POST["email"]);
    if ($mailcheck==FALSE) {
      echo "Geen geldig e-mailadres!";
    } else {
      $naam = $_POST["naam"]; // sender
      $email = $_POST["email"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      $subject = "Dit bericht werd gestuurd door een bezoeker van de kwartierstaat van Rudi Ponthier";
      // send mail
      mail("rudi.ponthier@telenet.be", $subject, "Van: $naam\r\n$email\r\n\n$message");
      echo nl2br("Beste $naam, je bericht werd correct verstuurd.\nIk contacteer je zo spoedig mogelijk.");
    }
  }
}
?>
  <!-- end .content --></div>
<?php require 'footer.inc.php'; ?>