jQuery(function(){
   jQuery('a[href^=#]').click(function() {
  var speed = 400;
  var href= jQuery(this).attr("href");
  var sctarget = jQuery(href == "#" || href == "" ? 'html' : href);
  var position = sctarget.offset().top;
  jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
  return false;
   });
});
