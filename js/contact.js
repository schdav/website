$(function () {
  var $request;

  $('#contact-form').submit(function (event) {
    event.preventDefault();

    if ($request) {
      $request.abort();
    }

    var $form = $(this);
    var $inputs = $form.find('button, input, select, textarea');
    var $serializedData = $form.serialize();

    $inputs.prop('disabled', true);

    $request = $.ajax({
      url: '../php/contact-form.php',
      type: 'post',
      data: $serializedData,
    });

    $request.done(function (response) {
      if (response === 'success') {
        $('#notification-icon').html('<i class="las la-check-circle"></i>');
        $('#notification-text').html('Nachricht wurde erfolgreich versendet.');
        $('#contact-form')[0].reset();
      } else {
        $('#notification-icon').html('<i class="las la-times-circle"></i>');
        $('#notification-text').html(
          'Versenden der Nachricht ist fehlgeschlagen.'
        );
      }
      $('#modal-notification').addClass('is-active');
      $('#blur-content').addClass('blur');
    });

    $request.fail(function () {
      $('#notification-icon').html('<i class="las la-times-circle"></i>');
      $('#notification-text').html(
        'Versenden der Nachricht ist fehlgeschlagen.'
      );
      $('#modal-notification').addClass('is-active');
      $('#blur-content').addClass('blur');
    });

    $request.always(function () {
      $inputs.prop('disabled', false);
    });
  });
});
