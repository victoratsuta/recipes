@extends('layouts.main')

@section('content')

    <div class=" wrapper-page">
        <div class="card-body">


            <h2 class="text-muted text-center font-18"><b>Ingredients</b></h2>

            <div class="p-3">

                <ul class="list-group">
                    @foreach($ingredients as $ingredient)

                        <li class="list-group-item"> {{ $ingredient }}</li>

                    @endforeach
                </ul>

            </div>

        </div>


@endsection
