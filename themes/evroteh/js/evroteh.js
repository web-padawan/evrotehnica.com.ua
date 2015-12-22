(function($){
  $(document).ready(function(){

    $('.object__link').magnificPopup({
      type: 'image',
      closeOnContentClick: true
    });

    var $msg = $('#popup-messages');
    if (typeof $msg !== undefined && $msg.length) {
      $msg.jqm({});
      $msg.jqmShow();
    };

    $('#popup-subscribe').jqm({});
    $('.navbar__subscribe').click(function(ev) {
      ev.preventDefault();
      $('#popup-subscribe').jqmShow();
    });

  });
})(jQuery);
