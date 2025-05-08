function changePlaceholderandsample(newText) {
    document.getElementById("user-input").placeholder = newText;
    const aircraft_sample = `
            <form id="search-sample">
                <div class="d-flex align-items-center flex-wrap gap-3 justify-content-center">
                    <!-- Radio buttons -->
                    <div class="d-flex flex-colum text-center">
                        <div>
                            Sample:
                            <input type="radio" name="sample" value="36964" checked>
                            <label>36964</label>
                            <input type="radio" name="sample" value="69">
                            <label>69</label>
                            <input type="radio" name="sample" value="FA-69">
                            <label>FA-69</label>
                        </div>
                        <div>
                            <input type="radio" name="sample" value="D-EATH">
                            <label>D-EATH</label>
                            <input type="radio" name="sample" value="F-BRUH">
                            <label>F-BRUH</label>
                            <input type="radio" name="sample" value="G-BEOL">
                            <label>G-BEOL</label>
                            <input type="button" value="search" onclick="search_sample();">
                        </div>
                    </div>
                </div>
            </form>`;
        const flightroute_sample = `
            <form id="search-sample">
                <div class="d-flex align-items-center flex-wrap gap-3 justify-content-center">
                    <!-- Radio buttons -->
                    <div class="d-flex flex-colum text-center">
                        <div>
                            Sample:
                            <input type="radio" name="sample" value="JAF21" checked>
                            <label>JAF21</label>
                            <input type="radio" name="sample" value="CYP467">
                            <label>CYP467</label>
                            <input type="radio" name="sample" value="EVA6606">
                            <label>EVA6606</label>
                        </div>
                        <div>
                            <input type="radio" name="sample" value="AMC306">
                            <label>AMC306</label>
                            <input type="radio" name="sample" value="CND814">
                            <label>CND814</label>
                            <input type="radio" name="sample" value="CND814">
                            <label>CND814</label>
                            <input type="button" value="search" onclick="search_sample();">
                        </div>
                    </div>
                </div>
            </form>`;
        const airline_sample = `
        <form id="search-sample">
            <div class="d-flex align-items-center flex-wrap gap-3 justify-content-center">
                <!-- Radio buttons -->
                <div class="d-flex flex-colum text-center">
                    <div>
                        Sample:
                        <input type="radio" name="sample" value="RYR" checked>
                        <label>RYR</label>
                        <input type="radio" name="sample" value="RYA">
                        <label>RYA</label>
                        <input type="radio" name="sample" value="THA">
                        <label>THA</label>
                    </div>
                    <div>
                        <input type="radio" name="sample" value="AXM">
                        <label>AXM</label>
                        <input type="radio" name="sample" value="AAL">
                        <label>AAL</label>
                        <input type="radio" name="sample" value="FNT">
                        <label>FNT</label>
                        <input type="button" value="search" onclick="search_sample();">
                    </div>
                </div>
            </div>
        </form>`;
    if (newText === "Mode S/Registration") {document.getElementById("output").innerHTML = aircraft_sample;}
    else if (newText === "Callsign") {document.getElementById("output").innerHTML = flightroute_sample;}
    else if (newText === "IATA/ICAO code") {document.getElementById("output").innerHTML = airline_sample;}
}