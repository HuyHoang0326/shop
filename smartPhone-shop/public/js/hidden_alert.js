if(document.querySelectorAll('.alert-dismissible').length > 0){
    var a = document.querySelectorAll('.alert-dismissible')
    var b = document.querySelectorAll('.btn-close')
    b.forEach(close_alert)
    function close_alert(item,index){
        item.onclick = function(){
            a[index].setAttribute('hidden',true);
        }
    }
}
