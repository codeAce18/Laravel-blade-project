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
