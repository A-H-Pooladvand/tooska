$(function () {
    let $sidebarNavigateCheck = true;
    $('.sidebar__item > li > a').click(function (e) {
        e.preventDefault();
    });
    $('.sidebar__item > li').click(function () {
        if ($sidebarNavigateCheck) {
            $sidebarNavigateCheck = false;
            let $this = $(this);
            $this.toggleClass('active');
            let $icon = $this.find('.pull-right');
            if ($icon.hasClass('fa-angle-down'))
                $icon.removeClass('fa-angle-down').addClass('fa-angle-up');
            else
                $icon.removeClass('fa-angle-up').addClass('fa-angle-down');
            $sidebarNavigateCheck = true;
        }
    });
});