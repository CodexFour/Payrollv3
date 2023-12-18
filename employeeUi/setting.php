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
        <h1>Nizam Datumanong</h1>
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
                    <div class="key" style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;"></div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key" style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;"></div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key" style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;"></div>
                    <p class="font-s font-b">October 20, 2023</p>
                </div>
                <div class="uni-card-lite flex center left flex-row">
                    <div class="key" style="margin:5px 5px;border-radius:50%; width: 20px; height:20px; background-color: rebeccapurple;"></div>
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
            <button class="button-gray" onclick="showPassForm(false,'#privacy-policy')"><img src="assets/close.svg" alt=""></button>
        </div>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aut minima error distinctio quod amet voluptas sit, numquam eligendi explicabo vel exercitationem necessitatibus molestiae quaerat. Aliquid veniam nemo quod quibusdam.</p>
    </dialog>
    <dialog id="terms-of-services" class="uni-card modal">
        <div class="flex center flex-row space-b">
            <h2>Terms of Services</h2>
            <button class="button-gray" onclick="showPassForm(false,'#terms-of-services')"><img src="assets/close.svg" alt=""></button>
        </div>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione aut minima error distinctio quod amet voluptas sit, numquam eligendi explicabo vel exercitationem necessitatibus molestiae quaerat. Aliquid veniam nemo quod quibusdam.</p>
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