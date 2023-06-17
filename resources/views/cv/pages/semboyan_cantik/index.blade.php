<!DOCTYPE html>
<html data-theme="halloween">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Alif Irhas | Semboyan Cantik</title>

		<!-- Iconify -->
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="p-6 min-h-screen font-sans text-gray-200">
		<div class="lg:mt-10 mt-5"></div>

		<!-- Title -->
		<div class="md:text-center">
			<h1 class="text-4xl font-bold mb-2">Semboyan Cantik</h1>
		</div>
		<div class="flex flex-wrap mt-4 gap-2 md:place-content-center">
			<div class="btn btn-info btn-outline">
				<iconify-icon icon="bxl:flutter"></iconify-icon>
				&nbsp; Flutter
			</div>
			<div class="btn btn-primary btn-outline">
				<iconify-icon icon="material-symbols:hive"></iconify-icon>
				&nbsp; Hive
			</div>
		</div>

		<div class="mb-5"></div>

		<!-- Deskripsi -->
		<div class="md:mx-auto mb-2 w-full max-w-3xl md:text-justify text-lg">
			Semboyan Cantik adalah aplikasi untuk mendeteksi dan melacak stunting
			baduta berumur 0 sampai 2 tahun. Aplikasi juga disiapkan dengan informasi
			stunting dan makanan stunting baduta. Aplikasi ini dibuat dengan
			menggunakan bahasa pemrograman Flutter secara keseluruhan dan menggunakan
			database Hive untuk menyimpan data jejak stunting baduta.
		</div>
		<div class="mt-20"></div>

		<!-- Repo -->
		<div class="md:mx-auto mb-5 w-full max-w-3xl md:text-center text-lg">
			Anda dapat melihat repository atau mengunduh aplikasinya disini
		</div>

		<div
			class="flex flex-col w-full lg:flex-row mt-10 mb-10 place-content-center"
		>
			<div
				class="grid flex-grow card bg-base-300 rounded-box place-items-center lg:max-w-[40vw] p-10 h-max"
			>
				<span class="text-2xl mb-10"> Semboyan Cantik Repository </span>

				<a href="https://github.com/alifirhas/semboyanCantik" target="_blank">
					<!-- <img
							src="https://github-link-card.s3.ap-northeast-1.amazonaws.com/alifirhas/semboyanCantik.png"
							width="460px"
					</a> -->
					<img
						src="{{ asset('images/semboyan_cantik/semboyanCantik.png') }}"
						alt=""
					/>
				</a>
			</div>
			<div class="divider lg:divider-horizontal"></div>
			<div
				class="grid flex-grow card bg-base-300 rounded-box place-items-center lg:max-w-[40vw] p-10 h-max"
			>
				<span class="text-2xl mb-10"> Download Aplikasi </span>

				<a
					href="https://github.com/alifirhas/semboyanCantik/releases"
					class="btn btn-block btn-primary"
					target="_blank"
					>Download Aplikasi</a
				>
			</div>
		</div>

		<hr class="max-w-[70vw] mx-auto my-10" />

		<div class="md:text-center">
			<h1 class="text-4xl font-bold mb-2">Galeri</h1>
		</div>

		<section class="overflow-hidden text-gray-700">
			<div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
				<div class="flex flex-wrap -m-1 md:-m-2">
					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/1_splash.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/2_home_page.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/3_info_tentang_stunting.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/4_penyebab_dan_pencegahan.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/5_halaman_artikel.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/6_menu_makanan.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/7_detail_menu_makanan.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/8_kalkulator.png') }}"
							/>
						</div>
					</div>

					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/semboyan_cantik/9_kalkulator_hasil.png') }}"
							/>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
