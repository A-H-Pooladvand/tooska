<section class="section lb">
    <div class="container">
        <div class="row">
            <div class="content col-md-9 col-sm-12">
                <div class="blog-micro-wrapper">
                    <div class="post-micro clearfix text-center">
                        <div class="post-media clearfix">
                            <a href="single.html" title=""><img src="{{ image_url($blog->image, 81,45,true) }}" alt="" class="img-responsive img-rounded"></a>
                        </div><!-- end post-media -->

                        {{--<div class="large-post-meta">
                            <span class="avatar">
                                <a href="author.html"><img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle"> نویسنده</a>
                            </span>
                            <small>|</small>
                            <span><a href="category.html"><i class="fa fa-clock-o"></i> 1 اسفند 1396</a></span>
                            <small class="hidden-xs">|</small>
                            <span class="hidden-xs">
                                <a href="single.html#comments"><i class="fa fa-comments-o"></i> 12</a>
                            </span>
                            <small class="hidden-xs">|</small>
                            <span class="hidden-xs"><a href="single.html"><i class="fa fa-eye"></i> 444</a></span>
                        </div><!-- end meta -->--}}

                        {{--<div class="post-sharing clearfix">
                            <ul class="list-inline social-small">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->--}}
                    </div><!-- end post-micro -->

                    <div class="post-desc clearfix">

                        <blockquote>
                            <h3 class="entry-title">{{ $blog->title }}</h3>
                            <h5>{{ $blog->summary }}</h5>
                            <p>{{ $blog->content }}</p>
                        </blockquote>

                      {{--  <div class="tags clearfix">
                            <a href="#">دسته بندی اول</a>
                        </div><!-- end tags -->--}}
                    </div><!--end post-desc -->
                </div><!-- end wrapper -->

                {{--<div class="blog-micro-wrapper">
                    <div class="postpager">
                        <ul class="pager row">
                            <li class="previous col-md-6 col-sm-12 text-right">
                                <div class="post">
                                    <div class="mini-widget-thumb">
                                        <a href="single.html">
                                            <img alt="" src="{{ asset('custom/images/upload/big_blog_01.png') }}" class="img-responsive alignright img-circle">
                                        </a>
                                    </div>
                                    <div class="mini-widget-title">
                                        <a href="single.html"> عنوان خبر قبلی </a>
                                        <small>خبر قبلی</small>
                                    </div>
                                </div>
                            </li>
                            <li class="next col-md-6 col-sm-12 text-left">
                                <div class="post">
                                    <div class="mini-widget-thumb">
                                        <a href="single.html">
                                            <img alt="" src="{{ asset('custom/images/upload/big_blog_02.png') }}" class="img-responsive alignleft img-circle">
                                        </a>
                                    </div>
                                    <div class="mini-widget-title">
                                        <a href="single.html"> عنوان خبر بعدی </a>
                                        <small>خبر بعدی</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end postpager -->
                </div><!-- end post-micro -->--}}

                {{--<div class="blog-micro-wrapper">
                    <div class="authorbox">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="post-padding clearfix">
                                    <div class="avatar-author">
                                        <a href="author.html">
                                            <img alt="" src="{{ asset('custom/images/upload/avatar_01.png') }}" class="img-responsive img-circle">
                                        </a>
                                    </div>
                                    <div class="author-title desc">
                                        <h4><a href="single.html">نوسنده</a></h4>
                                        <a class="authorlink" href="https://showwp.com">https://showwp.com</a>
                                        <p>لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.</p>
                                        <ul class="list-inline social-small">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end authorbox -->
                </div><!-- end post-micro -->--}}

            {{--    <div class="blog-micro-wrapper">
                    <div class="related-posts">
                        <div class="section-title text-left">
                            <h5>3 دیدگاه</h5>
                            <hr>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-body comments">
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="comment">
                                                    <a href="#" class="pull-left">
                                                        <img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <strong class="text-success">عنوان کاربر</strong>
                                                        <span class="text-muted">
                                                                <small class="text-muted">6 روز پیش</small></span>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک اس</p>
                                                        <a href="#" class="btn btn-primary btn-sm">پاسخ</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br>
                                                </div>
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <div class="comment">
                                                            <a href="#" class="pull-left">
                                                                <img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">
                                                            </a>
                                                            <div class="media-body">
                                                                <strong class="text-success">عنوان کاربر</strong>
                                                                <span class="text-muted">
                                                                <small class="text-muted">6 روز پیش</small></span>
                                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک اس</p>
                                                                <a href="#" class="btn btn-primary btn-sm">پاسخ</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="comment">
                                                            <a href="#" class="pull-left">
                                                                <img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">
                                                            </a>
                                                            <div class="media-body">
                                                                <strong class="text-success">عنوان کاربر</strong>
                                                                <span class="text-muted">
                                                                <small class="text-muted">6 روز پیش</small></span>
                                                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک اس</p>
                                                                <a href="#" class="btn btn-primary btn-sm">پاسخ</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="media">
                                                <div class="comment">
                                                    <a href="#" class="pull-left">
                                                        <img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <strong class="text-success">عنوان کاربر</strong>
                                                        <span class="text-muted">
                                                                <small class="text-muted">6 روز پیش</small></span>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک اس</p>
                                                        <a href="#" class="btn btn-primary btn-sm">پاسخ</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="comment">
                                                    <a href="#" class="pull-left">
                                                        <img src="{{ asset('custom/images/upload/avatar_01.png') }}" alt="" class="img-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <strong class="text-success">عنوان کاربر</strong>
                                                        <span class="text-muted">
                                                                <small class="text-muted">6 روز پیش</small></span>
                                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک اس</p>
                                                        <a href="#" class="btn btn-primary btn-sm">پاسخ</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end postpager -->
                </div><!-- end content -->--}}

                {{--<div class="blog-micro-wrapper">
                    <div class="comment-wrap">
                        <div class="section-title text-left">
                            <h5>دیدگاه خود را بگذارید</h5>
                            <hr>
                        </div>

                        <div class="contact_form">
                            <form class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label>نام <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label>ایمیل <span class="required">*</span></label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label>وبسایت</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label>دیدگاه <span class="required">*</span></label>
                                    <textarea class="form-control" placeholder=""></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <input type="submit" value="ارسال دیدگاه" class="btn btn-primary">
                                </div>
                            </form>
                        </div><!-- end commentform -->
                    </div><!-- end postpager -->
                </div><!-- end content -->--}}

            </div><!-- end content -->

            {{--<div class="sidebar col-md-3 col-sm-12">
                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>اشتراک در خبرنامه</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="newsletter-widget">
                        <p>با عضو شدن در خبرنماه ما کد تخفیف دریافت نمایید!</p>
                        <form>
                            <input type="text" class="form-control input-lg" placeholder="نام و نام خانوادگی">
                            <input type="email" class="form-control input-lg" placeholder="ایمیل">
                            <button class="btn btn-primary btn-block">اشتراک</button>
                        </form>
                    </div><!-- end newsletter -->
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>آخرین اخبار</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="shopwidget">
                        <ul class="shop-list">
                            <li>
                                <img src="{{ asset('custom/images/upload/seo_01.png') }}" alt="">
                                <h3><a href="#" title="">عنوان خبر</a></h3>
                                <small>22.12.2015</small>
                                <a class="new-price" href="">بیشتر</a>
                            </li>
                        </ul><!-- end blog list -->
                    </div><!-- end blogwidget -->
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>با ما در ارتباط باشید</h5>
                        <hr>
                    </div><!-- end title -->

                    <ul class="check">
                        <li><a href="#">دسته بندی</a></li>
                        <li><a href="#">دسته بندی</a></li>
                        <li><a href="#">دسته بندی</a></li>
                        <li><a href="#">دسته بندی</a></li>
                    </ul>
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="section-title text-left">
                        <h5>محبوب ترین تگ ها</h5>
                        <hr>
                    </div><!-- end title -->

                    <div class="tags">
                        <a href="#">تگ</a>
                        <a href="#">تگ</a>
                        <a href="#">تگ</a>
                        <a href="#">تگ</a>
                    </div>
                </div><!-- end widget -->

                <div class="widget clearfix">
                    <div class="shopwidget">
                        <a href="#"><img src="{{ asset('custom/images/upload/banner.png') }}" alt="" class="img-responsive"></a>
                    </div><!-- end banner -->
                </div><!-- end widget -->

            </div><!-- end sidebar -->--}}
        </div><!-- end row -->
    </div><!-- end container -->
</section>