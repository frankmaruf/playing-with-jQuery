<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<ul id="menu">
    </ul>
<button id="buttons" type="button">Load Data</button>
    <p id="spinner">Loading....</p>
    <ul id="menu">
    </ul>
    <script>
        $(document).ready(function() {
            // data will be loaded from server when DOM is ready
            $.ajax({
                url: "https://api.publicapis.org/entries",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    var spinner = $("#spinner")
                    spinner.hide();
                    $.each(data.entries, function(key, value) {
                        $("#menu").append('<li><a href="#">' + value.API + '</a></li>');
                    });
                },
            });
        });
        // get data from server and add it to the list
        $.ajax({
            url: "https://api.publicapis.org/entries",
            type: "GET",
            dataType: "json",
            success: function(data) {
                $.each(data.entries, function(index, value) {
                    $("#buttons").click(function() {
                        console.log("button clicked")
                        $("#menu").append('<li>' + value.API + '</a></li>');
                    });
                });
            }
        });
    </script>
</body>

</html>