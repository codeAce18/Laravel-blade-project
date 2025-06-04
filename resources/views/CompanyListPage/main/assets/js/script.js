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

// ============== New Page ==========
document.querySelectorAll("[data-slider]").forEach((slider) => {
  const imageWrapper = slider.querySelector(".image-wrapper");
  const dotsContainer = slider.querySelector(".dots");
  const imagePaths = JSON.parse(slider.getAttribute("data-images"));

  imagePaths.forEach((src, index) => {
    const img = document.createElement("img");
    img.src = src;
    img.alt = `slide-${index}`;
    if (index === 0) img.classList.add("active");
    imageWrapper.appendChild(img);

    const dot = document.createElement("div");
    dot.classList.add("dot");
    dot.dataset.index = index;
    if (index === 0) dot.classList.add("active");
    dotsContainer.appendChild(dot);

    dot.addEventListener("click", () => {
      const allImages = imageWrapper.querySelectorAll("img");
      const allDots = dotsContainer.querySelectorAll(".dot");

      allImages.forEach((img) => img.classList.remove("active"));
      allDots.forEach((d) => d.classList.remove("active"));

      allImages[index].classList.add("active");
      dot.classList.add("active");
    });
  });
});
