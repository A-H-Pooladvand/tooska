{{--$seo_class = '';--}}
@include('_seo.public.header_view)');
@include('_seo.public.menu_view');
@include('about.front._includes.about_heading_image_view');
@include('about.front._includes.reason_seomarkt_view');
@include('about.front._includes.choose_us_view');
@include('about.front._includes.company_statics_view');

@include('views/public/seo_expert_team_view.blade.php');
@include('views/public/brands_teams_view.blade.php');
@include('views/public/footer_view.blade.php');
@include('views/public/ending.blade.php');