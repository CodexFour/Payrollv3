<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/setting.css">
</head>

<body id="setting">
    <?php include_once 'components/navbar.php' ?>
    <?php include_once 'components/sidebar.php' ?>
    <section class="flex center p1 gap1" id="pfp">
        <img src="assets/attendance.svg" alt="profile" id="setting-pfp">

        <!-- this is my changes start -->
        <?php
        include_once('../src/phpFunctions/connection.php');
       
        $con = connect('..src/crt/curl-ca-bundle.crt');
        $user = $_SESSION['username'];
        $query = "SELECT employees.first_name, employees.last_name FROM employees JOIN accounts ON employees.employee_id = accounts.employee_id WHERE accounts.username='$user'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        echo "<h1>" . $row['first_name'] ." ". $row['last_name'] . "</h1>";
        ?>
         <!-- this is my changes end -->

    </section>
    <section id="hero">
        <h3 class="txt-lite">SETTING</h3>
    </section>
    <section id="options">
        <div class="uni-card" onclick="showPassForm(true,'#change-pass-modal')">
            <p class="font-b">Change Password</p>
            <p class="font-b font-s txt-lite">Update your security</p>
        </div>
        <div class="uni-card flex center flex-row space-b">
            <div>
                <p class="font-b">Push Notification</p>
                <p class="font-b font-s txt-lite">Stay alert</p>
            </div>
            <input type="checkbox">
        </div>
        <div class="uni-card" onclick="showPassForm(true,'#privacy-policy')">
            <p class="font-b">Privacy Policiy</p>
            <p class="font-b font-s txt-lite">Instantly alert</p>
        </div>
        <div class="uni-card" onclick="showPassForm(true,'#terms-of-services')">
            <p class="font-b">Terms of Servicces</p>
            <p class="font-b font-s txt-lite">Instantly alert</p>
        </div>
        <div class="uni-card">
            <p class="font-b">Login History</p>
            <div class="login-list">
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key"
                        style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;">
                    </div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key"
                        style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;">
                    </div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key"
                        style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;">
                    </div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key"
                        style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;">
                    </div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
            </div>
        </div>
    </section>
    <dialog id="change-pass-modal" class="uni-card modal">
        <form onsubmit="return false" id="change-pass-form">
            <h3> CHANGE PASSWORD</h3>
            <div class="setting-inputs f-height flex space-e">
                <label for="chp-old-pass" class="font-s">CURRENT PASSWORD</label>
                <input type="text" id="chp-old-pass" style="margin-bottom: 20px;">
                <label for="chp-new-pass" class="font-s">NEW PASSWORD</label>
                <input type="text" id="chp-new-pass">
                <label for="chp-re-pass" class="font-s">RE-ENTER PASSWORD</label>
                <input type="text" id="chp-re-pass">
            </div>
            <div class="action-button flex flex-row gap1 right" style="align-items:end;">
                <button>SAVE</button>
                <button class="button-gray" onclick="showPassForm(false,'#change-pass-modal')">CANCEL</button>
            </div>
        </form>
    </dialog>
    <dialog id="privacy-policy" class="uni-card modal">
        <div class="flex center flex-row space-b">
            <h2>Privacy Policy</h2>
            <button class="button-gray" onclick="showPassForm(false,'#privacy-policy')">
                <img src="assets/close.svg" style="margin-top: -10px; margin-right: -10px;">
            </button>
        </div>
        <br>
        <p style="height: 500px; overflow:scroll;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti id,
            numquam quae voluptate, sed et totam quidem aliquam ipsum nesciunt minus adipisci explicabo eveniet harum,
            in dignissimos rem itaque a.
            Dicta quas eligendi rem. Molestias obcaecati laudantium facilis reiciendis praesentium quae quis
            necessitatibus optio aperiam asperiores. Id dicta enim quis consequuntur perspiciatis iusto ullam odio
            repellat nobis veniam, quod fugiat?
            Vel deleniti adipisci officia possimus quos provident, itaque iusto reprehenderit, doloremque, omnis fugit
            veniam sunt eveniet. Natus voluptatem tempora amet consectetur inventore perspiciatis, a doloremque
            dignissimos, magni tempore aliquid aspernatur.
            Fugiat deserunt perspiciatis ratione provident molestiae deleniti, veniam aliquam. Ratione iusto rem
            reiciendis doloremque mollitia neque pariatur officiis! Qui repudiandae velit dolore quaerat, consequuntur
            corrupti tempore deleniti rerum quisquam similique.
            Quo, iusto et est, commodi autem molestiae modi dolorum ratione nesciunt sequi aliquam officiis! Eligendi
            illum harum et, quod repellendus cum. Ipsum distinctio eligendi, repudiandae rerum atque facilis quasi
            praesentium!</p>
    </dialog>
    <dialog id="terms-of-services" class="uni-card modal">
        <div class="flex center flex-row space-b">
            <h2>Terms of Services</h2>
            <button class="button-gray" onclick="showPassForm(false,'#terms-of-services')">
                <img src="assets/close.svg" style="margin-top: -10px; margin-right: -10px;">
            </button>
        </div>
        <br>
        <p style="height: 500px; overflow:scroll;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
            assumenda consectetur voluptates ipsum, facilis qui ab iusto vitae saepe distinctio, voluptas incidunt quo
            sequi nostrum sed iure est alias dolore!
            Nostrum odio reiciendis magni tenetur quaerat magnam doloremque sit voluptas! Nostrum maiores ut consequatur
            nobis ipsam repellat placeat, ipsum at! Incidunt ipsum officia ex quas delectus ab deserunt, eum eaque.
            Officiis a iste pariatur deleniti magnam enim molestiae perspiciatis accusamus nesciunt? Ullam, eaque
            impedit in maiores, accusantium laudantium atque repellat iusto temporibus ea nobis reprehenderit debitis
            libero fugiat beatae ipsum!
            Neque, provident at? Blanditiis nulla reiciendis fugit autem consequatur mollitia sunt iusto eaque dolore
            cum qui dolores in dignissimos, est quaerat asperiores temporibus ea animi, pariatur aliquam ab optio?
            Saepe?
            Dolorum similique rem obcaecati ad. Dignissimos quo laudantium quis. Delectus mollitia possimus, commodi
            voluptates sint asperiores a repellendus, optio, sed cumque aut? Dolor in cum, aliquam provident dolore
            perferendis rerum.</p>
    </dialog>
    <script>
        function showPassForm(bol, query) {
            if (bol) {
                document.querySelector(query).showModal();
            } else {
                document.querySelector(query).close();
            }
        }
    </script>
</body>

</html>