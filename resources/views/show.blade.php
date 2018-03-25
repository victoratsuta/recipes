@extends('layouts.main')

@section('content')

    <div class=" wrapper-page">
        <div class="card-body">


            <h2 class="text-muted text-center font-18"><b>{{ $recipe->name }}</b></h2>

            <div class="p-3">

                <ul class="list-group">
                    <li class="list-group-item">Name  - {{ $recipe->name }}</li>
                    <li class="list-group-item">Description  - {{ $recipe->description }}</li>
                    <li class="list-group-item">Ingredients  - {{ $recipe->ingredients }}</li>
                </ul>

            </div>

        </div>


@endsection
