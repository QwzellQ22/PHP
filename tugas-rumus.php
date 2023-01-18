<!DOCTYPE html>
<html>

<head>

    <title>Document</title>
</head>

<body>
    <h1>Aplikasi sederhana menghitung luas rumus Luas segitiga dan Persegi Panjang</h1>
    <hr>
    <form action="proses2.php" method="POST">
        Nilai 1 : <input type="number" name='nilai1'>
        <br><br>
        Nilai 2 : <input type='number' name='nilai2'>
        <br><br>
        Rumus <select name="rumus" id="">
            <option value="" disabled>Option yang dipilih</option>
            <option value="LS">Luas Segitiga</option>
            <option value="LPP">Luas Persegi Panjang</option>
        </select> <br>
        <input type='submit' name='Hitung' value='Hitung' style="margin-left: 60px;">



    </form>

</body>

</html>