<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="signin-form">
        <div class="title">Registration Form</div>
        <div class="subtitle"></div>

        <form action="user_data.php" method="POST">

        <div class="input-container ic1">
          <input id="" class="input" type="text" name="name" placeholder="Name" required />
        </div>

        <div class="input-container ic2">
          <input id="email" class="input" type="text" name="email" placeholder="Email" required/>
        </div>

        


        <div class="input-container date">
          <h3>Date of Birth:</h3>
           <input id="date" class="input" name="dob" type="date" placeholder=" " />
           
         </div>

         <div class="input-container select-1">
          <h3>Gender:</h3>
            <select name="gender" id="">
            <option value=""></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not say">Rather not say</option>
          </select>
        </div>

        <div class="input-container ic2">
            <input id="country" name="country" class="input" type="text" placeholder="Country" required/>
          </div>

        <input type="submit" name="submit" class="submit" value="Submit">
        
        <!-- <a href="success.html"><button type="text" class="submit">Submit</button></a> -->

      </form>
      </div>

     
    
</body>
</html>