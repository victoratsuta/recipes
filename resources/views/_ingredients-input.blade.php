<div class="form-group row ingredients-input-container">
    <div class="col-12">
        <table class="ingredients-table">
            <tr>
                <td>
                    <input type="text" class="form-control ingredient-input" name="ingredients[]"
                           value="{{ !empty($ingredient) ? $ingredient : old('ingredients') }}" required placeholder="Ingredient">
                </td>
                <td class="ingredients-remove">
                    <button type="button" class="btn btn-danger btn-lg remove-ingredient">
                        Remove
                    </button>
                </td>
            </tr>
        </table>

    </div>
</div>