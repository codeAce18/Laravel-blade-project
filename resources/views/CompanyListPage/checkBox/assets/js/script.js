document.querySelectorAll(".toggle-btn").forEach((btn) => {
  btn.addEventListener("click", function () {
    const targetId = btn.getAttribute("data-target");
    const areaList = document.getElementById(targetId);
    if (areaList.classList.contains("active")) {
      areaList.classList.remove("active");
      btn.textContent = "【開く＋】";
    } else {
      areaList.classList.add("active");
      btn.textContent = "【閉じる－】";
    }
  });
});

document.querySelectorAll(".sectionC").forEach((section) => {
  // Prefecture checkbox
  const prefectureCheckbox = section.querySelector(".prefecture-checkbox");
  // All group checkboxes (city/county)
  const groupCheckboxes = section.querySelectorAll(".group-checkbox");
  // All child checkboxes (wards/towns)
  const childCheckboxes = section.querySelectorAll(".child-checkbox");

  // Prefecture -> all groups and children
  if (prefectureCheckbox) {
    prefectureCheckbox.addEventListener("change", function () {
      groupCheckboxes.forEach((g) => (g.checked = this.checked));
      childCheckboxes.forEach((c) => (c.checked = this.checked));
    });
  }

  // Group -> all children in that group
  groupCheckboxes.forEach((groupCheckbox) => {
    groupCheckbox.addEventListener("change", function () {
      const group = groupCheckbox.closest(".area-group");
      const children = group.querySelectorAll(".child-checkbox");
      children.forEach((c) => (c.checked = this.checked));

      // If all groups checked, check prefecture; else uncheck
      if (Array.from(groupCheckboxes).every((g) => g.checked)) {
        if (prefectureCheckbox) prefectureCheckbox.checked = true;
      } else {
        if (prefectureCheckbox) prefectureCheckbox.checked = false;
      }
    });
  });

  // Child -> update group and prefecture
  childCheckboxes.forEach((childCheckbox) => {
    childCheckbox.addEventListener("change", function () {
      const group = childCheckbox.closest(".area-group");
      const groupCheckbox = group.querySelector(".group-checkbox");
      const children = group.querySelectorAll(".child-checkbox");
      // If all children checked, check group; else uncheck
      if (Array.from(children).every((c) => c.checked)) {
        groupCheckbox.checked = true;
      } else {
        groupCheckbox.checked = false;
      }
      // If all groups and all children checked, check prefecture; else uncheck
      if (
        Array.from(groupCheckboxes).every((g) => g.checked) &&
        Array.from(childCheckboxes).every((c) => c.checked)
      ) {
        if (prefectureCheckbox) prefectureCheckbox.checked = true;
      } else {
        if (prefectureCheckbox) prefectureCheckbox.checked = false;
      }
    });
  });
});
