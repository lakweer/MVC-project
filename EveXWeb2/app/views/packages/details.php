<?php $this->setSiteTitle($this->package->displayName()); ?>
<?php $this->start('body');?>
<div class="col-md-8 col-md-offset-2 well">
  <a href="<?=PROOT?>packages" class="btn btn-xs btn-default">Back</a>
  <h2 class="text-center"><?=$this->package->displayName()?></h2>
  <div class="col-md-6">
    <p><strong>Package Name: </strong><?=$this->package->package_name?></p>
    <p><strong>Package Type: </strong><?=$this->package->package_type?></p>
    <p><strong>Amount: </strong><?=$this->package->amount?></p>
    <p><strong>Description: </strong><?=$this->package->description?></p>
  </div>
</div>
<?php $this->end();?>