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

    $('#popup-feedback').jqm({});
    $('.navbar__feedback').click(function(ev) {
      ev.preventDefault();
      $('#popup-feedback').jqmShow();
    });

    $('.navbar__nav').singlePageNav({
      offset: 75,
      filter: ':not(.external)',
      updateHash: true,
      beforeStart: function() {
      },
      onComplete: function() {
      }
    });

  $('.subscribe [name="submitted[source]"]').val('Заявка на получение дилерства');
  $('#popup-subscribe [name="submitted[source]"]').val('Заявка на получение дилерства');
  $('#popup-feedback [name="submitted[source]"]').val('Сообщение через форму обратной связи');

  });
})(jQuery);
