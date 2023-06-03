<!DOCTYPE html>
<html>
<head>
    <title>Countdown Timer</title>
    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var inputTime = "<?php echo $_POST['time']; ?>";
            var fiveMinutes = inputTime * 60,
                display = document.querySelector('#timer');
            startTimer(fiveMinutes, display);
        };
    </script>
</head>
<body>
    <h1>Countdown Timer</h1>

    <form method="POST" action="">
        <label for="time">Enter time in minutes:</label>
        <input type="number" id="time" name="time" required>
        <button type="submit">Start Timer</button>
    </form>

    <div id="timer"></div>
</body>
</html>
