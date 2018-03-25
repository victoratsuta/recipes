$('.table').DataTable();

var $ingredients = $('#ingredients');
var $sendRecipes = $('.send-recipes');

$('.recipe-tr').click(function (e) {
    $checkbox = jQuery(this).find('[type=checkbox]');

    console.log($(e.target));

    if ($(e.target).is('input') || $(e.target).is('i') || $(e.target).is('button')) {
        return
    }

    if ($checkbox.prop('checked') == true) {
        $checkbox.prop('checked', false);
    } else {
        $checkbox.prop('checked', true);
    }

})

$($sendRecipes).click(function () {

    var pickedRecipe = 0;

    $('.recipe').each(function () {
        if ($(this).prop('checked') == true) {
            pickedRecipe++;
        }
    })

    if (pickedRecipe === 0) {

        showAlertNoRecipe();

    } else {
        $ingredients.submit();

    }

})

function showAlertNoRecipe() {
    swal(
        'Choose Recipes',
        'Not one recipe was chosen',
        'warning'
    )
}