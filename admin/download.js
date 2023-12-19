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
  document.getElementsByClassName("tabs")[0].click();
  let empView = document.querySelector("#view-employee-modal");
  let pfp = empView.querySelector("#view-employee-pfp");
  // let em = empView.querySelector("#view-employee-email");
  // let phone = empView.querySelector("#view-employee-phone");

  empView.querySelector("#view-employee_id").innerHTML = responseObject["employee_id"];
  empView.querySelector("#view-employee-name").innerHTML = `${responseObject["first_name"]} ${responseObject["middle_name"]} ${responseObject["last_name"]} ${responseObject["suffix"]}`;
  empView.querySelector("#view-employee-department").innerHTML = responseObject["department_name"];
  empView.querySelector("#view-employee-job-title").innerHTML = responseObject["job_title"];

  if(responseObject["rfid"]!=null && responseObject["rfid"] !="")
    empView.querySelector("#view-employee-rfid").innerHTML = responseObject["rfid"];
  
  if(responseObject["gender"]!=null && responseObject["gender"] !="")
    empView.querySelector("#view-employee-gender").innerHTML = responseObject["gender"];
  
  if(responseObject["age"]!=null && responseObject["age"] !="")
    empView.querySelector("#view-employee-age").innerHTML = responseObject["age"];
  
  // phone.innerHTML = responseObject["phone_no"];
  // em.innerHTML = responseObject["email"];

  if(responseObject["address"]!=null){
    if(responseObject["address"]["street"]!=null && responseObject["address"]["street"] !="")
    empView.querySelector("#view-employee-street").innerHTML = responseObject["address"]["street"];

    if(responseObject["address"]["barangay"]!=null && responseObject["address"]["barangay"]!="")
      empView.querySelector("#view-employee-barangay").innerHTML = responseObject["address"]["barangay"];

    if(responseObject["address"]["city"]!=null && responseObject["address"]["city"] !="")
      empView.querySelector("#view-employee-city").innerHTML = responseObject["address"]["city"];

    if(responseObject["address"]["province"]!=null && responseObject["address"]["province"] !="")
      empView.querySelector("#view-employee-province").innerHTML = responseObject["address"]["province"];
  }
  
  if(responseObject["working_type"]!=null && responseObject["working_type"] !="")
    empView.querySelector("#view-employee-working-type").innerHTML = responseObject["working_type"];
  
  if(responseObject["birthdate"]!=null && responseObject["birthdate"] !="")
    empView.querySelector("#view-employee-birthdate").innerHTML = formatTextDate(responseObject["birthdate"]);
  
  if(responseObject["hired_date"]!=null && responseObject["hired_date"] !="")
     empView.querySelector("#view-employee-hired-date").innerHTML = formatTextDate(responseObject["hired_date"]);
}

function applyEmployeeModal(responseObject) {
  console.log(responseObject);
  let empForm = document.querySelector("#add-employee-form");
  let id = empForm.querySelector("#employee_id");
  id.onkeydown = (e) => {
    return false;
  };
  // let pfp = empForm.querySelector("#employee-pfp");

  id.value = responseObject["employee_id"];
  empForm.querySelector("#employee-rfid").value = responseObject["rfid"];
  empForm.querySelector("#employee-firstname").value = responseObject["first_name"];
  empForm.querySelector("#employee-lastname").value = responseObject["last_name"];
  empForm.querySelector("#employee-middlename").value = responseObject["middle_name"];
  empForm.querySelector("#employee-suffix").value = responseObject["suffix"];
  empForm.querySelector("#employee-gender").value = responseObject["gender"];
  empForm.querySelector("#employee-age").value = responseObject["age"];
  empForm.querySelector("#employee-email").value = responseObject["email"];
  empForm.querySelector("#employee-phone").value = parseInt(responseObject["phone_no"]);
  empForm.querySelector("#employee-birthdate").value = responseObject["birthdate"];
  empForm.querySelector("#employee-job-title").value = responseObject["job_id"];
  empForm.querySelector("#employee-working-type").value = responseObject["working_type"];
  empForm.querySelector("#employee-hired-date").value = responseObject["hired_date"];
  empForm.querySelector("#employee-department").value = responseObject["department_id"];

  if(responseObject["address"] != null){
    empForm.querySelector("#employee-street").value = responseObject["address"]["street"];
    empForm.querySelector("#employee-barangay").value = responseObject["address"]["barangay"];
    empForm.querySelector("#employee-city").value = responseObject["address"]["city"];
    empForm.querySelector("#employee-province").value = responseObject["address"]["province"];
  }
}
function fetchLeaveType(){
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status == 200 && request.readyState == 4) {
      try {
        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);
        let row = ""
        for (const key in responseObject) {
          const leaveType = responseObject[key];
          row += `<tr> <td class="text-regular txt-xxs">${leaveType['leave_name']}</td> `;
          row += `<td class="text-regular txt-xxs">${leaveType['duration']==null? "":(leaveType['duration']>0?leaveType['duration']:"")}</td>`;
          row += `<td><span class="text-regular txt-xxs status ${leaveType['isActive']==='1'? 'active':'inactive'}"></span></td>`;
          row += `<td><div class="action-container"><div class="action">`;
          row += `    <div class="action-icon edit-icon" onclick="fetchLeaveTypeData(${leaveType['leave_type_id']})">`
          row += `      <img src="../src/assets/icons/svg/edit.svg" alt="" class="icon-xxs"> </div>`;
          row += `    <div class="action-icon delete-icon" onclick="delLeaveType(${leaveType['leave_type_id']})">`;
          row += `      <img src="../src/assets/icons/svg/deleterow.svg" alt="" class="icon-xxs"> </div>`;
          row += `</div> </div> </td> </tr>`;
        }
        document.querySelector('#leave-type-table').innerHTML = row;
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  const requestPage = `request=leave_types`;
  request.open("POST", "download.php");
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestPage);
}
function fetchLeaveTypeData(id){
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
    if (request.status === 200 && request.readyState === 4) {
      try {
        console.log(request.responseText);
        responseObject = JSON.parse(request.responseText);
        console.log(responseObject);
        applyLeaveTypeData(responseObject);
      } catch (err) {
        console.error("Parse failed");
      }
    }
  };
  const requestPage = `request=leave_type_info&leave_type_id=${id}`;
  request.open("POST", "download.php");
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestPage);
}
function applyLeaveTypeData(responseObject){
  let leaveTypeForm = document.querySelector("#add-leave-type-form");
  leaveTypeForm.querySelector('#leave-type-id').value = responseObject['leave_type_id'];
  leaveTypeForm.querySelector('#leave-type-active').checked = responseObject['isActive'] === "1"? true: false;
  leaveTypeForm.querySelector('#leave-type-name').value = responseObject['leave_name'];
  leaveTypeForm.querySelector('#leave-type-duration').value = responseObject['duration'];
  openModal('.modal-add-leave-type');
}