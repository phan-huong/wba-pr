import './main.scss';
import {nav_mobile} from './js/nav.js';
import {collapse} from './js/collapse.js';
import {paragraph} from './js/paragraph.js';
import { footer } from './js/footer';
import { loadmore } from './js/loadmore';

nav_mobile();
collapse();
loadmore();

const loadAndResize = () => {
    paragraph();
    footer();
}

window.onload = loadAndResize;
window.onresize = loadAndResize;
