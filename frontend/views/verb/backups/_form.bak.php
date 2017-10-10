<script>





// $('#contact-form').yiiActiveForm('add', {       id: 'address',        name: 'address',        container: '.field-address',        input: '#address',        error: '.help-block',        validate:  function (attribute, value, messages, deferred, $form) {            yii.validation.required(value, messages, {message: "Validation Message Here"});        }    });

// }


</script>
<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
 $this->registerJs('$("#butt").on("click",function(){

            // Container <form> where dynamic content will be placed
            var container = document.getElementById("contact-form");

            //counter for element names
            if (typeof i !== \'undefined\') { i = i+1;} else { i = 0;}

            // Create an <div> element, set its type and name attributes
            var div = document.createElement("div");
            div.className += "form-group field-verb-conjunction required";
            container.appendChild(div);

            // create label
            var label = document.createElement("label");
            label.innerHTML = "Member " + (i);
            label.className += "control-label";
            label.setAttribute(\'for\', "verb-conjunction");


            var input = document.createElement("textarea");
            input.type = "text";
           // input.name = "Verb[conjunction]" + i;
            input.name = "Verb[conjunction]";
            input.style.maxWidth = "40%";
            input.style.cssFloat  = "left";
            input.className += "form-control";
            input.id = "verb-conjunction";
            input.setAttribute(\'aria-required\', "true");
            input.setAttribute(\'aria-invalid\', "true");

                var  remove  = document.createElement("button");
                remove.innerHTML = "Remove";
                remove.type = "button";
                remove.className += "btn btn-danger";
                remove.addEventListener ("click", function() {
this.parentNode.parentNode.removeChild(this.parentNode);
});

                div.appendChild(label);
                div.appendChild(input);
                div.appendChild(remove);
                div.className += " form-group";
                // Append a line break
                container.appendChild(document.createElement("br"));








$("#contact-form").yiiActiveForm("add", {
    id: "verb-conjunction",
    name: "Verb[conjunction]",
    container: ".field-address",
    input: "#verb-conjunction",
    error: ".help-block",
    validate:  function (attribute, value, messages, deferred, $form) {
        yii.validation.required(value, messages, {message: "Validation Message Here"});
    }
            });





}





    );');
/* @var $this yii\web\View */
/* @var $model frontend\models\Verb */
/* @var $form yii\widgets\ActiveForm */

//echo Html::button('Button 3', [ 'id' => 'butt', 'class' => 'btn btn-primary',  'onclick' => 'myFunction();']);

?>

<div class="verb-form">

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

    <?= $form->field($model, 'conjunction')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'ohters')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'meanings')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'examples')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'related')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
        </div>
    <?php ActiveForm::end(); ?>

</div>
<?php echo Html::button('Button 3', [ 'id' => 'butt', 'class' => 'btn btn-primary']); ?>

<form id="bookForm" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-1 control-label">Book</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="book[0].title" placeholder="Title" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="book[0].isbn" placeholder="ISBN" />
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" name="book[0].price" placeholder="Price" />
        </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <!-- The template for adding new field -->
    <div class="form-group hide" id="bookTemplate">
        <div class="col-xs-4 col-xs-offset-1">
            <input type="text" class="form-control" name="title" placeholder="Title" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="isbn" placeholder="ISBN" />
        </div>
        <div class="col-xs-2">
            <input type="text" class="form-control" name="price" placeholder="Price" />
        </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-5 col-xs-offset-1">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    var titleValidators = {
            row: '.col-xs-4',   // The title is placed inside a <div class="col-xs-4"> element
            validators: {
                notEmpty: {
                    message: 'The title is required'
                }
            }
        },
        isbnValidators = {
            row: '.col-xs-4',
            validators: {
                notEmpty: {
                    message: 'The ISBN is required'
                },
                isbn: {
                    message: 'The ISBN is not valid'
                }
            }
        },
        priceValidators = {
            row: '.col-xs-2',
            validators: {
                notEmpty: {
                    message: 'The price is required'
                },
                numeric: {
                    message: 'The price must be a numeric number'
                }
            }
        },
        bookIndex = 0;

    $('#bookForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'book[0].title': titleValidators,
                'book[0].isbn': isbnValidators,
                'book[0].price': priceValidators
            }
        })

        // Add button click handler
        .on('click', '.addButton', function() {
            bookIndex++;
            var $template = $('#bookTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', bookIndex)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="title"]').attr('name', 'book[' + bookIndex + '].title').end()
                .find('[name="isbn"]').attr('name', 'book[' + bookIndex + '].isbn').end()
                .find('[name="price"]').attr('name', 'book[' + bookIndex + '].price').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#bookForm')
                .formValidation('addField', 'book[' + bookIndex + '].title', titleValidators)
                .formValidation('addField', 'book[' + bookIndex + '].isbn', isbnValidators)
                .formValidation('addField', 'book[' + bookIndex + '].price', priceValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('.form-group'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#bookForm')
                .formValidation('removeField', $row.find('[name="book[' + index + '].title"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].isbn"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].price"]'));

            // Remove element containing the fields
            $row.remove();
        });
});
</script>