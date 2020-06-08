<script>
  $( document ).ready(function() {
        $('.popular-slider').slick({
              dots: true,
              arrows: false,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
        });
      
           $('.travel-with-us .bottom-section .bottom-item a').click(function(e){
            var getLink = $(this).attr('href').split('#')[1];
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#'+getLink).offset().top - 180
            }, 1000);
            return false;
        }); 
    
    });
</script>