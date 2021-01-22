$(document).ready(
    function() {
        $('#category-link').click(
            function() {
                $('#content').load('content.php?action=products&cat=1');
            }
        );
    }    
);