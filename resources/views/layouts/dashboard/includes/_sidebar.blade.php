

<div id="sidebar-nav" class="sidebar" style="overflow-y: scroll;">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="{{route('index_admin')}}" class="{{(request()->is('admin')) ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>admin</span></a></li>
        <li><a href="" class="{{(request()->is('admin/kategori*')) ? 'active' : ''}}"><i class="lnr lnr-tag"></i> <span>Kategori</span></a></li>
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

      				<li class=""><a href="#"> Panduan Akademik </a></li>
      				<li class=""><a href="{{route('getKalenderWisuda')}}"> Kalender Wisuda </a></li>
      				<li class=""><a href="#"> Kurikulum </a></li>
      			</ul>
      		</div>
      	</li>
        <li>
      		<a href="#green-campus" data-toggle="collapse" class="collapsed {{(request()->is('admin/green-campus*')) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-leaf"></i> <span>Profil</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
      		<div id="green-campus" class="collapse" aria-expanded="false" style="height: 0px;">
      			<ul class="nav">
      				<li class="{{(request()->is('admin/penataan&infrastruktur*')) ? 'active' : ''}}"><a href="" >Sejarah </a></li>
              <li class="{{(request()->is('admin/energi&perubahaniklim*')) ? 'active' : ''}}"><a href="" >Visi & Misi </a></li>
              <li class="{{(request()->is('admin/limbah*')) ? 'active' : ''}}"><a href="" >Struktur Organisasi </a></li>
              <li class="{{(request()->is('admin/air*')) ? 'active' : ''}}"><a href="" >Rencana Strategis </a></li>
              <li class="{{(request()->is('admin/energi&perubahaniklim*')) ? 'active' : ''}}"><a href="" >Senat Fakultas </a></li>
      			</ul>
      		</div>
      	</li>
        <li>
      		<a href="#galeri" data-toggle="collapse" class="collapsed {{(request()->is('admin/foto*') || request()->is('admin/poster*') ) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-picture"></i> <span>Galeri</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
      		<div id="galeri" class="collapse" aria-expanded="false" style="height: 0px;">
      			<ul class="nav">
      				<li class="{{(request()->is('admin/foto*')) ? 'active' : ''}}"><a href="" >Foto </a></li>
      				<li class="{{(request()->is('admin/poster*')) ? 'active' : ''}}"><a href="">Poster </a></li>
      			</ul>
      		</div>
      	</li>
        <li>
      		<a href="#tentang" data-toggle="collapse" class="collapsed {{(request()->is('admin/tentang*')) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-text-align-right"></i> <span>Tentang</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
      		<div id="tentang" class="collapse" aria-expanded="false" style="height: 0px;">
      			<ul class="nav">
              <li class="{{(request()->is('admin/logo*')) ? 'active' : ''}}"><a href="" >Makna Logo </a></li>
      				<li class="{{(request()->is('admin/selayang-pandang*')) ? 'active' : ''}}"><a href="" >Selayang Pandang </a></li>
              <li class="{{(request()->is('admin/kerjasama*')) ? 'active' : ''}}"><a href="" >Kerja sama </a></li>

      			</ul>
      		</div>
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
