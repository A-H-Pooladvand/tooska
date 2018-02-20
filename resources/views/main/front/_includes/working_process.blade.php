<div class="floating-circle is-centered-xy p-t-6 p-b-6">

    <div class="circleA is-circle is-centered-xy">

        <div class="circleD is-circle is-centered-xy">


            <div class="object is-a" data-toggle="tooltip" data-placement="left" title="امیرحسین پولادوند">
                <img src="{{ image_url('files/_site/amirhossein.jpg', 6,6, true) }}" class="is-circle img-1" alt="" style="position: absolute">
            </div>
            <div class="object is-d" data-toggle="tooltip" data-placement="left" title="امیر بشیری">
                <img src="{{ image_url('files/_site/bashiri.jpg', 6,6, true) }}" class="is-circle img-2" alt="" style="position: absolute">
            </div>

            <div class="circleB is-circle is-centered-xy">

                <div class="circleE is-circle is-centered-xy">

                    <div class="object is-b" data-toggle="tooltip" data-placement="left" title="فرشید رضایی">
                        <img src="{{ image_url('files/_site/farshid.jpg', 6,6, true) }}" class="is-circle img-3" alt="" style="position: absolute">
                    </div>
                    <div class="object is-e" data-toggle="tooltip" data-placement="left" title="حسین حسینی">
                        <img src="{{ image_url('files/_site/hossein.jpg', 6,6, true) }}" class="is-circle img-4" alt="" style="position: absolute">
                    </div>

                    <div class="circleC is-circle is-centered-xy">

                        <div class="object is-c" data-toggle="tooltip" data-placement="left" title="حامد رامشینی">
                            <img src="{{ image_url('files/_site/ramshini.jpg', 6,6, true) }}" class="is-circle img-5" alt="" style="position: absolute">
                        </div>
                        <div class="object is-f" data-toggle="tooltip" data-placement="left" title="حمید مدنی زادگان">
                            <img src="{{ image_url('files/_site/madani.jpg', 6,6, true) }}" class="is-circle img-6" alt="" style="position: absolute">
                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>
    <img class="is-centered-xy" src="{{ image_url('files/_root/tooska.png', 15,5,true) }}" alt="" style="position: absolute">

</div>

@push('scripts')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endpush


{{--
<section class="section">
    <div class="container">
        <div class="section-title text-center">
            <h5>لورم ایپسوم , طرح‌نما , صنعت چاپ</h5>
            <h3>لورم ایپسوم یا طرح‌نما</h3>
            <hr>
        </div><!-- end title -->

        <div class="row service-section" id="service-section">
            <div class="service-bg hidden-sm hidden-xs">
                <span class="service-main-bg"></span>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 pull-right col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_01.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_02.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 pull-right col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_03.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_04.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 pull-right col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_05.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-box-inner">
                    <div class="col-md-4 col-sm-5">
                        <img src="{{ asset('custom/images/upload/big_icon_06.png') }}" class="icon-srv" alt="">
                    </div>
                    <div class="col-md-8 content-box col-sm-7">
                        <h3 class="block-title">لورم ایپسوم یا طرح‌نما</h3>
                        <p>طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه .</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section>--}}
