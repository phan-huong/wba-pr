export const loadmore = () => {
    jQuery(document).ready(function($){
        // $(".kunden__item").slice(0, 4).show();
        $("#loadmore").on("click", function(e){
            e.preventDefault();
            $(".kunden__item:hidden").slice(0, 4).slideDown({
                start: function () {
                    $(this).css({
                        display: "flex"
                    })
                }
            });
            if($(".kunden__item:hidden").length == 0) {
                $("#loadmore").hide(300);
            }
        });

        $("#loadmoreNews").on("click", function(e){
            e.preventDefault();
            $(".news__item:hidden").slice(0, 3).slideDown({
                start: function () {
                    $(this).css({
                        display: "flex"
                    })
                }
            });
            if($(".news__item:hidden").length == 0) {
                $("#loadmoreNews").hide(300);
            }
        });
    })
}