const today = moment().format("YYYY-MM-DD");
document.getElementById("DateBox").value = today;

function incQuantity(clickID, merchType) {
  const priceInput = document.getElementById(clickID + "-earn");
  const price = parseInt(priceInput.value, 10);
  const numInput = document.getElementById(clickID + "-quantity");
  const num = parseInt(numInput.value, 10);

  //Check variables arent blank
  price = isNaN(price) ? 0 : price;
  num = isNaN(num) ? 0 : num;
  let priceInc;

  if (merchType === "Poster") {
    priceInc = 3;
  } else if (merchType === "CD") {
    priceInc = 5;
  } else if (merchType === "Shirt") {
    priceInc = 10;
  } else if (merchType === "DyedShirt") {
    priceInc = 15;
  } else if (merchType === "Hat") {
    priceInc = 15;
  } else if (merchType === "Beanie") {
    priceInc = 15;
  } else {
    return;
  }
  //Increment
  num += 1;
  price += priceInc;
  //Set parent values
  priceInput.value = price;
  numInput.value = num;
}

function decQuantity(clickID, merchType) {
  const priceInput = document.getElementById(clickID + "-earn");
  const price = parseInt(priceInput.value, 10);
  const numInput = document.getElementById(clickID + "-quantity");
  const num = parseInt(numInput.value, 10);

  //Check variables arent blank
  price = isNaN(price) ? 0 : price;
  num = isNaN(num) ? 0 : num;
  let priceInc;

  if (merchType === "Poster") {
    priceInc = 3;
  } else if (merchType === "CD") {
    priceInc = 5;
  } else if (merchType === "Shirt") {
    priceInc = 10;
  } else if (merchType === "DyedShirt") {
    priceInc = 15;
  } else if (merchType === "Hat") {
    priceInc = 15;
  } else if (merchType === "Beanie") {
    priceInc = 15;
  } else {
    return;
  }
  //Decrement
  num -= 1;
  price -= priceInc;
  //Set parent values
  priceInput.value = price;
  numInput.value = num;
}

function clearValue(clickID) {
  priceInput.value = "";
  numInput.value = "";
}
