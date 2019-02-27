$(document).ready(function () {

    $('#btnSearch').on('click',function (e) {
        e.preventDefault()
        var from = $('#from option:selected').val();
        var to = $('#to option:selected').val();
        var departure = $('#departure').val()
        var way_type = $("input[name='flight_type']:checked").val();
        var return_day = $('#return_day').val();
        var flight_class = $('#flight-class option:selected').val();
        var total_person = $('#total-person option:selected').val();
        // console.log(`${from} ${to} ${departure} ${way_type} ${return_day} ${flight_class} ${total_person} `)
        if (from  && to  && departure  && way_type  && return_day  && flight_class  && total_person){
            if (from == to){
                swal("Cảnh báo", "Nơi đi không được trùng nơi đến", "error");
            }
            else{
                $('#search').submit()
            }
        }
        else
        {
            swal("Thiếu thông tin", "Vui lòng nhập đủ thông tin", "error");
        }
    })

    $('#login').on('click',function (e) {
        e.preventDefault()
        var email = $("#email").val();
        var password = $('#password').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email  && password  ){
            if (!filter.test(email)) {
                swal("Email không hợp lệ", "Hay nhap dia chi email hop le.\nExample@gmail.com'", "error");
            }
            else{
                $('#form_login').submit()
            }
        }
        else
        {
            swal("Thiếu thông tin", "Vui lòng nhập đủ thông tin", "error");
        }
    })
    // $('#Register').on('click',function (e) {
    //     e.preventDefault()
    //     var email = $("#email").val();
    //     var password = $('#password').val();
    //     var name = $("#name").val();
    //     var Phone = $('#Phone').val();

    //     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //     if (email  && password && name && Phone  ){
    //         if (!filter.test(email)) {
    //             swal("Email không hợp lệ", "Hay nhap dia chi email hop le.\nExample@gmail.com'", "error");
    //         }
    //         else{
    //             $('#form_Register').submit()
    //         }
    //     }
    //     else
    //     {
    //         swal("Thiếu thông tin", "Vui lòng nhập đủ thông tin", "error");
    //     }
    // })
})
