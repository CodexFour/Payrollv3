function calendar() {
    const dateHeader = document.getElementById("date-header");
    const days = document.querySelector(".days");
    let PrevNextBTN = document.querySelectorAll(".btn-cal");
// getting new date, current year and month
    let date = new Date();
    currYear = date.getFullYear();
    currMonth = date.getMonth();

    const monthName = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];

    const renderCalendar = () => {
        let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(); // Getting first day of current month
        let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(); // Getting last date of current month
        let lastDayofMonth = new Date(
            currYear,
            currMonth,
            lastDateofMonth
        ).getDay(); // Getting last date of last month
        let lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // Getting last date of last month
        let liTags = "";

        for (let i = firstDayofMonth; i > 0; i--) {
            liTags += `<li class="inactive-day txt-teen text-regular">${lastDateofLastMonth - i + 1}</li>`;
        }

        for (let i = 1; i <= lastDateofMonth; i++) {
            let isToday =
                i === date.getDate() &&
                currMonth === new Date().getMonth() &&
                currYear === new Date().getFullYear()
                    ? "today"
                    : "";
            liTags += `<li class="txt-lite txt-teen text-regular ${isToday}">${i}<span class="holiday"></span></li>`;
        }

        for (let i = lastDayofMonth; i < 6; i++) {
            liTags += `<li class="inactive-day txt-teen text-regular">${i - lastDayofMonth + 1}</li>`;
        }

        dateHeader.innerHTML = `${monthName[currMonth]} ${currYear}`;
        days.innerHTML = liTags;
    };
    renderCalendar();

    PrevNextBTN.forEach((btn) => {
        btn.addEventListener("click", () => {
            currMonth += btn.id === "btn-left" ? -1 : 1;

            if (currMonth < 0 || currMonth > 11) {
                date = new Date(currYear, currMonth);
                currYear = date.getFullYear();
                currMonth = date.getMonth();
            } else {
                date = new Date();
            }

            renderCalendar();
        });
    });
}