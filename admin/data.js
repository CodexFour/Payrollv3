function requestData(currentPage) {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
      if(request.status == 200){
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
function handleDashboard(responseObject) {
  console.log(responseObject);
  document.querySelector("#db_total_emp").innerHTML = responseObject.empCount;
  document.querySelector("#db_total_salary").innerHTML = responseObject.totalSalary;
  document.querySelector("#db_total_leave").innerHTML = responseObject.leaveCount;
  document.querySelector("#db_total_abs").innerHTML = responseObject.absentCount;
}
