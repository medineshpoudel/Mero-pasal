// CONTENTS FROM DATABASE

const categoryList = [
  "Select Category...",
  "Mobiles",
  "Computers",
  "Cameras",
  "T-Shirts"
];

var container = document.getElementById("category");
var content = "";

for (i = 0; i < categoryList.length; i++) {
  if (i == 0) {
    content += `<option selectes>${categoryList[i]}</option>`;
  } else {
    content += `
      <option>${categoryList[i]}</option>`;
  }
}
container.innerHTML += content;
