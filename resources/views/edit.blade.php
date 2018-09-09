<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Form Edit</h3>
          <form class="form-horizontal" action="/barang/act_edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $data->no }}">
            <div class="form-group">
              <label class="control-label" for="NamaBarang">Nama Barang :</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaBarang" value="{{ $data->nama_barang }}" name="NamaBarang">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="Stok">Stok :</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="Stok" value="{{ $data->stok }}" name="Stok">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="Harga">Jumlah :</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="Harga" value="{{ $data->harga }}" name="Harga">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Update</button>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
