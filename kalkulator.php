<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan dari form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    
    // Lakukan operasi matematika berdasarkan operator yang dipilih
    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            $operation = 'Penjumlahan';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operation = 'Pengurangan';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operation = 'Perkalian';
            break;
        case 'divide':
            if ($num2 == 0) {
                $result = "Error, pembagian dengan nol tidak bisa dilakukan.";
            } else {
                $result = $num1 / $num2;
            }
            $operation = 'Pembagian';
            break;
        default:
            $result = "Operasi tidak valid.";
            break;
    }
} else {
    // Redirect jika form tidak diakses melalui submit button
    header("Location: calculator.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <p>Operasi: <?php echo $operation; ?></p>
    <p>Hasil: <?php echo $result; ?></p>
</body>
</html>
