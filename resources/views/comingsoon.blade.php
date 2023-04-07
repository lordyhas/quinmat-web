


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorx/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorx/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/comingsoon-util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/comingsoon.css">
<!--===============================================================================================-->
</head>
<body>

	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('{{asset('assets/imgs/quinmat-logo4.jpg')}}');"></div>
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
			<h3 class="l1-txt1 txt-center p-b-25">
				QUINMAT SARL
			</h3>
			<!--
			Nous sommes désolés pour la gêne occasionnée.
			Nous effectuons actuellement une maintenance sur notre site web pour améliorer votre expérience utilisateur.
			Nous serons de retour en ligne dans les plus brefs délais.
			-->
			<div class="container">
				<p class="m2-txt1 txt-center p-b-48">

					Notre site web est actuellement en maintenance. <br>
					Nous serons de retour en ligne dans les plus brefs délais.
				</p>
			</div>



			<div class="flex-w flex-c-m cd100 p-b-33">
				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 days">35</span>
					<span class="s2-txt1">Days</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 hours">17</span>
					<span class="s2-txt1">Hours</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt1">Minutes</span>
				</div>

				<div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt1">Seconds</span>
				</div>
			</div>

			<!-- div class="w-full flex-w flex-c-m validate-form">

				<div class="wrap-input100 validate-input where1" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100 placeholder0 s2-txt2" type="text" name="email" placeholder="Enter Email Address">
					<span class="focus-input100"></span>
				</div>


				<button class="flex-c-m size3 s2-txt3 how-btn1 trans-04 where1">
					Subscribe
				</button>
			</div -->
			<div class="container">
				<div class="card bg-transparent border-white">

					<div class="card-body text-light text-center">
						<h5>
							En attendant, vous pouvez toujours nous contacter par téléphone,
							par email ou via nos réseaux sociaux. Nous serons ravis de vous renseigner et de vous
							conseiller sur nos produits et services.
						</h5>
						<!-- h5> Nous vous invitons à revenir sur notre site dès que possible pour découvrir nos nouveaux
							produits et nos offres spéciales. Vous pouvez également nous contacter par téléphone
							ou par e-mail si vous avez des questions ou des besoins urgents.</h5 -->

					</div>
				</div>
			</div>


			<p class="m2-txt1 txt-center p-b-48 p-t-42 ">
				<b>
					Tel : +248 000 000 258 <br>
					Email : info@quinmat.com <br>
					www.quinmat.com
				</b>
			</p>


		</div>
	</div>





<!--===============================================================================================-->
	<script src="assets/vendors/jquery/jquery-3.4.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorx/bootstrap/js/popper.js"></script>
	<script src="assets/vendorx/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorx/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendors/countdowntime/moment.min.js"></script>
	<script src="assets/vendors/countdowntime/moment-timezone.min.js"></script>
	<script src="assets/vendors/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="assets/vendors/countdowntime/countdowntime.js"></script>

    <?php
    /*
    $start_date = new DateTime('2023-04-01');
    $end_date = new DateTime('2023-04-04');
    $diff = $end_date->diff($start_date);
    echo $diff->format('<h1>%a days, %h hours, %i minutes, %s seconds</h1>'); */
    ?>

	<script>

		const now = new Date("2023-04-11T10:30:15"); //Date(2023, 4, 11, 12, 30, 0); //Date('4/11/2023');
		const endDate = new Date();
		const diffTime = Math.abs(endDate - now);

		const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
		const diffHours = Math.floor((diffTime / (1000 * 60 * 60)) % 24);
		const diffMinutes = Math.floor((diffTime / (1000 * 60)) % 60);
		const diffSeconds = Math.floor((diffTime / 1000) % 60);

		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: diffDays,
			endtimeHours: diffHours,
			endtimeMinutes: diffMinutes,
			endtimeSeconds: diffSeconds,
			timeZone: ""
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendorx/tilt/tilt.jquery.min.js')}}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main-cs.js')}}}"></script>

</body>
</html>
