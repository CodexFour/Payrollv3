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


async function myTemplate() {
  let empForm = document.querySelector("#form");
  var formData = new FormData(empForm);
  try {
    const result = await ajaxRequest("upload.php", formData);
    if (result.response) {
      const responseObject = result.responseObject;
      if (responseObject.status > 0) {
        // if (responseObject.status === 1) {
        //   // TODO 
        // } else if (responseObject.status === 2) {
        //   // TODO
        // }
      }
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}

function ajaxRequest(phpLink, data) {
  const request = new XMLHttpRequest();
  request.open("POST", phpLink);
  if (typeof data === "string") {request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")}
  request.send(data);
  return new Promise((resolve, reject) => {
    request.onreadystatechange = () => {
      if (request.status == 200 && request.readyState == 4) {
        try {
          console.log(request.responseText);
          let jsonObj = JSON.parse(request.responseText);
          resolve({
            response: true,
            responseObject: jsonObj,
          });
        } catch (err) {
          console.error("Parse failed");
          reject({
            response: false,
            error: "Parse failed",
          });
        }
      }
    };
  });
}

async function empFormSubmit() {
  let empForm = document.querySelector("#add-employee-form");
  var formData = new FormData(empForm);

  try {
    const result = await ajaxRequest("upload.php", formData);
    if (result.response) {
      const responseObject = result.responseObject;
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
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}

async function deleteEmp(empId) {
  try {
    const result = await ajaxRequest(
      "upload.php",
      `request=emp-delete&emp-id=${empId}`
    );
    if (result.response) {
      const responseObject = result.responseObject;
      if (responseObject.status > 0) {
        if (responseObject.status === 0) {
          alert("An error has occurred\n\n" + responseObject.error);
        }
        if (responseObject.status === 1) {
          alert("Employee has been deleted");
          closeModal(".modal-employee");
          closeModal(".modal-view-employee");
          closeModal(".modal-pop-up");
          clearEmployeeField();
          clearEmployeeView();
        }
        requestData("employee");
      }
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}

async function leaveTypeFormSubmit() {
  let leaveTypeForm = document.querySelector("#add-leave-type-form");
  var formData = new FormData(leaveTypeForm);
  formData.append("request", "leave-type");
  try {
    const result = await ajaxRequest("upload.php", formData);
    if (result.response) {
      const responseObject = result.responseObject;
      if (responseObject.status > 0) {
        if (responseObject.status === 1) {
          alert("Leave type successfully added");
          closeModal(".modal-add-leave-type");
          clearLeaveTypeField();
          fetchLeaveType();
        } else if (responseObject.status === 2) {
          alert("Leave type successfully edited");
          closeModal(".modal-add-leave-type");
          clearLeaveTypeField();
          fetchLeaveType();
        }
      }
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}

async function delLeaveType(id) {
  try {
    const result = await ajaxRequest("upload.php", `request=leave-type-delete&leave-type-id=${id}`);
    if (result.response) {
      const responseObject = result.responseObject;
      if (responseObject.status > 0) {
        if (responseObject.status === 0) {
          alert("An error has occured\n\n" + responseObject.error);
        }
        if (responseObject.status === 1) {
          alert("Leave type has been deleted");
          closeModal(".modal-add-leave-type");
        }
        fetchLeaveType();
      }
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}

async function leaveFormSubmit() {
  let leaveForm = document.querySelector("#add-leave-form");
  var formData = new FormData(leaveForm);
  formData.append("request", "add-leave");

  try {
    const result = await ajaxRequest("upload.php", formData);
    if (result.response) {
      const responseObject = result.responseObject;
      if (responseObject.status > 0) {
        if (responseObject.status === 0) {
          //
        }
        if (responseObject.status === 1) {
          //
        }
      }
    }
  } catch (err) {
    console.error("Request failed:", err);
  }
}
