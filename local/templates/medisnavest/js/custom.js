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
        success: function (data) {
            $('#hidenContent').html(data);
            $('[data-paginate-content]').append($('#hidenContent').find('[data-paginate-content]').html());
            $('[data-paginate-nav]').html($('#hidenContent').find('[data-paginate-nav]').html());
            lazyLoad($('body'));
            $('#hidenContent').html('');
        }
    });
});

$(document).on('click', '[data-title]', function () {
    $('#callback .section-title.popup-title').text($(this).attr('data-title'));
    $('#callback [name="PURPOSE"]').val($(this).attr('data-title'));
});
