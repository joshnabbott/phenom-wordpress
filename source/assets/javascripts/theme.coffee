#= require 'bootstrap'
#= require 'slides.jquery'

$ ->
  $('#primary-container').hide()

  if $bgDiv = $('#background-stretch')
    $bgDiv.hide()
    pageId = $('body').attr('id')
    if $li = $("li[data-page='#{pageId}']")
      $bgDiv.find('img').attr('src', $li.data('background-image'))
    $bgDiv.fadeIn 'slow', ->
      $('#primary-container').fadeIn 'medium'
  else
    $('#primary-container').fadeIn 'fast'


  $('.slides').slides({
    preload: true,
    'generatePagination': false,
    pagination: false,
    preloadImage: 'wp-content/themes/phenom/images/loading.gif',
    play: 5000,
    pause: 2500,
    hoverPause: true
  })

  # Coming soon functionality
  $('.coming-soon').each ->
    $self = $(this)
    $overlay = $('<div></div>', { 'class': 'coming-soon-overlay' })
    $self.prepend $overlay
    $self.click (e) ->
      e.preventDefault()

