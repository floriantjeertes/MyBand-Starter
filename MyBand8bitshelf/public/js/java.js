var dropOn = 0;
dropdown.style.visibility = "hidden";
hamburger.addEventListener("click", test);
function test() {
  if (dropOn == 0){

  hamburger.style.color = "#D80000 ";
  dropdown.style.visibility = "visible";

dropOn = +1;
console.log(dropOn);
}
else {
  console.log("anders");
  hamburger.style.color = "red";
  dropdown.style.visibility = "hidden";
dropOn = 0;
console.log(dropOn);
}
};
