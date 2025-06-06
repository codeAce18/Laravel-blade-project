function toggleMenu() {
  const menu = document.getElementById("ham_menu");
  menu.classList.toggle("show");
}
// ----------- sectionG_sp (dropdown) ------------
document.querySelectorAll(".menu-header").forEach((header) => {
  header.addEventListener("click", () => {
    const item = header.parentElement;
    const arrow = header.querySelector(".f_arrow");

    item.classList.toggle("open");
    arrow.classList.toggle("rotate");
  });
});

// === NEW PAGE JS ==========
document
  .getElementById("reservationForm")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    alert("送信されました！");
  });
//------- dropdown select date&time ---------
const customSelect = document.getElementById("customSelect");
const customOptions = document.getElementById("customOptions");
const options = customOptions.querySelectorAll(".custom-option");

customSelect.addEventListener("click", () => {
  customOptions.classList.toggle("active");
});

options.forEach((option) => {
  option.addEventListener("click", () => {
    customSelect.textContent = option.textContent;
    customOptions.classList.remove("active");
  });
});

// Close dropdown if clicked outside
document.addEventListener("click", (e) => {
  if (!e.target.closest(".custom-select-wrapper")) {
    customOptions.classList.remove("active");
  }
});

// Privacy More
function toggleAccordion() {
  const content = document.getElementById("accordionContent");
  const chevron = document.getElementById("chevron");

  if (content.style.maxHeight) {
    // Closing
    content.style.maxHeight = null;
    chevron.classList.remove("rotate");
  } else {
    // Opening
    content.style.maxHeight = content.scrollHeight + "px";
    chevron.classList.add("rotate");
  }
}

// Optional: reset max-height on window resize
window.addEventListener("resize", () => {
  const content = document.getElementById("accordionContent");
  if (content.style.maxHeight) {
    content.style.maxHeight = content.scrollHeight + "px";
  }
});


