
<style>
        /* Hide the sidebar by default on small screens */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .desktop-menu{
                margin-left: 0;
            }

            .footer{
                margin-left: 0;
            }
            .main-contect{
                padding-left: 0;
            }
            .mobilemenu{
                display: block;
            }
        }
    </style>

<div class=" sidebar bg-white text-white space-y-6 py-7 px-2 text-[20px] h-auto border-l-2">
       <!-- Sidebar -->
       <div class="hidden sm:block sidebar text-black w-64 space-y-6 py-7 sm:p-0 px-2 ">
       <div class="text-2xl font-semibold text-center rounded-full bg-black text-white h-12 w-12 flex items-center justify-center">M</div>

            
            <!-- Sidebar Links with Icons --> 
            <nav>
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                    <span class="mr-2"><img src="icons/HouseDoorFill.svg" alt=""></span>
                    Home
                </a>
                <hr class="border-t mx-2 border-gray-400">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                <span class="mr-2"><img src="icons/Calendar2RangeFill.svg" alt="" class="h-[30px] w-[30px]"></span>
                    Add cartigory 
                </a>
                <hr class="border-t mx-2 border-gray-400">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                <span class="mr-2"><img src="icons/BarChartSteps.svg" alt="" class="h-[30px] w-[30px]"></span>
                    Add Brand
                </a>
                <hr class="border-t mx-2 border-gray-400">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                <span class="mr-2"><img src="icons/additems.svg" alt="" class="h-[30px] w-[30px]"></span>
                    Add product
                </a>
                <hr class="border-t mx-2 border-gray-400">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                <span class="mr-2"><img src="icons/CashCoin.svg" alt="" class="h-[30px] w-[30px]"></span>
                    Add Payment Method
                </a>
                <hr class="border-t mx-2 border-gray-400">
                <a href="#" class="flex items-center py-2 px-4  hover:bg-blue-700">
                <span class="mr-2"><img src="icons/GearFill.svg" alt="" class="h-[30px] w-[30px]"></span>
                    Website settings
                </a>
            </nav>
        </div>
</div>

<!-- Font Awesome for toggle button icon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha384-bn0kR6G2dPQV/y2qvg7CGmv1Lf17iA1dYx+IWxG8oEtScAqK8xO9ItFZPsdOnJ2b" crossorigin="anonymous"></script>
    <script>
        // Function to toggle sidebar on mobile devices
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }

        // Add event listener to the toggle button
        var toggleButton = document.querySelector('.toggle-button');
        toggleButton.addEventListener('click', toggleSidebar);
    </script>