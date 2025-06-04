function toggleMenu() {
  const menu = document.getElementById("ham_menu");
  menu.classList.toggle("show");
}

const images = [
  "./assets/img/slide_main.png",
  "./assets/img/slide_mainSp.png",
  "./assets/img/slide01.png",
  "./assets/img/slide02.png",
  "./assets/img/slide03.png",
  "./assets/img/slide04.png",
  "./assets/img/slide05.png",
  "./assets/img/slide06.png"
];

let currentIndex = 0;
const mainImage = document.getElementById("mainImage");
const thumbnailsContainer = document.getElementById("thumbnails");
const imageCount = document.getElementById("imageCount");

function updateMainImage(index) {
  currentIndex = index;
  mainImage.src = images[index];
  imageCount.textContent = `${index + 1}/${images.length}`;

  document.querySelectorAll(".thumbnail").forEach((thumb, i) => {
    thumb.classList.toggle("active", i === index);
  });

  scrollThumbnailToRightEdge(index);
}

function nextSlide() {
  const newIndex = (currentIndex + 1) % images.length;
  updateMainImage(newIndex);
}

function prevSlide() {
  const newIndex = (currentIndex - 1 + images.length) % images.length;
  updateMainImage(newIndex);
}

// Create thumbnails
images.forEach((src, index) => {
  const img = document.createElement("img");
  img.src = src;
  img.className = "thumbnail";
  img.onclick = () => updateMainImage(index);
  thumbnailsContainer.appendChild(img);
});

// Scroll so selected thumbnail appears at right end
function scrollThumbnailToRightEdge(index) {
  const thumbnail = thumbnailsContainer.children[index];
  const container = thumbnailsContainer;

  if (thumbnail) {
    const containerRect = container.getBoundingClientRect();
    const thumbRect = thumbnail.getBoundingClientRect();
    const scrollOffset = thumbRect.right - containerRect.right;

    // Smooth scroll adjustment
    container.scrollLeft += scrollOffset + 8; // 8px margin
  }
}

// Initialize
updateMainImage(0);
//=============== Calendar ===============
// JST 現在日時を取得
function getJapanToday() {
  const nowUTC = new Date();
  const jstOffset = 9 * 60; // minutes
  const localOffset = nowUTC.getTimezoneOffset(); // e.g., -540 for JST
  const jst = new Date(
    nowUTC.getTime() + (jstOffset + localOffset) * 60 * 1000
  );
  return new Date(jst.getFullYear(), jst.getMonth(), jst.getDate());
}

document.getElementById("todayBtn").addEventListener("click", () => {
  const jstToday = getJapanToday();
  currentYear = jstToday.getFullYear();
  currentMonth = jstToday.getMonth();
  renderCalendar(currentYear, currentMonth);

  setTimeout(() => {
    const dayCells = document.querySelectorAll(".day");
  }, 300);
});

const scheduleData = {
  "2025-08-05": { type: "text", content: "電話" },
  "2025-08-06": { type: "text", content: "◎" },
  "2025-08-07": { type: "text", content: "◎" },
  "2025-08-08": { type: "text", content: "◎" },
  "2025-08-09": { type: "text", content: "◎" }
  // 他の日付も必要に応じて追加
};

const calendarYear = document.getElementById("calendarYear");
const calendarMonth = document.getElementById("calendarMonth");
const calendarGrid = document.getElementById("calendarGrid");
const selectedDateText = document.getElementById("selectedDateText");
const selectedtimeText = document.getElementById("selectedtimeText");
const selectedNextDateText = document.getElementById("selectedNextDateText");
const selectedNexttimeText = document.getElementById("selectedNexttimeText");
const timePanel = document.getElementById("timePanel");

let currentYear = 2025;
let currentMonth = 7; // 0-indexed: August

const today = new Date();
const weekdayNames = ["日", "月", "火", "水", "木", "金", "土"];

function renderCalendar(year, month) {
  calendarYear.textContent = `${year}.`;
  calendarMonth.textContent = `${month + 1}`;

  // アニメーション：フェードアウト＆スライド
  calendarGrid.style.opacity = "0";
  calendarGrid.style.transform = "translateX(-20px)";
  setTimeout(() => {
    calendarGrid.innerHTML = "";
    // 曜日行
    weekdayNames.forEach((day, index) => {
      const dayName = document.createElement("div");
      dayName.className = "day-name";
      // Apply classes based on day
      if (index === 0) {
        dayName.classList.add("sun-block"); // Sunday
      } else if (index === 6) {
        dayName.classList.add("sat-block"); // Saturday
      } else {
        dayName.classList.add("weekday-block"); // Other days
      }
      dayName.textContent = day;
      calendarGrid.appendChild(dayName);
    });

    const firstDay = new Date(year, month, 1);
    const startWeekday = firstDay.getDay();
    const lastDate = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < startWeekday; i++) {
      const empty = document.createElement("div");
      empty.className = "day";
      calendarGrid.appendChild(empty);
    }

    for (let day = 1; day <= lastDate; day++) {
      const date = new Date(year, month, day);
      const div = document.createElement("div");
      div.className = "day";

      // 上部の日付数字を表示するエレメント
      const dayNum = document.createElement("div");
      dayNum.textContent = day;
      div.appendChild(dayNum);

      // 日付キーを生成（例：2025-08-06）
      const dateKey = `${year}-${String(month + 1).padStart(2, "0")}-${String(
        day
      ).padStart(2, "0")}`;

      // スケジュールがあれば内容を追加
      if (scheduleData[dateKey]) {
        const info = document.createElement("div");
        info.className = "sub-info";

        const entry = scheduleData[dateKey];
        if (entry.type === "icon") {
          info.innerHTML = `<i class="fas ${entry.icon}"></i>`;
        } else if (entry.type === "text") {
          info.textContent = entry.content;
        }

        div.appendChild(info);
      }

      if (date.getDay() === 0) div.classList.add("sun");
      if (date.getDay() === 6) div.classList.add("sat");

      if (
        today.getFullYear() === year &&
        today.getMonth() === month &&
        today.getDate() === day
      ) {
        div.style.border = "2px solid red";
      }

      div.addEventListener("click", () => {
        document
          .querySelectorAll(".day")
          .forEach((el) => el.classList.remove("selected"));
        div.classList.add("selected");
        selectedDateText.textContent = `${month + 1}月`;
        selectedtimeText.textContent = `${day}`;
        if (
          month == 0 ||
          month == 2 ||
          month == 4 ||
          month == 6 ||
          month == 7 ||
          month == 9 ||
          month == 11
        ) {
          if (day != 31) {
            selectedNextDateText.textContent = `${month + 1}月`;
            selectedNexttimeText.textContent = `${day + 1}`;
          } else {
            selectedNextDateText.textContent = `${month + 2}月`;
            selectedNexttimeText.textContent = `1`;
          }
        } else if (month == 1) {
          if (day != 28) {
            selectedNextDateText.textContent = `${month + 1}月`;
            selectedNexttimeText.textContent = `${day + 1}`;
          } else {
            selectedNextDateText.textContent = `${month + 2}月`;
            selectedNexttimeText.textContent = `1`;
          }
        } else {
          if (day != 30) {
            selectedNextDateText.textContent = `${month + 1}月`;
            selectedNexttimeText.textContent = `${day + 1}`;
          } else {
            selectedNextDateText.textContent = `${month + 2}月`;
            selectedNexttimeText.textContent = `1`;
          }
        }
        document.getElementById("calendarWrapper").style.display = "none";
        timePanel.style.display = "block";
        document.getElementById("calendar-container").style.padding = 0;
      });

      calendarGrid.appendChild(div);
    }

    // アニメーション戻す
    setTimeout(() => {
      calendarGrid.style.opacity = "1";
      calendarGrid.style.transform = "translateX(0)";
    }, 50);
  }, 200);
}

document.getElementById("prevMonthBtn").addEventListener("click", () => {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar(currentYear, currentMonth);
});

document.getElementById("nextMonthBtn").addEventListener("click", () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar(currentYear, currentMonth);
});

document.querySelectorAll(".time-slot").forEach((slot) => {
  slot.addEventListener("click", () => {
    document
      .querySelectorAll(".time-slot")
      .forEach((s) => s.classList.remove("selected"));
    slot.classList.add("selected");
  });
});
// document.getElementById("backToCalendarBtn").addEventListener("click", () => {
//   timePanel.style.display = "none";
//   document.getElementById("calendarWrapper").style.display = "flex";
// });

renderCalendar(currentYear, currentMonth);

// ----------- sectionG_sp (dropdown) ------------
document.querySelectorAll(".menu-header").forEach((header) => {
  header.addEventListener("click", () => {
    const item = header.parentElement;
    const arrow = header.querySelector(".f_arrow");

    item.classList.toggle("open");
    arrow.classList.toggle("rotate");
  });
});
