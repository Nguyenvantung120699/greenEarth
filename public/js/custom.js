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
                    form.trigger("reset");
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
                    success :function () {
                       form.trigger('reset');
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
                    success : function () {
                            form.trigger("reset");
                            alert("Chúc mừng bạn đã đăng kí thành viên ! Vui lòng đợi mail phản hồi")
                            // $("#ignismyModal").show();
                            // alert($("#ignismyModal"))
                    },
                    error : function (res) {
                        form.trigger('reset');
                            alert(res.message)

                    }
                })
        })
})


// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('778a3330b825a9715331', {
    cluster: 'ap1'
});

var channel_category = pusher.subscribe('green');
channel_category.bind('category', function(data) {
    alert(JSON.stringify(data));
});
var channel_event = pusher.subscribe('create');
channel_event.bind('event', function(data) {
    alert(JSON.stringify(data));
});
var channel_campaign = pusher.subscribe('campaigns');
channel_campaign.bind('campaign', function(data) {
    alert(JSON.stringify(data));
});
var channel_campaign = pusher.subscribe('posts');
channel_campaign.bind('post', function(data) {
    alert(JSON.stringify(data));
});