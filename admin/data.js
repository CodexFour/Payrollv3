function requestDashboardData() {
  const request = new XMLHttpRequest();
  request.onreadystatechange = () => {
      if(request.status == 200){
        let responseObject = null;
      try {
        responseObject = JSON.parse(request.responseText);
        handleData(responseObject);
      } catch (err) {
        console.error("Parse failed");
      }
      }
  };
  request.open("GET", "data.php", true);
  request.send();
}
function handleData(responseObject) {
  console.log(responseObject);
  document.querySelector("#db_total_emp").innerHTML = responseObject.empCount;
  document.querySelector("#db_total_salary").innerHTML = responseObject.totalSalary;
  document.querySelector("#db_total_leave").innerHTML = responseObject.leaveCount;
  document.querySelector("#db_total_abs").innerHTML = responseObject.absentCount;
}
