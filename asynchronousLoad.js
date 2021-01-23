$(document).ready(
    function() {
        var container = $("#content");
        
        $("#products-link a").on("click",
            function() {
                console.log("hola");
                var prod = $(this).data("target");
                container.load("content.php?action=product&product=" + prod);

                return false;
            }
        );

        $("#categories-link a").on("click",
            function() {
                var cat = $(this).data("target");
                container.load("content.php?action=products&cat=" + cat);

                return false;
            }
        );
    }    
);