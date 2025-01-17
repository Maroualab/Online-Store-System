<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header class='flex shadow-md  px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between  gap-5 w-full'>
        <ul
            class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>

            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                <a href='/Online-Store-System/public/index.php'
                    class='hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Home</a>
            </li>
            <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                <a href='/Online-Store-System/views/pages/productView.php'
                    class='hover:text-[#007bff] text-[#007bff] block font-semibold text-[15px]'>Products</a>
            </li>
        </ul>
        <div class="flex flex-col lg:flex-row justify-center lg:justify-start gap-6 lg:gap-8 items-center lg:items-start">
    <!-- Sign Up Button -->
    <div class="w-full sm:w-auto rounded-md shadow-lg">
        <a href="/online-store-system/views/pages/register.php">
            <button class="w-full flex items-center justify-center px-8 py-3 text-base font-semibold tracking-wide rounded-md text-indigo-600 bg-white border border-indigo-600 hover:bg-indigo-50 hover:text-indigo-700 transition duration-300 ease-in-out">
                Sign Up
            </button>
        </a>
    </div>

    <!-- Log In Button -->
    <div class="w-full sm:w-auto rounded-md shadow-lg">
        <a href="/online-store-system/views/pages/login.php">
            <button class="w-full flex items-center justify-center px-8 py-3 text-base font-semibold tracking-wide rounded-md text-white bg-indigo-600 hover:bg-indigo-500 transition duration-300 ease-in-out">
                Log In
            </button>
        </a>
    </div>

    <!-- Logout Button -->
    <div class="w-full sm:w-auto rounded-md shadow-lg">
        <a href="../../controllers/logout.php">
            <button class="w-full flex items-center justify-center px-8 py-3 text-base font-semibold tracking-wide rounded-md text-red-600 bg-white border border-red-600 hover:bg-red-50 hover:text-red-700 transition duration-300 ease-in-out">
                Logout
            </button>
        </a>
    </div>

    <!-- Cart Button with Icon -->
    <button class="flex items-center justify-center bg-blue-600 text-white rounded-full p-4 shadow-xl hover:bg-blue-700 transition duration-300 ease-in-out">
        <!-- Cart Icon SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 800" xml:space="preserve" class="w-6 h-6 mr-3">
            <path fill="#FFFFFF" d="M652.782 81.199c2.627-7.577 10.942-11.602 18.504-8.965l.838.289c7.572 2.627 11.593 10.928 8.965 18.5L582.84 374.18c-2.627 7.574-10.951 11.593-18.504 8.965l-.838-.289c-3.643-1.264-6.584-3.893-8.287-7.404-1.703-3.511-1.944-7.451-.678-11.094l98.249-283.159z" />
            <path fill="#83C9EF" d="m124.456 72.525.847-.294a14.398 14.398 0 0 1 4.726-.801c2.172 0 4.344.496 6.37 1.48 3.51 1.701 6.142 4.644 7.404 8.289l98.25 283.16c1.266 3.643 1.025 7.583-.678 11.094-1.703 3.51-4.644 6.14-8.287 7.404l-.842.291c-7.599 2.634-15.873-1.395-18.5-8.968l-98.25-283.157c-2.628-7.573 1.392-15.873 8.96-18.498z" />
            <path fill="#BFC6E4" d="m676.892 705.838-.096 1.348c0 11.793-9.598 21.391-21.396 21.391H144.595c-11.793 0-21.391-9.598-21.391-21.391v-.678L68.97 335.029c.328-11.513 9.794-20.776 21.382-20.776h82.857l18.854 54.336c-3.866 7.145-5.965 15.188-5.965 23.395 0 27.092 22.042 49.134 49.139 49.134 27.092 0 49.134-22.042 49.134-49.134 0-19.142-11.293-36.599-28.46-44.583l-11.501-33.147h307.766l-12.317 35.5c-14.819 8.771-24.228 24.807-24.228 42.231 0 27.092 22.042 49.134 49.134 49.134s49.134-22.042 49.134-49.134c0-9.669-2.877-19.016-8.128-26.987l17.607-50.743h86.271c11.588 0 21.054 9.264 21.382 20.776l-54.139 370.807z" />
            <path fill="#1D1751" d="M709.648 295.602h-79.8l68.863-198.465c5.997-17.289-3.187-36.235-20.481-42.238l-.838-.289c-17.28-6.001-36.235 3.185-42.231 20.474l-76.515 220.518H237.939L161.423 75.086c-2.896-8.351-8.892-15.083-16.888-18.96-7.996-3.873-16.997-4.405-25.339-1.518l-.847.294c-17.289 6.001-26.473 24.947-20.476 42.236l68.863 198.465H90.352c-22.079 0-40.041 17.962-40.041 40.044v.676l54.247 371.584c.387 21.751 18.199 39.322 40.037 39.322h510.806c21.842 0 39.654-17.571 40.041-39.322l54.152-370.912.096-1.348c-.001-22.082-17.963-40.045-40.042-40.045zM652.782 81.199c2.627-7.577 10.942-11.602 18.504-8.965l.838.289c7.572 2.627 11.593 10.928 8.965 18.5L582.84 374.18c-2.627 7.574-10.951 11.593-18.504 8.965l-.838-.289c-3.643-1.264-6.584-3.893-8.287-7.404-1.703-3.511-1.944-7.451-.678-11.094l98.249-283.159zm-57.534 310.784c0 16.808-13.673 30.484-30.484 30.484s-30.484-13.676-30.484-30.484c0-4.278.935-8.419 2.602-12.213 3.187 9.358 10.464 17.221 20.506 20.707l.842.291a33.048 33.048 0 0 0 10.85 1.835c10.097 0 19.703-4.68 25.989-12.58.043.657.179 1.298.179 1.96z" />
        </svg>
        <!-- Cart Text -->
        <span class="text-sm font-semibold">Cart</span>
    </button>
</div>




    </div>



</header>

<body>