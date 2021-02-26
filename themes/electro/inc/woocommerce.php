<?php
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
?>