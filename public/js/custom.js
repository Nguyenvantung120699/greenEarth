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


function colorlike() {
    document.getElementById("like").style.color = "#FE2E2E";
}

function colorshare() {
    document.getElementById("share").style.color = "#FE2E2E";
}
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