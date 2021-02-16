

function getResult(forma, url){
$(forma).on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        url: url,
        method: 'post',
        data: $(this).serialize(),
        success: function (result) {
            showModal(result);
        },
        error: function () {alert("error!!!")}
    });
});
}
// getResult($(this));
getResult('#js_form-1','../e1.php');
getResult('#js_form-2', '../e2.php');
getResult('#js_form-3','../e3.php');
getResult('#js_form-4','../e4.php');

function showModal(modal) {
    let modalBody = $(' .modal-body');
    // let modalBody = $('#result .modal-body');
    modalBody.html(modal);
    $('#result').modal();
}

function getMedia(forma, url, id){
    $(forma).on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: url,
            method: 'post',
            data: $(this).serialize(),
            success: function(data){
                $(id).html(data);
            },
            error: function () {alert("error!!!")}
        });
    });
}

getMedia('#js_form-5', '../e5.php','#mndp');
getMedia('#js_form-6','../e6.php','#max-num');