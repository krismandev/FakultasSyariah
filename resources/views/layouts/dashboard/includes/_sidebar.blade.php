

<div id="sidebar-nav" class="sidebar" style="overflow-y: scroll;">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="{{route('index_admin')}}" class="{{(request()->is('admin')) ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <li><a href="{{route('getProdi')}}" class="{{(request()->is('admin/prodi*')) ? 'active' : ''}}"><i class="lnr lnr-tag"></i> <span>Prodi</span></a></li>
        <li><a href="{{route('getBerita')}}" class="{{(request()->is('admin/berita*')) ? 'active' : ''}}"><i class="lnr lnr-pencil"></i> <span>Berita</span></a></li>
        <li>
      		<a href="{{route('getBanner')}}" class="{{(request()->is('admin/banner*') || request()->is('admin/video-banner*') ) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-picture"></i> <span>Banner</span></a>
      	</li>
        <li>
      		<a href="#kariralumni" data-toggle="collapse" class="collapsed {{(request()->is('admin/akademik*') || request()->is('admin/bidang-pekerjaan*')) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-hourglass"></i> <span>Akademik</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
      		<div id="kariralumni" class="collapse" aria-expanded="false" style="height: 0px;">
      			<ul class="nav">
      				<li class=""><a href="{{route('getAkreditasi')}}" >Akreditasi Institusi </a></li>
      				<li class=""><a href="{{route('getAkrProdi')}}" >Akreditasi Program Studi </a></li>

      				<li class=""><a href="{{route('getPanduan')}}"> Panduan Akademik </a></li>
      				<li class=""><a href="{{route('getKalenderWisuda')}}"> Kalender Wisuda </a></li>
      				<li class=""><a href="#"> Kurikulum </a></li>
      			</ul>
      		</div>
      	</li>
        <li>
      		<a href="#green-campus" data-toggle="collapse" class="collapsed {{(request()->is('admin/profil*')) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-leaf"></i> <span>Profil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
      		<div id="green-campus" class="collapse" aria-expanded="false" style="height: 0px;">
      			<ul class="nav">
      				<li class="{{(request()->is('admin/sejarah*')) ? 'active' : ''}}"><a href="{{route('getSejarah')}}" >Sejarah </a></li>
                    <li class="{{(request()->is('admin/energi&perubahaniklim*')) ? 'active' : ''}}"><a href="{{route('getVisiMisi')}}" >Visi & Misi </a></li>
                    <li class="{{(request()->is('admin/limbah*')) ? 'active' : ''}}"><a href="{{route('getStruktur')}}" >Struktur Organisasi </a></li>
                    <li class="{{(request()->is('admin/air*')) ? 'active' : ''}}"><a href="{{route('getRenstra')}}" >Rencana Strategis </a></li>
                    <li class="{{(request()->is('admin/energi&perubahaniklim*')) ? 'active' : ''}}"><a href="{{route('getSenat')}}" >Senat Fakultas </a></li>
      			</ul>
      		</div>
      	</li>
        <li><a href="{{route('getLaporan')}}" class="{{(request()->is('admin/laporan*')) ? 'active' : ''}}"><i class="lnr lnr-pencil"></i> <span>Laporan</span></a></li>
        <li><a href="{{route('getPimpinan')}}" class="{{(request()->is('admin/pimpinan-fakultas*')) ? 'active' : ''}}"><i class="lnr lnr-pencil"></i> <span>Pimpinan Fakultas</span></a></li>
        <li><a href="{{route('getPencapaian')}}" class="{{(request()->is('admin/pencapaian*')) ? 'active' : ''}}"><i class="lnr lnr-pencil"></i> <span>Pencapaian</span></a></li>

        <li>
            <a href="{{route('getGaleri')}}" class="{{(request()->is('admin/galeri*')) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-picture"></i> <span>Galeri</span></a>
        </li>

        @if(auth()->user()->role == 'superadmin')
    		<li>
        	<a href="" class="{{(request()->is('admin/tim*')) ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span>Tim</span></a>
        </li>
        @endif
        <li>
        	<a href="" class="{{(request()->is('admin/kontak*')) ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Kontak</span></a>
        </li>
        <li>
        	<a href="" class="{{(request()->is('admin/pesan*')) ? 'active' : ''}}"><i class="lnr lnr-bubble"></i> <span>Pesan</span></a>
        </li>
      </ul>
    </nav>
  </div>
</div>
