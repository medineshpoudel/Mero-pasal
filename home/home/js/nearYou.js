// CONTENTS FROM DATABASE
const nearYouContents = [
  {
    id: 1,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 2,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 3,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 4,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 5,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 6,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 7,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 8,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 9,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  },
  {
    id: 10,
    img: "../img/products/product.png",
    productName: "Product Name",
    price: 2323,
    seeMore: ""
  }
];

var container = document.getElementById("nearYou");
var content = "";

nearYouContents.forEach(result => {
  // Construct card content
  if (result.id == 1) {
    //start row
    content += ' <div class="row justify-content-center">';
  }
  // add content
  content += ` <div class="col-md-2">
  <img class="img-fluid" src="${result.img}" alt="${result.productName}">
  <h4>${result.productName}</h4>
  <p>NRs. ${result.price}</p>
  <a href="${
    result.seeMore
  }">SEE MORE <i class="fa fa-long-arrow-right"></i></a>
</div>
    `;
  if (result.id % 5 == 0) {
    // add end of row ,and start new row on every 5 elements
    content += '</div><div class="row justify-content-center">';
  }
});
// Append newyly created card element to the container
// close the last row
content += "</div>";
container.innerHTML += content;
