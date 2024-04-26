<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Gallery styles */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Image styles */
        .zoom {
            max-width: 100%;
            cursor: pointer;
            transition: transform 0.3s ease;
            position: relative;
        }

        /* Zoomed in image */
        .zoom.active {
            transform: scale(1.5);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            color: black; /* Set button color to black */
            font-size: 24px;
            font-weight: bold;
            transition: transform 0.3s ease;
            display: none;
        }

        .close-btn:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div class="gallery">
        <?php
        $imageFolder = 'unknown/'; // Folder where your images are stored
        $images = glob($imageFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Sort images using FIFO algorithm
        usort($images, function($a, $b) {
            return filemtime($b) - filemtime($a);
        });

        // Limit the number of images to display
        $maxImages = 5; // Set the maximum number of images to display
        $displayedImages = array_slice($images, 0, $maxImages);

        foreach ($displayedImages as $image) {
            echo '<img class="zoom" src="' . $image . '" alt="Image">';
        }
        ?>
    </div>

    <script>
        const zoomImages = document.querySelectorAll('.zoom');

        zoomImages.forEach(image => {
            image.addEventListener('click', event => {
                const isActive = event.target.classList.toggle('active');
                const closeBtn = event.target.parentElement.querySelector('.close-btn');

                if (isActive) {
                    if (!closeBtn) {
                        const closeBtn = document.createElement('div');
                        closeBtn.innerHTML = '&times;'; // Close symbol (X)
                        closeBtn.className = 'close-btn';
                        closeBtn.addEventListener('click', () => {
                            event.target.classList.remove('active');
                            closeBtn.remove();
                        });

                        event.target.parentElement.appendChild(closeBtn);
                    }
                } else {
                    if (closeBtn) {
                        closeBtn.remove();
                    }
                }
            });
        });
    </script>
</body>
</html>
