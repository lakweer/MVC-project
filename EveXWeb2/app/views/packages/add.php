<?php $this->setSiteTitle("Add A Package"); ?>
<?php $this->start('body');?>
<div class="col-md-8 col-md-offset-2 well">
  <h2 class="text-center">Add a Package</h2>
  <hr>
  <?php $this->partial('packages','form');?>
</div>
<?php $this->end();?>