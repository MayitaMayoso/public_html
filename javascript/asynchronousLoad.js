$(document).ready(
    function() {
        var trigger = $("#category-link");
        var container = $("#content");

        console.log("Joderrrrrrrr");
        trigger.on("click",
            function() {
                var cat = $this.data("target");
                container.Load("content.php?action=products?cat=" + cat);

                console.log("Joderrrrrrrr2");

                return false;
            }
        );
    }    
);