<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="src/assets/icons/logo.png" type="image/png">
<title>Reset Password</title>
<section class="container login_container modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeAllModal()">
    </button>
        <div class="login_content">
            <div class="login_header">
                <img
                    src="src/assets/icons/logo.png"
                    alt=""
                    class="icon-xxxl"
                >
                <div class="card-heading">
                    <strong class="text-bold txt-s">RESET PASSWORD</strong>
                    <span class="text-subtitle txt-xs login-description">A Guide to Resetting Your Password</span>
                </div>
            </div>
            <form action="#" method="post" onsubmit="return false">
                <label for="reset_password" class="fields-group">
                    <span class="text-title txt-xs">PASSWORD</span>
                    <input class="fields text-regular txt-xs"
                           id="reset_password"
                           name="reset_password"
                           placeholder="********"
                           type="password"/>

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
                <label for="confirm_reset_password" class="fields-group">
                    <span class="text-title txt-xs text">RE-TYPE PASSWORD</span>
                    <input class="fields text-regular txt-xs"
                           id="confirm_reset_password"
                           name="confirm_reset_password"
                           placeholder="********"
                           type="password"/>

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
                <button class="btn forgot_btn text-title txt-xs">CONFIRM</button>
            </form>
        </div>
</section>
<script src="main.js"></script>