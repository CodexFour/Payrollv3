function requestData(currentPage) {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
      if(request.status == 200 && request.readyState == 4){
        let responseObject = null;
        try {
          responseObject = JSON.parse(request.responseText);
          if(currentPage === 'dashboard'){
            handleDashboard(responseObject);
          
          }
        } catch (err) {
          console.error("Parse failed");
        }
      }
  };
  const requestPage = `page=${currentPage}`;
  request.open("POST", "data.php", true);
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
  responseObject.leaveRows.forEach(function(employee) {
      rows += '<tr>';
      rows += '<td class="table-content-default">'+
              '<img src="../../../src/assets/img/img.png" '+
              'alt="image" class="icon-m icon-soft-edge"/></td>';
      rows += '<td class="text-regular txt-xxs">Nizam</td>';
      rows += '<td class="text-regular txt-xxs">11-12-2023</td>';
      rows += '<td class="text-regular txt-xxs">12-13-2023</td>';
      rows += '<td class="text-regular txt-xxs">05</td>';
      rows += '<td class="text-regular txt-xxs">-</td>';
      rows += '<td><span class="text-regular txt-xxs status inactive"></span></td>';
      rows += '</tr>'
  });
  document.getElementById("db_leave_tbl").innerHTML = rows;
}
