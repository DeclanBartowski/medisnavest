$(document).on('click', '[data-show-more]', function () {
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more');
    var bx_ajax_id = btn.attr('data-ajax-id');

    var data = {
        bxajaxid: bx_ajax_id
    };
    data['PAGEN_' + id] = page;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        timeout: 3000,
        success: function (data) {
            $('#hidenContent').html(data);
            $('[data-paginate-content]').append($('#hidenContent').find('[data-paginate-content]').html());
            $('[data-paginate-nav]').html($('#hidenContent').find('[data-paginate-nav]').html());
            lazyLoad($('body'));
        }
    });
});
