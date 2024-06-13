<?= $this->extend('Layouts/main') ?>

<?= $this->section('title') ?>
<?php echo $title; ?>
<?= $this->endSection() ?>

<?= $this->section('css') ?>


<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6><?php echo $title; ?></h6>
              <a href="<?php echo route_to('parents'); ?>" class="btn bg-gradient-dark mb-0"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              
            </div>
          </div>
        </div>
      </div>



<?= $this->endSection() ?>




<?= $this->section('js') ?>


<?= $this->endSection() ?>