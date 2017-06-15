/**
 * Created by root on 03/05/2017.
 */
$(document).ready(function() {
  $('.switchery').addClass('off');
  
  /*var num = 5;
  for (var i=1; i<=5; i++){
    $('#video'+i).click(function() {
      if (this.paused == false) {
      this.pause();
    } else {
      this.play();
    }
    });
  }*/
  
  var played = false;
  $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      var height_video = $('div.home').height();
      if (scroll >= height_video && played == false){
        $('#video1').trigger('play');
        played = true;
      }
  });
  jQuery(document).on('submitResponse.example', function( response ){ alert('world'); return true; });
});