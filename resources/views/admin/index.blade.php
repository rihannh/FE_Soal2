<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Halo {{ Auth::user()->name }}</h2>
        <br><br>
        <a href="{{ route('artikel.create') }}" class="btn btn-primary"><b>+</b> Artikel</a>
        <br><br>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Action</th>
            </tr>
            @forelse ($items as $artikel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artikel->title_artikel }}</td>
                    <td>{{ $artikel->isi_artikel }}</td>
                    <td>
                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('artikel.destroy', $artikel->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="12" class="text-center">Data Belum Ada</td>
                </tr>
            @endforelse
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
