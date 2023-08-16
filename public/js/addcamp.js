const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')


openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}


function initAutocomplete() {
  let srilanka={lat: 7.8731 ,lng: 80.7718};
  // The location of Uluru
  
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: srilanka,
  
  });
  var input = document.getElementById("locationInp");
  var autocomplete = new google.maps.places.Autocomplete(input);
  var marker=new google.maps.Marker({
    draggable:true,

    map:map
  });
  autocomplete.bindTo("bounds", map);
  autocomplete.setFields(['address_components','geometry','name'])
  autocomplete.addListener('place_changed', function () {
    // marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
        // User entered the name of a Place that was not suggested and
        // pressed the Enter key, or the Place Details request failed.
        window.alert("No details available for input: '" + place.name + "'");
        return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
    } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
});
google.maps.event.addListener(marker,'position_changed',
            function () {
                document.getElementById('p-latitude').value=marker.position.lat();
                document.getElementById('p-longitude').value=marker.position.lng();
            }
        )

}

document.addEventListener("DOMContentLoaded",function(event){initAutocomplete()});

