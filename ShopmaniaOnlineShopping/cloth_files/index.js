$(document).ready(function() {
  $('#home-page-tabs li:first, #index .tab-content ul:first').addClass('active');
  $('#home-page-tabs li:first a').clone().appendTo('#home-tabs-title');
  $('#home-page-tabs li').on('click', function() {
    thisClass = $(this).attr('class');
    listTabsAnimate('.tab-content ul.' + thisClass + ' li');
    $('#home-tabs-title').empty();
    $(this).find('a').clone().appendTo('#home-tabs-title');
  });
});