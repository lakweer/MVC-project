<?php $this->start('body'); ?>
  <h2 class="text-center">My Packages</h2>
  <table class="table table-striped table-condensed table-bordered table-hover">
    <thead>
      <th>Package Name</th>
      <th>Package Type</th>
      <th>Amount</th>
      <th></th>
    </thead>
    <tbody>
      <?php foreach($this->packages as $package): ?>
        <tr>
          <td>
            <a href="<?=PROOT?>packages/details/<?=$package->id?>">
              <?= $package->package_name; ?>
            </a>
          </td>
          <td><?= $package->package_type?></td>
          <td><?= $package->amount;?></td>
          <td>
            <a href="<?=PROOT?>packages/edit/<?=$package->id?>" class="btn btn-info btn-xs">
              <i class="glyphicon glyphicon-pencil"></i> Edit
            </a>
            <a href="<?=PROOT?>packages/delete/<?=$package->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure?')){return false;}">
              <i class="glyphicon glyphicon-remove"></i> Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php $this->end(); ?>