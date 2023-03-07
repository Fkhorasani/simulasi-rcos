@extends('cms.layout.app')

@section('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div id="loading" class="w-screen h-full fixed bg-sky-900 bg-opacity-50 element-show">
  <div class="h-full w-full flex justify-center items-center flex-col">
    <div>
      <img src="https://rcos.umn.ac.id/img/mini-logo.png" class="w-20 mb-10"/>
    </div>
    <div class="wrapper">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
  </div>
  </div>
</div>
<div class="">
  <div class="w-full bg-cover w-full h-screen bg-[url('https://rcos.umn.ac.id/img/umn-night-overlay.png')]">
    <div class="h-20 w-full pt-4 flex flex-row align-items-center justify-around items-center">
      <a href="https://rcos.umn.ac.id" class="flex flex-row align-items-center mt-2 md:mt-0">
          <img src="https://rcos.umn.ac.id/img/mini-logo-putih.png" alt="RCOS - Logo UMN" class="w-14"/>
          <span class="text-white text-4xl font-bold">RCOS</span>
      </a>
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <nav class="w-full flex flex-col md:flex-row align-items-center md:justify-around menu__box">
            <div class="font-bold text-md menu__item flex md:flex-row flex-col text-center justify-center align-items-center">
              <a href="" class="link">Home</a>
              <a href="" class="link my-2 md:my-0 md:ml-4">Login</a>
              <a href="https://umn.ac.id" class="md:ml-4 px-8 py-2 border-solid border-2 umn">Universitas Multimedia Nusantara</a>
            </div>
        </nav>
      </div>
    </div>
    <div class="w-full md:w-1/2 ml-12 md:ml-24">
      <div class="flex items-center h-screen">
        <div class="h-fit">
            <h1 class="text-2xl text-white my-3">Welcome to</h1>
            <h1 class="text-4xl md:text-5xl text-white leading-10 my-4">Research and Community</h1>
            <h1 class="text-4xl md:text-5xl text-white leading-10 my-4">Outreach Service</h1>
            <h1 class="text-2xl text-white my-3">Universitas Multimedia Nusantara</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- PROGRAM KERJA ------------------------------------------------------------------------------------------------------------------->
  <div class="">
    <div class ="flex justify-center items-center">
      <h1 class="text-5xl my-20 pt-10 text-[#003d73]">Program Kerja</h1> 
    </div>
    <div class ="flex justify-center items-center">
      <div class="grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1">
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Penelitian</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Penelitian Disponsori UMN</li>
                <li>Penelitian Disponsori Industri</li>
                <li>Penelitian Disponsori Pemerintah (Penelitian Hibah)</li>
                <li>Penelitian Skripsi Mahasiswa</li>
              </ul>
            </div>
          </div>
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Pengabdian Masyarakat</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Penyuluhan Memilih Perguruan Tinggi bagi SMA</li>
                <li>Program One Teacher On Netbook (PROTON)</li>
                <li>Program Business Incubator untuk UKM</li>
                <li>Program Pemberdayaan Masyarakat</li>
                <li>Program Sumbangan Sosial</li>
              </ul>
            </div>
          </div>
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Pelatihan / Workshop / Seminar / Konferensi / Exhibition (MICE)</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Pelatihan ICT (Sertifikat)</li>
                <li>Pelatihan Akuntansi (Sertifikat)</li>
                <li>Pelatihan Manajemen (Sertifikat)</li>
                <li>Seminar</li>
                <li>Konferensi ICT</li>
                <li>Pameran ICT-Multimedia</li>
                <li>Pameran Karya Mahasiswa</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class ="flex justify-center items-center">
      <div class="grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1">
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Konsultasi</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Konsultasi Perpajakan/Akuntansi</li>
                <li>Konsultasi Bisnis</li>
                <li>Konsultasi ICT</li>
                <li>Konsultasi Media Komunikasi</li>
                <li>Konsultasi Grafis/Animasi/Sinematografi</li>
              </ul>
            </div>
          </div>
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Manajemen HAKI</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Pendaftaran Paten Penelitian</li>
                <li>Database Penelitian</li>
                <li>Knowledge Management</li>
              </ul>
            </div>
          </div>
        <div class="col-span-1 block max-w-sm bg-white text-center shadow-lg m-4">
          <div class="card-header border-b-2 border-black-100 py-4 px-6">Bidang Publikasi Ilmiah (Penerbitan Jurnal)</div>
            <div class="p-6">
              <ul class="card-text mb-4 list-disc py-6">
                <li>Penerbitan Jurnal UltimArt, UltimaComm, Ultima SysInfo, Ultimatics, Ultima Computer, Ultima Accounting, Ultima Management.</li>
                <li>Penerbitan Abstract Penelitian</li>
                <li>Penerbitan Buku Dosen</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FASILITAS ------------------------------------------------------------------------------------------------------------------->
  <div class="bg-sky-900 pb-24">
    <div class="flex justify-center items-center w-full">
      <h1 class="text-5xl my-20 pt-10 font-color-dark text-center text-white">Fasilitas</h1>
    </div>
    <div class="flex flex-col justify-center mx-auto">
      <div class="flex justify-center">
        <div class="grid grid-cols-3 w-3/4 gap-8 ">
          <img class="col-span-1 text-gray-200 lg:w-[40vw] w-[20vw] min-h-min object-cover rounded-full" src="{{asset('image/cewek.jpg')}}">
          <img class="col-span-1 text-gray-200 lg:w-[40vw] w-[20vw] min-h-min object-cover rounded-full" src="{{asset('image/pikachu.jpg')}}">
          <img class="col-span-1 text-gray-200 lg:w-[40vw] w-[20vw] min-h-min object-cover rounded-full" src="{{asset('image/kucing.jpg')}}">
        </div>
      </div>
        <div class="flex justify-center">
          <div class="grid grid-cols-2 w-1/2 gap-8 ">
            <img class="col-span-1 text-gray-200 lg:w-[40vw] w-[20vw] min-h-min object-cover rounded-full" src="{{asset('image/pikachu.jpg')}}">
            <img class="col-span-1 text-gray-200 lg:w-[40vw] w-[20vw] min-h-min object-cover rounded-full" src="{{asset('image/cewek.jpg')}}">
          </div>
        </div>
      </>
    </div>   
  </div>
  
  <!-- KEGIATAN ------------------------------------------------------------------------------------------------------------------->
  <div class="bg-[url('https://rcos.umn.ac.id/front/images/bgr-contact-area.png'">  
    <div class ="flex justify-left items-center mx-16">
      <h1 class="mx-8 text-5xl pt-10 text-black">Kegiatan</h1> 
    </div>
    <div class ="flex justify-center items-center m-6 mx-16">
      <div class="grid lg:grid-cols-2 sm:grid-cols-1">
        <div class="lg:col-span-1 block lg:max-w-8xl m-8">
          <h1 class="text-3xl my-5">Penelitian</h1> 
            <ul class="card-text mb-4 list-disc pl-12">
              <li>Penelitian Perancangan Blue Print Pengembangan Sistem Teknologi Informasi dan Komunikasi Kabupaten Halmahera Utara Provinsi Maluku Utara (2007: Fak. ICT)</li>
              <li>Pengaruh Tayangan Sinetron terhadap Perilaku Konsumerisme Remaja (2008: Ilmu Komunikasi)</li>
            </ul>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Penyuluhan SMA</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Pelatihan ICT Guru Biologi Jakarta Pusat</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Pelatihan ICT Guru Bimbingan dan Konseling</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Pelatihan ICT untuk Program Management Trainee Kompas-Gramedia</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Seminar Peranan Guru BK di Era ICT (Jakarta Timur, Jkt Selatan, Jkt Barat </h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Seminar Pengembangan Pembelajaran Berbasis ICT (bekerjasama dengan UKI)</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Seminar Industri Kreatif</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Seminar Business Incubator</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Sumbangan Komputer bagi SD</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Sumbangan Bencana Situ Gintung oleh Mhs & Dosen UMN</h1>
        </div>
        <div class="lg:col-span-1 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Sumbangan Bencana Merapi dan Mentawai</h1>
        </div>
        <div class="lg:col-span-2 block lg:max-w-8xl m-6">
          <h1 class="text-3xl my-5">Pelatihan Wirausaha Muda UMN</h1>
        </div>
      </div>
    </div>
  </div>

<!-- PORTOFOLIO PROGRAM ------------------------------------------------------------------------------------------------------------------->
<div class="ml-20 my-4 bg-[url('https://rcos.umn.ac.id/front/images/bgr-contact-area.png')]">
  <div class="text-5xl pt-10 text-[#003d73]">Portofolio Program</div>
  <div class="grid grid-cols-2">
    <div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Penelitian</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Melakukan penelitian-penelitian di bidang ICT, Bisnis, Komunikasi, dan Seni/Desain untuk mengembangkan ilmu, teknologi dan seni yang bermanfaat bagi masyarakat; baik yang disponsori oleh UMN sendiri, pihak industri, pihak pemerintah, dan institusi luar negeri.
      </div>
    </div><div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Pengabdian</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Mengembangkan kemitraan dengan berbagai kalangan seperti pemerintah, industri, lembaga pendidikan lain, dan luar negeri, dalam rangka program pengabdian masyarakat guna menyalurkan kepakaran para dosen UMN.
      </div>
    </div>
    <div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Pelatihan</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Melakukan pelatihan di berbagai bidang (ICT, Bisnis, Komunikasi, Seni/Desain) untuk meningkatkan keahlian anggota masyarakat dalam rangka membangun sumberdaya manusia yang berkualitas untuk memenuhi kebutuhan pembangunan masyarakat.
      </div>
    </div>
    <div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Jasa Konsultasi</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Melakukan kegiatan-kegiatan konsultasi yang di bidang ICT, Bisnis, Komunikasi, dan Seni/Desain yang meliputi studi, survai, perencanaan dan perancangan/desain, pelaksanaan fisik dan jasa, manajemen dan manajemen proyek.
      </div>
    </div>
    <div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Manajemen Haki</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Memberikan layanan pengelolaan asset intelektual, khususnya pendaftaran hak cipta/hak paten dari para dosen/peneliti; serta database penelitian UMN.
      </div>
    </div>
    <div class="col-span-2 md:col-span-1 mt-10">
      <h1 class="text-5xl pt-10">Publikasi Ilmiah</h1>
      <div class="font-thin text-lg ml-1 mt-6">
        Menerbitkan jurnal-jurnal ilmiah setiap Program Studi, dan mendistribusikan kepada pihak-pihak terkait.
      </div>
    </div>
  </div>
</div>

<!-- TEAM MEMBER ------------------------------------------------------------------------------------------------------------------->
<div class="bg-sky-900 p-20 mt-20">
  <div class="border-2 border-white rounded-l">
    <div class="text-center text-5xl text-white text-bold my-20">Team Members</div>
    <div class="grid grid-cols-2 gap-y-12">
      <div class="col-span-2 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://lppm.umn.ac.id/Image/winarno.jpg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Dr. Ir. PM Winarno, M.kom</div>
          <div class="text-lg">Direktur LPPM</div>
          <div class="text-lg">pmwinarno@umn.ac.id</div>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Ni%20Made%20Satvika.jpeg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Dr. Ni Made Satvika Iswari, S.T., M.T.</div>
          <div class="text-lg">Kepala Biro Penelitian</div>
          <div class="text-lg">satvika@umn.ac.id</div>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Arief%20Iswariyadi.jpeg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Arief Iswariyadi, M.Sc., Ph.D.</div>
          <div class="text-lg">Kepala Biro Inovasi</div>
          <div class="text-lg">arief.iswariyadi@umn.ac.id</div>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Andy%20Firmansyah.jpeg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Andy Firmansyah, S.Ikom., M.M.</div>
          <div class="text-lg">Kepala Biro Pengabdian Kepada Masyarakat</div>
          <div class="text-lg">andy.firmansyah@umn.ac.id</div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-3 gap-y-12 my-12">
      <div class="col-span-3 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Dina%20Rosiana.jpg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Immanuel Dina Rosiana, S.Psi.</div>
          <div class="text-lg">Research Center Officer</div>
        </div>
      </div>
      <div class="col-span-3 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Regina.jpg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Regina Shwastika, M.M.</div>
          <div class="text-lg">Research Center Officer</div>
        </div>
      </div>
      <div class="col-span-3 md:col-span-1 flex justify-center">
        <div class="text-center text-white">
          <div class="flex justify-center">
            <img src="https://rcos.umn.ac.id/img/team/Marcella.jpg" class="w-40 h-40 object-cover rounded-full"/>
          </div>
          <div class="text-2xl font-semibold">Marcella Margaretta, S.Si.</div>
          <div class="text-lg">Administrative Assistant</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CONTACT INFO ------------------------------------------------------------------------------------------------------------------->
<div class="mt-20">
  <div class="grid grid-cols-12 mx-16">
    <div class="md:col-span-4 col-span-12 ">
      <div class="text-sky-800 text-2xl font-bold mb-8">CONTACT INFO</div>
      <div class="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.208561828214!2d106.618495!3d-6.256862!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb56b25975f9%3A0x50c7d605ba8542f5!2sMultimedia%20Nusantara%20University!5e0!3m2!1sen!2sid!4v1678182733793!5m2!1sen!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="col-span-12 md:col-span-3">
      <div class="text-sky-900 text-lg font-light mb-8">Universitas Multimedia Nusantara Jl. Scientia Boulevard, Gading Serpong, Tangerang, Banten-15811 Indonesia</div>
      <div class="font-extralight text-xl">(T) +62-21.5422.0808</div>
      <div class="font-extralight text-xl">(F) +62-21.5422.0800</div>
      <div class="font-extralight text-xl">(T) +62811 9555 510</div>
      <div class="font-extralight text-xl">(T) +62811 9555 501</div>
    </div>
    <div class="col-span-12 md:col-span-3">
      <div><img src="https://researchcenter.umn.ac.id/img/logo-akreditasi.png"/></div>
      <div class="text-sky-800 text-lg font-light mb-8">Universitas Multimedia Nusantara "Excellent Career Begins With Excellent Education"</div>
      
    </div>
  </div>
  <div class="col-span-12 mx-16 mt-10">
    <hr class="color-[#003d73]">
    <p class="py-10 text-[#003d73]"><b>© Universitas Multimedia Nusantara 2022. All Rights Reserved</b></p>
  </div>
</div>
@endsection

@section('scripts')
  <script src={{ asset("js/loading.js") }}></script>
@endsection
