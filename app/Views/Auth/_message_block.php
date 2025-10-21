<?php if (session()->has('message')) : ?>
	<div class="alert alert-success">
		<div class="ms-3"><?= session('message') ?></div>
	</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<div class="alert alert-danger">
		<div class="ms-3"><?= session('error') ?></div>
	</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<ul class="alert alert-danger">
	<?php foreach (session('errors') as $error) : ?>
		<li class="ms-3"><?= $error ?></li>
	<?php endforeach ?>
	</ul>
<?php endif ?>
