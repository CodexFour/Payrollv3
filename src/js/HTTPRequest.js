let response;

async function HTTPRequest(classes, file) {

    if (file) {
        let xhttp = new XMLHttpRequest();
        return new Promise((resolve, reject) => {
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.querySelector(classes).innerHTML = this.responseText;
                    resolve(this.responseText);
                    return this.responseText;
                } else if (this.readyState === 4) {
                    reject(new Error("Failed to fetch"));
                }
            };
            xhttp.open("GET", file, true);
            xhttp.send();
        });
    }
}

function Table(classes, file) {
    setInterval(() => {
        HTTPRequest(classes, file).then()
    }, 1000);
}

// Object.defineProperty(HTTPRequest, 'responseText', {
//     get: function () {
//         return response;
//     }
// });