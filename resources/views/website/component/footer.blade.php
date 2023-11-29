
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>
                    {{\App\Helpers\getSettingCategory('footer1')->name}}
                </h3>
                <ul>
                    @foreach(\App\Helpers\getSettingCategory('footer1')->posts as $p)
                        <!-- <li>
                            <a href="{{route('n.show',$p->slug)}}">
                                {{$p->title}}
                            </a> 
                        </li> -->
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <h3>
                    {{\App\Helpers\getSettingCategory('footer2')->name}}
                </h3>
                <ul>
                    @foreach(\App\Helpers\getSettingCategory('footer2')->posts as $p)
                        <!-- <li>
                            <a href="{{route('n.show',$p->slug)}}">
                                {{$p->title}}
                            </a>
                        </li> -->
                    @endforeach
                </ul>
            </div>

            <div class="col-md-3">
                <h3>
                    聯絡方式
                </h3>
                <p class="text-secondary">
                    ！輸入您的聯絡資訊
                </p>
            </div>
            <div class="col-md-3">
                <h3>
                    商標
                </h3>
                <div class="text-center namad">
                <img src="images/cafe&cake.png" width="145px" />
                </div>
            </div>
            <div class="col-md-12 pb-4">
                <hr>
                <div class="p4 text-center social">
                    @if(trim(\App\Helpers\getSetting('soc_in')) != '')
                        <a target="_blank" href="{{\App\Helpers\getSetting('soc_in')}}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if(trim(\App\Helpers\getSetting('soc_tg')) != '')
                        <a target="_blank" href="{{\App\Helpers\getSetting('soc_tg')}}">
                            <i class="fab fa-telegram"></i>
                        </a>
                    @endif
                    @if(trim(\App\Helpers\getSetting('soc_wp')) != '')
                        <a target="_blank"
                           href="https://api.whatsapp.com/send/?phone={{urlencode(\App\Helpers\getSetting('soc_wp'))}}&text=%D8%A8%D8%A7%20%D8%B3%D9%84%D8%A7%D9%85%0A%D8%A7%D8%B2%20%D8%B3%D8%A7%DB%8C%D8%AA%20%D8%A8%D8%B1%D8%A7%DB%8C%20%D8%B3%D9%81%D8%A7%D8%B1%D8%B4%20%D9%88%20%D9%BE%D8%B4%D8%AA%DB%8C%D8%A8%D8%A7%D9%86%DB%8C%20%D8%AA%D9%85%D8%A7%D8%B3%20%D9%85%DB%8C%DA%AF%DB%8C%D8%B1%D9%85&app_absent=0">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    @endif
                    @if(trim(\App\Helpers\getSetting('soc_tw')) != '')
                        <a target="_blank" href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a target="_blank" href="https://line.me/R/ti/p/@711zwvdd?from=page&accountId=711zwvdd"> 
                            <i class="fab fa-line"></i>
                        </a>
                    @endif
                    @if(trim(\App\Helpers\getSetting('soc_yt')) != '')
                        <a target="_blank" href="{{\App\Helpers\getSetting('soc_yt')}}">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                </div>
                <hr>
                <div class="text-center text-black-50">
                    {{\App\Helpers\getSetting('copyright')}}
                    &copy; {{date('Y')}}
                </div>
            </div>
        </div>
    </div>
</footer>
<input type="hidden" id="fav-toggle" value="{{route('fav.toggle','')}}">
@yield('js-content')
<script src="{{asset('js/theme.js')}}" defer></script>
@include('component.lang')
</body>
</html>
