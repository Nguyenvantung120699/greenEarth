$(function () {
    $(".toggle-comment").on("click", function(e){
        e.preventDefault();
        let id = $(this).attr("data-id"),
            target = $(`.reply-comment[data-id="${id}"]`)
        if (target.hasClass("d-none")){
            target.removeClass("d-none")
        } else {
            target.addClass("d-none")
        }
    })
})

// $(function () {
//         $('#comment').submit(function (e) {
//                 let form = $('#comment');
//                 e.preventDefault();
//                 $.ajax({
//                     method : 'post',
//                     url : $('#comment').attr("action"),
//                     data : $('#comment').serialize(),
//                     dataType : "json",
//                     success : function () {
//                             form.trigger("reset");
//                     }
//                 })
//         })
// })


function submitComment() {
    $(document).ready(function () {
        $("#comment").submit((e)=>{
            e.preventDefault();
            $.ajax({
                method : "post",
                url : $("#comment").attr("action"),
                data : $("#comment").serialize(),
                dataType : "json",
                success : function (response) {
                    console.log(response)
                }
            });
        });
    });
}
$(function () {
    $("#join-group").submit(function (e) {
            let  form = $("#join-group");
            e.preventDefault();
            $.ajax({
                method : "post",
                url : $('#join-group').attr("action"),
                data : $('#join-group').serialize(),
                dataType : "json",
                success : function () {
                    location.reload()
                    alert("Chúc mừng bạn đã đăng kí thành viên ! Vui lòng đợi mail phản hồi")
                }
            })
    })
})
$(function () {
        $("#donate-now").submit(function (e) {
            let form = $('#donate-now');
                e.preventDefault();
                $.ajax({
                    method : "post",
                    url : $('#donate-now').attr("action"),
                    data : $("#donate-now").serialize(),
                    dataType : "json",  
                    success :function (response) {
                        location.reload()
                        alert("Cảm ơn bạn đã tham gia ủng hộ hoạt động")
                    }
                });
        })
})
$(function () {
        $("#introduction").submit(function (e) {
                let form = $('#introduction');
                e.preventDefault();
                $.ajax({
                    method : "post",
                    url : $("#introduction").attr("action"),    
                    data : $("#introduction").serialize(),
                    dataType : "json",
                    success : function (res) {
                            form.trigger("reset")
                            alert("Chúc mừng bạn đã đăng kí thành viên ! Vui lòng đợi mail phản hồi")
                            // $("#ignismyModal").show();
                            // alert($("#ignismyModal"))
                    },
                    error : function () {
                            alert("đăng kí thất bại")
                    }
                })
        })
})