<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>admin_home_page</title>
</head>

<body>
<select name="cars">
    <option value="user name">Volvo</option>
    <option value="password">Saab</option>
    <option value="passwordhint">Fiat</option>
</select>

<form action="/action_page.php"
      oninput="x.value=parseInt(a.value)+parseInt(b.value)">
    0
    <input type="range"  id="a" name="a" value="50">
    100 +
    <input type="number" id="b" name="b" value="50">
    =
    <output name="x" for="a b"></output>
    <br><br>
    <input type="submit">
</form>
</body>

</html>

