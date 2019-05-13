import $ from "jquery";

//action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"

export function sendForm() {
    $('#myhonda').on('submit', function () {
       $.ajax({
           url: "https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8",
       })
           .done(function () {
               console.log('enviado');
           })
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