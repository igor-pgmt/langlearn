<div class="col-md-12 well" id="<?= "div".$i ?>" style="padding: 10px;">
        <div class="row">
            <div class="col-lg-12 text-right"><a href="javascript:void(0)" id="<?= $i ?>"><i class="fa fa-times" aria-hidden="true"></i></a></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input type="text" id="candidateform-<?php echo $i?>-name" class="form-control" name="CandidateForm[contact][<?php echo $i?>][name]" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Relation</label>
                    <input type="text" id="candidateform-<?php echo $i?>-relation" class="form-control" name="CandidateForm[contact][<?php echo $i?>][relation]">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label">Phone No</label>
                    <input type="text" id="candidateform-<?php echo $i?>-phone_no" class="form-control" name="CandidateForm[contact][<?php echo $i?>][phone_no]">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" id="candidateform-<?php echo $i?>-email" class="form-control" name="CandidateForm[contact][<?php echo $i?>][email]">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="control-label">City</label>
                    <input type="text" id="candidateform-<?php echo $i?>-city" class="form-control" name="CandidateForm[contact][<?php echo $i?>][city]">
                </div>
            </div>
        </div>
    </div>

<?php
$this->registerJs("
    $(document).on('click', '#".$i."', function(){
        $('#div".$i."').remove();
    });
");
?>
