$(function () {

    var $ingredientsInput = $('#ingredients-input').html();
    var $createButtonContainer = $('.create-button-container');
    var $addIngredient = $('.add-ingredient');
    var $sendRecipe = $('.send-recipe');
    var $ingredientInput =$('.ingredient-input');
    
    $($addIngredient).click(function () {

        $createButtonContainer.before($ingredientsInput)

    })

    $(document).on('click', '.remove-ingredient', function () {
        $(this).closest('div').parent().remove();
    })

    $($sendRecipe).click(function () {
        
        $($ingredientInput).each(function () {
            if ($(this).val() == '') {
                showAlertEmptyField();
            }
        })

        $sendRecipe.submit();
    })
    
    function showAlertEmptyField() {
        swal(
            'Toy have unfilled ingredient field',
            'Please fill all field or remove empty',
            'warning'
        )
    }
})