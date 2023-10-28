<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buat Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Buat Artikel Baru</h1>
        <br><br>
        <form class="form-edithadiah" action="{{route('artikel.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="mb-2 fw-medium" for="floatingInput">Judul</label>
                <input type="text" class="form-control" id="floatingInput" required name="title_artikel">
            </div>
            <div class="mb-3">
                <label class="mb-2 fw-medium" for="floatingInput">Isi</label>
                <textarea type="text" class="form-control" id="floatingInput" name="isi_artikel" cols="30" rows="10"></textarea>
            </div>
          
           
            <div class="mt-4 justify-content-end d-flex gap-4">
                <a href="{{route('artikel.index')}}" class="btn btn-secondary px-4">Batal</a>
                <button class="btn btn-secondary px-4">Simpan</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>