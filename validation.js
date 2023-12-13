// let element = document.querySelector("#submit");
// console.log(element);
// element
//     .addEventListener("click", function(){
//         let btn = document.querySelector(".btn");
//         alert('you click: ' + btn.value);
//     });

function submitForm(btnID) {
    let btn = document.getElementById(btnID);
   btn.addEventListener("click", () => {
       alert('you click: ' + btn.innerText);
   })
}
