function toggleMenu() {
  const menu = document.getElementById("ham_menu");
  menu.classList.toggle("show");
}
// =======New Page (search) =============
function setupSlider(minId, maxId, minLabelId, maxLabelId, trackId, labels) {
  const minSlider = document.getElementById(minId);
  const maxSlider = document.getElementById(maxId);
  const minLabel = document.getElementById(minLabelId);
  const maxLabel = document.getElementById(maxLabelId);
  const track = document.getElementById(trackId);

  function update() {
    const minVal = parseInt(minSlider.value);
    const maxVal = parseInt(maxSlider.value);
    const range = minSlider.max - minSlider.min;

    if (minVal > maxVal) minSlider.value = maxVal;

    const minPercent = ((minVal - minSlider.min) / range) * 100;
    const maxPercent = ((maxVal - maxSlider.min) / range) * 100;

    track.style.left = minPercent + "%";
    track.style.width = maxPercent - minPercent + "%";

    minLabel.innerText = labels[minVal];
    maxLabel.innerText =
      maxVal === parseInt(maxSlider.max) ? "上限なし" : labels[maxVal];

    minLabel.style.left = `calc(${minPercent}% - 20px)`;
    maxLabel.style.left = `calc(${maxPercent}% - 20px)`;
  }

  minSlider.addEventListener("input", update);
  maxSlider.addEventListener("input", update);
  update();
}

const budgetLabels = [
  "▼ 下限なし",
  "1000万円",
  "1500万円",
  "2000万円",
  "2500万円",
  "3000万円",
  "4000万円",
  "5000万円",
  "6000万円",
  "7000万円",
  "8000万円",
  "9000万円",
  "1億円未満",
  "1億円"
];

const unitLabels = [
  "▼ 下限なし",
  "30万円",
  "40万円",
  "50万円",
  "60万円",
  "70万円",
  "80万円",
  "90万円",
  "100万円未満"
];

setupSlider(
  "budgetMin",
  "budgetMax",
  "budgetMinLabel",
  "budgetMaxLabel",
  "budgetTrack",
  budgetLabels
);
setupSlider(
  "unitMin",
  "unitMax",
  "unitMinLabel",
  "unitMaxLabel",
  "unitTrack",
  unitLabels
);
