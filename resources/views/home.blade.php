<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>CVFerry</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="shortcut icon" href="{{ asset('img/logo-mf-tab.png') }}" type="image/x-icon">
</head>

<body>
    <div class="min-h-full">
        <!-- NAVBAR -->
        <nav class="relative bg-white-800/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10 shadow-md z-50">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex shrink-0 items-center justify-center">
                            <img src="{{ asset('img/logo_mf.png') }}" alt="Logo" class="h-6 w-auto pr-3" />
                        </div>
                        <div class="flex">
                            <a class="rounded-md font-semibold py-3 text-lg text-[#012464]">Muhammad Ferry Sofianshah</a>
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <a href="https://github.com/MuhammadFerrySofianshah" class="flex items-center gap-2">
                            <p class="hidden sm:block text-[#012464] font-mono">My GitHub</p>
                            <i class="text-4xl devicon-github-original colored"></i>
                        </a>

                    </div>
                </div>
            </div>

            <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                    <a href="#" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Dashboard</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
                </div>
            </el-disclosure>
        </nav>

        <!-- HOME -->
        <main>

            <div
                class="relative mx-auto flex w-full max-w-7xl flex-col overflow-hidden px-4 pt-10
               [box-shadow:inset_0_-30px_20px_-20px_rgba(0,0,0,0.25)]
               sm:px-6 lg:flex-row lg:px-8">

                {{-- ========================= --}}
                {{-- Background Decoration --}}
                {{-- ========================= --}}

                <!-- Lingkaran kiri -->
                <div
                    class="-z-10 pointer-events-none absolute -left-20 top-40 h-80 w-80 rounded-full bg-[#d9eaff] sm:-left-24 sm:top-80"></div>

                <div
                    class="-z-11 pointer-events-none absolute -left-32 top-20 h-120 w-120 rounded-full bg-[#EAF1FA] sm:-left-40 sm:top-60"></div>


                {{-- ========================= --}}
                {{-- Body Left --}}
                {{-- ========================= --}}

                <div
                    class="relative z-10 mx-auto mt-10 w-full max-w-xl lg:mr-30 lg:mx-0">

                    <p class="font-mono text-[#012464]">
                        Halo, saya👋
                    </p>

                    <h1
                        class="pb-6 text-4xl font-semibold text-[#012464] sm:text-5xl lg:text-6xl">
                        Muhammad Ferry Sofianshah
                    </h1>

                    <p class="text-lg font-medium text-[#275fc8] sm:text-xl">
                        Web Developer | Flutter Developer | UI/UX Designer
                    </p>

                    <p class="py-6 text-[#012464]">
                        Lulusan Sistem Informasi dengan ketertarikan di bidang
                        pengembangan perangkat lunak, khususnya pengembangan aplikasi
                        Web & Android.
                    </p>


                    <!-- Button -->
                    <div class="flex flex-wrap gap-4">

                        <!-- Lihat CV -->
                        <a
                            href="{{ asset('cv/CV-Ferry (2026).pdf') }}"
                            target="_blank"
                            rel="noopener noreferrer">
                            <button
                                type="button"
                                class="flex cursor-pointer items-center gap-2 rounded-[5px] bg-[#012464] px-3 py-2.5">
                                <i
                                    class="h-5 w-5 text-white"
                                    data-feather="file-text"></i>

                                <span class="text-xs text-white">
                                    Lihat CV
                                </span>
                            </button>
                        </a>


                        <!-- Hubungi Saya -->
                        <a
                            href="http://wa.me//6289688120962"
                            target="_blank">
                            <button
                                type="button"
                                class="flex cursor-pointer items-center gap-2 rounded-[5px] border-2 border-[#012464] bg-white px-3 py-2.5">
                                <i
                                    class="h-4 w-4 text-[#012464]"
                                    data-feather="send"></i>

                                <span class="text-xs text-[#012464]">
                                    Hubungi Saya
                                </span>
                            </button>
                        </a>

                    </div>


                    <!-- Social -->
                    <div class="flex flex-wrap gap-4 py-8">

                        <a
                            href="tel:+6289688120962"
                            target="_blank"
                            rel="noopener noreferrer">
                            <div class="flex items-center gap-1.5">
                                <i
                                    class="h-5 w-5 text-[#012464]"
                                    data-feather="phone"></i>

                                <p class="text-xs font-medium text-[#012464]">
                                    Phone
                                </p>
                            </div>
                        </a>


                        <a
                            href="https://www.instagram.com/mfersyh/"
                            target="_blank">
                            <div class="flex items-center gap-1.5">
                                <i
                                    class="h-5 w-5 text-[#012464]"
                                    data-feather="instagram"></i>

                                <p class="text-xs font-medium text-[#012464]">
                                    Instagram
                                </p>
                            </div>
                        </a>


                        <a
                            href="mailto:fsofian27@gmail.com"
                            target="_blank"
                            rel="noopener noreferrer">
                            <div class="flex items-center gap-1.5">
                                <i
                                    class="h-5 w-5 text-[#012464]"
                                    data-feather="mail"></i>

                                <p class="text-xs font-medium text-[#012464]">
                                    Email
                                </p>
                            </div>
                        </a>


                        <a
                            href="https://www.linkedin.com/in/muhammad-ferry-sofianshah-a918572a2/"
                            target="_blank">
                            <div class="flex items-center gap-1.5">
                                <i
                                    class="h-5 w-5 text-[#012464]"
                                    data-feather="linkedin"></i>

                                <p class="text-xs font-medium text-[#012464]">
                                    LinkedIn
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- ========================= --}}
                {{-- Body Right --}}
                {{-- ========================= --}}

                <div
                    class="relative mt-10 flex w-full justify-center lg:mt-0 lg:max-w-2xl lg:items-end lg:justify-end">

                    <!-- Lingkaran -->
                    <div
                        class="pointer-events-none absolute bottom-0 right-1/2 h-90 w-90 translate-x-1/2 rounded-full bg-[#EAF1FA] sm:h-100 sm:w-100 lg:right-10 lg:translate-x-0"></div>
                    <!-- Titik-titik -->
                    <div
                        class="-z-11 pointer-events-none absolute bottom-15 right-0 top-0 h-40 w-40 opacity-60
                       bg-[radial-gradient(#CBD5E1_1.5px,transparent_1.5px)]
                       bg-size-[12px_12px]
                       sm:h-48 sm:w-48"></div>
                    <div
                        class="-z-11 pointer-events-none absolute right-0 top-47 h-40 w-40 opacity-60
                       bg-[radial-gradient(#CBD5E1_1.5px,transparent_1.5px)]
                       bg-size-[12px_12px]
                       sm:h-48 sm:w-48"></div>

                    <!-- Foto -->
                    <img
                        src="{{ asset('img/bg-ferry.png') }}"
                        alt="personal-photo"
                        class="relative z-10 h-auto w-full max-w-md object-contain sm:max-w-lg lg:h-140 lg:w-auto" />

                </div>

            </div>

        </main>


        <!-- CARD EXPERIENCE -->
        <main>
            <div class="mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
                <!-- Card -->
                <div class="relative flex w-full justify-center">
                    <div class="grid w-full max-w-4xl grid-cols-2 gap-6 rounded-lg bg-white px-6 py-6 shadow-[0_2px_8px_rgba(0,0,0,0.15)] sm:grid-cols-2 lg:grid-cols-4 lg:gap-4">
                        <!-- Project -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EAF1FA]">
                                <i
                                    data-lucide="code-xml"
                                    class="h-6 w-auto text-[#012464]"></i>
                            </div>

                            <div class="flex flex-col items-center text-center">
                                <h2 class="text-lg font-bold text-[#012464]">
                                    5+
                                </h2>
                                <p class="text-sm font-medium text-[#012464]">
                                    Project sudah dikerjakan
                                </p>
                            </div>
                        </div>


                        <!-- Experience -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EAF1FA]">
                                <i
                                    data-lucide="briefcase-business"
                                    class="h-6 w-auto text-[#012464]"></i>
                            </div>

                            <div class="flex flex-col items-center text-center">
                                <h2 class="text-lg font-bold text-[#012464]">
                                    2+
                                </h2>
                                <p class="text-sm font-medium text-[#012464]">
                                    Pengalaman Kerja
                                </p>
                            </div>
                        </div>


                        <!-- Education -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EAF1FA]">
                                <i
                                    data-lucide="graduation-cap"
                                    class="h-6 w-auto text-[#012464]"></i>
                            </div>

                            <div class="flex flex-col items-center text-center">
                                <h2 class="text-lg font-bold text-[#012464]">
                                    S1
                                </h2>
                                <p class="text-sm font-medium text-[#012464]">
                                    Pendidikan
                                </p>
                            </div>
                        </div>
                        <!-- IPK -->
                        <div class="flex flex-col items-center gap-2">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#EAF1FA]">
                                <i
                                    data-lucide="book-open-check"
                                    class="h-6 w-auto text-[#012464]"></i>
                            </div>

                            <div class="flex flex-col items-center text-center">
                                <h2 class="text-lg font-bold text-[#012464]">
                                    3.68
                                </h2>
                                <p class="text-sm font-medium text-[#012464]">
                                    IPK
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>

        <!-- SKILLS -->
        <main class="">
            <div class="text-center">
                <h1 class="text-[#012464] text-4xl font-mono font-semibold text-center"> Tech Stack</h1>
                <p class="my-2 text-sm text-gray-500">Technologies and tools I use to build digital products.</p>
            </div>
            <div class="mx-auto max-w-7xl px-4 pb-10 pt-5 sm:px-6 lg:px-8 flex justify-center">
                <div class="gap-12 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6">
                    <div class="text-center">
                        <i class="devicon-html5-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">HTML</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-css3-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">CSS</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-javascript-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">JavaScript</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-php-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">PHP</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-laravel-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">Laravel</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-mysql-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">MySQL</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-flutter-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">Flutter</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-dart-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">Dart</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-git-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">Git</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-github-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">GitHub</p>
                    </div>
                    <div class="text-center">
                        <i class="devicon-tailwindcss-plain colored text-4xl"></i>
                        <p class="text-sm font-mono text-gray">Talwind CSS</p>
                    </div>
                    <div class="text-center flex flex-col gap-2">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" class="h-8 w-auto" />
                        <p class="text-sm font-mono text-gray">Figma</p>
                    </div>
                </div>

            </div>
        </main>

        <!-- PROJECTS -->
        <!-- Projects 01 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 01</h2>
                            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">PPDB MD Yayasan Baitul Muhajirin</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Website Sistem Informasi Madrasah merupakan proyek tugas akhir yang saya kembangkan bersama tim dalam bentuk sistem informasi berbasis web. Website ini dirancang untuk mendukung proses pendaftaran siswa baru, menyajikan informasi dan aktivitas siswa, serta menyediakan informasi mengenai yayasan dan madrasah secara terstruktur, informatif, dan mudah diakses oleh siswa, orang tua, maupun masyarakat.
                            </p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Registrasi & Login Akun, Pendaftaran Siswa Baru, Profil Madrasah, Alur Pendaftaran, Berita & Informasi Terbaru, Beranda Informatif, Manajemen Data Siswa, CRUD, Database Management, dan Responsive Web Design.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                HTML
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                CSS
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                PHP
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                JavaScript
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                MySQL
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                                <div class="flex gap-4">
                                    <a href="">
                                        <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                            Lihat Project
                                            <i data-lucide="mouse-pointer-2" class="h-5 w-auto"></i>
                                        </button>
                                    </a>
                                    <a href="https://www.figma.com/design/qmpaqd14HJleN9qHVGSnH5/Yayasan-Muhajirin?node-id=0-1&t=tsUsPsF0JaW4F1DD-1" target="_blank">
                                        <button type="button" class="cursor-pointer flex items-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200 gap-1">
                                            Lihat Figma
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" class="h-3 w-auto" />
                                        </button>
                                    </a>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/madrasah-web-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>
        <div class="mx-auto w-full max-w-3xl border-t border-dashed border-gray-300 rounded-full"></div>
        <!-- Projects 02 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 02</h2>
                            <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Wedding Organizer (Saung Biru Tenda)</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Website Wedding Organizer merupakan platform berbasis web yang saya kembangkan untuk membantu penyedia jasa pernikahan dalam menampilkan informasi layanan dan memudahkan calon pelanggan dalam memperoleh informasi mengenai kebutuhan pernikahan.

                                Website ini memiliki beberapa fungsi seperti informasi paket wedding, galeri dokumentasi, informasi layanan, serta halaman kontak. Sistem juga dibuat secara dinamis dengan database untuk mengelola berbagai informasi yang ditampilkan pada website.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Beranda, Galeri Wedding, Layanan & Penyewaan, Informasi Wedding, Kontak, serta Responsive Web Design.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                HTML
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                CSS
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                PHP
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                JavaScript
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                                <div class="flex gap-4">
                                    <a href="">
                                        <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                            Lihat Project
                                            <i data-lucide="mouse-pointer-2" class="h-5 w-auto"></i>
                                        </button>
                                    </a>
                                    <a href="https://www.figma.com/design/aTwEmkfjElVe2VyQjX8ViK/SAUNG-BIRU-TENDA?node-id=809-2&t=tsUsPsF0JaW4F1DD-1" target="_blank">
                                        <button type="button" class="cursor-pointer flex items-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200 gap-1">
                                            Lihat Figma
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" class="h-3 w-auto" />
                                        </button>
                                    </a>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/sbt-web-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>
        <div class="mx-auto w-full max-w-3xl border-t border-dashed border-gray-300 rounded-full"></div>
        <!-- Projects 03 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 03</h2>
                            <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Blog</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Aplikasi blog berbasis Laravel yang saya buat untuk mempelajari pengembangan website menggunakan Laravel, Eloquent ORM, dan MySQL.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Authentication, CRUD Postingan, Kategori, Author Management, Search, Filtering, Pagination, serta Relasi Database menggunakan Eloquent ORM dan SQLite.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Laravel
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                PHP
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                MySQL
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Tailwind CSS
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                                <a href="">
                                    <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                        Lihat Project
                                        <i data-lucide="mouse-pointer-2"></i>
                                    </button>
                                </a>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/blog-web-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>
        <div class="mx-auto w-full max-w-3xl border-t border-dashed border-gray-300 rounded-full"></div>
        <!-- Projects 04 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 04</h2>
                            <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">KRL GoOn</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Proyek semester 4 berupa perancangan desain aplikasi berbasis mobile menggunakan Figma, mulai dari pembuatan wireframe hingga desain antarmuka (UI) aplikasi.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Login/Register, Beranda, Pencarian, Jadwal KRL, Rute KRL, Detail Perjalanan, Profil, Riwayat, Notifikasi.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Dart
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Flutter
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                                <div class="flex gap-4">
                                    <a href="">
                                        <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                            Lihat Project
                                            <i data-lucide="mouse-pointer-2" class="h-5 w-auto"></i>
                                        </button>
                                    </a>
                                    <a href="https://www.figma.com/design/qmpaqd14HJleN9qHVGSnH5/Yayasan-Muhajirin?node-id=0-1&t=tsUsPsF0JaW4F1DD-1" target="_blank">
                                        <button type="button" class="cursor-pointer flex items-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200 gap-1">
                                            Lihat Figma
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" class="h-3 w-auto" />
                                        </button>
                                    </a>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/krlgoon-app-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>
        <div class="mx-auto w-full max-w-3xl border-t border-dashed border-gray-300 rounded-full"></div>
        <!-- Projects 05 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 05</h2>
                            <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Quran App</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Mendesain dan membangun aplikasi tersebut dengan Flutter yang terintegrasi dengan API Equran.id, dengan fitur utama list surah.</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Beranda, Pencarian Surah, Daftar Surah, Riwayat Bacaan.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Dart
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Flutter
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Migration with API
                                            </span>
                                        </div>
                                    </dd>
                                </div>
                                <div class="flex gap-4">
                                    <a href="">
                                        <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                            Lihat Project
                                            <i data-lucide="mouse-pointer-2" class="h-5 w-auto"></i>
                                        </button>
                                    </a>
                                    <a href="https://www.figma.com/design/dsUnCt3rPLUKFC1GSJYVgM/Quran-App-Concept---Free--Community-?node-id=1997-213&t=aF2TSbSz94no12rD-1" target="_blank">
                                        <button type="button" class="cursor-pointer flex items-center rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200 gap-1">
                                            Lihat Figma
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/figma/figma-original.svg" class="h-3 w-auto" />
                                        </button>
                                    </a>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/quran-app-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>
        <!-- Projects 06 -->
        <div class="overflow-hidden bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8">
                        <div class="lg:max-w-lg">
                            <h2 class="text-base/7 font-semibold text-indigo-400">Project 06</h2>
                            <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Portofolio</p>
                            <p class="mt-6 text-lg/8 text-gray-300">Website portofolio pribadi yang dirancang untuk memperkenalkan diri, menampilkan pengalaman, keterampilan, serta berbagai proyek yang telah saya kerjakan. Website ini memiliki tampilan yang modern, clean, dan profesional dengan navigasi yang sederhana agar informasi mudah ditemukan.

                                Beberapa bagian utama dalam website ini meliputi Home sebagai halaman pengenalan, Experience untuk menampilkan pengalaman, Skills untuk menunjukkan kemampuan dan teknologi yang dikuasai, serta Projects untuk menampilkan proyek-proyek yang telah selesai dikerjakan.
                                <br>
                                Website ini juga menerapkan responsive design, sehingga tampilannya dapat menyesuaikan dengan berbagai ukuran layar, baik desktop, tablet, maupun smartphone.
                            </p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-400 lg:max-w-none">
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="book-marked" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Fitur:
                                    </dt>
                                    <dd class="inline">Home, Experience, Skills, Projects, Responsive.</dd>
                                </div>
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <i data-lucide="square-code" class="absolute top-1 left-1 size-5 text-indigo-400"></i>
                                        Teknologi:
                                    </dt>
                                    <dd class="inline">
                                        <div class="mt-3 flex flex-wrap gap-2">
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                HTML
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                TalwindCss
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                PHP
                                            </span>
                                            <span class="rounded-full bg-gray-800 px-3 py-1 text-sm">
                                                Laravel
                                            </span>
                                          
                                        </div>
                                    </dd>
                                </div>
                                <div class="flex gap-4">
                                    <a href="">
                                        <button type="button" class="cursor-pointer inline-flex rounded-md bg-white px-5 py-3 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                                            Lihat Project
                                            <i data-lucide="mouse-pointer-2" class="h-5 w-auto"></i>
                                        </button>
                                    </a>

                                </div>
                            </dl>
                        </div>
                    </div>
                    <img width="2432" height="1442" src="{{ asset('img/portofolio-web-foto.png') }}" alt="Product screenshot" class="w-3xl max-w-none rounded-xl shadow-xl ring-1 ring-white/10 sm:w-228  lg:ml-0" />
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="h-auto w-full bg-white px-4 py-4 sm:px-6 md:h-24">
            <div class="relative flex flex-col items-center justify-center gap-3 md:flex-row md:justify-between md:px-8">
                <!-- Logo + Nama -->
                <div class="flex items-center">
                    <img
                        src="{{ asset('img/logo_mf.png') }}"
                        alt="Logo"
                        class="h-6 w-auto pr-3" />
                    <h2 class="text-md font-semibold text-[#012464]">
                        Muhammad Ferry Sofianshah
                    </h2>
                </div>
                <!-- Social Media -->
                <div class="flex items-center gap-4">
                    <!-- GitHub -->
                    <a
                        href="https://github.com/MuhammadFerrySofianshah"
                        target="_blank">
                        <i class="text-3xl text-[#012464] devicon-github-original"></i>
                    </a>
                    <!-- Phone -->
                    <a
                        href="tel:+6289688120962"
                        target="_blank"
                        rel="noopener noreferrer">
                        <i
                            class="h-6 w-6 text-[#012464]"
                            data-feather="phone"></i>
                    </a>
                    <!-- Instagram -->
                    <a
                        href="https://www.instagram.com/mfersyh/"
                        target="_blank">
                        <i
                            class="h-6 w-6 text-[#012464]"
                            data-feather="instagram"></i>
                    </a>
                    <!-- Email -->
                    <a
                        href="mailto:fsofian27@gmail.com"
                        target="_blank">
                        <i
                            class="h-6 w-6 text-[#012464]"
                            data-feather="mail"></i>
                    </a>
                    <!-- LinkedIn -->
                    <a
                        href="https://www.linkedin.com/in/muhammad-ferry-sofianshah-a918572a2/"
                        target="_blank">
                        <i
                            class="h-6 w-6 text-[#012464]"
                            data-feather="linkedin"></i>
                    </a>

                </div>
            </div>
            <!-- Copyright -->
            <p class="mt-3 text-center text-xs font-normal text-[#012464] md:mt-0 md:pl-7 md:text-left">
                &copy; Muhammad Ferry Sofianshah. All rights reserved
            </p>
        </footer>
    </div>

    <script>
        feather.replace();
    </script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>