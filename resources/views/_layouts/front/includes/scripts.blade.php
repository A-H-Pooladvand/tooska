{{--<script src="{{ asset('js/front.js') }}"></script>--}}
<script src="{{ asset('custom/assets/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('custom/assets/isotope/isotope.pkgd.js') }}"></script>
<script src="{{ asset('custom/assets/page-front/base.js') }}"></script>
<script src="{{ asset('custom/assets/owl-carousel/owl.carousel.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>