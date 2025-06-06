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



document.addEventListener('DOMContentLoaded', function() {
  const tabs = document.querySelectorAll('.sort-options span');
  
  tabs.forEach(tab => {
      tab.addEventListener('click', function() {
          
          tabs.forEach(t => t.classList.remove('active'));
          
          
          this.classList.add('active');
      });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const checkboxes = document.querySelectorAll('input[name="card"]');
  const countSpan = document.querySelector('.btnG span');
  

  function updateCount() {
    const selectedCount = document.querySelectorAll('input[name="card"]:checked').length;
    countSpan.textContent = selectedCount;
      
  }
  

  checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', updateCount);
  });
  

  updateCount();
});

// ============== New Page ==========
document.querySelectorAll("[data-slider]").forEach((slider) => {
  const imageWrapper = slider.querySelector(".image-wrapper");
  const dotsContainer = slider.querySelector(".dots");
  const imagePaths = JSON.parse(slider.getAttribute("data-images"));
  let currentIndex = 0;

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
      currentIndex = index;
    });
  });


  imageWrapper.addEventListener("click", () => {
    const allImages = imageWrapper.querySelectorAll("img");
    const allDots = dotsContainer.querySelectorAll(".dot");
    

    allImages[currentIndex].classList.remove("active");
    allDots[currentIndex].classList.remove("active");
    
  
    currentIndex = (currentIndex + 1) % imagePaths.length;
    

    allImages[currentIndex].classList.add("active");
    allDots[currentIndex].classList.add("active");
  });
});


document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('confirmModal');
  const confirmYes = document.getElementById('confirmYes');
  const confirmNo = document.getElementById('confirmNo');
  let currentBookmarkBtn = null;


  document.querySelectorAll('.topR_sp').forEach(bookmarkBtn => {
      let isBookmarked = false;
      
      bookmarkBtn.addEventListener('click', function(e) {
          e.preventDefault();
          
          if (isBookmarked) {
              // Show custom confirmation dialog
              currentBookmarkBtn = this;
              modal.style.display = 'flex';
          } else {
              // Add to bookmark without confirmation
              isBookmarked = true;
              this.classList.add('bookmarked');
              this.style.opacity = '1';
          }
      });
      
      // Store bookmark state on the element
      bookmarkBtn.isBookmarked = isBookmarked;
  });

  // Modal button handlers
  confirmYes.addEventListener('click', function() {
      if (currentBookmarkBtn) {
          // Remove bookmark
          currentBookmarkBtn.isBookmarked = false;
          currentBookmarkBtn.classList.remove('bookmarked');
          currentBookmarkBtn.style.opacity = '0.6';
      }
      modal.style.display = 'none';
      currentBookmarkBtn = null;
  });

  confirmNo.addEventListener('click', function() {
      modal.style.display = 'none';
      currentBookmarkBtn = null;
  });

  // Close modal when clicking outside
  modal.addEventListener('click', function(e) {
      if (e.target === modal) {
          modal.style.display = 'none';
          currentBookmarkBtn = null;
      }
  });
});