<html>

<head>
    <title>Background change</title>
</head>
<style>
    .container{
        width:100%;
        height:100%;
        text-align: center;
        display: grid;
    }
    #btn{
       margin:auto;
       padding:1em;
       border:3px solid black;
       outline:none;
    }
</style>
<body>
<div class="container">
    <input id="btn" type="button" value="Change background">
</div>

    <script>
        document.getElementById("btn").addEventListener("click", colorchange);
        function colorchange() {
            (Math.random() * 10000000);
            var color = '#' + Math.floor(Math.random() * 10000000).toString(16);
            document.body.style.background = color;
        }
    </script>
</body>

</html>
