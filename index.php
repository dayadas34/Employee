<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

   <h5 style="text-align: center;">
    
       Employee Information

    </h5>
  
    <table class="table">

       <tr>
           <td>Name</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Employee Code</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Designation</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Salary</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Address</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>D.O.B</td>
           <td><input type="date" placeholder="dd/mm/yy" class="form-control"></td>
       </tr>

       <tr>
           <td>Email id</td>
           <td><input type="text" class="form-control"></td>
       </tr>
       
       <tr>
           <td>Phone Number</td>
           <td><input type="text" class="form-control"></td>
       </tr>

       <tr>
           <td>Gender</td>
           <td>
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other
           </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="checkbox"> Agree to Terms & Conditions </td>
        </tr> 
        
        <tr>
            <td></td>
            <td><Button class="btn btn-success">Register</Button></td>
        </tr>

   </table> 
</body>
</html>