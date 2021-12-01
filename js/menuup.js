var menu = document.getElementsByClassName("menu");
var login = document.getElementsByClassName("loginlanguage");
var img = document.getElementsByClassName("pimg1");

document.getElementsByTagName('body')[0].onload = function() {
  menu[0].style.position = "relative";
  login[0].style.position = "relative";
  menu[0].style.top = "30px";
  login[0].style.top = "4%";
  menu[0].style.position = "fixed";
  login[0].style.position = "fixed";

}

document.getElementsByTagName('body')[0].onscroll = function() {

var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
if(scrollTop>100){
    menu[0].style.position = "relative";
    login[0].style.position = "relative";
    menu[0].style.top = "0px";
    login[0].style.top = "1%";
    menu[0].style.position = "fixed";
    login[0].style.position = "fixed";
    img[0].style.top = "0%";
    document.getElementsByClassName('reservation')[0].style.top = '-40%';
    document.getElementsByClassName('reservationerrors')[0].style.top = '-37%';
}else{
  menu[0].style.position = "relative";
  login[0].style.position = "relative";
  menu[0].style.top = "30px";
  login[0].style.top = "4%";
  menu[0].style.position = "fixed";
  login[0].style.position = "fixed";
}

}



// var btns = document.getElementsByCName("list");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//
//     var element, name, arr;
//   element = document.getElementsByClassName("list")[i];
//   name = "active";
//   arr = element.className.split(" ");
//   if (arr.indexOf(name) == -1) {
//     element.className += " " + name;
//   }
//
//   });
// }
