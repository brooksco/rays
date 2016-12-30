// @codekit-prepend "bootstrap.js"
// @codekit-prepend "jquery.scrollTo-1.4.3.1.js"
// @codekit-prepend "jquery.localscroll-1.2.7.js"
// @codekit-prepend "enquire.js"
// @codekit-prepend "waypoints.js"

$(document).ready(function() {
  // Hide the directory pages
  $('.page-item-7 > a, .page-item-19 > a, .page-item-554 > a').attr('href', '#');

  // Hide the content of the fans on page load, since JS is present
  $('.fan-content').hide();

  $('.image-tooltip').tooltip();

  // Mobile hamburger menu, on click
  $('.hamburger').click(function() {

    $(this).toggleClass('is-active');

    $('.site-nav').toggle();
    $('.site-nav').toggleClass('active');
  });

  // Mobile hamburger menu cleanup on screen size change
  enquire.register("screen and (min-width:480px)", {
      match : function() {
        $('.site-nav').show();
      },

      unmatch : function() {
        $('.site-nav').hide();
        $('.site-nav').removeClass('active');
        $('.hamburger').removeClass('is-active');
      }              
  });


  // On fan click
  $('.fan').click(function() {

    // If the fan is already open, rotate the icon back
    if ($(this).hasClass('open')) {

      $(this).find('.fan-icon').css({
      '-moz-transform':'rotate(0deg)',
      '-webkit-transform':'rotate(0deg)',
      '-o-transform':'rotate(0deg)',
      'transform':'rotate(0deg)'
      });

      $(this).removeClass('open');
    } else {
      $(this).find('.fan-icon').css({
      '-moz-transform':'rotate(-180deg)',
      '-webkit-transform':'rotate(-180deg)',
      '-o-transform':'rotate(-180deg)',
      'transform':'rotate(-180deg)'
      });
      $(this).addClass('open');
    }

    // Slide the content of the fan in
    $(this).find('.fan-content').slideToggle();

  });

  // Find all YouTube videos
var $allVideos = $("iframe[src^='https://www.youtube.com']");
// var $allVideos = $("iframe");

// Figure out and save aspect ratio for each video
$allVideos.each(function() {

  $(this).wrap( "<div class='videowrapper'></div>" );

});

}); // end ready
