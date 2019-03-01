<div class="row footer no-margin">
    <div class="container">
        <div class="col-md-6 text-left">
            <p>{{ Setting::get('site_copyright', '&copy; '.date('Y').' Appoets') }}</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
            <a href="{{Setting::get('store_link_ios','#')}}" class="app">
                <img src="{{asset('asset/img/appstore.png')}}">
            </a>
            <a href="{{Setting::get('store_link_android','https://play.google.com/store/apps/details?id=com.izzicabuser.app')}}" class="app">
                <img src="{{asset('asset/img/playstore.png')}}">
            </a>
        </div>
    </div>
</div>