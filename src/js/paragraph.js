export const paragraph = () => {
    var window_w = window.innerWidth;

    const para_section = document.querySelectorAll('.paragraph');

    para_section.forEach((para) => {
        var left = para.querySelector('#left');
        var left_h = left.offsetHeight;
        var right_h = left_h - 64;

        var right = para.querySelector('#right');

        if (window_w > 1024) {
            right.style.height = right_h + "px";
        } else right.style.height = "auto";
    });
}