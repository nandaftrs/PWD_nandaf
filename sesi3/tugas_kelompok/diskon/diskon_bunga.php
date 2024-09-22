<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon dan Bunga</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Kalkulator Diskon dan Bunga</h2>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post">
                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah Awal</label>
                    <input type="number" step="any" class="form-control" id="amount" name="amount" required>
                </div>
                <div class="mb-3">
                    <label for="rate" class="form-label">Persentase (%)</label>
                    <input type="number" step="any" class="form-control" id="rate" name="rate" required>
                </div>
                <div class="mb-3">
                    <label for="operation" class="form-label">Operasi</label>
                    <select class="form-select" id="operation" name="operation" required>
                        <option value="discount">Diskon</option>
                        <option value="interest">Bunga</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Hitung</button>
            </form>
            <hr>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $amount = $_POST['amount'];
                $rate = $_POST['rate'];
                $operation = $_POST['operation'];
                $result = 0;

                if ($operation == "discount") {
                    $result = $amount - ($amount * ($rate / 100));
                    echo "<div class='alert alert-success'>Setelah diskon $rate%, jumlah akhir adalah $result</div>";
                } elseif ($operation == "interest") {
                    $result = $amount + ($amount * ($rate / 100));
                    echo "<div class='alert alert-success'>Setelah menerapkan bunga $rate%, jumlah akhir adalah $result</div>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>