function empFormSubmit() {
  let empForm = document.querySelector("#add-employee-form");
  let id = empForm.querySelector("#employee_id");
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
            clearEmployeeField();
          } else if (responseObject.status === 2) {
            alert("Employee successfully edited!");
            closeModal(".modal-employee");
            clearEmployeeField();
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

function deleteEmp(empId){
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      let responseObject = null;
      try {
        console.log(request.responseText);
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status > 0) {
          if (responseObject.status === 0) {
            alert("An error has occured\n\n"+responseObject.error);
          }
          if (responseObject.status === 1) {
            alert("Employee has been deleted");
            closeModal(".modal-employee");
            closeModal('.modal-view-employee');
            clearEmployeeField();
            clearEmployeeView();
          }
          requestData("employee");
        }
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  request.open("POST", "upload.php");
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  request.send(`request=emp-delete&emp-id=${empId}`);
}

function leaveTypeFormSubmit() {
  let leaveTypeForm = document.querySelector("#add-leave-type-form");
  var formData = new FormData(leaveTypeForm);
  formData.append('request','leave-type');

  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      let responseObject = null;
      try {
        console.log(request.responseText);
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status === 1){
          alert('Leave type successfully added');
          closeModal('.modal-add-leave-type');
          clearLeaveTypeField();
          fetchLeaveType();
        } else if(responseObject.status === 2){
          alert('Leave type successfully edited');
          closeModal('.modal-add-leave-type');
          clearLeaveTypeField();
          fetchLeaveType();
        }
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  request.open("POST", "upload.php", true);
  request.send(formData);
}

function delLeaveType(id){
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      let responseObject = null;
      try {
        console.log(request.responseText);
        responseObject = JSON.parse(request.responseText);
        if (responseObject.status > 0) {
          if (responseObject.status === 0) {
            alert("An error has occured\n\n"+responseObject.error);
          }
          if (responseObject.status === 1) {
            alert("Leave type has been deleted");
            closeModal(".modal-add-leave-type");
          }
          fetchLeaveType();
        }
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  request.open("POST", "upload.php");
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  request.send(`request=leave-type-delete&leave-type-id=${id}`);
}