function alertMessage(){
    document.getElementById('liveAlertPlaceholder').innerHTML = "<div class='ercl_alert'><strong>Successful Change</strong></div>"
        window.setTimeout(function() {
            document.querySelector('.ercl_alert').remove(); 
        }, 2500);
}