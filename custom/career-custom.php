<script>
  $(document).ready(function(){
    $('.op-tab-link a').click(function(e){
      e.preventDefault();
      var getHref = $(this).attr('href');      
      var linkCategory = getHref.replace(/^#/, '');
      $('.op-tab-link a').removeClass('active-item');
      $(this).addClass('active-item');
      if(linkCategory == 'all'){
        $('.op-listing-item').fadeIn();        
      } else {
        $('.op-listing-item').show();
        $('.op-listing-item').not('[data-category="'+linkCategory+'"]').fadeOut();
      }
    })
  });
  
</script>