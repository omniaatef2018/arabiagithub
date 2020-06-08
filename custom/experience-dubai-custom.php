<script>
    // Plugin
    $.fn.equalize = function() {
        var maxHeight = 0;        
        return this.each(function(){
            var $this = $(this);
            if ($this.height() > maxHeight) { maxHeight = $this.height(); }            
            $this.height(maxHeight);
        });
    };

    $(document).ready(function() {
        $('.things-dubai .lg-slider img, .box-outer').equalize();

        $('.travel-with-us .bottom-section .bottom-item a').click(function(e){
            var getLink = $(this).attr('href').split('#')[1];
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $('#'+getLink).offset().top - 160
            }, 1000);
            return false;
        });    
    });
    $(window).load(function(){
        $('.popular-slider').slick({
              dots: true,
              arrows: false,
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
        });
    });
</script>