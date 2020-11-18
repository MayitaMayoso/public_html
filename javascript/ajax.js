
$(document).ready(function(){

    $(".botones").click(function(event){
        var link=$(this).attr("href");
        $('.text-cat').hide().load(link,function(){
            console.log('LOAD COMPLETED');
        }).fadeIn(1500);
        event.preventDefault();
    });

/*
    $("a[class=boto_info]").click(function(event_D){
        console.log('click completed');
        var link_d=$(this).attr("href");
       $('.d_producte').hide().load(link_d,function(){
           console.log('INFO completed');
       }).fadeIn(1500);
       event_D.preventDefault();
    });
    */
    $(".boto_info").on('click',function(event_D){
        var link_d=$(this).attr("href");
        $('.d_producte').hide().load(link_d,function(){
            console.log('INFO completed');
        }).fadeIn(1500);
        event_D.preventDefault();
    });
});

