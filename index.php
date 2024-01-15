<!DOCTYPE html>
<html lang="en">
<?php
    $title = "Xmas Countdown | Live Christmas Tracker";
    require("./assets/includes/header.php");
    require("./assets/includes/navbar.php");
?>
<body>
    <div class="header">
        <a href="/">
            <img src="./assets/imgs/ChristmasCountdown.png" alt="Logo">
            <h1>Xmas Countdown</h1>
        </a>
    </div>
    <div class="xmas-card countdown container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2" id="days">
                <span class="number">344</span><br>
                <span class="text">Days</span>
            </div>
            <div class="col col-lg-2" id="hours">
                <span class="number">12</span><br>
                <span class="text">Hours</span>
            </div>
            <div class="col col-lg-2" id="minutes">
                <span class="number">24</span><br>
                <span class="text">Minutes</span>
            </div>
            <div class="col col-lg-2" id="seconds">
                <span class="number">0</span><br>
                <span class="text">Seconds</span>
            </div>
        </div>
    </div>
    <script>
    function christmasCountdown() {
        const now = new Date();
        const currentYear = now.getFullYear();
        let christmasDate = new Date(`December 25, ${currentYear} 00:00:00 GMT`);

        // Check if Christmas has already passed this year
        if (now > christmasDate) {
            christmasDate = new Date(`December 25, ${currentYear + 1} 00:00:00 GMT`);
        }

        const timeDifference = christmasDate - now;

        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        document.getElementById('days').querySelector('.number').innerText = days;
        document.getElementById('hours').querySelector('.number').innerText = hours;
        document.getElementById('minutes').querySelector('.number').innerText = minutes;
        document.getElementById('seconds').querySelector('.number').innerText = seconds;
    }

    // Call the function to start the countdown
    christmasCountdown();

    // Update the countdown every second
    setInterval(christmasCountdown, 1000);
    </script>
    <?php require("./assets/includes/footer.php"); ?>
</body>
</html>