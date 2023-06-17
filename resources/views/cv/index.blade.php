<!DOCTYPE html>
<html data-theme="halloween">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Alif Irhas | Portofolio</title>

		<!-- Iconify -->
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="p-6 min-h-screen font-sans text-gray-200">
		<div class="lg:mt-32 mt-24"></div>

		<!-- Title -->
		<div class="lg:text-center">
			<h1 class="text-7xl font-bold mb-6">Hai, Saya Alif Irhas 👋</h1>
			<div class="text-xl underline">Web Developer</div>
		</div>

		<!-- Perkenalan -->
		<div
			class="text-xl lg:w-[70vh] mx-auto mt-6 leading-relaxed lg:text-center"
		>
			<p>
				Saya mengimplementasikan logika bisnis dan algoritma dalam back-end
				sebuah web, seperti REST-API. Dengan bantuan project management tool,
				VScode, dan secangkir kopi ☕.
			</p>

			<div class="mt-24"></div>

			<div class="container mx-auto">
				<center>
					<a href="{{ route('cv.project') }}">
						<button class="btn btn-lg btn-success btn-outline items-center">
							<iconify-icon icon="mdi:magnify"></iconify-icon>
							&nbsp; Lihat Project
						</button>
					</a>
				</center>
			</div>

			<div class="mt-24"></div>

			<p>
				Saya sedang berada di
				<iconify-icon icon="mdi:map-marker"></iconify-icon> Bondowoso, Jawa
				Timur, Indonesia. Mari hubungi saya dan buat sesuatu yang menarik
			</p>
			<div>
				<a href="https://www.linkedin.com/in/alif-irhas-0750331b3/" target="_blank">
					<button class="btn btn-info mt-2 normal-case text-lg">
						<iconify-icon icon="mdi:linkedin"></iconify-icon>
						&nbsp; LinkedIn
					</button>
				</a>
				<button
					class="btn btn-primary mt-2 lowercase text-lg"
					onclick="copyToClipBoard('irhasalif@gmail.com')"
				>
					<iconify-icon
						icon="material-symbols:content-copy-outline"
					></iconify-icon>
					&nbsp; irhasalif@gmail.com
				</button>
				<a href="https://github.com/alifirhas" target="_blank">
					<button class="btn btn-secondary mt-2 normal-case text-lg">
						<iconify-icon icon="mdi:github"></iconify-icon>
						&nbsp; GitHub
					</button>
				</a>
				<a href="https://alifirhas.github.io" target="_blank">
					<button class="btn btn-primary mt-2 normal-case text-lg">
						Lihat CV Online
					</button>
				</a>
			</div>
		</div>
	</body>

	<script>
		function copyToClipBoard(copyText) {
			// Copy the text inside the text field
			navigator.clipboard.writeText(copyText);
		}
	</script>
</html>
