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
        <form action="{{route('artikel.update' , $item->id)}}" method="POST">
            @csrf
            @method('PUT')
           <div class="form-group">
                <label for="title_artikel">Judul Artikel</label>
                <input type="text" class="form-control" name="title_artikel" placeholder="Judul Artikel" value="">
           </div> <br>
           <div class="form-group">
                <label for="isi_artikel">Isi Artikel</label>
                <textarea name="isi_artikel" class="form-control" cols="30" rows="10"></textarea>
           </div>
           <br>
           <button type="submit" class="btn btn-success">Tambahkan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>