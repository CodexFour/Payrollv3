<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Hub — Simplifying Payroll Control and Oversight</title>
    <link rel="stylesheet" href="../src/css/constants/normalize.css">
    <link rel="shortcut icon" href="../src/assets/icons/logo.png" type="image/png">
    <script src="https://code.highcharts.com/11.2.0/highcharts.js"></script>


    <style>
        @import "../src/css/constants/default.css";
        @import "../src/css/constants/font-sizes.css";
        @import "../src/css/constants/colors.css";
        @import "../src/css/constants/icon-sizes.css";
        @import "../src/css/constants/cards.css";
        @import "../src/css/constants/texts.css";
        @import "../src/css/constants/btn.css";

        /*::-webkit-scrollbar {*/
        /*    display: none;*/
        /*}*/

        body {
            overflow-y: hidden;
        }

        .nav-header {
            width: 100%;
            height: 70px;
            display: flex;
            /*max-width: 100%;*/
            padding: 16px;
            align-items: center;
            justify-content: space-between;

        }

        .nav-header-color {
            background-color: var(--navbar-color);
            box-shadow: 5px 5px 10px 0 var(--shadow);
        }

        .nav-title {
            color: var(--primary);
        }

        .nav-button {
            background: transparent;
        }


        .nav-container-left {
            gap: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-container-right {
            gap: 3rem;
            display: flex;
            align-items: center;
        }

        .nav-notification {
            width: var(--small);
            height: var(--small);
            object-fit: cover;
            cursor: pointer;
        }

        .nav-employee-info {
            gap: 15px;
            display: flex;
        }

        .nav-employee-details {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .menu-container {
            top: 70px;
            box-shadow: 5px 5px 10px 0 var(--shadow);
            width: fit-content;
            background-color: var(--secondary);
            height: calc(100vh - 7rem);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            position: sticky;
        }


        .menu-content {
            padding: 1rem;
            height: fit-content;
            width: 100%;
            display: flex;
            align-items: inherit;
            flex-direction: inherit;
            position: relative;
            cursor: pointer;
        }

        .menu-content::after {
            bottom: 0;
            content: "";
            width: 5px;
            top: 50%;
            left: 94%;
            position: absolute;
            background: var(--accent) none repeat scroll 0 0;
            border-radius: 50px;
            transition: height 0.3s ease 0s, top 0.3s ease 0s;
            height: 0;

        }

        .menu-content:hover::after {
            height: 100%;
            top: 0;
        }

        .payments {
            width: fit-content;
            text-align: center;
        }

        .main {
            display: flex;
        }

        .admin-content {
            width: 100%;
            margin: 1.5rem;
            overflow: auto;
        }

        div a.link_active:after {
            height: 100%;
            top: 0;
        }
    </style>
</head>

<body>
    <?php include_once 'components/navbar.php'?>
    <main class="main">
        <?php include_once 'components/sidebar.php' ?>
        <section class="admin-content">
            <?php include_once 'dashboard/dashB.php'?>
        </section>

    </main>
    <script src="../src/js/HTTPRequest.js"></script>
    <script src="../main.js"></script>
    <script>
        // const ctx = document.getElementById('dashboardDataChart').getContext('2d');
        const data = [29.9, 71.5, 106.4, 100, 518.8];

        Highcharts.chart('dashboardDataChart', {
            chart: {
                backgroundColor: 'transparent',
                style: {
                    fontFamily: 'Roboto Regular',
                }

            },

            title: {
                style: {
                    display: 'none'
                }
            },
            credits: {
                style: {
                    display: 'none'
                }
            },

            legend: {
                itemDistance: 50
            },

            xAxis: {
                categories: ['AUG', 'SEPT', 'OCT', 'NOV', 'DEC']
            },

            yAxis: {
                title: {
                    text: null
                },
                gridLineColor: "#707070"
            },
            series: [{
                name: 'SALARIES',
                data: data,
                color: '#80FFB6'
            }, {
                name: 'ABSENCES',
                data: [144.0, 176.0, 135.6, 148.5, 216.4],
                color: '#FF6969'
            }]
        });

        let navLinks = document.querySelectorAll('.links');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(e => {
                    e.classList.remove('link_active');
                });
                link.classList.toggle('link_active');
            });
        });

        async function fetch(classes, filepath) {
            return await HTTPRequest(classes, filepath);
        }
    </script>
</body>

</html>