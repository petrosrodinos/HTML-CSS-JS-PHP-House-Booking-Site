document.getElementsByClassName("postbtn")[0].onclick = function(){
  document.getElementsByClassName("postbox")[0].style.display = 'block';
  document.getElementsByClassName("posts")[0].style.display = 'none';

}

// 'use strict';
//
// const fs = require('fs');
//
// let student = {
//     name: 'Mike',
//     age: 23,
//     gender: 'Male',
//     department: 'English',
//     car: 'Honda'
// };
//
// let data = JSON.stringify(student, null, 2);
//
// fs.writeFile('../comments.json', data, (err) => {
//     if (err) throw err;
//     alert('Data written to file');
// });
//
// alert('This is after the write call');

document.getElementsByClassName("postboxbtn")[0].onclick = function(e){
    event.preventDefault();
    var comment = document.getElementById('comment').value;
    if(comment.length>0){
      var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
      if(format.test(comment)){
        document.getElementsByClassName("errorss")[0].innerText = "Only letters/numbers are allowed";
    }else{
      document.getElementById('commentform').submit();

    }

}else{
  document.getElementsByClassName("errorss")[0].innerText = "Please write a comment";
}
}

document.getElementById("commexit").onclick = function(){
  document.getElementsByClassName("postbox")[0].style.display = 'none';
  document.getElementsByClassName("posts")[0].style.display = 'block';
}
