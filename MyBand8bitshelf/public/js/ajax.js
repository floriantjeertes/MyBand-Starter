submitButton.addEventListener('click', ajax);
//ajax functio
function ajax(){
  let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
  if (this.readyState ==4 && this.status ==200){
    responseHere.innerHTML = xmlhttp.responseText;
  }
};
let httpString = "form_2.php?firstName="+firstName.value+"&age=" + age.value+"&lastName="+lastName.value+"&email="+email.value;
//debuggen laat http string zien
console.log(httpString);
//bereid de ajax actie voor
xmlhttp.open("GET", httpString, true);
xmlhttp.send();//doehet
}
