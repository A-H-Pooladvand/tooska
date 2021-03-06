<header class="header">
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ image_url('files/_root/tooska.png', 22,5) }}" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ route('home') }}">صفحه اصلی</a></li>
                        <li><a href="{{ route('service.index') }}">خدمات</a></li>
                        <li><a href="{{ route('sample.index') }}">نمونه کارها</a></li>
                        <li><a href="{{ route('blog.index') }}">بلاگ</a></li>
                        <li><a href="{{ route('about.show') }}">درباره ما</a></li>
                        <li><a href="{{ route('contact.show') }}">ارتباط با ما</a></li>
                        {{--<li class="lastlink"><a class="btn btn-success" href="seo-analysis.php"><i class="glyphicon glyphicon-search"></i> free seo analysis</a></li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>