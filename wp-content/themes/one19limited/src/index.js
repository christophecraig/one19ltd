import * as basicLightbox from 'basiclightbox'

let instance = null

/**
 * 
 * @param {Event} event 
 */
const expandImage = event => {
    event.stopPropagation();
    event.preventDefault();
    const src = event.target.getAttribute('data-src-full');

    instance = basicLightbox.create(`
        <img src="${src}" loading="lazy" alt/>
    `);
    instance.show();
}

const closeImage = () => {
    if (instance) instance.close
}

const images = document.querySelectorAll('.single-post-picture img');

if (images.length) {
    images.forEach(img => img.addEventListener('click', expandImage))
    document.addEventListener('click', closeImage);
}