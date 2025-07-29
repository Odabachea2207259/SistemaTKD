@php
$button = "<button id=\"ocButton\" onclick=\"dropdown()\" class=\"absolute bg-[#1C6AD5] h-[3rem] w-[calc(100%+40px)] flex place-items-end justify-end rounded-r-lg z-1 left-[0.1vw] lg:left-[3%] xl:left-[5%] transition duration-300 ease-in-out\">
                <div class=\"w-[13vw] sm:w-[5vw] md:w-[4.5vw] lg:w-[4.5vw] xl:w-[3vw] 2xl:w-[2.5vw]\">
                    <svg class=\"hidden\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\" text-rendering=\"geometricPrecision\">
                        <path d=\"M84.558026 236.070313C149.391998 114.50664 238.912713 156.761 238.912713 134.588503q0-22.172497-92.953927-.852789L117.816771 83.421203q-49.461723 18.761342-44.344993 29.847591t23.878073 36.731206q-14.497402 16.994458-23.025285 36.60859t-13.644613 62.253548q7.675093 21.319707 17.055765 2.558364c9.380672-18.761343 0-2.558364 6.822308-15.350189Z\" transform=\"translate(16.7477 7.169296)\"/>
                        <ellipse rx=\"30.345338\" ry=\"30.785125\" transform=\"translate(100.44523 78.10348)\"/>
                        <path d=\"M100.44523 108.888602q-43.734176 25.392665-53.214288 65.088553q5.265963 15.181757 35.190422-16.807862c29.924459-31.989619 61.758042-73.673358 18.023866-48.280691Z\" transform=\"translate(0 0.000003)\"/>
                        <path d=\"M134.56447 90.590498q60.690674-21.1098 79.785722-4.570843q12.938021 15.0238-33.42385 21.5851c-46.361871 6.5613-107.052547 4.095542-46.361872-17.014257Z\" transform=\"translate(.000001 0.000001)\"/>
                    </svg>
                    <svg class=\"\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 300 300\">
                        <ellipse rx=\"31.031904\" ry=\"31.779661\" transform=\"translate(150 64.680957)\"/>
                        <path d=\"M124.95015 102.442672h48.604187Q231.879362 133.998006 219.167497 150t-25.423729 33.200399q-20.937188-.000002-2.991027-26.171487t-17.946162-33.649054v75.523429c42.942551 46.395484 39.004014 60.992208 17.946162 53.090727s-28.402878-20.32821-42.663174-40.378863Q83.075768 274.426716 88.310065 246.01196c5.234297-28.414756 30.658027-41.874377 30.658027-47.108674q0-5.234297 0-74.775673c-18.198922 6.100481-38.18663 17.19929-30.658027 25.872383c14.959315 17.233414 24.007452 27.910542 13.45962 28.713858Q83.408609 190.677962 66.62512 149.999996c-6.91546-16.760927 18.965991-38.167189 58.32503-47.557324Z\" transform=\"translate(1.910433-2.991023)\"/>
                    </svg>
                </div>
            </button>
            <div class=\"absolute bg-[#1C6AD5] h-[3rem] w-[calc(100%-40px)]\"></div>";
@endphp    

<aside id="sidebar" class="absolute left-0 h-[100vh] w-2/3 sm:w-2/3 md:w-1/4 lg:w-1/4 flex flex-row text-white transition duration-300 ease-in-out z-10 -translate-x-[calc(100%-15%)]">
    <div class="bg-[#1C6AD5] h-full w-[calc(100%-40px)] flex flex-col rounded-r-lg items-center z-20">
        <button id="user" class="invisible w-full text-[1.5rem] sm:text-[1.5rem] md:text-[2rem] lg:text-[2rem] xl:text-[3rem] flex justify-between px-2 mb-20 mt-3">
            <div class="justify-center items-end w-[10vw] sm:w-[3vw] lg:w-[4vw]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32" xml:space="preserve">
                    <path d="M16 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm0-12c-2.757 0-5 2.243-5 5s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zM27 32a1 1 0 0 1-1-1v-6.115a6.95 6.95 0 0 0-6.942-6.943h-6.116A6.95 6.95 0 0 0 6 24.885V31a1 1 0 1 1-2 0v-6.115c0-4.93 4.012-8.943 8.942-8.943h6.116c4.93 0 8.942 4.012 8.942 8.943V31a1 1 0 0 1-1 1z"/>
                </svg>
            </div>
            <p>Usuario</p>
        </button>
        <div class="z-20 h-full">
            <!-- h-[3rem] w-[12rem] -->
            <div class="h-[8vh] w-[40vw] md:h-[7vh] md:w-[15vw] lg:h-[7vh] lg:w-[15vw] m-[10vh] flex items-center justify-center z-20">
                @if(\Request::segment(index: 1) == "alumnos") <? echo $button ?> @endif
                <a class="links bg-[#0D579D] rounded-full flex h-full w-full items-center justify-center z-10" href="<?= url('alumnos'); ?>">Alumnos</a>
            </div>
            <div class="h-[8vh] w-[40vw] md:h-[7vh] md:w-[15vw] lg:h-[7vh] lg:w-[15vw] m-[10vh] flex items-center justify-center z-20">
                @if(\Request::segment(1) == "pagos") <? echo $button ?> @endif
                <a class="links bg-[#0D579D] rounded-full flex h-full w-full items-center justify-center z-10" href="<?= url('pagos'); ?>">Pagos</a>
            </div>
            <div class="h-[8vh] w-[40vw] md:h-[7vh] md:w-[15vw] lg:h-[7vh] lg:w-[15vw] m-[10vh] flex items-center justify-center z-20">
                @if(\Request::segment(1) == "pedidos") <? echo $button ?> @endif
                <a class="links bg-[#0D579D] rounded-full flex h-full w-full items-center justify-center z-10" href="<?= url('pedidos'); ?>">Pedidos</a>
            </div>
            <div class="h-[8vh] w-[40vw] md:h-[7vh] md:w-[15vw] lg:h-[7vh] lg:w-[15vw] m-[10vh] flex items-end justify-center z-20">
                <button type="submit" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg">Salir</button>
            </div>
        </div>
    </div>
</aside>

    <script>
        const button = document.getElementById('ocButton');

        button.classList.toggle("-translate-x-[10%]");

        var hyperlinks = document.getElementsByTagName("a");

            for(var i = 0, max=hyperlinks.length; i < max; i++){
                hyperlinks[i].addEventListener("click",animation,false);
            }

        function dropdown(){
            hideUser();
            hideSide();
            changeIcon();
            changeBg();
        }

        function animation(){
            const button = document.getElementById('ocButton');

            button.classList.toggle("-translate-x-[20%]");
        }

        function hideUser(){
            const user = document.getElementById('user');
            user.classList.toggle("invisible");
        }

        function hideSide(){
            const element = document.getElementById('sidebar');
            element.classList.toggle("-translate-x-[calc(100%-15%)]")
        }

        function changeIcon(){
            const button = document.getElementById('ocButton');

            var icons = button.getElementsByTagName('svg');

            for(var i = 0, max=icons.length; i < max; i++){
                icons[i].classList.toggle("hidden");
            }
        }

        function changeBg(){
            const body = document.getElementById('body');
            body.classList.toggle("bg-black");

            const content = document.getElementById('content');
            content.classList.toggle("opacity-30");
        }
    </script>