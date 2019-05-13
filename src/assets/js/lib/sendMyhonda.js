import $ from "jquery";

export function sendForm() {
    const headers = new Headers({
        "Content-Type": "application/x-www-form-urlencoded",
    });

    const init = {
        method: 'GET',
        headers,
        mode: 'no-cors',
    };

    const formHonda = $('#myhonda');
    formHonda.on('submit',  function (event) {
       event.preventDefault();
       const data = $(this).serializeArray();
       console.log(data);

       // fetch('https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8', init)
       //      .then(res => {
       //          console.log(res);
       //      })
       //      .catch(error => {
       //          console.log('error');
       //      });
    });
}

export function getProductName() {
    const dataProduct = $('*[data-product]');
    if(dataProduct.length) {
        dataProduct.each(function (i) {
            $(this).on('click', function () {
                const dt = $(this).data('product');
                if (dt) {
                    $('#product-title')
                        .text('')
                        .text(dt);
                    $('#model_interest__c').val(dt);
                }
            });
        })
    }
}