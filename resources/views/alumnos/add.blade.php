@extends('main')

@section('title', 'Alumnos')

@section('subtitle','Alumnos')

@section('main-section','Añadir alumno')

@section('content')

    <div class="relative overflow-x-auto w-[80%] h-[80%]">
        <!--<form action="">-->
            <div class="flex flex-col lg:flex-row text-lg">
                <div class="flex flex-col place-items-center justify-center mb-5 mr-5 sm:mr-10">
                    <img src="/img/alumnos/default.png" class="rounded-full border-4 border-black w-20 lg:w-2/3">
                    <label for="foto" class="cursor-pointer bg-[#D9D9D9] mt-5 text-center">Subir Foto</label>
                    <input id="foto" type="file" accept="image/*" class="hidden">
                </div>
                <div class="w-full">
                    <input type="text" placeholder="Nombre" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">
                    <input type="text" placeholder="Apellido Paterno" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">
                    <input type="text" placeholder="Apellido Materno" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">

                    <div class="flex flex-row justify-between">
                        <select id="nacionalidad" name="nacionalidad" class="w-[60%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white">
                            <option value="" selected disabled hidden>Nacionalidad</option>
                            <option value="mx">México</option>
                            <option value="ss">Nicaragua</option>
                        </select>

                        <input datepicker readonly type="text" class="w-[35%] border border-black text-gray-900 rounded-xl p-2 mb-1 lg:mb-5" placeholder="Nacimiento">
                    </div>
                </div>
            </div>
            <div class="text-lg">
                <input type="text" placeholder="Direccion" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">
                <div class="flex flex-col lg:flex-row justify-between">
                    <select id="escolaridad" name="escolaridad" class="w-full lg:w-[60%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white">
                        <option value="" selected disabled hidden>Escolaridad</option>
                        <option value="primaria">Primaria</option>
                        <option value="secundaria">Secundaria</option>
                    </select>

                    <input type="text" class="w-full lg:w-[35%] border border-black rounded-xl p-2 mb-1 lg:mb-5" placeholder="Curp">
                </div>
                <input type="email" placeholder="Correo Electrónico" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">
                <input type="tel" placeholder="Teléfono" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5">
                <input datepicker type="text" class="w-full lg:w-[35%] border border-black text-gray-900 rounded-xl p-2 mb-1 lg:mb-5" placeholder="Fecha de ingreso" readonly>       
            </div>

            <hr class="border h-[5px] my-2 lg:my-5 bg-gradient-to-r from-[#1C6AD5] via-[#F4EB50] to-[#1C6AD5]">
            <h2 class="text-lg lg:text-xl">Tutor</h2>
            <div class="">
                <select id="tutor" name="tutor" class="w-full lg:w-[30%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white">
                        <option value="" selected>Nuevo</option>
                        <!--Lista de tutores en la bd-->
                </select>
                <input type="text" placeholder="Nombre completo" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5 disabled:opacity-50">
                <input type="email" placeholder="Correo Electrónico" class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5 disabled:opacity-50">
                <input type="tel" placeholder="Teléfono" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required class="w-full border border-black rounded-xl p-2 mb-1 lg:mb-5 disabled:opacity-50">
            </div>
        <!--</form>-->
    </div>

    <div class=" w-full h-[10%] relative flex justify-end items-end">
        <a href="<?= url('alumnos'); ?>" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Cancelar</a>
        <button type="submit" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Añadir</button>
    </div>

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @endsection
@endsection