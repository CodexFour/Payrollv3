<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/attendance.css">
</head>

<body id="attendance">
    <?php include_once 'components/navbar.php' ?>
    <?php include_once 'components/sidebar.php' ?>
    <section id="hero">
        <h2>ATTENDANCE</h2>
        <p class="font-b txt-lite">Track your time</p>
        <?php include_once 'components/calendar.php' ?>
    </section>
    <section id="records">
        <div class="uni-card">
            <p class="font-b font-s">PRESENTS</p>
            <p class="font-s txt-lite">Days in</p>
            <h1 class="font-b">8</h1>
            <p class="font-b font-s txt-lite">DAYS</p>
        </div>
        <div class="uni-card">
            <p class="font-b font-s">ABSENCES</p>
            <p class="font-s txt-lite">Days off</p>
            <h1 class="font-b">5</h1>
            <p class="font-b font-s txt-lite">DAYS</p>
        </div>
        <div class="uni-card">
            <p class="font-b font-s">LATE</p>
            <p class="font-s txt-lite">Tardiness</p>
            <h1 class="font-b">50</h1>
            <p class="font-b font-s txt-lite">MINUTES</p>
        </div>
    </section>
    <section id="timeline">
        <div class="uni-card">
            <p class="font-b">ACTIVITY</p>
            <p class="font-b font-s txt-lite">Task logs and records</p>
            <div class="tl-graph">
                <div class="tl-row">
                    <p class="font-b">12:00</p>
                    <div class="tl-track">
                        <div class="tl-vl"></div>
                        <div class="tl-dot"></div>
                        <div class="tl-vl"></div>
                    </div>
                    <div class="uni-card-lite custom-card">
                        <p class="font-b font-s">Time out</p>
                        <p class="font-b font-s txt-lite">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt minima atg!
                        </p>
                    </div>
                </div>
                <div class="tl-row">
                    <p class="font-b">12:00</p>
                    <div class="tl-track">
                        <div class="tl-vl"></div>
                        <div class="tl-dot"></div>
                        <div class="tl-vl"></div>
                    </div>
                    <div class="uni-card-lite custom-card">
                        <p class="font-b font-s">Time out</p>
                        <p class="font-b font-s txt-lite">
                            Lorem ipsum dolor sit amet consectetur!
                        </p>
                    </div>
                </div>
                <div class="tl-row">
                    <p class="font-b">12:00</p>
                    <div class="tl-track">
                        <div class="tl-vl"></div>
                        <div class="tl-dot"></div>
                        <div class="tl-vl"></div>
                    </div>
                    <div class="uni-card-lite custom-card">
                        <p class="font-b font-s">Time out</p>
                        <p class="font-b font-s txt-lite">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>