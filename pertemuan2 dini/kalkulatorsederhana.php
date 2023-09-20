<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form action="" method="post">
        <label for="angka1">Angka Pertama:</label>
        <input type="number" id="angka1" name="angka1" required>

        <label for="operator">Operator</label>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="angka2">Angka Kedua:</label>
        <input type="number" id="angka2" name="angka2" required>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operator = $_POST["operator"];
        $hasil = '0';

        switch ($operator) {
            case "+":
                $hasil = $angka1 + $angka2;
                break;
            case "-":
                $hasil = $angka1 - $angka2;
                break;
            case "*":
                $hasil = $angka1 * $angka2;
                break;
            case "/":
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "<p class='error'>Pembagian dengan nol tidak valid.</p>";
                }
                break;
        }
        echo "<p>Angka pertama ($angka1) $operator Angka kedua ($angka2) adalah $hasil.</p>";
    }
    ?>
</body>
</html>
