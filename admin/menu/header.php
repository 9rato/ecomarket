<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            blackblue: '#001254',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-white">
<div class="desktop-menu flex bg-white z-10 top-0 shadow-2xl p-5 font-bold text-[15px] text-black"> 
    <div class="flex-1 w-full">
    <img src="" alt="">
    <h1>Easyshop</h1>
    </div>
    <div class="flex-1 relative inline-flex items-center mobilemenu md:hidden">
    <button id="userButtonMenu" class="flex items-center focus:outline-none mr-3 float-right">
                <img class="w-8 h-8" src="icons/menuicon.svg" alt="Avatar of User">
    </button>
    <div id="userMenuMobile" class="bg-white rounded shadow-md absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                <ul class="list-reset">
                         <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                         <li> <a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Notifications</a></li>
                         <li>
                            <hr class="border-t mx-2 border-gray-400">
                        </li>
                    <li><a href="logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                </ul>
      </div>
    </div>
    <div class="flex-1 w-32 relative inline-block">
            <button id="userButton" class="flex items-center focus:outline-none mr-3 float-right">
                <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User"> <span class="hidden md:inline-block">Hi, Admin </span>
                <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" fill="black">
                <g>
                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                </g>
                </svg>
            </button>
            <div id="userMenu" class="bg-white rounded shadow-md absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                <ul class="list-reset">
                         <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                         <li> <a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Notifications</a></li>
                         <li>
                            <hr class="border-t mx-2 border-gray-400">
                        </li>
                    <li><a href="logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                </ul>
            </div>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      var userButtonMenu = document.getElementById('userButtonMenu');
      var userButton = document.getElementById('userButton');
      var userMenu = document.getElementById('userMenu');

      userButtonMenu.addEventListener('click', function () {
        userMenuMobile.classList.toggle('invisible');
      });
      userButton.addEventListener('click', function () {
        userMenu.classList.toggle('invisible');
      });
    });
  </script>