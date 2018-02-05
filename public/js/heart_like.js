//TOGGLE FONT AWESOME ON CLICK
$('.faq-links').click(function(){
    var collapsed=$(this).find('i').hasClass('fa-heart-o');
        
    $('.faq-links').find('i').removeClass('fa-heart');
    
    $('.faq-links').find('i').addClass('fa-heart-o');
    if(collapsed)
        $(this).find('i').toggleClass('fa-heart-o fa-2x fa-heart fa-2x')
});