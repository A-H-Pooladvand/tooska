<section class="section">
    <div class="container">

        <div id="fourcol" class="portfolio">

            @foreach($samples as $item)
                <div class="pitem item-w1 item-h1 cat1">
                    <div class="entry">
                        <img src="{{ $item->image, 35,43, true }}" class="img-responsive" alt="">
                        <div class="magnifier">
                            <div class="magnibutton"><a href="{{ route('sample.show', $item->id) }}"><i class="fa fa-search"></i></a></div>
                        </div>
                    </div>
                    <div class="portfolio-title">
                        <h4><a href="{{ route('sample.show', $item->id) }}">{{ $item->title }}</a></h4>
                    </div><!-- end title -->
                </div><!-- end col -->

            @endforeach

        </div><!-- end row -->

        <nav class="clearfix text-center">
            {{ $samples->links() }}
        </nav>
    </div><!-- end container -->
</section>
  