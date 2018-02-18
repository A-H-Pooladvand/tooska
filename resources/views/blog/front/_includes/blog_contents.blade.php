<section class="section lb">
    <div class="container">
        <div class="row">
            <div class="content col-md-9 col-sm-12">

                @foreach($blogs as $item)
                    <div class="blog-micro-wrapper">
                        <div class="row post-micro clearfix">
                            <div class="col-md-4">
                                <div class="post-media clearfix">
                                    <a href="single.html" title="{{ $item->title }}"><img src="{{ image_url($item->image, 25,25, true) }}" alt="{{ $item->title }}" class="img-responsive"></a>
                                </div><!-- end post-media -->
                            </div><!-- end col -->

                            <div class="col-md-8">
                                <div class="large-post-meta">
                                    <span class="avatar"><a href="author.html"><img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">{{ $item->user->fullName() }}</a></span>
                                    <small>&#124;</small>
                                    <span><a href="category.html"><i class="fa fa-clock-o"></i> {{ $item->created_at }}</a></span>
                                    <small class="hidden-xs">&#124;</small>
                                    <span class="hidden-xs"><a href="single.html#comments"><i class="fa fa-comments-o"></i> 12</a></span>
                                    <small class="hidden-xs">&#124;</small>
                                    <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> 444</a></span>
                                </div><!-- end meta -->
                                <h3 class="entry-title"><a href="single.html" title="">{{ $item->title }}</a></h3>
                                <p><a href="single.html" title="">{{ $item->summary }}</a></p>
                                <div class="post-sharing clearfix">
                                    <ul class="list-inline social-small">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                                <a href="single.html" title="{{ $item->title }}" class="readmore"> ادامه مطلب</a>
                            </div><!-- end col -->
                        </div><!-- end post-micro -->
                    </div><!-- end wrapper -->
                @endforeach

                <div class="text-center">
                    {{ $blogs->links() }}
                </div>

            </div><!-- end content -->

            <div class="sidebar col-md-3 col-sm-12">

                {{--<div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>اشتراک اخبار</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="newsletter-widget">
                        <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی!</p>
                        <form>
                            <input type="text" class="form-control input-lg" placeholder="نام شما"/>
                            <input type="email" class="form-control input-lg" placeholder="ایمیل"/>
                            <button class="btn btn-primary btn-block">عضویت</button>
                        </form>
                    </div><!-- end newsletter -->
                </div><!-- end widget -->--}}

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>آخرین اخبار</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="shopwidget">
                        <ul class="shop-list">
                            <li>
                                <img src="{{ asset('custom/images/upload/seo_01.png') }}" alt="">
                                <h3><a href="#" title="">90+ لورم ایپسوم ...</a></h3>
                                <small>22.12.2015</small>
                                <a class="new-price" href="">اطلاعات بیشتر</a>
                            </li>
                            <li>
                                <img src="{{ asset('custom/images/upload/seo_02.png') }}" alt="">
                                <h3><a href="#" title="">لورم ایپسوم یا طرح‌نما به متنی آزمایشی</a></h3>
                                <small>22.12.2015</small>
                                <a class="new-price" href="">اطلاات بیشتر</a>
                            </li>
                        </ul><!-- end blog list -->
                    </div><!-- end blogwidget -->
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>لورم ایپسوم </h5>
                        <hr>
                    </div><!-- end title -->

                    <ul class="check">
                        <li><a href="#">لورم ایپسوم <span>(12)</span></a></li>
                        <li><a href="#">لورم ایپسوم & طرح‌نما <span>(21)</span></a></li>
                        <li><a href="#">طرح‌نما <span>(44)</span></a></li>
                        <li><a href="#">طرح‌نما <span>(09)</span></a></li>
                        <li><a href="#">لورم ایپسوم<span>(31)</span></a></li>
                        <li><a href="#">لورم ایپسوم <span>(41)</span></a></li>
                    </ul>
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>تگ های عمومی</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="tags">
                        <a href="#">طرح‌نما </a>
                        <a href="#">لورم ایپسوم</a>
                        <a href="#">لورم ایپسوم</a>
                        <a href="#">طرح‌نما </a>
                        <a href="#">لورم ایپسوم</a>
                        <a href="#">لورم ایپسوم</a>
                        <a href="#">طرح‌نما </a>
                        <a href="#">لورم ایپسوم</a>
                        <a href="#">لورم ایپسوم</a>
                    </div>
                </div><!-- end widget -->

                {{--<div class="widget clearfix">
                    <div class="shopwidget">
                        <a href="#"><img src="{{ asset('custom/images/upload/banner.png') }}" alt="" class="img-responsive"></a>
                    </div><!-- end banner -->
                </div><!-- end widget -->--}}

            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>