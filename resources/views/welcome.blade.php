<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel Barcode System</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="card">
        <div class="card-body">
            {!! DNS1D::getBarcodeHTML("https://github.com/arabic0513", "C128",1.4,22) !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            {!! DNS2D::getBarcodeHTML("https://github.com/arabic0513", 'QRCODE') !!}
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            {!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T',3,33,'green', true); !!}
        </div>
    </div>
</div>
<a href="https://github.com/arabic0513" class="d-flex justify-content-center fs-1">https://github.com/arabic0513</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
