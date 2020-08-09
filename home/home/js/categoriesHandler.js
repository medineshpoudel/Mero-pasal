// CONTENTS FROM DATABASE

const categories = [
  {
    id: 1,
    img: "../img/products/product.png",
    categoryName: "Category 1",
    detailLink: ""
  },
  {
    id: 2,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 3,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 4,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 5,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 6,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 7,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 8,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 9,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  },
  {
    id: 10,
    img: "../img/products/product.png",
    categoryName: "Category",
    detailLink: ""
  }
];

var container = document.getElementById("categoriesHandler");
var content = "";

categories.forEach(result => {
  // Construct card content
  if (result.id == 1) {
    //start row
    content += '<div class="row justify-content-center">';
  }
  // add content
  content += `<div class="col-md-2 columnItems">
  <a href="${result.detailLink}">
      <img src="${result.img}" alt="${result.categoryName}" class="img-fluid">
      <h4 class="text-center">${result.categoryName}</h4>
  </a>
</div>`;
  if (result.id % 5 == 0) {
    // add end of row ,and start new row on every 5 elements
    content += '</div><div class="row justify-content-center">';
  }
});
// Append newyly created card element to the container
// close the last row
content += "</div>";
container.innerHTML += content;
