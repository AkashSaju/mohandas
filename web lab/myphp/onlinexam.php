<html>
    <head>
        <title>
            Online exam
        </title>
        <style>
            label
            {
                font-size: 20px;
                font-weight: bold;
            }
            h1
            {
                font-size: 40px;
            }
            input[type=radio]
            {
                padding:10px 30px;
                border-radius: 8px;
                margin-left: 50px;;
                font-size: 15px;
            }
            input[type=submit]
            {
                background-color: red;
                color:white;
                padding:10px 30px;
                
                border-radius: 8px;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <div style="margin: 0px 350px 0px 350px;">
            <center><h1>Online Test</h1></center>
            <form name="test">
                <label>QN1.Computer Moniter is also known as ____________ .</label><br>
                <input type="radio" name="qn1" value="qn1an1">DVU<br>
                <input type="radio" name="qn1" value="qn1an2">UVD<br>
                <input type="radio" name="qn1" id="an1" value="qn1an3">VDU<br>
                <input type="radio" name="qn1" value="qn1an4">CCTV<br><hr>
                <label>QN2.Which one of these stores more data than a DVD ?</label><br>
                <input type="radio" name="qn2" value="qn2an1">CD Rom<br>
                <input type="radio" name="qn2" value="qn2an2">Floppy<br>
                <input type="radio" name="qn2" id="an2"value="qn2an3">Blue Ray Disk<br>
                <input type="radio" name="qn2" value="qn2an4">Red Ray Disk<br><hr>
                <label>QN3.Identify the device through which data and instructions are entered into a computer</label><br>
                <input type="radio" name="qn3" value="qn3an1">Software<br>
                <input type="radio" name="qn3" value="qn3an2">Output device<br>
                <input type="radio" name="qn3" id="an3" value="qn3an3">Input device<br>
                <input type="radio" name="qn3" value="qn3an4">Memory<br><hr>
                <label>QN4.Which of the following statement is correct?</label><br>
                <input type="radio" name="qn4" id="an4"value="qn4an1">1 KB = 1024 bytes<br>
                <input type="radio" name="qn4" value="qn4an2">1 MB=2048 bytes<br>
                <input type="radio" name="qn4" value="qn4an3">1 MB = 1000 kilobytes<br>
                <input type="radio" name="qn4" value="qn4an4">1 KB = 1000 bytes<br><hr>
                <label>QN5.USB is a device used to store data and it stands for ___________ .</label><br>
                <input type="radio" name="qn5" value="qn5an1">Unlimited Service Band<br>
                <input type="radio" name="qn5" value="qn5an2">Unlimited Serial Bus<br>
                <input type="radio" name="qn5" id="an5"value="qn5an3">Universal Serial Bus<br>
                <input type="radio" name="qn5" value="qn5an4">Universal Service Bus<br><br>
                <div style="margin-left: 350px;">
                    <input type="submit" onclick="result()" name="submit">
                </div>
            </form>
        </div>
        <script>
                function result()
                {
                    var score=0;
                    if(document.getElementById('an1').checked)
                    {
                        score+=1;
                    }
                    if(document.getElementById('an2').checked)
                    {
                        score+=1;
                    }
                    if(document.getElementById('an3').checked)
                    {
                        score+=1;
                    }
                    if(document.getElementById('an4').checked)
                    {
                        score+=1;
                    }
                    if(document.getElementById('an5').checked)
                    {
                        score+=1;
                    }
                    alert("Score is "+score);
                }
        </script>
    </body>
</html>
