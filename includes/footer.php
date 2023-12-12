<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style>
		/* Center align text and icons */
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}

		.copy-right {
			text-align: center;
			color: white;
		}

		/* Style circular social media icons */
		.social-media-icons {
			display: flex;
			justify-content: center;
		}

		.social-icon {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 40px;
			height: 40px;
			background-color: #007bff;
			/* Change this to your desired background color */
			border-radius: 50%;
			/* Makes it circular */
			margin: 10px;
			transition: background-color 0.3s ease;
			/* Smooth color transition on hover */
		}

		.social-icon i {
			color: white;
			/* Icon color */
		}

		/* Change icon color on hover */
		.social-icon:hover {
			background-color: #ff5722;
			/* Change this to your desired hover color */
		}
	</style>
</head>

<body>
	<div class="copy-right">
		<div class="container">
			<span>&#169; <?php echo date("Y"); ?> All rights reserved. Made with &#x1F49C; by <b><a href="https://www.youtube.com/channel/UC4_6-VSWBw_QHMyjrDDEvVQ"> G20</a></b> Team.</span>
		</div>
	</div>

	<footer>
		<div class="social-media-icons">
			<?php
			$socialMediaIcons = [
				'facebook' => 'fab fa-facebook',
				'twitter' => 'fab fa-twitter',
				'instagram' => 'fab fa-instagram',
			];

			foreach ($socialMediaIcons as $platform => $iconClass) {
				echo "<a href='#' class='social-icon'><i class='$iconClass'></i></a>";
			}
			?>
		</div>
	</footer>
</body>

</html>