<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<table width = 100%;>
    <tr height = 100px style ="background-color:#ADD8E6 ">
        <td width =10%; align = center>
            <img width = 100px; height = 100px src ="CompanyLogo.png">
        </td>
        <td align = center >
        <h1>Store</h1>
    </td>

        <td align = center >
            <table >
                
                <tr style ="font-size:20px;">
                    
                    <td><a href="#"> Logout</a></td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr  height = 700px>
        <td width =15% bgcolor="#ADD8E6" valign="top" align="center">
           
           <h1>Welcome </h1><br>

           
         <li><a href="Store.php"> Store </a></li><br> 

          <li><a href="Dashboard.php"> Dashboard </a></li><br> 

           <li><a href="#"> Account Settings </li></a>
       </td>
        </td>
        
        <td colspan="2" valign = top style ="background-color:#F5F2F1 ">

            <h1 align = left>Tanvir Chowdhury</h1><hr>
            <table  align="center" width="500px" >
                
            </table>
            <form method="" action="">
        <fieldset>
        <legend><h3>ADD PRODUCT</h3></legend>
        <table>
            <tr>
                <td>
                    Product Description: <input type="text" name="status"><br>
                    Price: <input type="text" name="price"><br>
        Add Photo: <input type="file" name="" value=""><br>
        <input type="button" name="btn" value="ADD">    

                </td>

            </tr>
        </table>

        </fieldset> <br>

        

        </td>
    </tr>
    
    
</table>


</html>