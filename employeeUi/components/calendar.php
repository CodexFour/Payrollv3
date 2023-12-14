<link rel="stylesheet" href="CSS/calendar.css" />
<div class="calendar">
  <div class="header flex flex-row space-b">
    <h2 class="font-b" id="date-header"></h2>
    <div class="flex flex-row">
      <div class="btn btn-cal" id="btn-left">L</div>
      <div class="btn btn-cal" id="btn-right">R</div>
    </div>
  </div>
  <div class="weeks">
    <p class="font-b font-s">SUN</p>
    <p class="font-b font-s">MON</p>
    <p class="font-b font-s">TUE</p>
    <p class="font-b font-s">WED</p>
    <p class="font-b font-s">THU</p>
    <p class="font-b font-s">FRI</p>
    <p class="font-b font-s">SAT</p>
  </div>
  <ul class="days">
    <!-- <li>1</li> -->
  </ul>
</div>
<script>
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
      liTags += `<li class="txt-lite">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
      let isToday =
        i === date.getDate() &&
        currMonth === new Date().getMonth() &&
        currYear === new Date().getFullYear() ?
        "today" :
        "";
      liTags += `<li class="${isToday}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
      liTags += `<li class="txt-lite">${i - lastDayofMonth + 1}</li>`;
    }

    dateHeader.innerHTML = `${monthName[currMonth]} ${currYear}`;
    days.innerHTML = liTags;
  };
  renderCalendar();

  PrevNextBTN.forEach((btn) => {
    btn.addEventListener("click", () => {
      currMonth += btn.id === 'btn-left' ? -1 : 1;

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
</script>