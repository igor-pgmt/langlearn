<style>
.editside {  /* селектор блока, который будет оставаться на месте */
    position: fixed;
    z-index: 101;
    margin: -75px -220px;
    width: 185px;
}
</style>
<div class="editside">

<?php
use kartik\select2\Select2;
echo '<br /><br /><br /><br /><br />';

echo Select2::widget([
    'name' => 'editside',
    'data' => $this->params['infinitives']['sr'],
    'options' => [
        'placeholder' => 'Edit/Add',
        'multiple' => false,
    ],
    'pluginOptions' => [
        'tags' => true,
    ],
    'pluginEvents' => [
        "select2:select" => "function() { asend($(this).children(':selected')); }",
    ],
]);
?>
<script>
 function asend(a)
{
	 verb = a[0].value;

		$.ajax({
		url: '/verb-sr/sex2?glagol=' + verb,
		type: 'POST',
		data: {'param': 'verb', 'paramval': verb},
		success: function(id){
			if (typeof id !== 'undefined') {
				window.location.href = '/verb-sr/update?id='+id;
			}
		},
		error: function(){
			window.location.href = '/verb-sr/create?infinitive_sr='+verb;
		}
	});
}
</script>
</div>