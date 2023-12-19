let form = {
  ueInput: document.getElementById("login_user_email"),
  pwInput: document.getElementById("login_user_password"),
  submit: document.getElementById("submit"),
  loader: document.getElementById("login-load"),
  loginText: document.getElementById("login-text"),
  chkbox: document.getElementById("remember_me"),
};
form.submit.addEventListener("click", (e) => {
  e.preventDefault();
  loginError(false);
  loginWait(true);
  const request = new XMLHttpRequest();
  request.onload = () => {
    console.log(request.responseText);
    let responseObject = null;
    try {
      responseObject = JSON.parse(request.responseText);
    } catch (err) {
      console.error("Parse failed");
    }

    if (responseObject) {
      handleResponse(responseObject);
    }
    loginWait(false);
  };

  const requestData = `username=${form.ueInput.value}&password=${form.pwInput.value}&remember=${form.chkbox.checked}`;
  request.open("post", "src/modal/login/check-login.php");
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestData);
});

function loginWait(wait) {
  if (wait) {
    form.loginText.style.display = "none";
    form.loader.style.display = "inline-block";
  } else {
    form.loginText.style.display = "inline-block";
    form.loader.style.display = "none";
  }
}
function loginError(active, msg, icon) {
  if (active) {
    let toast = document.querySelector("#login-err-msg");
    document.querySelector("#login-err-msg span").innerHTML = msg;
    document.querySelector("#login-err-msg img").src =
      "src/assets/icons/svg/" + icon + ".svg";
    toast.style.display = "flex";
    if (icon === "error") {
      toast.classList.remove("warning-message");
      toast.classList.add("error-message");
    } else {
      toast.classList.remove("error-message");
      toast.classList.add("warning-message");
    }
    // document.getElementsByClassName(".toast_notification").classList.toggle('.toast-red',icon === 'error');
  } else {
    document.querySelector("#login-err-msg").style.display = "none";
  }
}

function handleResponse(responseObject) {
  console.log(responseObject);
  let valPassInput = false;
  // Validate password input
  if (responseObject.passwordWarning) {
    loginError(true, "Not a valid password input", "warning");
  } else {
    loginError(false, "", "");
    valPassInput = true;
  }

  // Validate user/email input
  if (responseObject.usernameWarning) {
    if (!valPassInput) {
      loginError(true, "Not a valid email and password input", "warning");
    } else {
      loginError(true, "Not a valid email input", "warning");
    }
  } else {
    // Validate User's username or email
    if (!responseObject.userExist) {
      loginError(true, "User does not exist", "error");
    } else {
      if (valPassInput) {
        // Validate User's password
        if (!responseObject.passExist) {
          loginError(true, "Password incorrect", "error");
        } else {
          loginError(false);

          // user and password is confirmed...
          // move on to next page
          // location.href = "admin/admin.php";
          if(responseObject.isAdmin){
            if(window.innerWidth < 762){
              location.href = "employeeUi/dashboard.php";
            } else {
              location.href = "admin/admin.php";
            }
          } else {
            location.href = "employeeUi/dashboard.php";
          }
          // location.href = "validateLogin.php";
        }
      }
    }
  }
}
