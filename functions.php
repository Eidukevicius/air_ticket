<?php
if (!function_exists('getDepartureAirports')) {
    function getDepartureAirports() {
        return ["Vilnius", "Kaunas", "Klaipėda", "Šiauliai", "Panevėžys"];
    }
}

if (!function_exists('getDestinationAirports')) {
    function getDestinationAirports() {
        return ["Paryžius", "Londonas", "Omanas", "Airija"];
    }
}

if (!function_exists('echoAirportsOptions')) {
    function echoAirportsOptions($airports) {
        foreach ($airports as $airport) {
            echo "<option value=\"$airport\">$airport</option>";
        }
    }
}
?>