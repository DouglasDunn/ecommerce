function detailsModal(id) {
    var data = {"id": id};
    jQuery.ajax({
        url: '/php/ecommerce/includes/detailsModal.php',
        method: "post",
        data: data,
        success: function(data) {
            jQuery('.modal-container').append(data);
            jQuery('#details-modal').modal('toggle');
        },
        error: function() {
            alert("Something went wrong!");
        }
    });
}
