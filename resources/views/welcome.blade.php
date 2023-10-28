<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <a href="{{route('artikel.index')}}" class="btn btn-success mb-3">Artikel</a>
                    <div class="card">
                        <div class="card-header">{{ __('DATA') }}</div>
                    </div>

                </div>
            </div>
        </div>
    @endsection

</body>

</html>
