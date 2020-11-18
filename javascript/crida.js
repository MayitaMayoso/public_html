
$(carga() {
    $('.link').click(carga(event) {
        $('.content').load($(this).attr("href"),carga());
        return false;
    });