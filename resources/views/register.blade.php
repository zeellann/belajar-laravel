<!DOCTYPE html>
<html>
    <head>
    </head> 
    <body>
        <h1><b>Buat Account Baru!</b></h1>
        <h2><b>Sign Up Form</b></h2>
        <form action="/welcome" method="GET">
            @csrf
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name">
            <br>
            <label for="Last_name">Last Name:</label><br>
            <input type="text" id="Last_name">
            <br><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender" value="1"> Male<br>
            <input type="radio" name="gender" value="2"> Female<br>
            <input type="radio" name="gender" value="3"> Other
            <br><br>
            <label>Nationality:</label><br>
            <select>
                <optgroup>
                <option value="Indonesian">Indonesian</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Australian">Australian</option>
                </optgroup>
            </select>
            <br><br>
            <label>Languange Spoken:</label><br>
            <input type="checkbox" name="language_spoken" value="1"> Bahasa Indonesia<br>
            <input type="checkbox" name="language_spoken" value="2"> English<br>
            <input type="checkbox" name="language_spoken" value="3"> Other<br>
            <br>
            <label for="bio">Bio:</label><br>
            <textarea cols="25" rows="7"></textarea>
            <br><br> 
            <button type="submit">Sign Up</button>
        </form>
            
    </body>  
</html>