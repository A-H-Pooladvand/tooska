<section class="section nopad c3">
    <div class="container">
        <div class="row call-out-box">
            <div class="col-md-7">
                <h2>آیین اندیش توسکا</h2>
                <span>برای ارتباط با ما</span>
                <a style="color: orangered" href="{{ route('contact.show') }}">تماس</a>
                <span>حاصل فرمایید و یا برای اطلاعات بیشتر</span>
                <a style="color: orangered" href="{{ route('about.show') }}">درباره ما</a>
                <span>مطالعه نمایید.</span>
            </div>
            <div class="col-md-5 text-center">
                <a href="{{ route('contact.show') }}" class="btn btn-primary btn-lg">سوالی دارید؟</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('contact.show') }}" class="btn btn-primary btn-lg">علاقه به همکاری دارید؟</a>
            </div><!-- end col -->
        </div>
    </div>
</section>

<div class="copyrights">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-left">
                <a class="footer-brand" href="{{ route('home') }}"><img src="{{ image_url('files/_root/tooska.png', 18,5) }}" alt="آیین اندیش توسکا"></a>
            </div>
            <div class="col-md-8 text-right">
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> صفحه اصلی</a></li>
                    <li><a href="{{ route('service.index') }}">خدمات</a></li>
                    <li><a href="{{ route('sample.index') }}">نمومه کارها</a></li>
                    <li><a href="{{ route('blog.index') }}">بلاگ</a></li>
                    <li><a href="{{ route('about.show') }}">درباره ما</a></li>
                    <li><a href="{{ route('contact.show') }}">ارتباط با ما</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>