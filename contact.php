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
<?php include "header.php"; ?>

<body>
<div>
    <div class="big-blue-stripe"> <br><br>
    <h1 class="contact white-text center">We want to hear from you!</h1>
    <br><br>
    </div>
    <form method="post" action="https://formspree.io/f/mlevoaar" class="form center">
        <?php if (isset($errors)) { ?>
            <p><?php echo $errors; ?></p>
        <?php } ?>
        <fieldset class="center fieldset">
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
            <div class="center">
            <div class="g-recaptcha" data-sitekey="6LcNQe0iAAAAAKMiSeu7-AW6XsNCl-gj5EXrujOr"></div> <!-- recaptcha is a im not a robot button, it  works!!!!!!! -->
            </div>
            <br>
            <input type="submit" value="Submit" class="submit-button">
            <br><br>
            
        </fieldset>

    </form>
</div>

    <?php include "footer.php" ?>

</body>

</html>
