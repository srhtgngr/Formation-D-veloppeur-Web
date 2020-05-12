<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
<div id="info">
    <input type="button" value="Lorem ipsum" id="infos" onclick="Text()">
</div>
    <script>
        function Text() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("info").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "infos.txt", true);
            xmlhttp.send();
        };
    </script>

</body>

</html>