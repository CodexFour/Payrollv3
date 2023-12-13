<link rel="stylesheet" href="src/modal/login/login.css">
<link rel="shortcut icon" href="src/assets/icons/logo.png" type="image/png">
<title>Login</title>
<section class="container login_container modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-login')">
    </button>
<!--    <div class="">-->
        <div class="login_content">
            <div class="login_header">
                <img
                        src="src/assets/icons/logo.png"
                        alt=""
                        class="icon-xxxl"
                >
                <div class="card-heading">
                    <strong class="text-bold txt-s">LOGIN</strong>
                    <span class="text-subtitle txt-xs login-description">Secure Access to Your Pay Stub</span>
                </div>
            </div>
            <div>
                <!--TODO: Validate the input.
                        WARNING: if there is an error occur. Set this class:
                           .warning{
                               display: flex; to enable
                           }
                           -->
            <div class="toast_notification" id="login-err-msg">
                <!--TODO: change the icon. It may vary on the type of message
                        • warning.svg
                        • error.svg
                    -->
                <img
                        src="src/assets/icons/svg/warning.svg"
                        alt=""
                        class="icon-xs">
                <span class="text-regular txt-teen"> <!--TODO: change this message. -->this is error</span>
            </div>
            <form id="login-form">
                <label for="login_user_email" class="fields-group email-input">
                    <span class="text-title txt-xs">EMAIL</span>
                    <input class="fields text-regular txt-xs"
                           id="login_user_email"
                           name="login_user_email"
                           placeholder="example@email.com"
                           type="text"/>

                </label>
                <label for="login_user_password" class="fields-group password-input">
                    <span class="text-title txt-xs text">PASSWORD</span>
                    <input class="fields text-regular txt-xs"
                           id="login_user_password"
                           name="login_user_password"
                           placeholder="********"
                           type="password"/>
                </label>
                <!-- TEMPORARY DISPLAY -->
                <div style="opacity: 1;" class="checkbox-advance">
                    <label for="remember_me" class="text-regular txt-xxs checkbox-input">
                        <input type="checkbox" name="" id="remember_me" class="fields">
                        Remember Me
                    </label>
                    <!-- TEMPORARY HIDE -->
                    <button class="btn btn-transparent login-forgot" type="button" onclick="switchModal('.modal-forgot')"><span class="text-regular txt-xxs highlight">Forgot Password?</span></button>
<!--                    <a href="#" class="text-regular txt-xxs highlight">Forgot Password?</a>-->
                </div>
                <button class="btn login_btn text-title txt-xs" type="submit" id="submit"
                style="display: inline-block; overflow: hidden">
                   <span id="login-text">LOGIN</span>
                    <img
                            src="src/assets/loading/loading.svg"
                            alt=""
                            width="50px"
                            height="10px"
                            style="transform: scale(5); display: none;"
                            id="login-load"
                    >
                </button>
            </form>
            </div>
        </div>
<!--    </div>-->
</section>
<script>
    <?php //include 'src/modal/login/login.js' ?>
</script>
<script src="src/modal/login/login.js"></script>
<!--</body>-->
<!--</html>-->