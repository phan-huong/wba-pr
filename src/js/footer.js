export const footer = () => {
    var window_w = window.innerWidth;

    const footer_inner = document.querySelector("#footer_inner");
    const footer_outer = document.querySelector("#footer_outer");

    var inner_width = footer_inner.offsetWidth;
    var inner_height = footer_inner.offsetHeight;

    if (window_w > 768) {
        var f_width = inner_width - 64;
        var f_height = inner_height + 64;
    } else {
        var f_width = inner_width - 32;
        var f_height = inner_height + 32;
    }

    footer_outer.style.height = f_height + "px";
    footer_outer.style.width = f_width + "px";
}