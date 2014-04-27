$(function() {
  var copyrightDate = new Date();
  var copyrightYear = copyrightDate.getFullYear();

  if (copyrightYear == '2014') {
    $( '.year' ).append(copyrightYear + ' ');
  } else {
    $('.year').append('2014' + ' &#8722; ' + copyrightYear + ' ');
  }

});