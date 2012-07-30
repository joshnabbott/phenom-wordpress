#= require 'bootstrap'
#= require 'slides.jquery'

jQuery.fn.exists = ->
  @length > 0

$ ->
  if $('#background-stretch').exists()
    $bgDiv = $('#background-stretch')
    $bgDiv.hide()
    pageId = $('body').attr('id')
    if $("li[data-page='#{pageId}']").exists()
      $li = $("li[data-page='#{pageId}']")
      $('#primary-container').hide()
      $bgDiv.find('img').attr('src', $li.data('background-image'))
      $bgDiv.fadeIn 'slow', ->
        $('#primary-container').fadeIn 'medium'


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

