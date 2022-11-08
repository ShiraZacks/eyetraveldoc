<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye Travel: Eye Care For The Home Bound</title>
    <link rel="shortcut icon" type="image/png" href="eye.png" />
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?= time() ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- this is cuz of the recaptcha, hopefully it will work soon -->

    <link rel="stylesheet" href="style.css?<?= time() ?>">
</head>
<?php include "menu.php"; ?>

<body>
<div >
    <h3 class="contact">We want to hear from you!</h3>
    <form method="post" action="https://formspree.io/f/mlevoaar" class="form ">
        <?php if (isset($errors)) { ?>
            <p><?php echo $errors; ?></p>
        <?php } ?>
        <fieldset class=" fieldset">
            <legend> Contact Us Today! </legend>
            <br><br>
            <div    class="contact-div">
            <label for="full-name">Name</label>
            <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
            <br><br>
            <label for="email-address">Email Address</label>
            <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
            <br><br>
            <label for="phone">Phone Number</label>
            <input type="phone" name="phone" id="phone" placeholder="123456789" required="">
            <br><br>
            <label for="message">Message</label>
            <textarea rows="4" name="message" id="message" placeholder="Type message here" required=""></textarea>
            <br><br>
            </div>
            <input type="hidden" name="_subject" id="email-subject" value="Eye Travel Contact Form Submission">
            <br>
            <div class="g-recaptcha" data-sitekey="6LcNQe0iAAAAAKMiSeu7-AW6XsNCl-gj5EXrujOr"></div> <!-- to make recaptcha work as a background thing and not a click me button -->
            <br>
            <input type="submit" value="Submit" class="submit-button">
            <br><br>
            
        </fieldset>

    </form>
</div>

    <?php include "footer.php" ?>

</body>

</html>