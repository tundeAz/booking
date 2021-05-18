<!--
-
- Name: Taxi Booking
- Version: 1.0
- Programmer: Tunde Abdulazeez
- Date: 15-05-2021
-
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body>
    <div class="container">
        <form id="distance_form" action="" method="">
            <div class="user-box" >
                <input class="for-control" id="username" placeholder="Enter Name">
                <input name="username" type="hidden" required/>
            </div>

            <div class="user-box">
                <input id="from_places" type="text" placeholder="Enter Origin">
                <input id="origin" type="hidden" name="origin" required/>
            </div>

            <div class="user-box">
                <input id="to_places" type="text" placeholder="Enter Destination">
                <input id="destination" type="hidden" name="destination" required/>
            </div>
            
            <input id="submit" type="submit" value="search"/>
        </form>
    </div>

    <!-- result -->
    <div class="container">
        <div id="result" class="hide">

        </div>
    </div>
</body>
    <!-- google autocomplete api starts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyAFAsCFDvRgPZz-P9XHg-AmeZ1JDDB_9Bc" type="text/javascript"></script>
    <!-- google autocomplete api ends-->

    <!-- booking function starts -->
    <script>
        $(function() {
            // add input listener
            google.maps.event.addDomListener(window,'load', function() {
                var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
                var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

                google.maps.event.addDomListener(from_places, 'place_changed', function(){
                    var from_place = from_places.getPlace();
                    var from_address = from_place.formatted_address;
                    $('#origin').val(from_address);
                });

                google.maps.event.addDomListener(to_places, 'place_changed', function(){
                    var to_place = to_places.getPlace();
                    var to_address = to_place.formatted_address;
                    $('#destination').val(to_address);
                });
        });
    });

    // Calculating distance result
    function calculateDistance(origin, destination){
        var DistanceMatrixService = new google.maps.DistanceMatrixService();
        DistanceMatrixService.getDistanceMatrix({
            origins: [origin],
            destinations: [destination],
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.unitSystem.IMPERIAL, //miles & feet.
            // unitSystem: google.maps.unitSystem.metric, //kilometer & meters.
            avoidHighways: false,
            avoidTolls: false
        }, save_result);
    }

    </script>
    <!-- booking function ends -->
</html>