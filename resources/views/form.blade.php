<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form>
        <label for="fname">First name:</label><br><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label><br><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label>Gender</label><br><br>
  <input type="radio" id="Male" name="fav_language" value="Male">
  <label for="Male">Male</label><br>    
  <input type="radio" id="Female" name="fav_language" value="Female">
  <label for="Female">Female</label><br><br>
  <label for="Nationality">Nationality:</label><br><br>
  <select id="Nationality" name="Nationality">
    <option value="Indonesia">Indonesia</option>
    <option value="Amerika">Amerika</option>
    <option value="Inggris">Inggris</option></select>
    <br><br>
  <label>Language Spoken</label><br><br>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Bahasa Indonesia</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2"> English</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Other</label><br><br>
  </select>
  <label>Bio</label><br><br>
  <textarea name="message" rows="10" cols="30">
    </textarea><br><br>
    <a href="/datang">
   <button type="button" >Sign Up</button>
</form>
 </body>
</html>