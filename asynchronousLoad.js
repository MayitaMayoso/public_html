$(document).ready(
    function() {
        var container = $("#content");

        $("#category-link").on("click",
            function() {
                var cat = $(this).data("target");
                console.log("penen" + cat);
                container.load("content.php?action=products&cat=" + "2");

                return false;
            }
        );
        
        $("#product-link").on("click",
            function() {
                console.log("penen");
                var prod = $(this).data("target");
                container.load("content.php?action=product&product=" + prod);

                return false;
            }
        );
    }    
);