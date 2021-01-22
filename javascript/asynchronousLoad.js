$(document).ready(
    function() {
        var trigger = $("#category-link");
        var container = $("#content");

        trigger.on("click",
            function() {
                var cat = $this.data("target");
                container.Load("content.php?action=products?cat=" + cat);
            }
        );
    }    
);