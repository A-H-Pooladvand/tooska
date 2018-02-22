<section class="section">
    <div class="container">

        <div id="fourcol" class="portfolio services-list">

            @foreach($services as $item)
                <div class="pitem item-w1 item-h1 cat1">
                    <div class="item">
                        <div class="item-image">
                            <img src="{{ image_url($item->image, 35, 27, true) }}" alt="{{ $item->title }}" title="{{ $item->title }}" class="img-responsive">
                        </div><!-- end item-image -->
                        <div class="item-desc" style="min-height: 150px">
                            <h4><a href="{{ route('service.show', $item->id) }}" title="">{{ $item->title }}</a></h4>
                            <p>{{ str_limit($item->content, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <nav class="clearfix text-center">
            {{ $services->links() }}
        </nav>

    </div>
</section>