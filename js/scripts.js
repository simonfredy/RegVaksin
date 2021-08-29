// Untuk Datepicker
$(function(){
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });
});

// Cari Usia
window.onload = function(){
    $('.datepicker').on('change', function() {
        var dob = new Date(this.value);
        var today = new Date();
        var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        $('#umur').val(age);
    });
}