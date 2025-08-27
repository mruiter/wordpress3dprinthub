(function($){
  $(document).ready(function(){
    // Smooth scroll for internal links
    $('a[href*="#"]').on('click', function(e){
      var target = $(this.getAttribute('href'));
      if(target.length){
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: target.offset().top}, 1000);
      }
    });
  });
})(jQuery);
