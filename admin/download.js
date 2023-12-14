function requestData(currentPage) {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
      if(request.status == 200 && request.readyState == 4){
        let responseObject = null;
        try {
          responseObject = JSON.parse(request.responseText);
          if(currentPage === 'dashboard'){
            handleDashboard(responseObject);
          } else if(currentPage === 'employee'){
            handleEmployee(responseObject);
          }
        } catch (err) {
          console.error("Parse failed");
        }
      }
  };
  const requestPage = `page=${currentPage}`;
  request.open("POST", "download.php", true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(requestPage);
}

// APPLY DASHBOARD DATAS
function handleDashboard(responseObject) {
  console.log(responseObject);
  document.querySelector("#db_total_emp").innerHTML = responseObject.empCount;
  document.querySelector("#db_total_salary").innerHTML = responseObject.totalSalary;
  document.querySelector("#db_total_leave").innerHTML = responseObject.leaveCount;
  document.querySelector("#db_total_abs").innerHTML = responseObject.absentCount;
  document.querySelector('#db_curr_pr_date').innerHTML = responseObject.currPayDate;
  let prDate = document.querySelectorAll('.db_next_pr_date');
  prDate.forEach(e => e.innerHTML = responseObject.nextPayDate);

  let rows = "";
  for (const key in responseObject.leaves) {
    const leave = responseObject.leaves[key]
      let rem = leave.rem -1;
      rows += '<tr>';
      rows += '<td class="table-content-default">'+
              '<img src="../../../src/assets/img/img.png" '+
              'alt="image" class="icon-m icon-soft-edge"/></td>';
      rows += `<td class="text-regular txt-xxs">${leave.fn} ${leave.ln}</td>`;
      rows += `<td class="text-regular txt-xxs">${leave.sd}</td>`;
      rows += `<td class="text-regular txt-xxs">${leave.ed}</td>`;
      rows += `<td class="text-regular txt-xxs">${rem >= 0? rem:0} day(s)</td>`;
      rows += `<td class="text-regular txt-xxs">${rem <= 0? Math.abs(rem):0} day(s)</td>`;
      rows += `<td><span class="text-regular txt-xxs status inactive">${leave.st}</span></td>`;
      rows += '</tr>'
  };
  document.getElementById("db_leave_tbl").innerHTML = rows;
}

// APPLY EMPLOYEE DATAS
function handleEmployee(responseObject){
  console.log(responseObject);
  document.querySelector('#emp_total_emp').innerHTML = responseObject.empCount;
  let rows = "";
  for (const key in responseObject.employees) {
    const employee = responseObject.employees[key]
      rows += '<tr>';
      rows += '<td class="table-content-default">'+
              '<img src="../src/assets/img/img.png" alt="image" '+
              'class="icon-m icon-soft-edge"/></td>';
      rows += `<td class="text-regular txt-xxs">${employee.first_name} ${employee.middle_name} ${employee.last_name}</td>`;
      rows += `<td class="text-regular txt-xxs">${responseObject.departments[employee.department_id][0]}</td>`;
      rows += '<td class="text-regular txt-xxs">15</td>';
      rows += '<td><span  class="text-regular txt-xxs status regular"></span></td>';
      rows += '<td>'+
              '    <div class="action-container">'+
              '        <div class="action">'+
              '            <div class="action-icon edit-icon">'+
              '                <img src="../src/assets/icons/svg/edit.svg" alt="" class="icon-xxs">'+
              '            </div>'+
              '            <div class="action-icon delete-icon">'+
              '                <img src="../src/assets/icons/svg/deleterow.svg" alt="" class="icon-xxs">'+
              '            </div>'+
              '        </div>'+
              '    </div>'+
              '</td>';
      rows += '</tr>'
  };
  document.getElementById("emp_emp_tbl").innerHTML = rows;
}