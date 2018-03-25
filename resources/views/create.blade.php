@extends('layouts.main')

@section('content')

    <div class="card wrapper-page">
        <div class="card-body">


            <h4 class="text-muted text-center font-18"><b>Create Recipe</b></h4>

            <div class="p-3">
                <form class="form-horizontal m-t-20 create-user-form" method="POST" action="{{ route('create.store') }}">

                    {{ csrf_field() }}

                    <div class="form-group row">
                        <div class="col-12">
                            <input id="name" type="text" class="form-control" name="name"
                                   value="{{ old('name') }}" required autofocus
                                   placeholder="Name">

                            @if ($errors->has('name'))
                                <span class="help-block">
    <strong>{{ $errors->first('name') }}</strong>
    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group row description-container">
                        <div class="col-12">

                            <textarea name="description" class="form-control" required placeholder="Description">{{old('description') }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
    <strong>{{ $errors->first('description') }}</strong>
    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-12">

                            <input  type="text" class="form-control ingredient-input" name="ingredients[]"
                                   value="{{ old('ingredients') }}" required placeholder="Ingredient">

                        </div>
                    </div>


                    <div class="form-group  row m-t-20 create-button-container">

                        <div class="col-12 ingredient-mb-2">
                            <button type="button" class="btn btn-success btn-lg add-ingredient">
                                Add ingredient
                            </button>
                        </div>

                        <div class="col-12 ">
                            <button class="btn btn-info btn-block waves-effect waves-light send-recipe" type="submit">Create
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

        <script type="text/html" id="ingredients-input">

            @include('_ingredients-input')

        </script>

@endsection
