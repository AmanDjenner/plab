

$('#js_form-1').on('submit', function (e) {
    e.preventDefault();

    $.ajax({
        url: '../meniu.php',
        method: 'post',
        data: $(this).serialize(),
        success: function (result) {
            showModal(result);
        },
        error: function () {alert("error!!!")}
    });
});

function showModal(modal) {
    let modalBody = $('#result .modal-body');
    modalBody.html(modal);
    $('#result').modal();
}