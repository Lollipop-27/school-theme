document.addEventListener('DOMContentLoaded', function () {
    // Target any gallery block with the "lightgallery" class
    const galleries = document.querySelectorAll('.lightgallery');

    if (galleries.length > 0) {
        galleries.forEach(gallery => {
            lightGallery(gallery, {
                selector: 'a, figure img',
                speed: 500,
            });
        });
    }
});

