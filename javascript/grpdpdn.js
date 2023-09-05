const groupDropdown = document.getElementById("group-dropdown");
const yearDropdown = document.getElementById("year-dropdown");
const yearDropdownLabel = document.getElementById("year-dropdown-label");

document.getElementById("problem-category-dropdown").addEventListener("change", function() {
  let problemCategory = this.value;
  if (problemCategory) {
    document.getElementById("problem-description-label").style.display = "block";
    document.getElementById("problem-description").style.display = "block";
  } else {
    document.getElementById("problem-description-label").style.display = "none";
    document.getElementById("problem-description").style.display = "none";
  }
});

groupDropdown.addEventListener("change", function() {
  yearDropdown.innerHTML = "";

  if (this.value === "") {
    yearDropdownLabel.style.display = "none";
    yearDropdown.style.display = "none";
  } else {
    yearDropdownLabel.style.display = "block";
    yearDropdown.style.display = "block";

    if (this.value === "MPC" || this.value === "MSCS" || this.value === "MPCS") {
      yearDropdown.innerHTML = `
        <option value="">--Select--</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
      `;
    } else if (this.value === "BZC" || this.value === "BCCS" || this.value === "BA" || this.value === "B.com" || this.value === "B.com Gen") {
      yearDropdown.innerHTML = `
        <option value="">--Select--</option>
        <option value="1st Year">1st Year</option>
        <option value="2nd Year">2nd Year</option>
        <option value="3rd Year">3rd Year</option>
      `;
    }
  }
});
