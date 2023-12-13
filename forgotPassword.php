<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="src/assets/icons/logo.png" type="image/png">
<title>Forgot Password</title>
<section class="container login_container modal-content">
    <div class="card">
        <div class="login_content">
            <div class="login_header">
                <img
                    src="src/assets/icons/logo.png"
                    alt=""
                    class="icon-xxxl"
                >
                <div class="card-heading">
                    <strong class="text-bold txt-s">FORGOT PASSWORD</strong>
                    <span class="text-subtitle txt-xs login-description">Lost Access? Reset Your Password Here!</span>
                </div>
            </div>
            <form action="#" method="post" onsubmit="return false">
                <label for="forgot_user_email" class="fields-group">
                    <span class="text-title txt-xs">EMAIL</span>
                    <input class="fields text-regular txt-xs"
                           id="forgot_user_email"
                           name="forgot_user_email"
                           placeholder="example@email.com"
                           type="text"/>

                    <!--TODO: Validate the input.
                        WARNING: if there is an error occur. Set this class:
                           .warning{
                               display: flex; to enable
                           }
                           -->
                    <span class="toast_notification warning-message toast_notification_forgot">
                        <!--TODO: change the icon. It may vary on the type of message
                                • warning.svg
                                • error.svg
                            -->
                        <img
                            src="src/assets/icons/svg/warning.svg"
                            alt=""
                            class="icon-xxs">
                        <span class="text-regular txt-xxs "> <!--TODO: change this message. -->this is error</span>
                    </span>

                </label>
                <label for="user_otp" class="fields-group">
                    <span class="text-title txt-xs text">OTP</span>
                    <input class="fields text-regular txt-xs forgot_otp"
                           id="user_otp"
                           name="user_otp"
                           placeholder="000000"
                           type="number"/>

                    <span class="toast_notification warning-message toast_notification_forgot">
                        <!--TODO: change the icon. It may vary on the type of message
                                • warning.svg
                                • error.svg
                            -->
                        <img
                            src="src/assets/icons/svg/warning.svg"
                            alt=""
                            class="icon-xxs">
                        <span class="text-regular txt-xxs "> <!--TODO: change this message. -->this is error</span>
                    </span>
                </label>
                <button class="btn forgot_btn text-title txt-xs" onclick="switchModal('resetpassword.php')">SEND</button>
            </form>
        </div>
    </div>
</section>