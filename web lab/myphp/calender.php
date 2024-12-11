<html>
    <head>
        <title>Calender</title>

        <script>
            function createCalendar(){
                var year=Number(document.getElementById("year").value);

                const months = [
                     "January",
                     "February",
                     "March",
                     "April",
                     "May",
                     "June",
                     "July",
                     "August",
                     "September",
                     "October",
                     "November",
                     "December",
                ];
                for(let mon=0;mon<12;++mon)
                {
                    let d=new Date(year,mon);
                    

                    let table=
                        months[mon]+
                        "<table border='5'><tr><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr><tr>";
			
                    for(let i=0; i < d.getDay(); i++){
                         table =table+"<td></td>";
                    }

                    while(d.getMonth()==mon){
                        table+="<td>" +d.getDate()+ "</td>";
                    
                        if (d.getDay() == 6) {
                            table += "</tr><tr>";
                        }
                        d.setDate(d.getDate() + 1);
                    }

                    if(d.getDay!=0){
                        for(let i=d.getDay();i<=6;i++){
                             table+="<td></td>";
                        }
                    }

                    table+="</tr></table>";

                    document.getElementById(mon).innerHTML = table;
                }
            }
        </script>
    </head>
    <body>
        <table align="center" >
            <tr>
              <td><div id="0"></div></td>
              <td><div id="1"></div></td>
              <td><div id="2"></div></td>
              <td><div id="3"></div></td>
            </tr>
            <tr>
              <td><div id="4"></div></td>
              <td><div id="5"></div></td>
              <td><div id="6"></div></td>
              <td><div id="7"></div></td>
            </tr>
            <tr>
              <td><div id="8"></div></td>
              <td><div id="9"></div></td>
              <td><div id="10"></div></td>
              <td><div id="11"></div></td>
            </tr>
          </table>

          Enter an year <input type="text" id="year">
          <button onClick="createCalendar();">OK</button>
    </body>
</html>
