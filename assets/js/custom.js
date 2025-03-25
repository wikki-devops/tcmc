
function highlightButton() {
    document.getElementById('findZoneButton').classList.add('highlight');
    setTimeout(() => {
        document.getElementById('findZoneButton').classList.remove('highlight');
    }, 2000); // Remove highlight after 2 seconds
}
// Highlight


document.addEventListener("DOMContentLoaded", function () {
    let zoomContainer = document.getElementById("zoom-text");
    let zoomElements = zoomContainer.querySelectorAll("*"); // Select all elements inside #zoom-text
    let defaultSizes = {};

    // Store default font sizes for each element
    zoomElements.forEach((el, index) => {
        defaultSizes[index] = parseFloat(window.getComputedStyle(el).fontSize);
    });

    document.getElementById("zoom-in").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            let currentSize = parseFloat(window.getComputedStyle(el).fontSize);
            let maxSize = defaultSizes[index] + 2; // Maximum increase by 2px
            if (currentSize < maxSize) {
                el.style.fontSize = (currentSize + 1) + "px"; // Increase by 1px
            }
        });
    });

    document.getElementById("zoom-out").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            let currentSize = parseFloat(window.getComputedStyle(el).fontSize);
            let minSize = defaultSizes[index] - 6; // Minimum decrease by 6px
            if (currentSize > minSize) {
                el.style.fontSize = (currentSize - 1) + "px"; // Decrease by 1px
            }
        });
    });

    document.getElementById("default-size").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            el.style.fontSize = defaultSizes[index] + "px"; // Reset to original size
        });
    });

});
// Resizer


document.addEventListener("DOMContentLoaded", function () {
    const switchInput = document.getElementById("languageSwitch");
    const currentURL = window.location.href;

    // Ensure switch is ON for Tamil (/ta/) and OFF for English (/en/)
    if (currentURL.includes("/ta/")) {
        switchInput.checked = true;  // Tamil → ON
    } else if (currentURL.includes("/en/")) {
        switchInput.checked = false; // English → OFF
    }

    // Toggle language on switch click
    switchInput.addEventListener("change", function () {
        if (this.checked) {
            // Switch ON → Tamil
            if (currentURL.includes("/en/")) {
                window.location.href = currentURL.replace("/en/", "/ta/");
            } else {
                window.location.href = "http://localhost/tambaramcorporation/ta/";
            }
        } else {
            // Switch OFF → English
            if (currentURL.includes("/ta/")) {
                window.location.href = currentURL.replace("/ta/", "/en/");
            } else {
                window.location.href = "http://localhost/tambaramcorporation/en/";
            }
        }
    });
});
// tamil and english switch


document.getElementById('zoneSelect').addEventListener('change', function () {
    const zone = this.value.replace(' ', '');
    document.getElementById('link1').setAttribute('href',
        `../assets/downloads/zone-updates/wardmap/${zone}WardMap.pdf`);
    document.getElementById('link2').setAttribute('href',
        `../assets/downloads/zone-updates/watersupplydistribution/${zone}WaterSupplyDistribution.pdf`);
    document.getElementById('link3').setAttribute('href',
        `../assets/downloads/zone-updates/bulkwastemanagement/${zone}BulkWastesManagement.pdf`);
});

function checkZoneSelection(event, linkId) {
    const zone = document.getElementById('zoneSelect').value;
    if (!zone) {
        event.preventDefault();
        alert("Please select a zone before downloading.");
    }
}
// zone select



let map, marker, geocoder, autocomplete;

const zones = [
    {
        name: "Zone 1",
        bounds: { latMin: 12.884647, latMax: 12.991, lngMin: 80.078601, lngMax: 80.192442 }
    },
    {
        name: "Zone 2",
        bounds: { latMin: 10.900, latMax: 11.100, lngMin: 76.800, lngMax: 77.100 }
    },
    {
        name: "Zone 3",
        bounds: { latMin: 9.800, latMax: 10.050, lngMin: 77.900, lngMax: 78.300 }
    },
    {
        name: "Zone 4",
        bounds: { latMin: 10.600, latMax: 10.950, lngMin: 78.500, lngMax: 78.850 }
    },
    {
        name: "Zone 5",
        bounds: { latMin: 8.600, latMax: 8.900, lngMin: 78.000, lngMax: 78.300 }
    }
];

function initMap() {
    geocoder = new google.maps.Geocoder();
    
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 12.92869594874561, lng: 80.09973660697437 }, //12.92869594874561, 80.09973660697437
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.HYBRID,
    });

    marker = new google.maps.Marker({
        position: { lat: 12.92869594874561, lng: 80.09973660697437 },
        map: map,
        draggable: true,
    });
    marker.addListener("dragend", function () {
        const position = marker.getPosition();
        checkZone(position.lat(), position.lng());
        getPincode(position.lat(), position.lng());
    });

    autocomplete = new google.maps.places.Autocomplete(document.getElementById("addressInput"));
    autocomplete.addListener("place_changed", function () {
        let place = autocomplete.getPlace();
        if (!place.geometry) {
            alert("No details available for input: '" + place.name + "'");
            return;
        }

        let location = place.geometry.location;
        map.setCenter(location);
        marker.setPosition(location);
        checkZone(location.lat(), location.lng());
        getPincode(location.lat(), location.lng());
    });

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                let userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(userLocation);
                marker.setPosition(userLocation);
                checkZone(userLocation.lat, userLocation.lng);
                getPincode(userLocation.lat, userLocation.lng);
            },
            () => {
                alert("Geolocation failed.");
            }
        );
    }
}

function checkZone(lat, lng) {
    let foundZone = null;

    zones.forEach((zone) => {
        const { latMin, latMax, lngMin, lngMax } = zone.bounds;
        if (lat >= latMin && lat <= latMax && lng >= lngMin && lng <= lngMax) {
            foundZone = zone.name;
        }
    });

    document.getElementById("zoneDisplay").innerHTML = foundZone
        ? `You are in <strong>${foundZone}</strong>`
        : "No Zone Found";
}

function getPincode(lat, lng) {
    geocoder.geocode({ location: { lat, lng } }, (results, status) => {
        if (status === "OK" && results.length > 0) {
            let pincode = null;
            results.forEach((result) => {
                result.address_components.forEach((component) => {
                    if (component.types.includes("postal_code")) {
                        pincode = component.long_name;
                    }
                });
            });

            document.getElementById("pincodeDisplay").innerText = pincode
                ? pincode
                : "Pincode not found";
        } else {
            console.error("Geocoder failed due to: " + status);
            document.getElementById("pincodeDisplay").innerText = "Pincode not found";
        }
    });
}

function findZone() {
    document.getElementById("mapModal").style.display = "block";
    setTimeout(initMap, 500);
}

function closeMap() {
    document.getElementById("mapModal").style.display = "none";
}
