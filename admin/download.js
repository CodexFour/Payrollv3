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
        changeToEditTitle(true);
        document.querySelector("#employee-edit-btn").onclick = () => {
          openModal(".modal-employee");
          applyEmployeeModal(responseObject);
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
function applyEmployeeModal(responseObject) {
  console.log(responseObject);
  let empForm = document.querySelector("#add-employee-form");
  let id = empForm.querySelector("#employee-id");
  id.onkeydown = (e) => {return false};
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
}
