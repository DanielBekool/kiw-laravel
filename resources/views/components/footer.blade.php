<!--Footer-->
        <section id="footer" class="pt-30 bg-cover bg-[var(--color-transit)]" style="background-image:url('{{ asset('images/Footer.jpg') }}')">
            <div class="flex lg:flex-col sm:flex-row overflow-hidden relative flex-col-reverse lg:gap-20 sm:gap-10 gap-10  lg:px-0 lg:max-w-[1200px] mx-auto sm:px-6 px-4">
                
                <!--Main Content-->
                <div>
                    <!--Title-->
                    <div class="mb-15">
                        <h2 class="!text-white w-[850px] footer">Mulai Investasi Anda di Kawasan Industri Strategis!</h2>
                    </div>

                    <!--Content-->
                    <div class="flex flex-row gap-5 justify-between">

                         <!--Button-->
                        <div class="flex flex-col gap-5">
                            <a class="w-[400px] btn4 group" href="https://maps.app.goo.gl/ujmEMzm5t5cCsjGx9" target="_blank" rel="noopener noreferrer">
                                <span class="transition-all duration-300 !text-[.9em]
                                            group-hover:text-transparent 
                                            group-hover:bg-clip-text 
                                            group-hover:[background-image:linear-gradient(268deg,#1F77D3_1.1%,#321B71_99.1%)]">
                                    Jl. Raya Semarang, Kendal KM 12, Indonesia
                                </span>

                                <span class="gradient-icon group-hover:hidden">
                                    <x-icon.arrow-right-color/>
                                </span>

                                <span class="gradient-icon hidden group-hover:block">
                                    <x-icon.arrow-right-gradient/>
                                </span>
                            </a>

                            <a class="w-[300px] btn4 group" href="mailto:pemasaran@kiw.co.id">
                                <span class="transition-all duration-300 !text-[.9em]
                                            group-hover:text-transparent 
                                            group-hover:bg-clip-text 
                                            group-hover:[background-image:linear-gradient(268deg,#1F77D3_1.1%,#321B71_99.1%)]">
                                    pemasaran@kiw.co.id
                                </span>

                                <span class="gradient-icon group-hover:hidden">
                                    <x-icon.arrow-right-color/>
                                </span>

                                <span class="gradient-icon hidden group-hover:block">
                                    <x-icon.arrow-right-gradient/>
                                </span>
                            </a>

                            <a class="w-[250px] btn4 group" href="tel:+6281211118022">
                                <span class="transition-all duration-300 !text-[.9em]
                                            group-hover:text-transparent 
                                            group-hover:bg-clip-text 
                                            group-hover:[background-image:linear-gradient(268deg,#1F77D3_1.1%,#321B71_99.1%)]">
                                    +62 812 1111 8022
                                </span>

                                <span class="gradient-icon group-hover:hidden">
                                    <x-icon.arrow-right-color/>
                                </span>

                                <span class="gradient-icon hidden group-hover:block">
                                    <x-icon.arrow-right-gradient/>
                                </span>
                            </a>
                        </div>

                        <!--Link-->
                        <div class="flex flex-col gap-6">
                            <h6 class="!text-white uppercase">Link</h6>
                            <div class="grid grid-cols-2 gap-2 !text-[.9em]">
                                <a href="/home">Beranda</a>
                                <a href="/layanan">Layanan</a>
                                <a href="/tentang">Tentang</a>
                                <a href="/keunggulan">Keunggulan</a>
                                <a href="/vr">VR</a>
                                <a href="/penghargaan">Penghargaasn</a>
                                <a href="/media">Media</a>
                                <a href="/kontak">Kontak</a>
                            </div>
                        </div>

                        <!--Akses-->
                        <div class="flex flex-col gap-6">
                            <h6 class="!text-white uppercase">Akses</h6>
                            <div class="grid grid-rows-1 gap-2 !text-[.9em]">
                                <a href="/ppid">PPID</a>
                                <a href="/billing">Billing</a>
                                <a href="/csirt">CSIRT</a>
                                <a href="/karier">Karier</a>
                            </div>
                        </div>

                        <!--Layanan-->
                        <div class="flex flex-col gap-6">
                            <h6 class="!text-white uppercase">layanan</h6>
                            <div class="grid grid-rows-1 gap-2 !text-[.9em]">
                                <a href="/lahan-industri-siap-bangun">Lahan Industri Siap Bangun</a>
                                <a href="/bangunan-pabrik-siap-pakai">Bangunan Pabrik Siap Pakai (BPSP)</a>
                                <a href="/kerjasama-komersial-kawasan-industri">Kerjasama Komersial Kawasan Industri</a>
                            </div>
                        </div>

                       
                    </div>


                    <!--Logo-->
                    <div class="flex justify-between mt-20">

                        <!--Partner-->
                        <div class="flex flex-row gap-5">
                            <img src="{{ asset('images/kiwinners.png') }}" alt="kiwinners">
                            <img src="{{ asset('images/akhlak.png') }}" alt="akhlak">
                            <img src="{{ asset('images/bumn-untuk-indonesia.png') }}" alt="bumn">
                        </div>

                        <!--Social Media-->
                        <div class="flex flex-row gap-5">
                            <a href="https://www.facebook.com/PT.KIW/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('images/facebook-white.png') }}" alt="facebook">
                            </a>
                            <a href="https://twitter.com/pt_kiw" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('images/twitter-white.png') }}" alt="twitter">
                            </a>
                            <a href="https://www.instagram.com/ptkiw/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('images/instagram-white.png') }}" alt="instagram">
                            </a>
                            <a href="https://www.linkedin.com/company/pt-kawasan-industri-wijayakusuma-persero/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('images/linkedin-white.png') }}" alt="linkedin">
                            </a>
                            <a href="https://www.youtube.com/channel/UCqKN0Lf8lnGJ1buVMiUyN4A/featured" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('images/youtube-white.png') }}" alt="youtube">
                            </a>
                        </div>


                    </div>
            
                </div>

                <!--Copyrights-->
                <div class="text-center py-5 border-t-1 border-[var(--color-bordertransparent)]">
                    © Kawasan Industri Wijayakusuma | Seluruh Hak Cipta Dilindungi
                </div>

            </div>
        </section>
