$(document).ready(() => {
  const $menuButton = $('.dropbtn');
  const $navDropdown = $('.dropdown-content');

  const $header_dropbtn = $('.header-dropbtn');
  const $hdropdown_content = $('.hdropdown-content');


  const $links = $('#links');
  const $links_hidden = $('.links_hidden');
  const $cancel = $('#cancel');

  $menuButton.on('click', () => {
    $navDropdown.toggle();
  })

  $navDropdown.on('mouseleave', () => {
    $navDropdown.hide();
  })

  $header_dropbtn.on('click', () => {
    $header_dropbtn.toggleClass('header_dropbtn_click');
  })

  $hdropdown_content.on('mouseleave', () => {
    $header_dropbtn.removeClass('header_dropbtn_click');
  })

  $header_dropbtn.on('click', () => {
    $hdropdown_content.toggle();
  })

  $hdropdown_content.on('mouseleave', () => {
    $hdropdown_content.hide();
  })

  $links.on('click', () => {
    $links.hide();
    $links_hidden.slideDown("slow");
  })

  $cancel.on('click', () => {
    $links_hidden.slideUp("slow");
    $navDropdown.show();
    $links.show();
  })

  $links_hidden.on('mouseleave', () => {
    $links_hidden.hide();
    $links.show();
  })

  function check_if_in_view() {
  const window_height = $window.height();
  const window_top_position = $window.scrollTop();
  const window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
  const $element = $(this);
  const element_height = $element.outerHeight();
  const element_top_position = $element.offset().top;
  const element_bottom_position = (element_top_position + element_height);
  });
 }

 $window.on('scroll resize', check_if_in_view);
});
