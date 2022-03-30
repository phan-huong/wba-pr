export const kunden_slider = () => {
    if ($(window).width() >= 768 ) {
        var infobox_outer_pos = $("#infobox_outer").prop("scrollHeight");
        var kunden_hero_pos = $("#kunden_hero").prop("scrollHeight");
    
        var diff = infobox_outer_pos - kunden_hero_pos - 80;
        var arrows_pos = diff + "px";
    
        $("#arrows").css("bottom", arrows_pos);
    }
}