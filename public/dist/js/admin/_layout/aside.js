$(function () {
  $('.aside > ul > li:not(:first-child) > a').click(function (event) {
    event.preventDefault()
    var menu = $(this).siblings('ul')
    menu.stop().slideToggle(250)
    var chevronIcon = $(this).children('.chevron')
    if (chevronIcon.hasClass('fa-chevron-left')) {
      return chevronIcon.removeClass('fa-chevron-left').addClass('fa-chevron-down')
    }

    return chevronIcon.removeClass('fa-chevron-down').addClass('fa-chevron-left')
  })
})