//open loginform
document.getElementsByClassName("loginbtn")[0].onclick = function(){

  document.getElementsByClassName("loginout")[0].style.display="block";
}

//close login form
document.getElementsByClassName("exitbtn")[0].onclick = function(){
      document.getElementsByClassName("loginout")[0].style.display="none";
    }


//change form to create account
document.getElementsByClassName("accountbutton")[0].onclick = function(){
    document.getElementsByClassName("login")[0].style.display="none";
    document.getElementsByClassName("register")[0].style.display="block";
}

//change form to login
document.getElementsByClassName("backtologin")[0].onclick = function(){
    document.getElementsByClassName("login")[0].style.display="block";
    document.getElementsByClassName("register")[0].style.display="none";

}

//login check data
document.getElementById("loginbtn").onclick = function(e){
    event.preventDefault();
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;

    if(password.length>0 && email.length>0){
        if (document.cookie.indexOf('wrongcomb') == -1) {

            document.getElementById('loginform').submit();
            }else{
                document.getElementsByClassName("errorss")[0].innerText = "Wrong combination";

            }

    }else{
      document.getElementsByClassName("errorss")[0].innerText = "Please fill out all fields";
    }
}



//register check data
document.getElementById("registerbtn").onclick = function(e){
    event.preventDefault();
    var format = /[!#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var format2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passwordr = document.getElementById('passwordr').value;
    var emailr = document.getElementById('emailr').value;
    var country = document.getElementById('country').value;
    var address = document.getElementById('address').value;
    var afm = document.getElementById('afm').value;
    var name = document.getElementById('name').value;
    var lastname = document.getElementById('lastname').value;
    var telephone = document.getElementById('telephone').value;


    if(passwordr.length<=0 || emailr.length<=0 || country.length<=0 || address.length<=0 || afm.length<=0 || name.length<=0 || lastname.length<=0 || telephone.length<=0){
        document.getElementsByClassName("errorssreg")[0].innerText = "Please fill out all fields";

    }else{
      if( format.test(country) || format.test(afm) || format.test(address) || format.test(name) || format.test(lastname) || format.test(telephone) ){
        document.getElementsByClassName("errorssreg")[0].innerText = "Only letters/numbers are allowed";


      }else{
        if(format2.test(emailr)){
              document.getElementById('registerform').submit();
            //alert("goooo");
            }else{

                document.getElementsByClassName("errorssreg")[0].innerText = "Thats not an email";

                }

        }
    }




}
