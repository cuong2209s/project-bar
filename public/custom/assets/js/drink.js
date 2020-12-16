$(document).ready(function(){

    function backHome(){
        window.location.assign(routeHome);
    }

    $("#submit_add_drink").click(function(){
        var data = $("#form_add_drink").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        })

        axios
            .post(routePostDrink, datapost)
            .then((response) => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Thêm loại nước thành công",
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

    $("#submit_edit_drink").click(function(id){
        var data = $("#form_edit_drink").serializeArray();
        var datapost = {};

        data.map(function(n, i){
            datapost [n.name] = n.value
        });

        axios
            .post(routeUpdateDrink, datapost, {id: id})
            .then(response => {
                if(response.status == 200) {
                    Swal.fire({
                        title: "Sửa thành công",
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
