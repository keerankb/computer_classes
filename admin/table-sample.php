<!DOCTYPE html> 
<html> 
    <head> 
        <title>Set up fixed width for</title> 
        <meta charset="UTF-8" /> 
        <meta name="viewport" 
              content="width=device-width,  
                       initial-scale=1.0" /> 
                       <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  
        <style> 
            table, 
            th, 
            td { 
                border: 1px solid black; 
                border-collapse: collapse; 
            } 
  
            table { 
                width: 50%; 
            } 
  
            table.fixed { 
                table-layout: fixed; 
            } 
            table.fixed td { 
                overflow: hidden; 
            } 
        </style> 
    </head> 
    <body> 
        <h1 style="color: #00cc00;"> 
         GeeksforGeeks 
        </h1> 
  
        <!-- Making the table responsive -->
        <div style="overflow-x: auto;"> 
            <!-- Adding table in the web page -->
            <table> 
                <!-- Assigning width of first 
                     column of each row as 40% -->
                <col style="width: 40%;" /> 
  
                <!-- Assigning width of second  
                     column of each row as 60% -->
                <col style="width: 60%;" /> 
  
                <tr> 
                    <th>GfG Courses</th> 
                    <th>Description</th> 
                </tr> 
  
                <tr> 
                    <td>DS and Algo Foundation</td> 
                    <td> 
                      Master the basics of Data Structures 
                      and Algorithms to solve complex  
                      problems efficiently. 
                    </td> 
                </tr> 
  
                <tr> 
                    <td>Placement 100</td> 
                    <td> 
                      This course will guide you for  
                      placement with theory,lecture  
                      videos, weekly assignments, 
                      contests and doubt assistance. 
                    </td> 
                </tr> 
  
                <tr> 
                    <td>Amazon SDE Test Series</td> 
                    <td> 
                     Test your skill & give the final touch 
                     to your preparation before applying for 
                     product based against like Amazon,  
                     Microsoft, etc. 
                    </td> 
                </tr> 
            </table> 
        </div> 
    </body> 
</html>