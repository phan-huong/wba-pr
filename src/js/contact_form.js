export const contact_form = () => {
    const textareas = document.querySelectorAll('.contact_form__message');

    textareas.forEach(area => {
        area.setAttribute("rows", "6");
    });
}