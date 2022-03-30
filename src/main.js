import './main.scss';
import {nav_mobile} from './js/nav.js';
import {collapse} from './js/collapse.js';
import {paragraph} from './js/paragraph.js';
import { footer } from './js/footer';
import { loadmore } from './js/loadmore';
import {contact_form} from './js/contact_form';
import {kunden_slider} from './js/kunden_slider'; 

nav_mobile();
collapse();
loadmore();
contact_form();

const loadAndResize = () => {
    paragraph();
    footer();
    kunden_slider();
}

window.onload = loadAndResize;
window.onresize = loadAndResize;
