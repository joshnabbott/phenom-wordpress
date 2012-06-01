#= require 'bootstrap.min'
#= require 'jquery.nivo.slider'

$ ->
  $('#slider').nivoSlider({
    'effect': 'fade',
    'directionNav': false,
    'controlNav': false,
    'pauseOnHover': false,
    'slices': 1
  })

  # Coming soon functionality
  $('.coming-soon').each ->
    $self = $(this)
    $overlay = $('<div></div>', { 'class': 'coming-soon-overlay' })
    $self.prepend $overlay
    $self.click (e) ->
      e.preventDefault()
