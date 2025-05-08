function search_aircraft(query) {
    fetch("https://api.adsbdb.com/v0/aircraft/" + encodeURIComponent(query))
        .then(response => response.json())
        .then(data => {

            if (data.response === "unknown aircraft") {
                document.getElementById("output").innerText = "Unknown aircraft";
                return;
            }

            if (!data.response || !data.response.aircraft) {
                document.getElementById("output").innerText = "Invalid input or aircraft not found.";
                return;
            }

            const aircraft = data.response.aircraft;
            
            let flag_code = "(" + aircraft.registered_owner_operator_flag_code + ")";
            if (aircraft.registered_owner_operator_flag_code == aircraft.icao_type) {flag_code = " ";}
            else if (aircraft.registered_owner_operator_flag_code == null) {flag_code = " ";}

            let alt_image = "Aircraft image not available";
            if (aircraft.registration === '36964') {alt_image = "Rest In Peace";}
            else if (aircraft.icao_type == "SC7") {alt_image = "Square plane";}

            const outputHTML = `
            <div class="text-center">
                <img src="${aircraft.url_photo}" alt="${alt_image}" id="image">
            </div>
            <div class="text-center">
                <h2>${aircraft.type}</h2>
                <h5>${aircraft.icao_type}</h5>
            </div>
            <h6><strong>Manufacturer:</strong> ${aircraft.manufacturer}</h6>
            <br>
            <h6><strong>Registration:</strong> ${aircraft.registration}</h6>
            <h6><strong>Mode S:</strong> ${aircraft.mode_s}</h6>
            <br>
            <h6><strong>Country:</strong> ${aircraft.registered_owner_country_name} (${aircraft.registered_owner_country_iso_name})</h6>
            <h6><strong>Owner:</strong> ${aircraft.registered_owner} ${flag_code}</h6>
            <br>
            <div class="text-center">Database by adsbdb API</div>
            `;

            document.getElementById("output").innerHTML = outputHTML;
        })
        .catch(error => {
            document.getElementById("output").innerText = "Error: " + error;
        });
}

function search_flightroute(query) {
    fetch("https://api.adsbdb.com/v0/callsign/" + encodeURIComponent(query))
        .then(response => response.json())
        .then(data => {

            if (data.response === "unknown aircraft") {
                document.getElementById("output").innerText = "Unknown aircraft";
                return;
            }

            if (!data.response || !data.response.flightroute) {
                document.getElementById("output").innerText = "Invalid input or aircraft not found.";
                return;
            }

            let flightroute = data.response.flightroute;

            if (!flightroute.origin.country) {flightroute.origin.country = "";}
            else {flightroute.origin.country = "- " + flightroute.origin.country;}

            if (!flightroute.destination.country) {flightroute.destination.country = "";}
            else {flightroute.destination.country = "- " + flightroute.destination.country;}

            if (!flightroute.airline.iata_code) {flightroute.airline.iata_code = "---";}
            if (!flightroute.airline.icao_code) {flightroute.airline.icao_code = "---";}
            
            const outputHTML = `
                <div class="text-center">
                    <h2>${flightroute.callsign_icao}</h2>
                    <h5>${flightroute.callsign_iata}</h5>
                </div>
                <div class="flightroute-row">
                    <div class="flightroute-box origin">
                        <h5><strong>Origin</strong></h5>
                        <h6><strong>${flightroute.origin.name}</strong></h6>
                        <h6>${flightroute.origin.municipality} ${flightroute.origin.country}</h6>
                        <h6><strong>IATA:</strong> ${flightroute.origin.iata_code}</h6>
                        <h6><strong>ICAO:</strong> ${flightroute.origin.icao_code}</h6>
                        <h6><strong>Elevation:</strong> ${flightroute.origin.elevation}</h6>
                    </div>
                    <div>
                        <img src="plane2.gif" class="plane-logo">
                    </div>
                    <div class="flightroute-box destination">
                        <h5><strong>Destination</strong></h5>
                        <h6><strong>${flightroute.destination.name}</strong></h6>
                        <h6>${flightroute.destination.municipality} ${flightroute.destination.country}</h6>
                        <h6><strong>IATA:</strong> ${flightroute.destination.iata_code}</h6>
                        <h6><strong>ICAO:</strong> ${flightroute.destination.icao_code}</h6>
                        <h6><strong>Elevation:</strong> ${flightroute.destination.elevation}</h6>
                    </div>
                </div>
                <div class="flightroute-row">
                    <div class="flightroute-box">
                        <h5><strong>Airline</strong></h5>
                        <h6><strong>${flightroute.airline.name}</strong></h6>
                        <h6>${flightroute.airline.country} (${flightroute.airline.country_iso})</h6>
                        <h6><strong>IATA:</strong> ${flightroute.airline.iata_code}</h6>
                        <h6><strong>ICAO:</strong> ${flightroute.airline.icao_code}</h6>
                        <h6><strong>Callsign:</strong> ${flightroute.airline.callsign}</h6>
                    </div>
                </div>
                
                <div class="text-center">Database by adsbdb API</div>
            `;

            document.getElementById("output").innerHTML = outputHTML;
        })
        .catch(error => {
            document.getElementById("output").innerText = "Error: " + error;
        });
}

function search_airline(query) {
    fetch("https://api.adsbdb.com/v0/airline/" + encodeURIComponent(query))
        .then(response => response.json())
        .then(data => {

            if (data.response == "invalid airline:") {
                document.getElementById("output").innerText = "Unknown Airline";
                return;
            }

            const airline = data.response[0];
            let img = " "
            // if (airline.icao == "RYR") {
            //     img = `
            //     <div class="text-center">
            //         <img src="RYR.gif" alt="Thank you for flying Ryanair. Last year over 90% of our flights arrived.">
            //     </div>`;
            // }

            console.log(airline);

            const outputHTML = `
            ${img}
            <div class="text-center">
                <h2>${airline.name}</h2>
            </div>
            <h6><strong>IATA:</strong> ${airline.iata}</h6>
            <h6><strong>ICAO:</strong> ${airline.icao}</h6>
            <br>
            <h6><strong>Country:</strong> ${airline.country} (${airline.country_iso})</h6>
            <h6><strong>Callsign:</strong> ${airline.callsign}</h6>
            <br>
            <div class="text-center">Database by adsbdb API</div>
            `;


            document.getElementById("output").innerHTML = outputHTML;
        })
        .catch(error => {
            document.getElementById("output").innerText = "Error: " + error;
        });
}

function search(sample) {
    let query = document.getElementById("user-input").value;
    if (sample != null) query = sample;
    const selected = document.querySelector('input[name="select"]:checked');
    console.log(selected.value);
    console.log(query);
    if (selected.value === 'aircraft') {search_aircraft(query);}
    else if (selected.value === 'flightroute') {search_flightroute(query);}
    else if (selected.value === 'airline') {search_airline(query);}
    document.getElementById("output").scrollIntoView({ behavior: "smooth" });
}

function search_sample() {
    query = document.querySelector('input[name="sample"]:checked');
    search(query.value);
}

document.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault();
    }
  });

changePlaceholderandsample('Mode S/Registration');