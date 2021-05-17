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
        });
    });
    </script>
    <!-- booking function ends -->
</head>

<body>
    <div class="container">
        <form id="distance_form" action="" method="">
            <div class="user-box">
                <input id="from_places" type="text" placeholder="Enter Origin">
                <input id="origin" type="hidden" name="origin" required/>
            </div>
            <div class="user-box">
                <input id="to_places" type="text" placeholder="Enter Destination">
                <input id="destination" type="hidden" name="destination" required/>
            </div>
            <input id="submit" type="submit" value="Search">
        </form>
    </div>
</body>

</html>