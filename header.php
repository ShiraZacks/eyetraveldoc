<?php
echo ' <!-- Navbar  -->
    <div class="top">
        <div class="topBar">

            <div class="smaller">
                <a class="bar" onclick="myFunction()" title="Toggle Navigation Menu"><img src="bars.svg" alt="MENU"></a>
            </div>



            <a href="index.php" class="buttons">Home</a>
            <a href="about.php" class="buttons">What is Eye Travel</a>
            <a href="contact.php" class="buttons">Contact</a>
            <a href="https://portal.aprima.com/11/login.aspx?UID=a747b803-8d58-479c-8365-87a8f087e10e" class="buttons">Patient Portal</a>
        </div>
    <!-- eye travel logo-->
        <div>
            <img class="logo" src="logo.png" alt="Eye Travel: Eye Care for the Home Bound">
        </div>

        <!-- Navbar on small screens -->
        <div id="smallScreen" class="hide">
            <ul>
                <li><a href="index.php" class="buttonSmall">Home</a></li>
                <li><a href="about.php" class="buttonSmall">What is Eye Travel</a></li>
                <li><a href="contact.php" class="buttonSmall">Contact</a></li>
                <li><a href="https://portal.aprima.com/11/login.aspx?UID=a747b803-8d58-479c-8365-87a8f087e10e" class="buttonSmall">Patient Portal</a></li>
            </ul>
        </div>
    </div>';
    ?>
    