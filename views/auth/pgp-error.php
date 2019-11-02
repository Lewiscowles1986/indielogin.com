<?php $this->layout('layout', ['title' => $title]) ?>

<div class="container container-narrow">

  <?php if($error): ?>
    <div class="alert alert-warning"><?= $error ?></div>
  <?php endif ?>

  <p>Please go back to the application and try again.</p>

  <?php if(isset($client_id) && \p3k\url\is_url($client_id)): ?>
    <p><a href="<?= e($client_id) ?>"><?= e(\p3k\url\display_url($client_id)) ?></a></p>
  <?php endif ?>

</div>
