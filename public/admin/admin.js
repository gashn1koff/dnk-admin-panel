$(document).ready(function () {
    $('.delete-btn').click(function () {
        var res = confirm('Подтвердите действие');
        if(!res){
            return false;
        }
    });
})
