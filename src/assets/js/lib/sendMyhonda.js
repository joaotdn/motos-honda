import $ from "jquery";

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