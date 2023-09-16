<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP Calculator</title>
    <style>
    div{
        background-color: gray;
        padding-left:50px;
        padding-top:20px;
        width:300px;
        height:200px;
        margin-left:300px;
        margin-top:50px;
        padding-bottom:220px;

    }
    h1{
        color:white;
    }
    input[type="number"]{
        width:140px;
        height:25px;
        
    }
    label{
        font-weight:bold;
        font-size:22px;
    }
    input[type="submit"]{
        font-size:20px;
        width:150px;
    }
    

    </style>

   <script>
   function set_action(assigned_action){
        document.getElementById("action").value =assigned_action;
        //return true;
     }



   </script>

</head>
<body>
<div>
    <h1>PHP Calculator</h1>
    <form action="result.php" method="post">
    
   Enter the firstnumber
   <br><input type="text" name="num1"> <br><br>
   
   Enter the secondnumber<input type="text" name="num2"><br>

    <br>
     
<input type="hidden" name="action" id="action"  value="" ><br/>

  <input type="submit" id="1" name="add" onclick="return set_action('add');" value="Add(+)"><br/><br/><br/>
     
    <input type="submit" id="2" name="sub" onclick="return set_action('sub');"  value="Subtract(-)"/>
     
     
    </form>


    
    
      
    
     
</div>
</body>
</html>