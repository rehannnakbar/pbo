<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>. Login .</title>
    <style>
        marquee{
            color: #554994
        }
    </style>
  
</head>
<body>
    
    <div style="padding: 50px;">
    <form action="index.php" method="post">
      <marquee behavior="" direction=""><h2>Welcome</h2></marquee>
        <div>
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">login</p>
            NIK : 
            <br>
            <input type="text" name="NIK">
        </div>
        <div>  
            NAMA LENGKAP : 
            <br>
            <input type="password" name="namalengkap">
            <p class="login-register.text">belum mempunyai akun?<a href="registerrr.php">register here</a>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">MASUK</button>
    </form>
    </div>
</body>
</html>