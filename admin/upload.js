function empFormSubmit(){
    let empForm = document.querySelector("#add-employee-form");
    let pfp = document.querySelector("#employee-pfp");
    let rfid = document.querySelector("#employee-rfid");
    let fn = document.querySelector("#employee-firstname");
    let ln = document.querySelector("#employee-lastname");
    let mn = document.querySelector("#employee-middlename");
    let sf = document.querySelector("#employee-suffix");
    let bd = document.querySelector("#employee-birthdate");
    let age = document.querySelector("#employee-age");
    let sex = document.querySelector("#employee-gender");
    let em = document.querySelector("#employee-email");
    let phone = document.querySelector("#employee-phone");
    let strt = document.querySelector("#employee-street");
    let brgy = document.querySelector("#employee-barangay");
    let ct = document.querySelector("#employee-city");
    let pv = document.querySelector("#employee-province");
    let dpm = document.querySelector("#employee-department");
    let jtt = document.querySelector("#employee-job-title");
    let wkt = document.querySelector("#employee-working-type");
    let hd = document.querySelector("#employee-hired-date");
    let submit = document.querySelector("#add-employee");
    
    var formData = new FormData(empForm);
    var fileBlob = pfp.files[0];
    formData.append("fileBlob", fileBlob);

    const request = new XMLHttpRequest();
    request.onreadystatechange = () => {
        if(request.status == 200 && request.readyState == 4){
            let responseObject = null;
            alert(request.responseText);
            try {
                responseObject = JSON.parse(request.responseText);
                alert(responseObject);
                if(responseObject.status){
                    closeModal('.modal-employee');
                    requestData('employee')
                }
            } catch (err) {
                console.error("Parse failed");
            }
        }
    };
    request.open("POST", "upload.php", true);
    request.send(formData);

}

function validateForm() {
    var fileSize = empForm.pfp.files[0].size; // in bytes
    var fileType = empForm.pfp.files[0].type;

    if (fileSize > 5000000) {
        alert("Sorry, your file is too large. Maximum allowed size is 5MB.");
        return false;
    }
    var allowedFormats = ["image/jpeg", "image/jpg", "image/png", "image/webp"];
    if (!allowedFormats.includes(fileType)) {
        alert("Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
        return false;
    }

    return true;
}