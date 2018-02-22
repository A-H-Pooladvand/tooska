<section class="section lb">
    <div class="container">

        <div class="blog-micro-wrapper">
          {{--  <div class="post-micro clearfix text-center">

                <div class="post-media clearfix">
                    <a href="{{ route('blog.show', $plan->id) }}" title=""><img src="{{ image_url($plan->image, 81,45,true) }}" alt="" class="img-responsive img-rounded"></a>
                </div>

            </div>--}}

            <div class="post-desc clearfix">

                <blockquote>
                    <h3 class="entry-title">{{ $plan->title }}</h3>
                    <hr>
                    <h5>قیمت: {{ $plan->price }}</h5>
                    <p>{!! $plan->content !!}</p>
                </blockquote>

            </div>

        </div>

    </div>

</section>