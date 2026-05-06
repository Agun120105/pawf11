<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Blog Detail</h1>
      </div>
    </div>

	<div class="container">

		<div class="row">

			<div class="col-md-12 my-2 card">

				<div class="card-body">

					<!-- TITLE -->
					<h5 class="h5"><?= $post['title'] ?></h5>

					<!-- IMAGE -->
					<?php if(!empty($post['image'])): ?>

						<img src="<?= base_url('uploads/' . $post['image']) ?>"
							 class="img-fluid rounded mb-3 mt-3"
							 width="500">

					<?php endif; ?>

					<!-- AUTHOR -->
                    <span>
						<?= $post['author'] ?> |
						<?= $post['created_at'] ?>
					</span>

					<!-- CONTENT -->
					<p class="mt-3">
						<?= $post['content'] ?>
					</p>

				</div>

			</div>

		</div>

	</div>

	<div class="container py-4">

		<footer class="pt-3 mt-4 text-muted border-top">

			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>

		</footer>

	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>

	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>