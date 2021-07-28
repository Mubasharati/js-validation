<?php
 include 'DbInsert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration page </title>
    <script src="a.js"></script>
</head>
<body>
    <h1>Registration page</h1>
    
    <form action="helloJsAction.php" method="POST" name="registrationFrom" onsubmit="return is valid();">
 <fieldset>
          <legend>Basic Information</legend>
 
<label for="fname">First Name<span style="color: red">*</span>: </label>
<input type="text" name="fname" id="fname">
<span style="color: red"></span>
<br><br>
<label for="lname">Last Name<span style="color: red">*</span>: </label>
<input type="text" name="lname" id="lname">
<span style="color: red"></span>
<br><br>

<label for="gender">Gender:</label>
      <input type="radio" name="gender" id="gender" value="male">Male
      <input type="radio" name="gender" id="gender" value="female">Female 
      <span style="color: red"></span>
      <br>
      
      <label for="dob">DoB</label>
      <input type="date" name="dob" id="dob">
      <span style="color: red"></span>
      <br>
      
      <label for="religion">Religion</label>
      <select name="religion" id="religion">
      <option value="ISLAM">ISLAM</option>
      <option value="Hindu">Hindu</option>
      <option value="Cristian">Cristian</option>
      <option value="Boudha">Boudha</option>  
      </select>
      <span style="color: red"></span>

</fieldset>

<fieldset>
          <legend>Contact Information:</legend>
          <label for="preaddress">Present Address :</label>
          <textarea name="preaddress" id="preaddress" cols="20" rows="2"></textarea>
          <span style="color: red"></span>
          <br>
          
          <label for="peraddress">Permanent Address :</label>
          <textarea name="peraddress" id="peraddress" cols="20" rows="2"></textarea>
          <span style="color: red"></span>
          <br>
          
          <label for="email">Email :</label>
          <input type="email" name="email" id="email">
          <span style="color: red"></span>
          <br>
          
          <label for="tel">Phone :</label>
          <input type="tel" name="tel" id="tel">
          <span style="color: red"></span>
          <br>
          
          <label for="url">Personal Website Link :</label>
          <input type="url" name="url" id="url">
          <span style="color: red"></span>
          
      </fieldset>
      
<fieldset>
          <legend>Acount Information</legend>
          <lebel for="username">User Name:</lebel>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>">
            <span style="color:red"></span>
            <br><br>
          <lebel for="password">Password:</lebel>
            <input type="password" name="password" id="password">
            <span style="color:red"></span>
            <br><br>
      </fieldset>
      

<input type="submit" name="submit" value="Register">
</form>

    <br>
    <p style="color:green"></p>
    <p style="color:red"></p>
    <br>
        
</body>
</html>