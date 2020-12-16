$(document).ready(function(){

    function backHome(){
        window.location.assign(routeHome);
    }

    $("#submit_add_category").click(function(){
        var data = $("#form_add_category").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        })

        axios
            .post(routePostCategory, datapost)
            .then((response) => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Thêm danh mục thành công",
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


    $("#submit_edit_category").click(function(id){
        var data = $("#form_edit_category").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        });

        axios
            .post(routeUpdateCategory, datapost, {id: id})
            .then(response => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Sửa danh mục thành công",
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

function destroyCategory(id) {
    Swal.fire({
        title: 'Xóa danh mục ?',
        text: 'Bạn có chắc chắn muốn xóa danh mục này?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Tiếp tục!',
        cancelButtonText: 'Quay lại'
      }).then(result => {
            if(result.value) {
                axios
                    .post(routeDestroyCategory, {id: id})
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
