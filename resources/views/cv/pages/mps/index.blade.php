<!DOCTYPE html>
<html data-theme="halloween">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Alif Irhas | MPS</title>

		<!-- Iconify -->
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="p-6 min-h-screen font-sans text-gray-200">
		<div class="lg:mt-10 mt-5"></div>

		<!-- Title -->
		<div class="md:text-center">
			<h1 class="text-4xl font-bold mb-2">Meal Planner on Steroid</h1>
			<p class="text-3xl font-extrabold">MPS</p>
		</div>
		<div class="flex flex-wrap mt-4 gap-2 md:place-content-center">
			<div class="btn btn-primary btn-outline">
				<iconify-icon icon="bxl:django"></iconify-icon>
				&nbsp; Django
			</div>
			<div class="btn btn-info btn-outline">
				<iconify-icon icon="bxl:flutter"></iconify-icon>&nbsp;Flutter
			</div>
			<div class="btn btn-nutral btn-outline">
				<iconify-icon icon="simple-icons:postman"></iconify-icon>
				&nbsp;REST-API
			</div>
			<div class="btn btn-neutral btn-outline">
				<iconify-icon icon="bxl:python"></iconify-icon> &nbsp; Python
			</div>
			<div class="btn btn-neutral btn-outline">
				<iconify-icon icon="simple-icons:dart"></iconify-icon> &nbsp; Dart
			</div>
			<div class="btn btn-primary btn-outline">
				<iconify-icon icon="fontisto:mysql"></iconify-icon> &nbsp; MySQL
			</div>
		</div>

		<div class="mb-5"></div>

		<!-- Deskripsi -->
		<div class="md:mx-auto mb-2 w-full max-w-3xl md:text-justify text-lg">
			Disini saya membuat sistem untuk memberikan rekomendasi rencana diet bagi
			penderita obesitas menggunakan algoritma genetika. Rekomendasi rencana
			diet yang diberikan oleh sistem akan diberikan berdasarkan kebutuhan gizi
			dari pengguna untuk turun berat badan.
		</div>
		<div class="md:mx-auto mb-5 w-full max-w-3xl md:text-justify text-lg">
			Saya membuat sistem ini untuk membantu penderita obesitas dan masyarakat
			umum dengan memberikan contoh rencana diet berdasarkan kebutuhan gizi yang
			mereka miliki.
		</div>
		<div class="mt-20"></div>

		<!-- Repo -->
		<div class="md:mx-auto mb-5 w-full max-w-lg md:text-center text-lg">
			Disini terdapat project Django Server sebagai API dan Flutter APP sebagai
			antarmuka pengguna
		</div>

		<div
			class="flex flex-col w-full lg:flex-row mt-10 mb-10 place-content-center"
		>
			<div
				class="grid flex-grow card bg-base-300 rounded-box place-items-center lg:max-w-[40vw] p-10 h-max"
			>
				<span class="text-2xl mb-10"> Django REST-API Server </span>

				Disini saya membuat server REST-API menggunakan Django sebagai backend
				dari Meal Planner on Steroid. Server ini akan menangani transaksi data,
				serta perhitungan kebutuhan gizi dan proses pemberian rekomendasi
				rencana diet menggunakan Algoritma Genetika.

				<div class="mb-10"></div>

				<a href="https://github.com/Meal-Planner-on-Steroid/MPS-API" target="_blank">
					<!-- <img
						src="https://github-link-card.s3.ap-northeast-1.amazonaws.com/Meal-Planner-on-Steroid/MPS-API.png"
						class="w-full"
					/> -->
					<img src="../../assets/images/mps-gallery/MPS-Mobile.png" alt="">
				</a>
			</div>
			<div class="divider lg:divider-horizontal"></div>
			<div
				class="grid flex-grow card bg-base-300 rounded-box place-items-center lg:max-w-[40vw] p-10 h-max"
			>
				<span class="text-2xl mb-10"> Flutter Android APP </span>

				Disini saya membuat server REST-API menggunakan Django sebagai backend
				dari Meal Planner on Steroid. Server ini akan menangani transaksi data,
				serta perhitungan kebutuhan gizi dan proses pemberian rekomendasi
				rencana diet menggunakan Algoritma Genetika.

				<div class="mb-10"></div>

				<a href="https://github.com/Meal-Planner-on-Steroid/MPS-Mobile" target="_blank">
					<!-- <img
						src="https://github-link-card.s3.ap-northeast-1.amazonaws.com/Meal-Planner-on-Steroid/MPS-Mobile.png"
						class="w-full"
					/> -->
					<img src="../../assets/images/mps-gallery/MPS-API.png" alt="" />
				</a>
			</div>
		</div>

		<div class="md:mx-auto mb-10 w-full max-w-lg md:text-center text-lg">
			Lihat lebih detail di
			<a
				href="https://meal-planner-on-steroid.github.io/MPS-Documentation/"
				target="_blank"
				class="link link-primary"
				>Dokumentasi yang telah saya buat</a
			>
			atau kunjungi
			<a
				href="https://github.com/Meal-Planner-on-Steroid"
				target="_blank"
				class="link link-primary"
				>GitHub Organization MPS</a
			>
		</div>

		<hr class="max-w-[70vw] mx-auto mb-10" />

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
								src="{{ asset('images/mps-gallery/mobile-1.jpg') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/mobile-2.jpg') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/mobile-3.jpg') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/mobile-4.jpg') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/3">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/mobile-5.jpg') }}"
							/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="overflow-hidden text-gray-700">
			<div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
				<div class="flex flex-wrap -m-1 md:-m-2">
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-1.png') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-2.png') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-3.png') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-4.png') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-5.png') }}"
							/>
						</div>
					</div>
					<div class="flex flex-wrap w-1/1 lg:w-1/2">
						<div class="w-full p-1 md:p-2">
							<img
								alt="gallery"
								class="block object-cover object-center w-full h-full rounded-lg"
								src="{{ asset('images/mps-gallery/web-6.png') }}"
							/>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
