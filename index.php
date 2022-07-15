<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./resources/js/jquery-ui/external/jquery/jquery.js"></script>
    <link rel="stylesheet" href="./resources/js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="./resources/js/jquery-ui/jquery-ui.structure.css">
    <link rel="stylesheet" href="./resources/js/jquery-ui/jquery-ui.theme.css">
    <title>jQuery Test</title>
</head>

<body>
    <script>
        // $(document).ready(function(){
        //     $("button").click(function(){
        //         $("#menu").append('<li><a href="#">New list item</a></li>');
        //     });
        // });
    </script>
    <h1 id="title">Hello World 1</h1>
    <label for="input-name">Name:</label>
    <input type="text" id="input-name"><br>
    <span>Gender:</span>
    <span>Male
        <input type="radio" name="gender" value="male"></span>
    <span>Female
        <input type="radio" name="gender" value="female"></span><br>
    <label for="input-age">Age:</label>
    <input type="text" id="input-age">
    <button id="button">Click me</button>
    <ul id="menu">
    </ul>
    <button type="buttons">Load Data</button>
    <script>
        $('input[type="radio"]').change(function() {
            alert($(this).val());
        });
        $("#input-name").keyup(function() {
            $("#title").text($(this).val());
        });
        $("#input-name").keypress(function(event) {
            if (event.key == "Enter") {
                $("#input-age").focus();
            }
            if ($("#input-age").focus()) {
                $("#input-age").keypress(function(event) {
                    if (event.key == "Enter") {
                        $("#button").focus();
                    }
                });
            }
        });
        $("#button").click(function() {
            var name = $("#input-name").val();
            var age = $("#input-age").val();
            $("body").append('<p>' + 'Your Name is:' + name + 'Your Age is' + age + '</a></p>');
        });
        $(document).ready(function() {
            $("#input-name").focus();
            $("#title").mouseenter(function() {
                $(this).text("Hello World 2");
                $("#test-ajax").append('<li><a href="#">New list item</a></li>');
            });
            $("#title").mouseleave(function() {
                $(this).text("Hello World 1");
            });
        });
        $.ajax({
            url: "https://api.publicapis.org/entries",
            type: "GET",
            dataType: "json",
            success: function(data) {
                $.each(data.entries, function(index, value) {
                    $("buttons").click(function() {
                        $("#menu").append('<li>' + value.API + '</a></li>');
                    });
                });
            }
        });
    </script>
</body>

</html>