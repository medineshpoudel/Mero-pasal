// CONTENTS FROM DATABASE

const featuredContents = [
  {
    id: 1,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 2,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 3,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 4,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 5,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 6,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 7,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 8,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 9,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 10,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 11,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  },
  {
    id: 12,
    img: "../img/products/product.png",
    productName: "Product Name",
    oldPrice: 2323,
    newPrice: 3333,
    seeMore: ""
  }
];

var container = document.getElementById("featuredContents");
var content = "";

featuredContents.forEach(result => {
  // Construct card content
  if (result.id == 1) {
    //start row
    content += '<div class="item carousel-item active"><div class="row">';
  }
  // add content
  content += ` <div class="col-sm-3">
  <div class="thumb-wrapper">
      <div class="img-box">
          <img src="${result.img}" class="img-responsive img-fluid" alt="${
    result.productName
  }">
      </div>
      <div class="thumb-content">
          <h4>${result.productName}</h4>

          <p class="item-price"><strike>Nrs.${
            result.oldPrice
          }</strike> <b>NRs.${result.newPrice}</b>
          </p>
          <a href="${result.seeMore}" class="btn btn-primary">See More</a>
      </div>
  </div>
</div>
  `;
  if (result.id % 4 == 0) {
    // add end of row ,and start new row on every 5 elements
    content += ' </div></div><div class="item carousel-item"><div class="row">';
  }
});
// Append newyly created card element to the container
// close the last row
content += "</div></div>";
container.innerHTML += content;
