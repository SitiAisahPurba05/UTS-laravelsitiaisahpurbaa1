<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">UTS Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <h1>Halaman Produk</h1>

  <div class="row">
    <div class="col-sm-6">
      <h4>Tabel Produk</h4>
  </div>
    <div class="col-sm-6" style="text-align: right;">
    <a href="/formtambahproduk" class="btn btn-info btn-sm">Tambah Produk</a>
  </div>
</div>
      <div class="col-sm-12">
      <table class="table table-danger table-sm table-hover table-striped table-border text-center">
      </div>
    </div>
        <thead>
          <tr>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jenis Produk</th>
            <th colspan="2">Harga</th>
          </tr>
        </thead>
      </tbody>
      <?php $nilai_awal=0;?>
      @while ($nilai_awal<$jenis)

      </tr>
      <td>{{$kode[$nilai_awal]}}</td>
      <td>{{$nama[$nilai_awal]}}</td>
      <td>Sembako</td>
      <td>{{$harga[$nilai_awal]}}</td>
    </tr>
    <?php $nilai_awal++?>
    @endwhile
      </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </div>
</body>
</html>