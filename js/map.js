jQuery(function($) {
  // Asynchronously Load the map API 
  var script = document.createElement('script');
  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBbp-u9CGHXmZgtyGLKw6NzuBARepH0Vw0&callback=initialize";
  document.body.appendChild(script);
});

var grayStyles = [{
  featureType: "all",
  stylers: [{
    saturation: -60
  }, {
    lightness: 0
  }]
}, ];



// get coordinates http://www.mapcoordinates.net/en