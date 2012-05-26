#= require 'bootstrap.min'

$ ->
  # Coming soon functionality
  $('.coming-soon').each ->
    $self = $(this)
    $overlay = $('<div></div>', { 'class': 'coming-soon-overlay' })
    $self.prepend $overlay
    $self.click (e) ->
      e.preventDefault()
