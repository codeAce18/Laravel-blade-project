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

// ----------- sectionG_sp (dropdown) ------------
document.querySelectorAll(".menu-header").forEach((header) => {
  header.addEventListener("click", () => {
    const item = header.parentElement;
    const arrow = header.querySelector(".f_arrow");

    item.classList.toggle("open");
    arrow.classList.toggle("rotate");
  });
});

//------------- Feature of House (toggle) ----------
document.querySelectorAll(".toggle-wrapper").forEach((wrapper) => {
  const wrapperDiv = wrapper.querySelector(".toggle-content-wrapper");
  const content = wrapper.querySelector(".toggle-content");
  const button = wrapper.querySelector(".toggle-button");
  const openLabel = wrapper.dataset.openLabel || "閉じる";
  const closeLabel = wrapper.dataset.closeLabel || "もっと見る";
  let isOpen = false;

  const setHeight = () => {
    if (isOpen) {
      wrapperDiv.style.height = content.scrollHeight + "px";
    }
  };

  const openToggle = () => {
    content.classList.add("visible");
    wrapperDiv.style.height = content.scrollHeight + "px";
    button.textContent = openLabel;
    isOpen = true;
  };

  const closeToggle = () => {
    wrapperDiv.style.height = content.scrollHeight + "px";
    requestAnimationFrame(() => {
      wrapperDiv.style.height = "0";
      content.classList.remove("visible");
    });
    button.textContent = closeLabel;
    isOpen = false;
  };

  // Initialize
  if (wrapper.dataset.defaultOpen === "true") {
    openToggle();
  } else {
    button.textContent = closeLabel;
  }

  // Toggle click
  button.addEventListener("click", () => {
    if (isOpen) {
      closeToggle();
    } else {
      openToggle();
    }
  });

  // Reset height after animation
  wrapperDiv.addEventListener("transitionend", () => {
    if (isOpen) {
      wrapperDiv.style.height = "auto";
    }
  });

  // Responsive adjustment
  window.addEventListener("resize", () => {
    if (isOpen) {
      wrapperDiv.style.height = content.scrollHeight + "px";
    }
  });
});

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
