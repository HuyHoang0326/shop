let selects = document.querySelectorAll('.statusOrder');

selects.forEach((select) => {
    select.addEventListener("change", function(){
        let id = select.closest('tr').querySelector('.idOrder').textContent;
        let idOrderOrigin = select.closest('tr').querySelector('.idOrderOrigin').textContent;
        let status = select.value;

        axios.patch(`http://127.0.0.1:8000/api/update-status-order/${id}/${status}`)
        .then(updateResponse => {
            
            axios.get(`http://127.0.0.1:8000/api/sync-data-order/${idOrderOrigin}`)
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
