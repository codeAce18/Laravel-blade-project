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

// ----- Blog silder -----------------------------
if (window.innerWidth > 768) {
  document.querySelectorAll(".blog").forEach((card) => {
    const images = card.querySelectorAll(".slider img");
    const dots = card.querySelectorAll(".dots span");

    dots.forEach((dot) => {
      dot.addEventListener("click", () => {
        const index = dot.dataset.index;
        images.forEach((img, i) => {
          img.classList.toggle("active", i == index);
          dots[i].classList.toggle("active", i == index);
        });
      });
    });
  });
}
