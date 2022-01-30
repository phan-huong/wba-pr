export const collapse = () => {
    const collapse_items = document.querySelectorAll(".collapse__item");

    collapse_items.forEach((item) => {
        item.addEventListener("click", function (event) {
            var is_active = item.classList.contains("collapse_active");

            if (!is_active) {
            var items_active = document.querySelectorAll(".collapse__item.collapse_active");

            items_active.forEach((item2) => {
                item2.classList.remove("collapse_active");
            });

            item.classList.add("collapse_active");
            } else {
            }
        });
    });
}
