jQuery(document).ready(function($) {
  $('#block-endymion-main-menu li').hover(function(){
    $(this).parent().find('.sub-menu').toggle();
  });
});
