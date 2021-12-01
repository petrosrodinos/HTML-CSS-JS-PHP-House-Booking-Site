const sleep = (milliseconds) => {
  return new Promise(resolve => setTimeout(resolve, milliseconds))
}

var x=0;
document.getElementsByClassName('ptext')[0].onclick = function() {
  if(x==0){
      document.getElementsByClassName('reservation')[0].style.animationName = 'example';
  document.getElementsByClassName('reservation')[0].style.display = 'block';

  x=1;
}else{
document.getElementsByClassName('reservation')[0].style.animationName = 'example2';
  document.getElementsByClassName('reservation')[0].style.display = 'none';
  document.getElementsByClassName('reservationerrors')[0].style.display = 'none';
  x=0;
}


}


document.getElementsByTagName('body')[0].onload = function(){


document.getElementsByClassName('ioanna')[0].style.display = 'block';
    sleep(200).then(() => {
    document.getElementsByClassName('ptext')[0].style.display = 'block';
})


}

document.getElementsByClassName('exitbtn')[1].onclick = function(){
  document.getElementsByClassName('payment')[0].style.display = 'none';

}

document.getElementsByClassName('dates')[0].valueAsDate = new Date();
document.getElementsByClassName('dates')[1].valueAsDate = new Date();



// document.getElementById("adults").addEventListener("change", function() {
//   kids = document.getElementById("kids");
//   number = this.value;
//   for(var i=1;i<=8;i++){
//     kids.remove(i);
//   }
//
//   for(var i=1; i<=Math.abs(8-number);i++){
//     option = document.createElement("option");
//     option.text = i;
//     kids.add(option);
//   }
//
// });



///reservation validation
document.getElementsByClassName('book')[0].onclick = function(e){
    if (document.cookie.indexOf('wp_user_logged_in') !== -1) {
        event.preventDefault();
        var err=0;
        var err1=0;
        errors = document.getElementsByClassName('reservationerrors')[0];
        errors = errors.getElementsByTagName('label')[0];
        kids = document.getElementById("kids").value;
        adults = document.getElementById("adults").value;


          ardate = document.getElementById("arrival").value;
          depdate = document.getElementById("departure").value;


            var date = new Date(ardate);
            arday = date.getDate();
            armonth = date.getMonth() + 1;
            aryear = date.getFullYear();

            var date = new Date(depdate);
            depday = date.getDate();
            depmonth = date.getMonth() + 1;
            depyear = date.getFullYear();

              if( (arday<depday-2) ){
                err++;
              }else{
                  if( (depmonth==armonth) ){
                  errors.innerHTML = "Can't book for less than 2 days";
                }else{
                  err++;
                }
                }

              if( (parseInt(kids)+parseInt(adults)) >8 ){
                errors.innerHTML = "Maximum house capacity";
              }else{
                err++;

              }

              if( (arday>=depday) && (depmonth==armonth) ){
                  errors.innerHTML = "Select a valid date";

              }else{
                err++;
              }

              if(err>=3){
                document.getElementById('reservationform').submit();
                if (getCookie("validate") != null) {
                  alert("exist");
                  deletecookie("validate");
                }
                else {
                  err1=1;
                }
              }

              if(err>=3 && err1==1){
                event.preventDefault();
                errors.innerHTML = '';
                payment = document.getElementsByClassName('payment')[0].style.display = 'block';
                document.getElementById('arr').innerText = "ARRIVAL: " + ardate;
                document.getElementById('dep').innerText = "DEPARTURE: " + depdate;
                document.getElementById('kid').innerText = "KIDS: " + kids;
                document.getElementById('adult').innerText = "ADULTS: " + adults;
                document.getElementsByClassName('paymentbtn')[0].onclick = function(){
                //createcookie("go");
                document.getElementById('reservationform').submit();
              }
            }


} else {
    event.preventDefault();
    document.getElementsByClassName('loginout')[0].style.display = 'block';
}


}


function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function deletecookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function createcookie(cname) {
  var d = new Date();
  d.setTime(d.getTime() + (20));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + "1" + ";" + expires + ";path=/";
}
