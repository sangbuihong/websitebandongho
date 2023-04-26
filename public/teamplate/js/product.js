$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function loadMore()
{
    const page = $('#page').val();
    $.ajax({
        type : 'POST',
        dataType : 'JSON',
        data : { page },
        url : '/services/load-product',
        success : function (result) {
            if (result.html !== '') {
                $('#loadProduct').append(result.html);
                $('#page').val(page + 1);
            } else {
                alert('Đã load xong Sản Phẩm');
                $('#button-loadMore').css('display', 'none');
            }
        }
    })
}


$('.js-show-modal').on('click',function(e){
    e.initEvent();
    $('.js-modal').val($(products).data('id'));
    $('.js-modal').addClass('show-modal');
});

$('.js-hide-modal').on('click',function(){
    $('.js-modal').removeClass('show-modal');
});
