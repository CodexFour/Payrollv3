function requestAllData(){
    const request = new XMLHttpRequest();
    request.onreadystatechange = () => {
        if (this.readyState == 4 && this.status == 200){
            console.log(request.responseText)
            let responseObject = null;
            try {
                responseObject = JSON.parse(request.responseText)
            } catch (err) {
                console.error("Parse failed");
            }

            if (responseObject) {
                handleData(responseObject);
            }
        }
    };
    xhr.open("GET", "data.php", true);
    xhr.send();
}
function handleData(responseObject){
    console.log(responseObject);
    document.querySelector('#total_employee .card-content strong').innerHTML = responseObject.empCount;
}