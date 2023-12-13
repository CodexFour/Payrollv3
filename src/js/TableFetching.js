function tableFetching(dblink, classes, filePath, employeeId) {
    fetch(dblink)
        .then(json => json.json()
            .then(jsonData => {
                    jsonData.forEach(employeeData => {
                        let isPresent = parseInt(employeeData['employee_id']) === parseInt(employeeId);
                        if (isPresent) {
                            let httpRequest1 = new HTTPRequest(classes, filePath);
                            httpRequest1.then(e => {
                                let id = document.getElementById('leave_employee_id');
                                let name = document.getElementById('leave_employee_name');
                                let status = document.getElementById('leave_employee_leave_status');
                                let startDate = document.getElementById('leave_employee_leave_date_started');
                                let endDate = document.getElementById('leave_employee_leave_date_ended');
                                let comment = document.getElementById('employee_leave_comment');
                                let remaining = document.getElementById('leave_employee_leave_remaining');
                                let s = employeeData['end_date'].replaceAll('-', '');
                                let s1 = employeeData['start_date'].replaceAll('-', '');

                                id.innerHTML = employeeData['employee_id'];
                                name.innerHTML = employeeData['employee_name'];
                                status.innerHTML = employeeData['status'];
                                startDate.innerHTML = employeeData['start_date'];
                                endDate.innerHTML = employeeData['end_date'];
                                comment.innerHTML = employeeData['comment'];
                                remaining.innerHTML = (s - s1) + " Days";
                            })
                        }
                    })
                }
            ))
}