<!DOCTYPE html>
<html>
<head>
   <title>Booking</title>

   <style type="text/css">
       fieldset {
           margin: auto;
           margin-top: 100px;
           width: 50%;
           color: white;

       }
       body {
        background-image: url("bmw-m2-coupé-black-shadow-stage-teaser-XXL.jpg");
       }

       table tr th {
           padding-top: 20px;
           color: white;

       }
   </style>

</head>
<body>



<fieldset>
   <legend>booking</legend>

   <form action="actions/a_create.php" method="post">
       <table cellspacing="0" cellpadding="0">
           <tr>
               <th>name</th>
               <td><input type="text" name="car_name" placeholder="car name" /></td>
           </tr>     
           <tr>
               <th>model</th>
               <td><input type="text" name="car_model" placeholder="car model" /></td>
           </tr>
           <tr>
               <th>pickup</th>
               <td><input type="date" name="car_pickup" placeholder="car_pickup_date" /></td>
           </tr>
           <tr>
              <th>dropoff</th>
               <td><input type="date" name="car_dropoff" placeholder="car_dropoff_date" /></td>
           </tr>
           <tr>
              <th>loction</th>
               <td><input type="text" name="car_loction" placeholder="car loction" /></td>
           </tr>
           <tr>
              <th>city</th>
               <td><input type="text" name="city" placeholder="city" /></td>
           </tr>
             <tr>
               <td><button type="submit">booking</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>



       </table>
   </form>

</fieldset>

</body>
</html>