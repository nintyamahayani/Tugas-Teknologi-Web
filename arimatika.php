<?php

$u1 = "";
$beda = "";
$nilai_n = "";
$hasil = "";
$baris = "";
$barishasil = "";


if (isset($_POST['submit'])) {

    $u1 = $_POST["u1"];
    $beda = $_POST["beda"];
    $nilai_n = $_POST["nilai_n"];

    $a = $u1;
    $b = $beda;
    $n = $nilai_n;

    $hasil = $a + ($n - 1) * $b;

    for ($i = 1; $i < $n + 1; $i++) {
        $baris = $a + ($i - 1) * $b;
        $barishasil .= $baris . " ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Barisan Arimatika</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="#" class="bg-white form-container p-3" id="forminput">
                    <h2><b>Barisan Aritmatika</b></h2>
                    <div class="form-group" style="background-color:skyblue">
                        <label for="u1">Suku pertama (a) atau (U1)</label>
                        <input type="text" class="form-control" value="<?php echo $u1; ?>" id="u1" placeholder="Masukkan suku pertama" name="u1" required />
                    </div>
                    <div class="form-group" style="background-color:skyblue">
                        <label for="beda">Beda (b)</label>
                        <input type="text" class="form-control" value="<?php echo $beda; ?>" id="beda" placeholder="Masukkan beda" name="beda" required />
                    </div>

                    <div class="form-group" style="background-color:skyblue">
                        <label for="nilai_n">Mencari suku ke-</label>
                        <input type="text" class="form-control" value="<?php echo $nilai_n; ?>" id="nilai_n" placeholder="Masukkan suku ke-berapa yang akan dicari" name="nilai_n" required />
                    </div>
                    <br><button type="submit" class="btn btn-primary btn-block daftar-btn" name="submit">Hitung</button></br>
                    <div class="form-group" style="background-color:skyblue">
                        <h4 style="text-align: center;"><b>Hasil</b></h4>
                    </div>
                    <div class="form-group" style="background-color:skyblue">
                        <h4 style="text-align: center;">Barisan aritmatika</h4>
                        <h4 style="background-color:pink; color: white;; text-align: center; border-radius: 4px;"><?php echo $barishasil; ?></h4>
                    </div>
                    <div class="form-group" style="background-color:skyblue">
                        <h4 style="text-align: center;">Nilai suku ke-n (Un)</h4>
                        <h4 style="background-color:pink; color: white;; text-align: center; border-radius: 4px;"><?php echo $hasil; ?></h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>