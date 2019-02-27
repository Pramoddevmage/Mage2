requirejs(['jquery'], 
    function( jQuery ) {
        setTimeout(function(){
            jQuery(document).ready(function(){
                var status = jQuery("[name='product[disable_price_for_attr_sets]']").val();
                if (status == "1"){
                    jQuery("[data-index='tax_class_id']").hide();
                    jQuery("[data-index='container_price']").hide();
                    jQuery("[name='product[price]']").val('0');
                    jQuery("[name='product[price]']").change();
                }
                if (status == "0")
                {
                    jQuery("[data-index='tax_class_id']").show();
                    jQuery("[data-index='container_price']").show();
                }
            });
            jQuery("[name='product[disable_price_for_attr_sets]']").change(function(){
                var status = jQuery("[name='product[disable_price_for_attr_sets]']").val();
                if (status == "1"){
                    jQuery("[data-index='tax_class_id']").hide();
                    jQuery("[data-index='container_price']").hide();
                    jQuery("[name='product[price]']").val('0');
                    jQuery("[name='product[price]']").change();
                }
                if (status == "0")
                {
                    jQuery("[data-index='tax_class_id']").show();
                    jQuery("[data-index='container_price']").show();
                }
            });
        }, 5000);
    }
);
