<html>
    <head>
        <title>Math Functions</title>
    </head>
    <body>
        <h1>MATH FUNCTIONS</h1>
        <table>
            <tr>
                <td>ENTER A NUMBER</td>
                <td></td>
                <td><input type="text" name="in1" id="in1"></td>
            </tr>
            <tr>
                <td>ENTER A DECIMAL NUMBER</td>
                <td></td>
                <td><input type="text" name="in2" id="in2"></td>
            </tr>
            <tr>
                <td>ENTER A POWER</td>
                <td></td>
                <td><input type="text" name="in3" id="in3"></td>
            </tr>
            <tr>
                <td>ENTER A DEGREE</td>
                <td></td>
                <td><input type="text" name="in4" id="in4"></td>
            </tr>
            <tr>
                <td><button type="button" id="con" onclick="submit()">SUBMIT</button></td>
            </tr>
        </table><br>
        <table>
            <tr>
                <td>Area of a circle using math.pi:</td>
                <td><span id="out1"></span></td>
            </tr>
            <tr>
                <td>Square root using math.sqrt:</td>
                <td><span id="out2"></span></td>
            </tr>
            <tr>
                <td>Rounded number using math.round:</td>
                <td><span id="out3"></span></td>
            </tr>
            <tr>
                <td>Rounded number using math.ceil:</td>
                <td><span id="out4"></span></td>
            </tr>
            <tr>
                <td>Rounded number using math.floor:</td>
                <td><span id="out5"></span></td>
            </tr>
            <tr>
                <td>Rounded number using math.trunc:</td>
                <td><span id="out6"></span></td>
            </tr>
            <tr>
                <td>Absolute value using math.abs:</td>
                <td><span id="out7"></span></td>
            </tr>
            <tr>
                <td>Find sign using math.sign:</td>
                <td><span id="out8"></span></td>
            </tr>
            <tr>
                <td>Power using math.pow:</td>
                <td><span id="out9"></span></td>
            </tr>
            <tr>
                <td>Sin using math.sin:</td>
                <td><span id="out10"></span></td>
            </tr>
            <tr>
                <td>Cos using math.cos:</td>
                <td><span id="out11"></span></td>
            </tr>
            <tr>
                <td>Max value using math.max:</td>
                <td><span id="out12"></span></td>
            </tr>
            <tr>
                <td>Min value using math.min:</td>
                <td><span id="out13"></span></td>
            </tr>
            <tr>
                <td>Random value using math.random:</td>
                <td><span id="out14"></span></td>
            </tr>
            <tr>
                <td>Log using math.log:</td>
                <td><span id="out15"></span></td>
            </tr>
        </table>
        <script>
            function submit() {
                var in1 = parseFloat(document.getElementById("in1").value);
                var in2 = parseFloat(document.getElementById("in2").value);
                var in3 = parseFloat(document.getElementById("in3").value);
                var in4 = parseFloat(document.getElementById("in4").value);

                document.getElementById("out1").innerHTML = Math.PI * in1 * in1;
                document.getElementById("out2").innerHTML = Math.sqrt(in1);
                document.getElementById("out3").innerHTML = Math.round(in2);
                document.getElementById("out4").innerHTML = Math.ceil(in2);
                document.getElementById("out5").innerHTML = Math.floor(in2);
                document.getElementById("out6").innerHTML = Math.trunc(in2);
                document.getElementById("out7").innerHTML = Math.abs(in2);
                document.getElementById("out8").innerHTML = Math.sign(in2);
                document.getElementById("out9").innerHTML = Math.pow(in1, in3);
                document.getElementById("out10").innerHTML = Math.sin(in4 * Math.PI / 180);
                document.getElementById("out11").innerHTML = Math.cos(in4 * Math.PI / 180);
                document.getElementById("out12").innerHTML = Math.max(in1, in2);
                document.getElementById("out13").innerHTML = Math.min(in1, in2);
                document.getElementById("out14").innerHTML = Math.random();
                document.getElementById("out15").innerHTML = Math.log(in1);
            }
        </script>
    </body>
</html>
