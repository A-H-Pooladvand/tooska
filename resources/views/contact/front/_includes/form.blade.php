<section class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h5>تبدیل ایده به حقیقت</h5>
            <h3>با ما تماس حاصل فرمایید</h3>
            <hr>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <p class="jumbotron">{{ $contact->content }}</p>

                @if(count($errors) > 0)
                    <ul class="alert alert-danger list-unstyled">
                        @foreach($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>ثبت شد !</strong> {{ Session::get('success') }}
                    </div>
                @endif

                <div class="contact_form">
                    <div id="message"></div>
                    <form class="row" action="{{ route('contact.store') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="نام">
                            <input type="text" name="email" id="email" class="form-control" placeholder="ایمیل">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="تلفن">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="موضوع">
                            <textarea class="form-control" name="content" id="comments" rows="6" placeholder="پیام"></textarea>
                            <button type="submit" value="SEND" id="submit" class="btn btn-primary btn-block"> ارسال فرم</button>
                        </div>

                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<div class="googlemap">
    <div id="map"></div>
</div><!-- end googlemap -->
