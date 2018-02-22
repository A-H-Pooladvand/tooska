<section class="section">
    <div class="container">
        {{--<div id="cta">
            <a href="seo-analysis.html" class="btn btn-primary rounded"> بهبود ابزارهای کاربردی</a>
        </div>--}}

        <div class="section-title text-center">
            <h5>تبدیل ایده به حقیقت</h5>
            <h3>چرا آیین اندیش توسکا</h3>
            <hr>
        </div><!-- end title -->

        <div class="row-fluid service-list">

            @foreach($whyChooseUs as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon withborder color{{ $loop->index+1 }} hovicon effect-1 sub-a">
                            <img src="{{ asset($item->image) }}" title="{{ $item->title }}" alt="{{ $item->title }}">
                        </div>
                        <div class="service-content">
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->summary }}</p>
                        </div>
                    </div>
                </div><!-- end col -->
            @endforeach

        </div><!-- end row -->
    </div><!-- end container -->
</section>