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
    <script>
        // focus the other input when the enter key is pressed
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
        // get input value on button click
        $("#button").click(function() {
            var name = $("#input-name").val();
            var age = $("#input-age").val();
            $("body").append('<p>' + 'Your Name is:' + name + 'Your Age is' + age + '</a></p>');
        });
        // get focus on input and some other events
        $(document).ready(function() {
            $("#input-name").focus();
        });
        // alert the radio button value
        $('input[type="radio"]').change(function() {
            alert($(this).val());
        });
    </script>