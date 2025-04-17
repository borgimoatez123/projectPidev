const fs = require('fs');
const path = require('path');

// Create directories if they don't exist
const dirs = [
    'public/assets/lib/animate',
    'public/assets/lib/owlcarousel',
    'public/assets/lib/wow',
    'public/assets/lib/easing',
    'public/assets/lib/waypoints',
    'public/assets/lib/counterup'
];

dirs.forEach(dir => {
    if (!fs.existsSync(dir)) {
        fs.mkdirSync(dir, { recursive: true });
    }
});

// Copy files
const filesToCopy = [
    {
        src: 'node_modules/animate.css/animate.min.css',
        dest: 'public/assets/lib/animate/animate.min.css'
    },
    {
        src: 'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
        dest: 'public/assets/lib/owlcarousel/assets/owl.carousel.min.css'
    },
    {
        src: 'node_modules/owl.carousel/dist/owl.carousel.min.js',
        dest: 'public/assets/lib/owlcarousel/owl.carousel.min.js'
    },
    {
        src: 'node_modules/wowjs/dist/wow.min.js',
        dest: 'public/assets/lib/wow/wow.min.js'
    },
    {
        src: 'node_modules/jquery.easing/jquery.easing.min.js',
        dest: 'public/assets/lib/easing/easing.min.js'
    },
    {
        src: 'node_modules/waypoints/lib/jquery.waypoints.min.js',
        dest: 'public/assets/lib/waypoints/waypoints.min.js'
    },
    {
        src: 'node_modules/jquery.counterup/jquery.counterup.min.js',
        dest: 'public/assets/lib/counterup/counterup.min.js'
    }
];

filesToCopy.forEach(file => {
    try {
        if (fs.existsSync(file.src)) {
            // Create destination directory if it doesn't exist
            const destDir = path.dirname(file.dest);
            if (!fs.existsSync(destDir)) {
                fs.mkdirSync(destDir, { recursive: true });
            }
            fs.copyFileSync(file.src, file.dest);
            console.log(`Copied ${file.src} to ${file.dest}`);
        } else {
            console.warn(`Source file not found: ${file.src}`);
        }
    } catch (error) {
        console.error(`Error copying ${file.src}:`, error.message);
    }
}); 