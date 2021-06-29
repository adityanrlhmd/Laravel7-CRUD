@extends('layouts.home.index')

@section('content')
    <section>
        <div class="container">
            <div class="grid">
                <div class="left">
                    <div class="isi">
                        <h1>
                            Apa itu
                            <br />
                            Healthy Paws ?
                        </h1>
                        <p>
                            Healthy Paws adalah layanan masa kini
                            <br />
                            untuk kamu yang memerlukan jasa konsultasi
                            <br />
                            mengenai kesehatan hewan peliharaan kamu secara jarak jauh.
                        </p>
                    </div>
                </div>
                <div class="right">
                    <img src="./src/img/anjing.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="dr">
        <div class="left">
            <img src="./src/img/dokter2.png" alt="" />
        </div>
        <div class="right">
            <div class="wrapp">
                <h1>
                    Menyejahterakan manusia
                    <br />
                    melalui kesehatan hewan
                </h1>
                <p>
                    “Manusya mriga satwa sewaka"
                    <br />
                    Jagalah kesehatan hewan anda dengan rutin konsultasi di healty
                    paws
                </p>
            </div>
        </div>
    </section>

    <section id="promo">
        <div class="container">
            <div class="title">
                <h1>Penawaran Menarik</h1>
            </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($penawaran as $item)
                    <div class="swiper-slide"><img src="{{Storage::url($item->image)}}" alt=""></div>
                    @endforeach
                    {{-- <div class="swiper-slide"><img src="./src/img/Promo2.png" alt=""></div>
                    <div class="swiper-slide"><img src="./src/img/Promo3.png" alt=""></div>
                    <div class="swiper-slide"><img src="./src/img/Promo2.png" alt=""></div> --}}
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="harga">
        <div class="container">
            <div class="title">
                <h1>Daftar Harga</h1>
            </div>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($harga as $item)
                    <div class="swiper-slide"><img src="{{Storage::url($item->image)}}" alt=""></div>
                    @endforeach
                    {{-- <div class="swiper-slide"><img src="./src/img/Harga2.png" alt=""></div>
                    <div class="swiper-slide"><img src="./src/img/harga4.png" alt=""></div>
                    <div class="swiper-slide"><img src="./src/img/Harga1.png" alt=""></div> --}}

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section id="artikel">
        <div class="container">
            <div class="top">
                <h1>Baca Artikel Baru</h1>
                <button class="btn">Lihat Semua</button>
            </div>
            <div class="tagar">
                <h2>Terbaru</h2>
                <h2>Populer</h2>
            </div>
            <div class="list">
                @foreach ($artikel as $item)
                    <div class="card1">
                        <img src="{{Storage::url($item->image)}}" alt="" />
                        <div class="title">
                            <p>
                                {{$item->text}}
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="card1">
                    <img src="./src/img/anak1.png" alt="" />
                    <div class="title">
                        <p>
                            Apa manfaat jika anak memiliki hewan peliharaan sejak kecil?
                        </p>
                    </div>
                </div>
                <div class="card1">
                    <img src="./src/img/anak2.png" alt="" />
                    <div class="title">
                        <p>
                            Bagaimana membersihkan bulu hewan peliharaan?
                        </p>
                    </div>
                </div>
                <div class="card1">
                    <img src="./src/img/anak1.png" alt="" />
                    <div class="title">
                        <p>
                            Mengapa memelihara hewan itu baik?
                        </p>
                    </div>
                </div>
                <div class="card1">
                    <img src="./src/img/kucing.png" alt="" />
                    <div class="title">
                        <p>
                            Mengapa memelihara hewan itu baik?
                        </p>
                    </div>
                </div>
                <div class="card1">
                    <img src="./src/img/anak2.png" alt="" />
                    <div class="title">
                        <p>
                            Mengapa memelihara hewan itu baik?
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section id="fitur">
        <div class="container">
            <div class="judul">
                <h1>Fitur</h1>
            </div>

            <div class="list-row">
                @foreach ($fitur as $item)
                <div class="card1">
                    <div class="wrapper">
                        <img src="{{Storage::url($item->image)}}" alt="" />
                        <div class="content">
                            <div class="wrap">
                                <div class="title">
                                    <h1>{{$item->title}}</h1>
                                </div>
                                <div class="isi">
                                    <p>
                                        {{$item->text}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="card1">
                    <div class="wrapper">
                        <img src="./src/img/fitu2.svg" alt="" />
                        <div class="content">
                            <div class="wrap">
                                <div class="title">
                                    <h1>Artikel yang menarik</h1>
                                </div>
                                <div class="isi">
                                    <p>
                                        Healthy Paws menyediakan beberapa artikel yang menarik
                                        sehingga wawasanmu tentang hewan peliharaan bertambah
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card1">
                    <div class="wrapper">
                        <img src="./src/img/fitur3.svg" alt="" />
                        <div class="content">
                            <div class="wrap">
                                <div class="title">
                                    <h1>Dapatkan resep</h1>
                                </div>
                                <div class="isi">
                                    <p>
                                        Dokter hewan di Healthy Paws sudah tersertifikasi
                                        sehingga akan memberikan kamu resep sesuai dengan hasil
                                        diagnose.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
