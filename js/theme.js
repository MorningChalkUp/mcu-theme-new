(function($){
  // Protected Functions
  function headerlax(){
    var pos = (document.documentElement.scrollTop||document.body.scrollTop),
      newtop = pos/2;
    $('#bg').css('transform', 'translateY('+newtop+'px)');
  }
  function nav(){
    var $header = $('#navbar'), 
        pos = (document.documentElement.scrollTop||document.body.scrollTop);

    if ( pos >= 5 ) { if ( !$header.hasClass('scrolled') ) $('#navbar').addClass('scrolled'); }
    else $('#navbar').removeClass('scrolled');
  }
	function toggleMenu(){
		$('#menutoggle').click(function(e){
			e.preventDefault();
			$('#navbar').toggleClass('open');
			$('#menubtn').toggleClass('open');
      $('#menu').slideToggle();
			return false;
		});
	}

  $(function(){
    // onReady code goes in here:
    toggleMenu();
    headerlax();
    nav();
    $(window).resize(function() {
      headerlax();
      nav();
    });
    $(window).scroll(function(){
      headerlax();
      nav();

    });

  })
})(jQuery);