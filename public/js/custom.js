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