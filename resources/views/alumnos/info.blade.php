@extends('main')

@section('title', 'Alumnos')

@section('subtitle','Alumnos')

@section('main-section','Información alumno')

@section('content')

    <div id="info" class="relative overflow-y-auto 2xl:overflow-visible w-[90%] h-[80%] left-10 md:left-0 transition duration-300 ease-in">
        <div class="absolute w-full flex justify-end">
            <button class="text-5xl" onclick="toggle()">-></button>
        </div>
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-col place-items-center justify-center mb-5 mr-5 sm:mr-10">
                    <img src="/img/alumnos/default.png" class="rounded-full border-4 border-black w-20 lg:w-2/3">
            </div>
            <div class="text-lg lg:text-xl xl:text-3xl 2xl:text-5xl tracking-widest">
                <p class="mb-3"><strong>Nombre:</strong> Alexander Arellano Odabachea</p>
                <p class="mb-3"><strong>Fecha de nacimiento:</strong> 16/11/2002</p>
                <p class="mb-3"><strong>Edad:</strong> 22</p>
                <p class="mb-3"><strong>Nacionalidad:</strong> MX</p>
            </div>
        </div>
        <hr class="border h-[5px] my-2 lg:my-5 bg-gradient-to-r from-[#1C6AD5] via-[#F4EB50] to-[#1C6AD5]">
        <div class="text-lg lg:text-xl xl:text-3xl 2xl:text-5xl tracking-widest flex flex-col">
            <p class="mb-3"><strong>Direccion:</strong> De las Rosas 34-B, Lomas Terrabella</p>
            <p class="mb-3"><strong>Escolaridad:</strong> Licenciatura</p>
            <p class="mb-3"><strong>CURP:</strong> AEOA021116HBCRDLA9</p>
            <p class="mb-3"><strong>Email:</strong> lalex1611@gmail.com</p>
        </div>
        <hr class="border h-[5px] my-2 lg:my-5 bg-gradient-to-r from-[#1C6AD5] via-[#F4EB50] to-[#1C6AD5]">
        <div class="text-lg lg:text-xl xl:text-3xl 2xl:text-5xl tracking-widest inline lg:flex justify-between">
            <p class="mb-3"><strong>Cinta:</strong> Roja</p>
            <p class="mb-3"><strong>Estatus:</strong> Activo</p>
            <p class="mb-3"><strong>Fecha de ingreso:</strong> 01/01/2010</p>
        </div>
    </div>

    <div id="pro" class="relative overflow-y-auto 2xl:overflow-visible w-[90%] h-[80%] left-10 md:left-0 hidden transition duration-300 ease-out">
        <div class="absolute w-full flex justify-end">
            <button class="text-5xl" onclick="toggle()"><-</button>
        </div>
        <div class="flex flex-col text-lg lg:text-xl xl:text-3xl 2xl:text-5xl mb-10">
            <p class="mb-3"><strong>Nombre:</strong> Alexander Arellano Odabachea</p>    
            <p class="mb-3"><strong>Cinta:</strong> Roja</p>
            <p class="mb-3"><strong>Estatus:</strong> Activo</p>
        </div>
        <fieldset class="flex flex-col lg:flex-row text-lg lg:text-xl xl:text-3xl 2xl:text-5xl justify-between text-white">
            <div class="flex flex-row lg:flex-col items-center my-4 lg:my-0">
                <label for="basicos" class="bg-[#0D579D] rounded-[30px] px-8 py-2 mx-5 lg:mx-0 mb-0 lg:mb-10">Básicos</label>
                <input type="checkbox" id="basicos" value="basicos" class="w-10 h-10"/>
            </div>
        
            <div class="flex flex-row lg:flex-col items-center my-4 lg:my-0">
                <label for="defensas" class="bg-[#0D579D] rounded-[30px] px-8 py-2 mx-5 lg:mx-0 mb-0 lg:mb-10">Defensas</label>
                <input type="checkbox" id="defensas" value="defensas" class="w-10 h-10"/>
            </div>
        
            <div class="flex flex-row lg:flex-col items-center my-4 lg:my-0">
                <label for="formas" class="bg-[#0D579D] rounded-[30px] px-8 py-2 mx-5 lg:mx-0 mb-0 lg:mb-10">Formas</label>
                <input type="checkbox" id="formas" value="formas" class="w-10 h-10"/>
            </div>

            <div class="flex flex-row lg:flex-col items-center my-4 lg:my-0">
                <label for="patadas" class="bg-[#0D579D] rounded-[30px] px-8 py-2 mx-5 lg:mx-0 mb-0 lg:mb-10">Patadas</label>
                <input type="checkbox" id="patadas" value="patadas" class="w-10 h-10"/>
            </div>

            <div class="flex flex-row lg:flex-col items-center my-4 lg:my-0">
                <label for="combate" class="bg-[#0D579D] rounded-[30px] px-8 py-2 mx-5 lg:mx-0 mb-0 lg:mb-10">Combate</label>
                <input type="checkbox" id="combate" value="combate" class="w-10 h-10"/>
            </div>
        </fieldset>
    </div>

    <div class=" w-full h-[10%] relative flex justify-end items-end">
        <a href="<?= url('alumnos'); ?>" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Regresar</a>
        <a href="" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Editar</a>
    </div>

    @section('scripts')
        <script>
            function toggle(){
                const info = document.getElementById('info');
                const pro = document.getElementById('pro');

                info.classList.toggle('hidden');
                pro.classList.toggle('hidden');
            }

        </script>
    @endsection
@endsection