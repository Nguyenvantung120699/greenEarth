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
        $("#toggle").on("click",function (e) {
            e.preventDefault();
            var target = $(".submit")
            if (target.hasClass("d-none")){
                target.removeClass("d-none")
            }else {
                target.addClass("d-none")
            }
        })
})


function joinMember() {
      $(document).ready(function () {
            $("#joinMember").submit((e)=>{
                e.preventDefault();
                $.ajax({
                     method : 'POST',
                     url : $("#joinMember").attr("action"),
                    data : $("#joinMember").serialize(),
                    dataType : 'json',
                    success : function (data) {
                           if (data == true){
                               alert(data)
                           }else {
                               console.log("error")
                           }
                    }
                });
          });
      });
}
$(function () {
        $("#donate-now").ready(function (e) {
                e.preventDefault();
                $.ajax({
                    method : "post",
                    url : $('#donate-now').attr("action"),
                    data : $("#donate-now").serialize(),
                    dataType : "json",
                    success :function (response) {
                            console.log(response)
                    }
                });
        })
})
