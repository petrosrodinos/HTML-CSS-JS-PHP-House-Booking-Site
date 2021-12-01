function initMap() {

var uluru = {lat: 35.324159, lng: 24.417276};
//var marker = {lat: 35.368545, lng: 24.473646};

var map = new google.maps.Map(
  document.getElementById('map'), {zoom: 14, center: uluru});

var marker = new google.maps.Marker({position: uluru, map: map});
}
