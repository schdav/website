$(function() {
  $('a[href^="#"]').click(function(event) {
    event.preventDefault();
    var $padding = $('body').css('padding-top');
    var $href = this.href.split('#');
    var $top = $('#' + $href[1]).position().top;
    var $distance = $top - parseInt($padding, 10);

    $('html, body').animate(
      {
        scrollTop: $distance
      },
      'slow'
    );
  });
});
