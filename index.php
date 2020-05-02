<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cleaver - Server provisioning and deployments made easy for you</title>
    <link rel="stylesheet" href="./app.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

<div id="app" class="flex min-h-screen m-auto flex-col">
    <div class="pb-16 flex flex-col justify-center w-full max-w-4xl mx-auto flex-grow">
        <div class="mx-auto">
            <a href="/">
                <svg width="280" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 744 128">
                    <defs>
                        <path id="reuse-2" fill="#E7E8E9" fill-rule="nonzero"
                              d="M26.706 26.596l4.81 4.81-7.161 7.163-4.811-4.81z"/>
                        <path id="reuse-1" fill="#FFF" fill-rule="nonzero"
                              d="M73.382 23.584c2.066-2.469 1.915-5.946-.303-7.61-1.41-1.057-2.771-2.116-4.182-3.124-5.493 6.854-20.208 24.441-33.21 33.462 1.008 1.36.504.504 1.512 1.864 1.663 2.218 5.14 2.318 7.61.252 9.725-8.264 20.308-15.067 28.573-24.844z"/>
                        <path id="reuse-0" fill="#E7E8E9" fill-rule="nonzero"
                              d="M68.897 12.85C63.454 8.82 58.062 4.787 53.274 0L22.736 30.539c4.787 4.787 8.87 10.28 12.951 15.773 13.002-9.02 27.717-26.658 33.21-33.462zM51.41 7.51a1.916 1.916 0 010-2.722 1.916 1.916 0 012.721 0 1.916 1.916 0 010 2.722 2.014 2.014 0 01-2.721 0z"/>
                        <path id="c"
                              d="M5.703 57.802L.31 52.409c-.353-.352-.353-.856 0-1.209l20.913-20.913c.353-.353.857-.353 1.21 0l5.392 5.392c.352.352.352.856 0 1.21L6.912 57.801c-.352.352-.907.352-1.21 0z"/>
                    </defs>
                    <defs>
                        <filter id="b" width="153.5%" height="153.5%" x="-19.6%" y="-16%"
                                filterUnits="objectBoundingBox">
                            <feOffset dx="2" dy="3" in="SourceAlpha" result="shadowOffsetOuter1"/>
                            <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="2"/>
                            <feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                        </filter>
                        <filter id="d" width="153.5%" height="153.5%" x="-19.6%" y="-16%"
                                filterUnits="objectBoundingBox">
                            <feOffset dx="2" dy="3" in="SourceAlpha" result="shadowOffsetOuter1"/>
                            <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="2"/>
                            <feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                        </filter>
                        <use xlink:href="#c"/>
                        <use id="e" xlink:href="#c"/>
                        <linearGradient id="a" x1="189.385%" x2="0%" y1="164.681%" y2="2.741%">
                            <stop offset="0%" stop-color="#6A11CB"/>
                            <stop offset="100%" stop-color="#2575FC"/>
                        </linearGradient>
                    </defs>
                    <g fill="none" fill-rule="evenodd">
                        <circle cx="64" cy="64" r="64" fill="url(#a)" fill-rule="nonzero"/>
                        <g opacity=".047" transform="rotate(30 -28.746 105.416)">
                            <circle cx="52.771" cy="6.148" r="1.915"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-0"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-1"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-2"/>
                            <g fill-rule="nonzero">
                                <use fill="#000" filter="url(#b)" xlink:href="#c"/>
                                <use fill="#2B2B2B" xlink:href="#c"/>
                            </g>
                        </g>
                        <g opacity=".081" transform="rotate(20 -55.668 127.817)">
                            <circle cx="52.771" cy="6.148" r="1.915"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-0"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-1"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-2"/>
                            <g fill-rule="nonzero">
                                <use fill="#000" filter="url(#d)" xlink:href="#e"/>
                                <use fill="#2B2B2B" xlink:href="#e"/>
                            </g>
                        </g>
                        <g opacity=".205" transform="rotate(10 -125.474 189.818)">
                            <circle cx="52.771" cy="6.148" r="1.915"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-0"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-1"/>
                            <use fill-rule="nonzero" xlink:href="#reuse-2"/>
                            <path fill="#2B2B2B" fill-rule="nonzero"
                                  d="M5.703 57.802L.31 52.409c-.353-.352-.353-.856 0-1.209l20.913-20.913c.353-.353.857-.353 1.21 0l5.392 5.392c.352.352.352.856 0 1.21L6.912 57.801c-.352.352-.907.352-1.21 0z"/>
                        </g>
                        <g transform="translate(22 25)">
                            <ellipse cx="52.797" cy="6.14" rx="1.916" ry="1.913"/>
                            <path fill="#E7E8E9" fill-rule="nonzero"
                                  d="M68.93 12.834C63.486 8.808 58.09 4.781 53.3 0L22.748 30.5c4.79 4.78 8.874 10.267 12.958 15.753 13.008-9.01 27.73-26.625 33.226-33.419zM51.436 7.499a1.911 1.911 0 010-2.718 1.92 1.92 0 012.723 0 1.911 1.911 0 010 2.718 2.018 2.018 0 01-2.723 0z"/>
                            <path fill="#FFF" fill-rule="nonzero"
                                  d="M73.418 23.554c2.067-2.466 1.916-5.939-.303-7.6-1.411-1.056-2.773-2.113-4.184-3.12-5.496 6.845-20.218 24.41-33.226 33.419 1.008 1.359.504.503 1.512 1.862 1.664 2.214 5.143 2.315 7.613.252 9.731-8.254 20.32-15.049 28.588-24.813z"/>
                            <path fill="#E7E8E9" fill-rule="nonzero"
                                  d="M26.72 26.562l4.812 4.805-7.165 7.153-4.813-4.805z"/>
                            <path fill="#2B2B2B" fill-rule="nonzero"
                                  d="M5.706 57.728L.31 52.343c-.353-.353-.353-.856 0-1.208l20.924-20.887c.352-.352.857-.352 1.21 0l5.394 5.385c.353.353.353.856 0 1.208L6.916 57.728c-.353.352-.908.352-1.21 0z"/>
                        </g>
                        <path fill="#393838" fill-rule="nonzero"
                              d="M199.227 112.273c18.637 0 33.637-10.91 38.227-30.137l-17.59-1.954c-2.728 10.545-10.728 15.863-20.637 15.863-13.409 0-23.136-9.772-23.136-31.454 0-21.727 9.727-31.727 23.136-31.727 9.91 0 18.137 5.409 20.864 16.227l17.454-1.955c-4.545-19.454-19.681-30.5-38.318-30.5-23.682 0-41.09 17.864-41.09 47.955 0 29.954 17.408 47.682 41.09 47.682zM311.812 111V95.91h-39.454v-78h-17.955V111h57.41zm78.858 0V95.91h-42.546V71.954h36.5V56.909h-36.5V33h42.318V17.91H330.17V111h60.5zm33.175 0l6.773-19.818h35.636L473.027 111h19.227l-34.318-93.09h-19.045L404.573 111h19.272zm37.41-34.545h-25.637l12.273-35.91h1.09l12.273 35.91zM543.43 111l34.318-93.09h-18.863l-24.41 70.454h-1.09L508.93 17.909h-18.863L524.385 111h19.045zm109.949 0V95.91h-42.546V71.954h36.5V56.909h-36.5V33h42.318V17.91H592.88V111h60.5zm37.403 0V76.182h15.59L723.646 111h19.91l-19.273-38.273c9.363-4.682 15.636-13 15.636-25.909 0-17.318-10.727-28.909-32.773-28.909h-34.318V111h17.955zm15.954-49.864h-15.954V33h16.363c10.5 0 15 5.955 15 14.182 0 8.909-5.09 13.954-15.409 13.954z"/>
                    </g>
                </svg>
            </a>
        </div>
        <h1 class="text-center mt-4 pt-4 text-lg">
            PHP Version:
            <span class="font-semibold">
            <?php echo phpversion(); ?>
            </span>
        </h1>
        <div class="mt-20 max-w-2xl mx-auto md:w-full flex flex-col md:flex-row self-center md:self-stretch md:justify-between text-lg uppercase text-gray-900 font-semibold">
            <a href="https://cleaver.cloud/docs" target="_docs" class="hover:text-red-600 flex mt-4 align-middle">
                <svg class="mr-2 text-gray-700 h-5 self-center" aria-hidden="true" focusable="false" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <g class="fa-group">
                        <path class="fa-secondary" fill="currentColor"
                              d="M96 448c-19.2 0-32-12.8-32-32s16-32 32-32h319.33c-1.93 16.24-1.76 48.38.53 64z"
                              opacity="0.4"></path>
                        <path class="fa-primary" fill="currentColor"
                              d="M96 384h328a24 24 0 0 0 24-24V32a32 32 0 0 0-32-32H96A96 96 0 0 0 0 96v320a96 96 0 0 0 96 96h328a24 24 0 0 0 24-24v-16a24 24 0 0 0-24-24H96c-19.2 0-32-12.8-32-32s16-32 32-32zm32-250a6 6 0 0 1 6-6h212a6 6 0 0 1 6 6v20a6 6 0 0 1-6 6H134a6 6 0 0 1-6-6zm0 64a6 6 0 0 1 6-6h212a6 6 0 0 1 6 6v20a6 6 0 0 1-6 6H134a6 6 0 0 1-6-6z"></path>
                    </g>
                </svg>
                Documentation
            </a>
            <a href="https://twitter.com/alpasdev" target="_twitter" class="hover:text-red-600 flex mt-4">
                <svg class="mr-2 text-gray-700 h-6 self-center" aria-hidden="true" focusable="false" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg>
                alpasdev
            </a>
            <a href="https://join.slack.com/t/alpasdev/shared_invite/enQtODcwMjE1MzMxODQ3LTJjZWMzOWE5MzBlYzIzMWQ2MTcxN2M2YjU3MTQ5ZDE4NjBmYjY1YTljOGIwYmJmYWFlYjc4YTcwMDFmZDIzNDE"
               target="_slack" class="hover:text-red-600 flex mt-4">
                <svg class="mr-2 text-gray-700 h-6 self-center" aria-hidden="true" focusable="false" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                          d="M94.12 315.1c0 25.9-21.16 47.06-47.06 47.06S0 341 0 315.1c0-25.9 21.16-47.06 47.06-47.06h47.06v47.06zm23.72 0c0-25.9 21.16-47.06 47.06-47.06s47.06 21.16 47.06 47.06v117.84c0 25.9-21.16 47.06-47.06 47.06s-47.06-21.16-47.06-47.06V315.1zm47.06-188.98c-25.9 0-47.06-21.16-47.06-47.06S139 32 164.9 32s47.06 21.16 47.06 47.06v47.06H164.9zm0 23.72c25.9 0 47.06 21.16 47.06 47.06s-21.16 47.06-47.06 47.06H47.06C21.16 243.96 0 222.8 0 196.9s21.16-47.06 47.06-47.06H164.9zm188.98 47.06c0-25.9 21.16-47.06 47.06-47.06 25.9 0 47.06 21.16 47.06 47.06s-21.16 47.06-47.06 47.06h-47.06V196.9zm-23.72 0c0 25.9-21.16 47.06-47.06 47.06-25.9 0-47.06-21.16-47.06-47.06V79.06c0-25.9 21.16-47.06 47.06-47.06 25.9 0 47.06 21.16 47.06 47.06V196.9zM283.1 385.88c25.9 0 47.06 21.16 47.06 47.06 0 25.9-21.16 47.06-47.06 47.06-25.9 0-47.06-21.16-47.06-47.06v-47.06h47.06zm0-23.72c-25.9 0-47.06-21.16-47.06-47.06 0-25.9 21.16-47.06 47.06-47.06h117.84c25.9 0 47.06 21.16 47.06 47.06 0 25.9-21.16 47.06-47.06 47.06H283.1z"></path>
                </svg>
                Slack </a>
            <a href="https://github.com/alpas" target="_github" class="hover:text-red-600 flex mt-4">
                <svg class="mr-2 text-gray-700 h-6 self-center" aria-hidden="true" focusable="false"
                     role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                    <path fill="currentColor"
                          d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                </svg>
                GitHub Alpas </a>
        </div>
    </div>
</div>
</body>

</html>
