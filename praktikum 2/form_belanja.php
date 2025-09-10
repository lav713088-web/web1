<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
</head>

<body>
    <h2>Belaja online</h2>
    <hr>
    <div class="row">
        <div class="col-12 col-md-8">
            <form action="proses_belanja.php" method="">
            <div class="form-group row">

        </div>
        <form>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama kustamer</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama produk" class="col-4 col-form-label">Nama produk</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="nama produk" name="nama produk" type="text" class="form-control"
                            aria-describedby="nama produkHelpBlock">
                    </div>
                    <span id="nama produkHelpBlock" class="form-text text-muted">jumlah</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih produk" id="pilih produk_0" type="radio" class="custom-control-input"
                            value="rabbit">
                        <label for="pilih produk_0" class="custom-control-label">Tv</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih produk" id="pilih produk_1" type="radio" class="custom-control-input"
                            value="kulkas">
                        <label for="pilih produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilih produk" id="pilih produk_2" type="radio" class="custom-control-input"
                            value="mesin cuci">
                        <label for="pilih produk_2" class="custom-control-label">Mesin cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
</body>

</html>