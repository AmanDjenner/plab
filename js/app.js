

function getResult(forma, url){  console.log(forma);
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
getResult('#js_form-2','../e2.php');

function showModal(modal) {
    let modalBody = $(' .modal-body');
    // let modalBody = $('#result .modal-body');
    modalBody.html(modal);
    $('#result').modal();
}