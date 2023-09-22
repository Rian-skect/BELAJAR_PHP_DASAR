<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Form Register</legend>
        <form action="register.php" method="POST">
        <pre>nama            : <input type="text" name="nama"></pre>
        <pre>tanggal lahir   : <input type="date" name="tanggal_lahir"></label></pre>
        <pre>username        : <input type="text" name="username"></pre>
        <pre>email           : <input type="email" name="email"></pre>
        <pre>password        : <input type="password" name="password"></pre>

        <pre>kelamin         :  <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</pre>
        <label>agama</label>
        <select name="agama">
            <option value="islam">islam</option>
            <option value="islam">kristen</option>
            <option value="islam">hindu</option>
            <option value="islam">budha</option>
        </select>
        <br><br>
        <label>biografi : </label>
        <textarea name="biografi" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <button type="daftar">daftar</button>
      
        
    </fieldset>
    
</body>
</html>