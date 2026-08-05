<!DOCTYPE html>
<html>
<head>
    <title>AJAX Text File</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<button id="load">Load File</button>
<div id="result"></div>

<script>
$(document).ready(function() {
    $("#load").click(function() {
        $.get("text.txt", function(data) {
            $("#result").html(data);
        });
    });
});
</script>

</body>
</html>