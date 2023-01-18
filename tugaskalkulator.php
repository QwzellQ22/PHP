<html>

<head>
    <title>Kalkulator</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <hr>
    <form action="" method="POST">
        nilai 1:<input type="number" name='nilai1'>
        <br><br>
        nilai 2:<input type="number" name='nilai2'>
        <br><br>
        <input type="submit" name="tombol" value="+">
        <input type="submit" name="tombol" value="-">
        <input type="submit" name="tombol" value="x">
        <input type="submit" name="tombol" value="/">
        <br><br>
    </form>
    <?php
    $n1 = $_POST['nilai1'];
    $n2 = $_POST['nilai2'];
    $tombol = $_POST['tombol'];
    if ($n1 == '' || $n2 == '') {
        echo '<input type="text" value= ' . 0 . '>';
    } else if ($tombol == '+') {
        function tombol($n1, $n2)
        {
            $hasil = $n1 + $n2;
            return $hasil;
        }
        echo '<input type="text" value= ' . tombol($n1, $n2) . '>';
    } else if ($tombol == '-') {
        function tombol($n1, $n2)
        {
            $hasil = $n1 - $n2;
            return $hasil;
        }
        echo '<input type="text" value= ' . tombol($n1, $n2) . '>';
    } else if ($tombol == 'x') {
        function tombol($n1, $n2)
        {
            $hasil = $n1 * $n2;
            return $hasil;
        }
        echo '<input type="text" value= ' . tombol($n1, $n2) . '>';
    } else if ($tombol == '/') {
        function tombol($n1, $n2)
        {
            $hasil = $n1 / $n2;
            return $hasil;
        }
        echo '<input type="text" value= ' . tombol($n1, $n2) . '>';
    }
    ?>
</body>

</html