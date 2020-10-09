<!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8"> 
  </head> 
  <body>

    <h1>Create an account</h1>
  <form action ="add.php" method = "POST">
      <input type = "text" id= "firstname" name = "firstname" placeholder = "First Name" required>
      
      <input type = "text" id = "lastname" name = "lastname" placeholder = "Last Name" required><br><br>
      
      <input type = "email" id= "email" name = "email" placeholder = "Email Address" required><br><br>
      
      <input type = "text" id = "number" name = "number" placeholder = "Mobile number" maxlength = "10" pattern = "[0-9]{10}" title ="enter a 10 digit cellphone number" required><br><br>
      
      <input type = "password" id = "password" name = "password" placeholder = "password"  required
              pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br>
      
      <input type = "password" id = "retypepassword" name = "retypepassword" placeholder = "re-type password" required
            pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ><br><br>
      
     <input type ="submit" name = "submit" id = "submit" value = "Sign Up"><br>
  </form>
  
</body> 
</html>