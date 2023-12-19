<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RFID — Streamlined RFID Attendance Management</title>
    <link rel="shortcut icon" href="../src/assets/icons/logo.png" type="image/png">
    <link rel="stylesheet" href="rfid.css">
    <script src="../lib/http_code.jquery.com_jquery-3.4.1.js"></script>
</head>
<body>
<section class="modal-content card rfid">
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">TAP YOUR RFID CARD</strong>
            <span class="text-subtitle txt-xxs">Seamless Attendance Tracking with RFID Card Tap</span>
        </div>
    </header>
    <main class="modal-body">
        <div class="admin-info">
            <div class="rfid-scanner">
                <section class="clock-container">
                    <div class="clock">
                        <ul class="timer">
                            <li id="hours" class="text-title txt-s">10</li>
                            <li id="point" class="text-title txt-s">:</li>
                            <li id="min" class="text-title txt-s">13</li>
                            <li id="point" class="text-title txt-s">:</li>
                            <li id="sec" class="text-title txt-s">03</li>
                        </ul>
                        <div id="Date" class="text-subtitle txt-teen"></div>

                    </div>
                </section>
                <img src="../src/assets/icons/svg/rfid-scanner.svg" alt="" class="icon-xl">
                <span class="txt-xxs text-bold" id="employee-name">--- --- --- ---</span>
                <input type="text" autofocus id="scanning-rfid" style="opacity: 0;">
            </div>
        </div>

    </main>
</section>
<script>
    $(document).ready(function () {
        // Create two variable with the names of the months and days in an array
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        // Create a newDate() object
        let newDate = new Date();
        // Extract the current date from Date object
        newDate.setDate(newDate.getDate());
        // Output the day, date, month and year
        $('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

        setInterval(function () {
            // Create a newDate() object and extract the seconds of the current time on the visitor's
            let seconds = new Date().getSeconds();
            // Add a leading zero to seconds value
            $("#sec").html((seconds < 10 ? "0" : "") + seconds);
        }, 1000);

        setInterval(function () {
            // Create a newDate() object and extract the minutes of the current time on the visitor's
            let minutes = new Date().getMinutes();
            // Add a leading zero to the minutes value
            $("#min").html((minutes < 10 ? "0" : "") + minutes);
        }, 1000);

        setInterval(function () {
            // Create a newDate() object and extract the hours of the current time on the visitor's
            let hours = new Date().getHours();
            // Add a leading zero to the hours value
            $("#hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);

    });

    let name = document.getElementById('employee-name');
    let input = document.getElementById('scanning-rfid');
    document.addEventListener('DOMContentLoaded', () => {


        input.addEventListener('blur', e => {
            e.target.focus();
        });

        input.addEventListener("mousedown", event => {
            event.preventDefault();
            event.stopPropagation()
        });

        input.addEventListener('input', input => {
            let rfid = input.target.value;
            if (isValidRFID(rfid)) {
                fetch('php/getEmployeeName.php')
                    .then(res => {
                        if (!res.ok) {
                            throw new Error('Network response was not ok.');
                        }
                        return res.json();
                    })
                    .then(data => {
                        let matchingEmployee = data.find(e => {
                            let rfidInput = parseInt(rfid);
                            let rfidDB = parseInt(e['rfid']);
                            return rfidInput === rfidDB;
                        });
                        if (matchingEmployee) {
                            name.textContent = matchingEmployee['last_name'] + ', '
                                + matchingEmployee['first_name']+' '+
                                matchingEmployee['middle_name'] + ' ' +
                                matchingEmployee['suffix'];
                        } else {
                            name.textContent = 'Not Found';
                        }
                        setTimeout(() => {
                            input.target.value = ''; // Clear the input after 5 seconds
                            name.textContent = '--- --- --- ---';
                        }, 2000);
                    })
                    .catch(err => {
                        console.error(err);
                    });
            }
        });

        function isValidRFID(input) {
            return !isNaN(input) && input.toString().length === 10;
        }
    })

</script>

</body>
</html>
