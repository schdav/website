$(function() {
  $('a[href^="#"]').click(function(event) {
    event.preventDefault();
    var $padding = $('#hello .container').css('padding-top');
    var $href = this.href.split('#');
    var $top = $('#' + $href[1]).position().top;
    var $distance = $top - parseInt($padding, 10);

    $('html, body').animate(
      {
        scrollTop: $distance
      },
      'slow'
    );

    this.blur();
  });
});
