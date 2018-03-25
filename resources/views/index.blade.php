@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-12">
            <form action="{{ route('show.ingredients') }}" method="POST" id="ingredients">
                {{ csrf_field() }}

                <table class="table table-striped">
                    <thead>
                    <td>Recipe Name</td>
                    <td></td>
                    <td></td>
                    </thead>
                    <tbody>

                    @foreach($recipes as $recipe)
                        <tr class="recipe-tr">
                            <td>{{ $recipe->name }}</td>
                            <td class="form-container">

                                <a href="{{ route('show.index', ['recipeId' => $recipe->id]) }}">
                                    <button type="button" class="btn btn-success btn-lg">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>

                                <a href="{{ route('update.form', ['recipeId' => $recipe->id]) }}">
                                    <button type="button" class="btn btn-primary btn-lg">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>

                                <a href="{{ route('delete', ['recipeId' => $recipe->id]) }}">
                                    <button type="button" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>


                            </td>
                            <td>
                                <input type="checkbox"
                                       class="recipe"
                                       name="recipe[]"
                                       value="{{ $recipe->id }}"
                                />
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <a href="{{ route('create.form') }}">
                <button type="button" class="btn btn-success btn-lg">
                    <i class="fa fa-plus"></i>
                </button>
            </a>

            <button type="button" class="btn btn-success btn-lg send-recipes">
                General list of ingredients
            </button>

        </div>
    </div>

@endsection
