let selects = document.querySelectorAll('.statusSaleOrigin');
let selectsSale = document.querySelectorAll('.statusSale');

selects.forEach((select) => {
    select.addEventListener("change", function(){
        let idSaleOrigin = select.closest('tr').querySelector('.idSaleOrigin').textContent;
        let status = select.value;

        axios.patch(`http://127.0.0.1:8000/api/update-status-sale-origin/${idSaleOrigin}/${status}`)
        .then(updateResponse => {
            if(status == 'off'){
                axios.get(`http://127.0.0.1:8000/api/sync-data-sale/${idSaleOrigin}`)
                .then(syncResponse => {
                    alertMessage();
                })
                .catch(syncError => {
                    console.error(syncError);
                });
            }
        })
        .catch(updateError => {
            console.error(updateError);
        });
    });
});

selectsSale.forEach((select) => {
    select.addEventListener("change", function(){
        let idSaleOrigin = select.closest('tr').querySelector('.idSaleOrigin').textContent;
        let status = select.value;
        axios.patch(`http://127.0.0.1:8000/api/update-status-sale/${idSaleOrigin}/${status}`)
        .then(updateResponse => {
            alertMessage();
            axios.get(`http://127.0.0.1:8000/api/sync-data-sale-origin/${idSaleOrigin}`)
                .then(syncResponse => {
                    alertMessage();
                })
                .catch(syncError => {
                    console.error(syncError);
                });
        })
        .catch(updateError => {
            console.error(updateError);
        });
    });
});
