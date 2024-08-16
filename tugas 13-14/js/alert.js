setTimeout(function() {
    var alert = document.querySelector('.alert');
    if (alert) {
        var bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
    }
}, 1500);