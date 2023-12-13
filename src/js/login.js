    let form = {
        ueInput: document.getElementById('user_email'),
        pwInput: document.getElementById('user_password'),
        submit: document.getElementById('submit')
    };
    form.submit.addEventListener('click', (e) => {
        e.preventDefault();
        const request = new XMLHttpRequest();
        request.onload = () => {
            console.log(request.responseText)
            let responseObject = null;
            try {
                responseObject = JSON.parse(request.responseText)
            } catch (err) {
                console.error("Parse failed");
            }

            if (responseObject) {
                handleResponse(responseObject);
            }
        };

        const requestData = `username=${form.ueInput.value}&password=${form.pwInput.value}`;
        request.open('post', 'check-login.php');
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        request.send(requestData);
    });

    function loginError(active,msg,icon, errorType) {
        document.querySelector(".toast_notification").style.display = active=true? 'flex':'none';
        if (active){
            document.getElementById("login-err-msg").innerHTML = msg;
            document.getElementById("err-icon").src = 'src/assets/icons/svg/' + icon + '.svg';
        if(errorType === 'error'){
            document.getElementsByClassName("error-message").style.color = 'red';
        }
        }
    }

    function handleResponse(responseObject) {
        console.log(responseObject);
        let valPassInput = false;
        // Validate password input
        if (responseObject.passwordWarning) {
            loginError(true,'Not a valid password input','warning');
        } else {
            loginError(false,'','');
            valPassInput = true;
        }

        // Validate user/email input
        if (responseObject.usernameWarning) {
            if(!valPassInput){
                loginError(true,'Not a valid email and password input','warning');
            } else {
                loginError(true,'Not a valid email input','warning');
            }
        } else {

            // Validate User's username or email
            if (!responseObject.userExist) {
                loginError(true,'User does not exist','error');
            } else {
                if (valPassInput) {
                    // Validate User's password
                    if (!responseObject.passExist) {
                        loginError(true,'Password incorrect','error');

                    } else {
                        loginError(false,'','');

                        // user and password is confirmed...
                        // move on to next page
                        location.href = 'main.php'
                    }
                }
            }
        }
    }