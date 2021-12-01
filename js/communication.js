document.getElementsByClassName('commbtn')[0].onclick = function(){
    document.getElementsByClassName('confirm')[0].style.display = 'block';

    sleep(2000).then(() => {
    document.getElementsByClassName('confirm')[0].style.display = 'none';
})

}
