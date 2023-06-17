<!DOCTYPE html>
<html data-theme="halloween">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Alif Irhas | Project</title>

		<!-- Iconify -->
		<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="p-6 min-h-screen font-sans text-gray-200">
		<div class="lg:mt-10 mt-5"></div>

		<!-- Title -->
		<div class="lg:text-center">
			<h1 class="text-7xl font-bold mb-6">Project saya</h1>
			<p class="text-xl">Ini adalah project yang saya banggakan</p>
		</div>

		<div class="mt-10"></div>

		<!-- Content -->
		<div
			class="grid grid-cols-1 md:grid-cols-3 max-w-max lg:w-max mx-auto lg:justify-center gap-4"
		>
			<!-- MPS -->
			<div class="card sm:w-full lg:w-96 bg-base-100 border">
				<figure>
					<img src="{{ asset('images/mps-512.png') }}" alt="Shoes" />
				</figure>
				<div class="card-body">
					<h2 class="card-title">MPS</h2>
					<p>
						<span class="font-bold"> Meal Planner on Steroid</span> merupakan
						Sebuah sistem lengkap untuk membuat rekomendasi menu makanan
						menggunakan algoritma genetika. Sistem terdiri dari API service dan
						aplikasi mobile.
					</p>
					<div class="flex flex-wrap flex-row-reverse mt-4 gap-2">
						<div class="badge badge-primary badge-outline">Django</div>
						<div class="badge badge-info badge-outline">Flutter</div>
						<div class="badge badge-nutral badge-outline">REST-API</div>
						<div class="badge badge-neutral badge-outline">Python</div>
						<div class="badge badge-neutral badge-outline">Dart</div>
						<div class="badge badge-primary badge-outline">MySQL</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a href="{{ route('cv.mps') }}" class="btn btn-accent w-full">
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>
			</div>

			<!-- SIPP -->
			<div class="card sm:w-full lg:w-96 bg-base-100 border border-violet-500">
				<figure>
					<img src="{{ asset('images/adiwiyata-bg.png') }}" alt="Shoes" />
				</figure>
				<div class="card-body">
					<h2 class="card-title">SIPP - Adiwiyata</h2>
					<p>
						Saya membuat RESTful-API dan merancang database untuk sistem
						Penataan & Penaatan pada bagian backend dari modul Adiwiyata. Saya
						juga menerapkan database, custom API, dan logika bisnis yang
						diperlukan.
					</p>
					<div class="flex flex-wrap flex-row-reverse mt-4 gap-2">
						<div class="badge badge-info badge-outline">AdonisJS</div>
						<div class="badge badge-success badge-outline">node.js</div>
						<div class="badge badge-neutral badge-outline">RESTful-API</div>
						<div class="badge badge-info badge-outline">TypeScript</div>
						<div class="badge badge-primary badge-outline">PostgreSQL</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a href="{{ route('cv.sipp') }}" class="btn btn-secondary w-full" >
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>
			</div>

			<!-- Semboyan Cantik -->
			<div class="card sm:w-full lg:w-96 bg-base-100 border border-blue-400">
				<figure>
					<img src="{{ asset('images/semboyan_cantik/semboyan_cantik_logo.png') }}" alt="Shoes" />
				</figure>
				<div class="card-body">
					<h2 class="card-title">Semboyan Cantik</h2>
					<p>
						Semboyan Cantik adalah aplikasi untuk mendeteksi dan melacak
						stunting baduta berumur 0 sampai 2 tahun. Aplikasi juga disiapkan
						dengan informasi stunting dan makanan stunting baduta.
					</p>
					<div class="flex flex-wrap flex-row-reverse mt-4 gap-2">
						<div class="badge badge-info badge-outline">Flutter</div>
						<div class="badge badge-primary badge-outline">Hive</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a href="{{ route('cv.semboyan_cantik') }}" class="btn btn-info w-full">
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-4"></div>

		<!-- Divider project utama dan sampiangan -->
		<div class="flex flex-col max-w-[75%] mx-auto border-opacity-50 my-8">
			<div class="divider">Project lainnya</div>
		</div>

		<!-- Project kuliah -->
		<div
			class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-max lg:w-max mx-auto gap-4"
		>
			<div class="card sm:w-full lg:w-96 border border-green-500 mx-auto">
				<div class="card-body">
					<h2 class="card-title">Nature Sawah</h2>
					<p>
						Website penjualan dan penyewaan sawah menggunakan Laravel dan
						Tailwind
					</p>
					<div class="flex flex-wrap flex-row-reverse gap-2 mt-4">
						<div class="badge text-red-500 badge-outline">Laravel</div>
						<div class="badge badge-info badge-outline">Tailwind</div>
						<div class="badge badge-primary badge-outline">MySQL</div>
						<div class="badge badge-neutral badge-outline">API</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a
							class="btn btn-success w-full"
							href="https://github.com/alifirhas/natsa2.0_Website"
							target="_blank"
						>
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>

				<figure>
					<img src="{{ asset('images/rice-field.jpg') }}" alt="Shoes" />
				</figure>
			</div>
			<div class="card sm:w-full lg:w-96 border border-primary mx-auto">
				<div class="card-body">
					<h2 class="card-title">MimiKost</h2>
					<p>
						Personal website untuk pemilik kost sebagai media informasi kost
						yang dimiliki menggunakan Laravel dan Tailwind
					</p>
					<div class="flex flex-wrap flex-row-reverse gap-2 mt-4">
						<div class="badge text-red-500 badge-outline">Laravel</div>
						<div class="badge badge-info badge-outline">Tailwind</div>
						<div class="badge badge-primary badge-outline">MySQL</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a
							class="btn btn-primary w-full"
							href="https://github.com/alifirhas/MimiKost"
							target="_blank"
						>
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>
				<figure>
					<img src="{{ asset('images/dorm.jpg') }}" alt="Shoes" />
				</figure>
			</div>
			<div class="card sm:w-full lg:w-96 border border-yellow-200 mx-auto">
				<div class="card-body">
					<h2 class="card-title">Deteksi Kematangan Belimbing</h2>
					<p>
						Aplikasi desktop untuk mendeteksi kematangan
						<span class="font-bold">buah belimbing</span> menggunakan naive
						bayes dengan basis Matlab
					</p>
					<div class="flex flex-wrap flex-row-reverse gap-2 mt-4">
						<div class="badge badge-neutral badge-outline">Matlab</div>
						<div class="badge badge-success badge-outline">Naive Bayes</div>
					</div>
					<div class="card-actions justify-center mt-4">
						<a
							class="btn btn-outline w-full"
							href="https://github.com/alifirhas/Belimbing-Naive-Bayes-RGB-Matlab"
							target="_blank"
						>
							<iconify-icon icon="mdi:magnify"></iconify-icon>&nbsp;Lihat
						</a>
					</div>
				</div>
				<figure>
					<img src="{{ asset('images/belimbing.jpg') }}" alt="Shoes" />
				</figure>
			</div>
		</div>
	</body>
</html>
