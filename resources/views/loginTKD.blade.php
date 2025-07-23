<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

</head>
<body class="relative min-h-screen flex items-center justify-center">
    <div class="absolute inset-0 bg-[url('/img/wtu.png')] bg-no-repeat bg-center opacity-20 z-0"></div>

    <div class="relative z-10 flex flex-col items-center justify-center">
        <input type="text" placeholder="Usuario" class="border border-black mb-4 rounded-full p-2 shadow-lg">
        <div class="relative w-full max-w-xs">
            <input id="password" type="password" placeholder="Contraseña"
                   class="border border-black mb-8 rounded-full p-2 shadow-lg">

            <button id="show" type="button" onclick="togglePassword()"
                    class="absolute right-2 top-2.5 text-gray-600">

                <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>

                <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="w-6 h-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.269-2.943-9.543-7a9.964 9.964 0 012.187-3.248M6.653 6.653A9.955 9.955 0 0112 5c4.478 0 8.269 2.943 9.543 7a9.955 9.955 0 01-1.249 2.592M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3l18 18"/>
                </svg>
            </button>
        </div>


        <button type="submit" class="border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg">Iniciar Sesión</button>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function togglePassword(){
            const button = document.getElementById('show');
            const password = document.getElementById('password');

            var icons = button.getElementsByTagName('svg');

            for(var i = 0, max=icons.length; i < max; i++){
                if(icons[i].id == "eyeClosed" && icons[i].classList.contains("hidden")){
                    password.type = 'text';
                }
                else{
                    password.type = 'password';
                }
                
                icons[i].classList.toggle("hidden");

            }
        }
    </script>
</body>
</html>