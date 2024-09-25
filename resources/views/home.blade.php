@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
            @foreach ($movies as $movie)
                <div class="col-3 m-3">
                    <div class="card h-100 p-3 m-3 shadow">
                        <div>
                            <span>Titolo:</span>{{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span>Titolo Originale:</span>{{ $movie->original_title }}
                            </li>
                            <li class="list-group-item">
                                <span>Lingua Originale:</span>{{ $movie->nationality }}
                            </li>
                            <li class="list-group-item">
                                <span>Voto:</span>{{ $movie->vote }}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
    </div>
</div>

@endsection