<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .w{
            width: 1200px;
            margin: 0 auto;
        }
        #zd1{
            width: 100%;
            height: 300px;
        }
        .container{
            padding: 60px;
            width: 50%;
        }
        body{
            background: lightgreen;
        }
       
    </style>
</head>

<body>
    <div class="w">
        <div class="container">
            <h1>Search User</h1>
            <form action="">
                Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
            </form>
            <p>Suggestions: <span id="output" style="font-weight: bold;"></span> </p>
        </div>
    </div>

    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                //Ajax Req
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;

                    }
                }
                xmlhttp.open("GET", "suggest.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</body>

</html>