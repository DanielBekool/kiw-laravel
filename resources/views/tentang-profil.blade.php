<x-default title="Profil - Kawasan Industri Wijayakusuma">
<x-header-kiw/>

<!--Start Hero Page-->
<section id="hero-page" class="relative bg-cover bg-center overflow-hidden">
    
    <!-- overlay -->
    <div class="relative bg-cover" style="background-image:url('{{ asset('images/hero-profil-perusahaan.jpg') }}')">
        <div class="gradient-black-hero">
            <div class="flex flex-col justify-end px-4 sm:px-6 pb-9 bg-[var(--color-overlaylightblack)] h-70 sm:h-100">
                <!-- content -->
                <div class="flex flex-col lg:w-[1200px] lg:mx-auto">
                    <h1 data-aos="fade-up" class="text-left text-white">
                        Tentang Perusahaan
                    </h1>
                </div>
            </div>
           
        </div>
    </div>

</section>
<!--End Hero Page-->

<!--Start About-->
<section id="about" class="bg-contain bg-no-repeat bg-bottom sm:bg-cover" style="background-image:url({{ asset('images/about-image.jpg') }})">
    <div class="flex flex-col grow pt-18 pb-42 sm:pb-70 lg:pb-130 px-4 sm:px-6 lg:px-0 lg:pt-30  gradient-white-about">
        <div class="lg:w-[1200px] lg:mx-auto flex flex-col gap-5 sm:flex-row sm:justify-between">
            <h2 class="sm:w-1/3 lg:w-[35%]">Pilar Industri Jawa Tengah</h2>
            <div class="flex flex-col gap-5 sm:w-2/3 lg:w-[60%]">
                <p class="sub-p">
                    PT Kawasan Industri Wijayakusuma (KIW) adalah perusahaan pengembang dan pengelola kawasan industri yang berlokasi strategis di Semarang, Jawa Tengah. Sebagai anggota Holding BUMN Danareksa sejak 2022, KIW dimiliki oleh Kementerian BUMN, PT Danareksa (Persero), Pemerintah Provinsi Jawa Tengah, dan Pemerintah Kabupaten Cilacap.
                </p>
                <p>
                    Dengan infrastruktur lengkap, akses mudah ke tol, pelabuhan, bandara, dan pusat kota, KIW menawarkan kawasan industri seluas 250 Ha yang bebas banjir, dilengkapi Bangunan Pabrik Siap Pakai (BPSP), layanan terpadu (WTP, WWTP, keamanan 24 jam, pemadam kebakaran), serta fasilitas KLIK dan berbagai kemudahan bisnis.
                </p>
                <!--ISO-->
                <div class="flex flex-row items-center gap-5 mt-4">
                    <img src="{{ asset('images/iso-1.png') }}" alt="iso">
                    <img src="{{ asset('images/iso-2.png') }}" alt="iso">
                    <img src="{{ asset('images/iso-3.png') }}" alt="iso">
                    <p class="!text-[var(--color-heading)] !text-[1.3em] w-[60px]">ISO Certificate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End About-->

<!--Start Perjalanan-->
<section id="perjalanan" class="relative flex flex-col gap-18 px-4 sm:px-6 py-18 sm:pt-30 lg:pt-40 lg:pb-0 bg-cover bg-no-repeat" style="background-image:url('{{ asset('images/bg-perjalanan.jpg') }}')">
    
    <!--Counter-->
    <div class="sm:absolute sm:max-w-full sm:-top-12 lg:left-1/2 lg:-translate-x-1/2 grid grid-cols-2 sm:grid-cols-4 gap-5 lg:w-[1200px] lg:mx-auto">

        <!--Item-->
        <div class="bg-white rounded-md p-4">
            <div class="flex flex-row justify-start gap-1 mb-2">
                <h3 class="counter gradient-text !font-medium lg:!text-4xl sm:!text-2xl" data-target="36">0</h3>
                <h3 class="plus gradient-text !font-medium lg:!text-4xl sm:!text-2xl">+</h3>
            </div>
            <div>
                <p class="!text-[var(--color-heading)]">Tahun Pengalaman</p>
            </div>
        </div>

        <!--Item-->
        <div class="bg-white rounded-md p-4">
            <div class="flex flex-row justify-start gap-1 mb-2">
                <h3 class="counter gradient-text !font-medium lg:!text-4xl sm:!text-2xl" data-target="100">0</h3>
                <h3 class="plus gradient-text !font-medium lg:!text-4xl sm:!text-2xl">+</h3>
            </div>
            <div>
                <p class="!text-[var(--color-heading)]">Tenant Bekerjasama</p>
            </div>
        </div>

        <!--Item-->
        <div class="bg-white rounded-md p-4">
            <div class="flex flex-row justify-start gap-1 mb-2">
                <h3 class="counter gradient-text !font-medium lg:!text-4xl sm:!text-2xl" data-target="5">0</h3>
                <h3 class="plus gradient-text !font-medium lg:!text-4xl sm:!text-2xl">+</h3>
            </div>
            <div>
                <p class="!text-[var(--color-heading)]">Penghargaan</p>
            </div>
        </div>

        <!--Item-->
        <div class="bg-white rounded-md p-4">
            <div class="flex flex-row justify-start gap-1 mb-2">
                <h3 class="counter gradient-text !font-medium lg:!text-4xl sm:!text-2xl" data-target="4">0</h3>
                <h3 class="plus gradient-text !font-medium lg:!text-4xl sm:!text-2xl">+</h3>
            </div>
            <div>
                <p class="!text-[var(--color-heading)]">Sertifikasi</p>
            </div>
        </div>

    </div>
    
    <!--Content-->
    <div class="flex flex-col sm:flex-row-reverse justify-between sm:items-center gap-9 lg:w-[1200px] lg:mx-auto">
        
        <!--Main Content-->
        <div class="flex flex-col sm:w-1/2 lg:w-[60%] gap-10">

            <!--Title-->
            <div class="flex flex-col gap-5">
                <h6 class="bullet-2 text-white ">perjalanan kami</h6>
                <h2 class="text-white" >Sejarah & Pencapaian Kami</h4>
            </div>

            <!--carousel-->
            <div class="relative">
                <div class="swiper swiper-3">
                    <div class="swiper-wrapper !flex">
                        <x-loop.perjalanan h2="1988" p="PT KIW (Persero) sebelumnya bernama PT Kawasan Industri Cilacap (KIC), berdiri di Cilacap, Jawa Tengah." />
                        <x-loop.perjalanan h2="1998" p="Pindah ke kawasan industri baru di Semarang, Jawa Tengah dengan nama baru, yaitu: PT Kawasan Industri Wijayakusuma (Persero)." />
                        <x-loop.perjalanan h2="2018" p="PT Putra Wijayakusuma Sakti (PWS) lahir sebagai anak perusahaan PT Kawasan Industri Wijayakusuma (Persero)." />
                        <x-loop.perjalanan h2="2020" p="PT Kawasan Industri Terpadu Batang (KITB) adalah perusahaan joint venture antara PT KIW (Persero), PT PP (Persero), PTPN IX, dan Perusda Batang. Perusahaan ini membangun dan mengelola Kawasan Industri Terpadu Batang sebagai salah satu Proyek Strategis Nasional (PSN)." />
                        <x-loop.perjalanan h2="2021" p="PT KIW (Persero) mendapatkan Penyertaan Modal Negara (PMN) guna pembangunan dan pengembangan KIT Batang." />
                        <x-loop.perjalanan h2="2022" p="PT KIW resmi menjadi anggota Holding Danareksa." />
                        <x-loop.perjalanan h2="2022" p="Peresmian Holding Danareksa oleh Menteri BUMN." />
                    </div>

                </div>

                <!-- Custom icon.arrow Right -->
                <div class="absolute top-10 lg:top-15 swiper-button-next bg-white rounded-[100%] !h-[30px] !w-[30px] p-1">
                    <img class="w-2/3" src="{{ asset('images/arrow-right-solid.png') }}" alt="arrow">
                </div>
            
            </div>

        </div>

        <!--Image-->
        <img class="rounded-2xl lg:rounded-b-none sm:w-[45%] lg:w-[35%] lg:h-[460px] sm:object-cover" src="{{ asset('images/perjalanan-image.jpg') }}" alt="perjalanan">
    </div>


</section>
<!--End Perjalanan-->

<!--Start Tab-->



<!--End Tab-->

<x-footer/>

</x-default>