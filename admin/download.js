function requestData(currentPage) {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      let responseObject = null;
      try {
        responseObject = JSON.parse(request.responseText);
        if (currentPage === "dashboard") {
          handleDashboard(responseObject);
        } else if (currentPage === "employee") {
          handleEmployee(responseObject);
        }
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  const requestPage = `request=${currentPage}`;
  request.open("POST", "download.php", true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestPage);
}

// APPLY DASHBOARD DATAS
function handleDashboard(responseObject) {
  console.log(responseObject);
  document.querySelector("#db_total_emp").innerHTML = responseObject.empCount;
  document.querySelector("#db_total_salary").innerHTML =
    responseObject.totalSalary;
  document.querySelector("#db_total_leave").innerHTML =
    responseObject.leaveCount;
  document.querySelector("#db_total_abs").innerHTML =
    responseObject.absentCount;
  document.querySelector("#db_curr_pr_date").innerHTML =
    responseObject.currPayDate;
  let prDate = document.querySelectorAll(".db_next_pr_date");
  prDate.forEach((e) => (e.innerHTML = responseObject.nextPayDate));

  let rows = "";
  for (const key in responseObject.leaves) {
    const leave = responseObject.leaves[key];
    let rem = leave.rem - 1;
    rows += "<tr onclick=\"openModal('.modal-view-leave')\">";
    rows +=
      '<td class="table-content-default">' +
      '<img src="../src/assets/img/img.png" ' +
      'alt="image" class="icon-m icon-soft-edge"/></td>';
    rows += `<td class="text-regular txt-xxs">${leave.fn} ${leave.ln}</td>`;
    rows += `<td class="text-regular txt-xxs">${leave.sd}</td>`;
    rows += `<td class="text-regular txt-xxs">${leave.ed}</td>`;
    rows += `<td class="text-regular txt-xxs">${
      rem >= 0 ? rem : 0
    } day(s)</td>`;
    rows += `<td class="text-regular txt-xxs">${
      rem <= 0 ? Math.abs(rem) : 0
    } day(s)</td>`;
    rows += `<td><span class="text-regular txt-xxs status leave-type">${leave.st}</span></td>`;
    rows += "</tr>";
  }
  document.getElementById("db_leave_tbl").innerHTML = rows;
}

// APPLY EMPLOYEE DATAS
function handleEmployee(responseObject) {
  console.log(responseObject);
  document.querySelector("#emp_total_emp").innerHTML = responseObject.empCount;
  let rows = "";
  for (const key in responseObject.employees) {
    const employee = responseObject.employees[key];
    rows += `<tr onclick="openModal('.modal-view-employee'); fetchEmployeeData(${employee.employee_id})">`;
    rows +=
      '<td class="table-content-default">' +
      '<img src="../src/assets/img/img.png" alt="image" ' +
      'class="icon-m icon-soft-edge"/></td>';
    rows += `<td class="text-regular txt-xxs">${employee.first_name} ${employee.middle_name} ${employee.last_name}</td>`;
    rows += `<td class="text-regular txt-xxs">${
      responseObject.departments[employee.department_id][0]
    }</td>`;
    rows += '<td class="text-regular txt-xxs">15</td>';
    rows +=
      '<td><span  class="text-regular txt-xxs status regular"></span></td>';
    rows += "</tr>";
  }
  document.getElementById("emp_emp_tbl").innerHTML = rows;
}

function fetchEmployeeData(empid) {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      try {
        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);
        applyEmployeeView(responseObject);
        document.querySelector("#employee-edit-btn").onclick = () => {
          changeToEditTitle(true);
          openModal(".modal-employee");
          applyEmployeeModal(responseObject);
        };
        document.querySelector("#employee-delete-btn").onclick = () => {
          deleteEmp(empid);
        };
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  const requestPage = `request=emp_info&emp_id=${empid}`;
  request.open("POST", "download.php");
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestPage);
}
function applyEmployeeView(responseObject) {
  let empView = document.querySelector("#view-employee-modal");
  let id = empView.querySelector("#view-employee_id");
  let pfp = empView.querySelector("#view-employee-pfp");
  let rfid = empView.querySelector("#view-employee-rfid");
  let name = empView.querySelector("#view-employee-name");
  // let ln = empView.querySelector("#view-employee-lastname");
  // let mn = empView.querySelector("#view-employee-middlename");
  // let sf = empView.querySelector("#view-employee-suffix");
  let bd = empView.querySelector("#view-employee-birthdate");
  let age = empView.querySelector("#view-employee-age");
  let sex = empView.querySelector("#view-employee-gender");
  // let em = empView.querySelector("#view-employee-email");
  // let phone = empView.querySelector("#view-employee-phone");
  let strt = empView.querySelector("#view-employee-street");
  let brgy = empView.querySelector("#view-employee-barangay");
  let ct = empView.querySelector("#view-employee-city");
  let pv = empView.querySelector("#view-employee-province");
  let dpm = empView.querySelector("#view-employee-department");
  let jtt = empView.querySelector("#view-employee-job-title");
  let wkt = empView.querySelector("#view-employee-working-type");
  let hd = empView.querySelector("#view-employee-hired-date");

  id.innerHTML = responseObject["employee_id"];
  rfid.innerHTML = responseObject["rfid"];
  name.innerHTML = `${responseObject["first_name"]} ${responseObject["middle_name"]} ${responseObject["last_name"]} ${responseObject["suffix"]}`;
  sex.innerHTML = responseObject["gender"];
  age.innerHTML = responseObject["age"];
  // phone.innerHTML = responseObject["phone_no"];
  // em.innerHTML = responseObject["email"];

  if(responseObject["address"] != null){
    strt.innerHTML = responseObject["address"]["street"];
    brgy.innerHTML = responseObject["address"]["barangay"];
    ct.innerHTML = responseObject["address"]["city"];
    pv.innerHTML = responseObject["address"]["province"];
  }

  dpm.innerHTML = responseObject["department_name"];
  jtt.innerHTML = responseObject["job_title"];
  wkt.innerHTML = responseObject["working_type"];
  bd.innerHTML = formatTextDate(responseObject["birthdate"]);
  hd.innerHTML = formatTextDate(responseObject["hired_date"]);


  if (rfid.innerHTML == "") rfid.innerHTML = "-No RFID-"
  if (name.innerHTML == "") name.innerHTML = "---- ---- ----"
  if (bd.innerHTML == "") bd.innerHTML = "--- -- ----"
  if (age.innerHTML == "") age.innerHTML = "--"
  if (sex.innerHTML == "") sex.innerHTML = "-"
  if (strt.innerHTML == "") strt.innerHTML = "----"
  if (brgy.innerHTML == "") brgy.innerHTML = "----"
  if (ct.innerHTML == "") ct.innerHTML = "----"
  if (pv.innerHTML == "") pv.innerHTML = "----"
  if (dpm.innerHTML == "") dpm.innerHTML = "----"
  if (wkt.innerHTML == "") wkt.innerHTML = "----"
  if (jtt.innerHTML == "") jtt.innerHTML = "----"
  if (hd.innerHTML == "") hd.innerHTML = "--- -- ----"
}
function applyEmployeeModal(responseObject) {
  console.log(responseObject);
  let empForm = document.querySelector("#add-employee-form");
  let id = empForm.querySelector("#employee_id");
  id.onkeydown = (e) => {
    return false;
  };
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

  id.value = responseObject["employee_id"];
  rfid.value = responseObject["rfid"];
  fn.value = responseObject["first_name"];
  ln.value = responseObject["last_name"];
  mn.value = responseObject["middle_name"];
  sf.value = responseObject["suffix"];
  sex.value = responseObject["gender"];
  age.value = responseObject["age"];
  em.value = responseObject["email"];
  phone.value = parseInt(responseObject["phone_no"]);
  bd.value = responseObject["birthdate"];
  jtt.value = responseObject["job_id"];
  wkt.value = responseObject["working_type"];
  hd.value = responseObject["hired_date"];
  dpm.value = responseObject["department_id"];

  if(responseObject["address"] != null){
    strt.value = responseObject["address"]["street"];
    brgy.value = responseObject["address"]["barangay"];
    ct.value = responseObject["address"]["city"];
    pv.value = responseObject["address"]["province"];
  }
}
