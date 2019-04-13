<form class="form" action=<?=$this->postAction?> method="post">
  <div class="bg-danger form-errors"><?=$this->displayErrors?></div>
  <?= inputBlock('text','Company Name','company_name',$this->package->company_name,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Package Name','package_name',$this->package->package_name,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Package Type','package_type',$this->package->package_type,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Description','description',$this->package->description,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Email','email',$this->package->email,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Phone 1','phone1',$this->package->phone1,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <?= inputBlock('text','Phone 2','phone2',$this->package->phone2,['class'=>'form-control'],['class'=>'form-group col-md-5']);?>
  <?= inputBlock('text','Amount','amount',$this->package->amount,['class'=>'form-control'],['class'=>'form-group col-md-6']);?>
  <div class="col-md-12 text-right">
    <a href="<?=PROOT?>packages" class="btn btn-default">Cancel</a>
    <?= submitTag('Save',['class'=>'btn btn-primary'])?>
  </div>
</form>