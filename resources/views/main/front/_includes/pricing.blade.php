<section class="section c2">
    <div class="container">
        <div class="section-title text-center">
            <h5>کیفیت محصولات ما معرف ماست</h5>
            <h3>طرح ها و قیمت ها</h3>
            <hr>
        </div><!-- end title -->

        <div class="row">

            @foreach($plans as $item)
                <div class="col-md-4 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="pricing-box-06 @if($loop->index === 1) color8 @elseif($loop->index === 2) color7 @elseif($loop->index === 3) color9 @endif hovicon effect-1 sub-a">
                        <div class="pricing-box-06-head">
                            <h3>{{ number_format($item->price) }} تومان</h3>
                            <h4>{{ $item->title }}</h4>
                        </div>

                        <div class="pricing-box-06-body">
                            <p class="text-info text-white">{!! $item->content !!}</p>
                            {{--<ul>
                                <li>صفحه‌آرایی و طراحی گرافیک</li>
                                <li>صفحه‌آرایی و طراحی گرافیک</li>
                                <li>صفحه‌آرایی و طراحی گرافیک</li>
                            </ul>--}}
                        </div>

                        {{-- <div class="pricing-box-06-foot">
                             <a href="#" class="btn btn-primary">ثبت سفارش</a>
                         </div>--}}

                    </div>
                    <!-- end pricing-box-06 -->
                </div>
            @endforeach

        </div>
        <!-- end row -->
    </div><!-- end container -->
</section>
