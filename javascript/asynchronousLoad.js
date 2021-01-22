$(document).ready(
    function() {
        var trigger = $("#category-link");
        var container = $("#content");

        trigger.on("click",
            function() {
                container.Load("content.php?action=products?cat=1");
            }
        );
    }    
);