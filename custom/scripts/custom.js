$(document).ready(function() {
    $('.dropdown').hover(function(){
        $('.dropdown-toggle', this).trigger('click'); 
    });
    
    $('.blog-roll-ul li').each(function() {
       // $(this). 
    });
    
    $("a img, a i").hover(function(){
        $(this).stop().animate({"opacity": 0.4});
    },function(){
        $(this).stop().animate({"opacity": 1});
    });
});