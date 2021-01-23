$(document).ready(
    function() {
        var container = $("#content");

        $(".category-link").on("click",
            function() {
                var cat = $(this).data("target");
                container.load("content.php?action=products&cat=" + cat);

                return false;
            }
        );
        
        $(".product-link").on("click",
            function() {
                var prod = $(this).data("target");
                container.load("content.php?action=product&product=" + prod);

                return false;
            }
        );
    }    
);