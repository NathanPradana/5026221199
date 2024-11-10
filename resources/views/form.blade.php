<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert() {
            alert("Selamat Anda dapat undian 1 Milliyar");
        }

        function validateform() {
            var nrp = document.getElementById("nrpku");

            if (nrp.value.length != 10) {
                alert("NRP harus 10 Digit");
                nrp.focus();
                return false;
            }

            if (isNaN(nrp.value)) {
                alert("NRP harus berupa angka");
                nrp.focus();
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <form action="{{ url('your-action-url') }}" method="get" onsubmit="return validateform();">
            <div class="input-group">
                <span class="input-group-text">NRP</span>
                <input type="text" class="form-control" placeholder="10 Digit NRP" name="NRP" id="nrpku">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text">Nama</span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="Nama" id="nm">
            </div>

            <div class="input-group mt-3">
                <span class="input-group-text">Umur</span>
                <input type="text" class="form-control" placeholder="Umur Sekarang" name="umur" id="umr">
            </div>

            <div class="mt-3">
                <input type="reset" class="btn btn-warning" value="Reset">
                <input type="submit" class="btn btn-success" value="Kirim">
                <input type="button" class="btn btn-secondary" value="Alert" onclick="showalert();">
            </div>
        </form>
    </div>
</body>
</html>
