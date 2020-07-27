const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
    await imagemin(['./images/*.{jpg,png}'], {
        destination: './images',
        plugins: [
            imageminWebp({ quality: 50 })
        ]
    });

    console.log('Images optimized');
})();