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
use kartik\switchinput\SwitchInput;

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
        "select2:select" => "function() { editside($(this).children(':selected'), 'edit'); }",
    ],
]);
?>
<?php
echo '<br /><br />';

echo Select2::widget([
    'name' => 'viewside',
    'data' => $this->params['infinitives']['sr'],
    'options' => [
        'placeholder' => 'View',
        'multiple' => false,
    ],
    'pluginEvents' => [
        "select2:select" => "function() { editside($(this).children(':selected'), 'view'); }",
    ],
]);
?>
<?php
echo '<br /><br />';

echo SwitchInput::widget([
    'name' => 'viewside',
    'value' => $conjothers,
    'pluginOptions' => [
        'onText' => 'Hide conjunctions',
        'offText' => 'Show conjunctions',
        'onColor' => 'default',
        'offColor' => 'default',
        'handleWidth' => '130px',
    ],
    'pluginEvents' => [
        "switchChange.bootstrapSwitch" => "function(event, state) {
            switch (state) {
                case true:
                var vis = 'visible';
                var dis = 'block';
                var cookiesstate = true;
                break;
                case false:
                var vis = 'hidden';
                var dis = 'none';
                var cookiesstate = false;
                break;
            }

            conjothers = document.getElementsByName('conjunctions-others');
            conjothers.forEach(function(element) {
            element.style.visibility=vis;
            element.style.display=dis;
            });
            setCookie(cookiesstate);
        }",

    ],

]);
?>

<script>
 function editside(a, b)
{
	 verb = a[0].value;

		$.ajax({
		url: '/verb-sr/editadd?glagol=' + verb,
		type: 'POST',
		data: {'param': 'verb', 'paramval': verb},
		success: function(id){
            switch (b){
                case 'edit':
                    if (id !== 'noverb') {
                        window.location.href = '/verb-sr/update?id='+id;
                    } else {
                        window.location.href = '/verb-sr/create?infinitive_sr='+verb;
                    }
                break;
                case 'view':
                    window.location.href = '/verb-sr/view?id='+id;
                break;
                }
        },
		error: function(){
			window.location.href = '/verb-sr/create?infinitive_sr='+verb;
		}
	});
}
</script>
<script>
function getCookie() {
    $.ajax({
        url: '/verb-sr/get-cookies',
        type: 'POST',
        async: false,
        success: function(result){
            conjothers=result;
        },
        error: function(err){
            conjothers='ajax error';
        }
    });

    return conjothers;
}

 function setCookie(state)
{
    $.ajax({
        url: '/verb-sr/set-cookies?state=' + state,
        type: 'POST',
        error: function(err){
            alert('err');
        }
    });
}
</script>
</div>