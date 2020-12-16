$(document).ready(function(){

    function backHome(){
        window.location.assign(routeHome);
    }

    $("#submit_add_staff").click(function(){
        var data = $("#form_add_staff").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        })

        axios
            .post(routePostStaff, datapost)
            .then((response) => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Thêm nhân viên thành công",
                        timer: 2000,
                        icon: "success",
                        button: false
                    })
                    backHome();
                } else {
                    Swal.fire({
                        title: "Lỗi hệ thống",
                        timer: 2000,
                        icon: "error",
                        button: true
                    })
                }
            })
    });


    $("#submit_edit_staff").click(function(id){
        var data = $("#form_edit_staff").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        });

        axios
            .post(routeUpdateStaff, datapost, {id: id})
            .then(response => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Sửa thông tin thành công",
                        timer: 2000,
                        icon: "success",
                        button: false
                    })
                    backHome();
                } else {
                    Swal.fire({
                        title: "Lỗi hệ thống",
                        timer: 2000,
                        icon: "success",
                        button: true
                    })
                }
            })
    });

});

function reloadHome() {
    window.location.reload();
}

function destroyStaff(id) {
    Swal.fire({
        title: 'Xóa thông tin nhân viên ?',
        text: 'Bạn có chắc chắn muốn xóa thông tin nhân viên?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Tiếp tục!',
        cancelButtonText: 'Quay lại'
      }).then(result => {
            if(result.value) {
                axios
                    .post(routeDestroyStaff, {id: id})
                    .then(response => {
                        if(response.status == 200) {
                            Swal.fire({
                                title: "Xóa thành công",
                                timer: 2000,
                                icon: "success",
                                button: false
                            })
                            reloadHome();
                        } else {
                            Swal.fire({
                                title: "Lỗi hệ thống",
                                timer: 2000,
                                icon: "error",
                                button: true
                            })
                        }
                    })
            }
      })
}
