<!DOCTYPE html>
<html lang="en">
<head>
    <title>TP2</title>
    <link rel="stylesheet" href="css/baseStyle.css">
</head>
<body>
    <form>
        <h1>Contact Form </h1>
        <h2>Your Basic Info</h2>
        Name </br>
        <input type=text name="name"></br>
        Email </br>
        <input type=email name="email"> </br>
        Password </br>
        <input type=password name="password" > </br>
        Birthday </br>
        <input type=date name="birthday"> </br>
        Sex:
        <input type="radio" name="answer" value="male"> Male
        <input type="radio" name="answer" value="female"> Female
        <h2>Your Profile</h2>
        About you <br>
        <textarea name="textarea" rows="4" cols="50">
        </textarea> <br>
        Role <br>
        <select name="role">
            <option value="fullstack">Fullstack</option>
            <option value="backend">Backend</option>
            <option value="frontend">Frontend</option>
        </select> <br>
        Interest <br>
        <input type="checkbox" name="database" value="database">Data Base
        <input type="checkbox" name="database" value="database">Desing
        <input type="checkbox" name="database" value="database">Business
        <input type="checkbox" name="database" value="database">Unit testing <br>
        <input type="checkbox" name="database" value="database">Cloud Development
        <input type="checkbox" name="database" value="database">Web Development <br>
        <button type="submit">Send</button>
        <button type="reset">Reset</button>
</form>
</body>
</html>