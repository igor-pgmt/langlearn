
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="verb-form">

    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'fieldConfig' => ['options' => [],
    //'errorOptions' => ['class' => '' ,'encode' => false]
    ],]); ?>

    <?= $this->render('_conjunctions.php', ['model'=>$model,'form'=>$form]) ?>

    <?= $this->render('templates/others.php', ['model'=>$model,'form'=>$form]) ?>



    <?= Html::button('Существительное', [ 'id' => 'addNoun', 'class' => 'btn btn-primary', 'onclick' => 'addPoS();']); ?>

    <?= $form->field($model, 'meanings')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'examples')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'related')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
        <div class="col-xs-1">
            <button type="button" class="btn btn-default addButton"><i class="fa fa-plus">add</i></button>
        </div>
    <?php ActiveForm::end(); ?>

</div>

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
            <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus">remove</i></button>
        </div>
    </div>

    <script>
$(document).ready(function() {
    // var titleValidators = {
    //         row: '.col-xs-4',   // The title is placed inside a <div class="col-xs-4"> element
    //         validators: {
    //             notEmpty: {
    //                 message: 'The title is required'
    //             }
    //         }
    //     },
    //     isbnValidators = {
    //         row: '.col-xs-4',
    //         validators: {
    //             notEmpty: {
    //                 message: 'The ISBN is required'
    //             },
    //             isbn: {
    //                 message: 'The ISBN is not valid'
    //             }
    //         }
    //     },
    //     priceValidators = {
    //         row: '.col-xs-2',
    //         validators: {
    //             notEmpty: {
    //                 message: 'The price is required'
    //             },
    //             numeric: {
    //                 message: 'The price must be a numeric number'
    //             }
    //         }
    //     },
        bookIndex = 0;



$('#contact-form')
        // Remove button click handler
        .on('click', '.removeButton', function() {

            $row  = $(this).parents('tr'),
            //    index = $row.attr('data-book-index');
/*
            // Remove fields
            $('#contact-form')
                .formValidation('removeField', $row.find('[name="book[' + index + '].title"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].isbn"]'))
                .formValidation('removeField', $row.find('[name="book[' + index + '].price"]'));*/

            // Remove element containing the fields
            $row.remove();
        });



$('#contact-form')

        .on('click', '.addButton3', function() {

           if (typeof PoSIndex !== 'undefined') { PoSIndex++; } else {PoSIndex=1;};

            var $tr = $(this).closest('#template');
            var $cntr = $tr.attr('counter');
            // $bef = $('#bookTemplate'),
            var $clone = $tr.clone()
                                //.removeClass('hide')
                                //.removeAttr('id')
                                .attr('counter', (PoSIndex+1));
                                //.attr('id', 'clone');
            $clone.find(':text').val('');
            $tr.after($clone);

            $clone
                .find('[name="Verb[others][nameOfPoS][' + $cntr + ']"]').attr('name', 'Verb[others][nameOfPoS][' + (PoSIndex+1) + ']').attr('id', 'verb-others-nameofpos-'+ (PoSIndex+1)).end()
                .find('[name="Verb[others][PoS][' + $cntr + ']"]').attr('name', 'Verb[others][PoS][' + (PoSIndex+1) + ']').attr('id', 'verb-others-nameofpos-'+ (PoSIndex+1)).end()
            //    .find('[name="removeButton[1]"]').attr('name', 'removeButton[' + (PoSIndex+1) + ']').end();


        });

    });


function addPoS() {



           if (typeof PoSIndex !== 'undefined') { PoSIndex++; } else {PoSIndex=1;};
            //PoSIndex++;
/*            var $tr =$(this).closest('#template');

            // $bef = $('#bookTemplate'),
            var $clone = $tr.clone();
                                //.removeClass('hide')
                                //.removeAttr('id')
                                //.attr('data-book-index', PoSIndex)
                                //.attr('id', 'clone');
            $clone.find(':text').val('');
            $tr.after($clone);

            $clone
                .find('[name="Verb[others][nameOfPoS][1]"]').attr('name', 'Verb[others][nameOfPoS][' + (PoSIndex+1) + ']').end()
            //    .find('[name="Verb[others][PoS][1]"]').attr('name', 'Verb[others][PoS][' + (PoSIndex+1) + ']').end()
            //   .find('[name="removeButton[1]"]').attr('name', 'removeButton[' + (PoSIndex+1) + ']').end();
*/
// $("#others").append($("#others")
//     .find("#template").clone().removeAttr("id")
//     .find("input").val("").end());


// var $clone = $tr.clone().attr('counter', (PoSIndex+1));
// var $cntr = $tr.attr('counter');
//             $clone
//                 .find('[name="Verb[others][nameOfPoS][' + $cntr + ']"]').attr('name', 'Verb[others][nameOfPoS][' + (PoSIndex+1) + ']').attr('id', 'verb-others-nameofpos-'+ (PoSIndex+1)).end()
//                 .find('[name="Verb[others][PoS][' + $cntr + ']"]').attr('name', 'Verb[others][PoS][' + (PoSIndex+1) + ']').attr('id', 'verb-others-nameofpos-'+ (PoSIndex+1)).end()

// $tr.after($clone);

}





</script>


<?php
print_r($model->conjunction);

echo '<br />';
echo '<br />';
echo '<br />';


// foreach ($model->conjunction as $value) {
//     $i=0;
//     foreach ($value as $key2 => $value2) {
//         $i++;
//     echo 'key='.$key2.'  '.'value='.$value2.'<br />';
//     echo $form->field($model, 'conjunction[s".$i."]')->textarea(['rows' => 3,  'value' => $value2]);
//     }
// }