<div class="list-group">

    <a href="{{ route('yonetim.anasayfa') }}" class="list-group-item">
        <span class="fa fa-fw fa-dashboard"></span> Giriş
    </a>

    <a href="{{ route('yonetim.urun') }}" class="list-group-item">
        <span class="fa fa-fw fa-dashboard"></span> Ürünler
    </a>

<a href="{{ route('yonetim.kategori') }}" class="list-group-item ">
    <span class="fa fa-fw fa-cubes"></span> Kategoriler
</a>

    <a href="#" class="list-group-item collapsed" data-target="#submenu1" data-toggle="collapse" data-parent="#sidebar">
        <span class="fa fa-fw fa-folder"></span> Kategori Ürünleri

        <span class="caret arrow"></span>
    </a>

    <div class="list-group collapse" id="submenu1">

        <a href="#" class="list-group-item">Category</a>

        <a href="#" class="list-group-item">Category</a>

    </div>

<a href="{{ route('yonetim.kullanici') }}" class="list-group-item">
    <span class="fa fa-fw fa-dashboard"></span> Kullanıcılar
</a>


    <a href="{{ route('yonetim.siparis') }}" class="list-group-item">
        <span class="fa fa-fw fa-shopping-cart"></span> Siparişler
        <span class="badge badge-dark badge-pill pull-right">
            {{ $istatistikler['bekleyen_siparis'] }}
        </span>
    </a>

    <a href="#" class="list-group-item collapsed" data-target="#mnu_raporlar" data-toggle="collapse" data-parent="#sidebar"><span class="fa fa-fw fa-pie-chart"></span> Raporlar<span class="caret arrow"></span></a>
    <div class="list-group collapse" id="mnu_raporlar">
        <a href="#" class="list-group-item">Çok Satan Ürünler</a>
        <a href="#" class="list-group-item">Günlere Göre Satışlar</a>
    </div>
    <a href="#" class="list-group-item">
        <span class="fa fa-fw fa-gear"></span> Site Ayarları
    </a>

</div>

