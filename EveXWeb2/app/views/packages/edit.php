<?php $this->setSiteTitle('Edit Package')?>
<?php $this->start('body')?>
<div class="col-md-8 col-md-offset-2 well">
  <h2 class="text-center">Edit <?=$this->package->displayName()?></h2>
  <?php $this->partial('packages','form')?>
</div>
<?php $this->end()?>