(function($) {
  $('.header__knob').click(e => {
    $('.header__knob').toggleClass('opened');

    if ($('.header__knob').hasClass('opened')) {
      $('body').addClass('disabled');
      $('.header__about').removeClass('disabled');
    } else {
      $('body').removeClass('disabled');
      $('.header__about').addClass('disabled');
    }
  });
})(jQuery);
