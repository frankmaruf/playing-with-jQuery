<h1 id="title">Hello World 1</h1>
    <script>
        $(document).ready(function() {
            // using mouseover event to change the tex of h1 tag to "Hello World 2"
            $("#title").mouseenter(function() {
                $(this).text("Hello World 2");
            });
            // using mouseover event to change the tex of h1 tag to same a before
            $("#title").mouseleave(function() {
                $(this).text("Hello World 1");
            });
        });
    </script>