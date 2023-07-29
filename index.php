<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Login dengan javascript</title>
    <link rel="stylesheet" href="style.css" class="rel" text="text/css">
</head>
<body>
    <br/>
    <br/>
    <center><h2>Form Login</h2></center>
    <br/>
    <div class="login">
        <br/>
        <form action="login.php" method="post" onsubmit="return validasi()">
        <div>
            <label for="">Username :</label>
            <input type="text" name="username" id="username"/>
        </div>
        <div>
            <label for="">Password :</label>
            <input type="password" name="password" id="password"/>
        </div>
        <div>
            <input type="submit" value="Login" class="tombol"/>
        </div>
    </form>
    </div>
</body>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var username = document.getElementById("password").value;
        if(username!=""&&password!="") {
            return true;
        } else{
            alert('Username dan Password harus diisi!');
            return false;}}
</script>
</html>