<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like Button with SVG</title>
    <style>
        .like-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            transition: transform 0.2s ease-in-out;
        }

        .like-btn:active {
            transform: scale(0.95);
        }

        svg {
            display: block;
            transition: fill 0.3s ease, stroke 0.3s ease;
        }
    </style>
</head>
<body>
    <button id="like-button" class="like-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" class="corazon">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
        </svg>
    </button>

    <script>
        const likeButton = document.getElementById('like-button');

        const heartOutline = `
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" class="corazon">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        `;

        const heartFilled = `
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#22c55e" stroke="#22c55e" stroke-width="2">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        `;

        likeButton.addEventListener('click', () => {
            if (likeButton.innerHTML.trim() === heartOutline.trim()) {
                likeButton.innerHTML = heartFilled;
            } else {
                likeButton.innerHTML = heartOutline;
            }
        });
    </script>
</body>
</html>
