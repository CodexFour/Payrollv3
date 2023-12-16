function empFormSubmit() {
  let empForm = document.querySelector("#add-employee-form");
  let id = empForm.querySelector("#employee-id");
  let pfp = empForm.querySelector("#employee-pfp");
  let rfid = empForm.querySelector("#employee-rfid");
  let fn = empForm.querySelector("#employee-firstname");
  let ln = empForm.querySelector("#employee-lastname");
  let mn = empForm.querySelector("#employee-middlename");
  let sf = empForm.querySelector("#employee-suffix");
  let bd = empForm.querySelector("#employee-birthdate");
  let age = empForm.querySelector("#employee-age");
  let sex = empForm.querySelector("#employee-gender");
  let em = empForm.querySelector("#employee-email");
  let phone = empForm.querySelector("#employee-phone");
  let strt = empForm.querySelector("#employee-street");
  let brgy = empForm.querySelector("#employee-barangay");
  let ct = empForm.querySelector("#employee-city");
  let pv = empForm.querySelector("#employee-province");
  let dpm = empForm.querySelector("#employee-department");
  let jtt = empForm.querySelector("#employee-job-title");
  let wkt = empForm.querySelector("#employee-working-type");
  let hd = empForm.querySelector("#employee-hired-date");
  let submit = empForm.querySelector("#add-employee");

  // const validateForm = ()=> {
  //     var fileSize = empForm.pfp.files[0].size; // in bytes
  //     var fileType = empForm.pfp.files[0].type;

  //     if (fileSize > 5000000) {
  //         alert("Sorry, your file is too large. Maximum allowed size is 5MB.");
  //         return false;
  //     }
  //     var allowedFormats = ["image/jpeg", "image/jpg", "image/png", "image/webp"];
  //     if (!allowedFormats.includes(fileType)) {
  //         alert("Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
  //         return false;
  //     }
  //     return true;
  // }

  var formData = new FormData(empForm);
  var fileBlob = pfp.files[0];
  formData.append("fileBlob", fileBlob);

  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      let responseObject = null;
      try {
        console.log(request.responseText);
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status > 0) {
          if (responseObject.status === 1) {
            alert("Employee successfully added!");
            closeModal(".modal-employee");
          } else if (responseObject.status === 2) {
            alert("Employee successfully edited!");
            closeModal(".modal-employee");
          }
          requestData("employee");
        }
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  request.open("POST", "upload.php", true);
  request.send(formData);
}

function leaveFormSubmit() {
  let leaveForm = document.querySelector("#add-employee-form");
}