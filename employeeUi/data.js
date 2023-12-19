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