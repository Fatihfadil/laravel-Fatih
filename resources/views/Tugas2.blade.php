<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>
    
    <p>Gender</p>
        <input type="radio" id="Laki-Laki" Name="gender" value="Male">
        <label for="Laki-Laki">Male</label><br>
        <input type="radio" id="Perempuan" Name="gender" value="Female">
        <label for="Perempuan">Female</label><br>
        
       <p>Nationality</p>
       <select id="Negara" name="Negara">
        <option value="Indonesia">Indonesia</option>
        <option Value="English">English</option>    
        <option Value="Other">Other</option>
       </select><br>

       <p>Language Spoken</p>
       <input type="checkbox" id="Indonesia" name="Indonesia" value="Indonesia">
       <label for="Indonesia">Indonesia</label><br>
       <input type="checkbox" id="English" name="English" value="English">
       <label for="English">English</label><br>
       <input type="checkbox" id="Other" name="Other" value="Other">
       <label for="Other">Other</label><br><br>

       <label for="Bio">Bio</label><br>
       <textarea name="Bio" id="Bio" row="5" cols="50" placeholder="Tuliskan Biuografi anda disini." required>
       </textarea><br><br>
       <a href="http://localhost/laravel-xi-rpl-2-fatih/public/3">
        <input type="button" name="sign" value="Sign Up"></input>
       </a>
       
    </form>
</body>
</html>