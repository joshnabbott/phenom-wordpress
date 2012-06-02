#= require 'bootstrap.min'
#= require 'slides.jquery'

$ ->
  $('.slides').slides({
    preload: true,
    'generatePagination': false,
    pagination: false,
    # preloadImage: 'wp-content/themes/phenom/images/loading.gif',
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
