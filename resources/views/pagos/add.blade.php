@extends('main')

@section('title', 'Pagos')

@section('subtitle','Pagos')

@section('main-section','Añadir pago')

@section('content')

<!-- NOTAS
        1. Ajustar todo a la base de datos
        2. Crear el espacio del forms para poder mandar y obtener cosas de la base de datos
-->

    <div class="relative overflow-x-auto w-[80%] h-[80%]">
        <div class="w-full h-[80%] lg:h-full flex flex-col items-center justify-between">
            <div class="w-full h-[20%] flex flex-row items-start justify-center">
                <select id="alumno" name="alumno" class="w-full lg:w-[60%] border border-black rounded-xl p-2 mr-2 bg-white">
                    <option value="" selected disabled hidden>Alumno</option>
                    <option value="aaa">aaa</option>
                    <option value="bbb">bbb</option>
                    <option value="ccc">ccc</option>
                </select>
                <button class="w-[30px] h-[30px]" onclick="addPayment()">
                        <svg id="eY7oOWZ8Ivh1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" project-id="4d5b32179f9945bf99b390bd06a00ebf" export-id="feabd6f4a6e44142aa90999390a8dde2" cached="false">
                            <rect width="39.257228" height="171.984048" rx="0" ry="0" transform="translate(130.371386 64.007976)" stroke-width="0"/>
                            <rect width="39.257228" height="171.984048" rx="0" ry="0" transform="matrix(0 1-1 0 235.992024 130.371386)" stroke-width="0"/>
                            <ellipse rx="128.88" ry="130" transform="translate(151.387478 148.693918)" fill="rgba(210,219,237,0)" stroke="#000" stroke-width="10"/>
                        </svg>
                </button>
            </div>
                
            <div id="conceptos" class="w-full h-full flex flex-col items-center justify-around overflow-y-auto">
                <div class="pago-row w-full flex flex-col lg:flex-row justify-around mb-10 lg:mb-0">
                    <select onchange="selection(this)" id="concept" name="concepto" class="w-full lg:w-[60%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white">
                        <option value="" selected disabled hidden>Concepto</option>
                        <option value="examen">Examen</option>
                        <option value="men">Mensualidad</option>
                        <option value="torneo">Torneo</option>
                        <option value="uniforme">Uniforme</option>
                    </select>
                
                    <input type="number" placeholder="Monto" class="w-full lg:w-[20%] border border-black rounded-xl p-2 mb-1 lg:mb-5">
                </div>
            </div>

            <p class="text-2xl">Total: $<p>
        </div>
    </div>

    <div class=" w-full h-[10%] relative flex justify-end items-end">
        <a href="<?= url('pagos'); ?>" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Cancelar</a>
        <button type="submit" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 text-center">Confimar</button>
    </div>

    @section('scripts')
        <script>
            let index = 1;

            function addPayment() {
                const container = document.getElementById("conceptos");

                const concepto = '<select id=\"concept\" onchange=\"selection(this)\" name=\"concepto\" class=\"w-full lg:w-[60%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white\"><option value="" selected disabled hidden>Concepto</option><option value="examen">Examen</option><option value="men">Mensualidad</option><option value="torneo">Torneo</option><option value="uniforme">Uniforme</option></select>';
                const svg = '<svg id="ejMHsiYRTOf1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" project-id="6ad1166ab2d541318c27809a3edb88d2" export-id="a93dbfc4ff674a5b850e0578aed1969a" cached="false"><rect width="39.257228" height="171.984048" rx="0" ry="0" transform="matrix(0 1-1 0 235.992024 130.371386)" stroke-width="0"/><ellipse rx="128.88" ry="130" transform="translate(151.387478 148.693918)" fill="rgba(210,219,237,0)" stroke="#000" stroke-width="10"/></svg>';
                const button = '<button class="w-[30px] h-[30px]" onclick="eliminatePayment(this)">' + svg + '</button>';

                const newPayment = document.createElement("div");
                newPayment.classList.add('pago-row', 'w-full','flex','flex-col','lg:flex-row','justify-around');
                newPayment.innerHTML = concepto + '<input type="number" placeholder="Monto" class="w-full lg:w-[20%] border border-black rounded-xl p-2 mb-1 lg:mb-5">' + button;

                container.appendChild(newPayment);
                index++;
            }

            function eliminatePayment(button) {
                const fila = button.closest('.pago-row');
                fila.remove();
            }

            function selection(select){
                if(select.options[select.selectedIndex].value == "uniforme"){

                    const container = select.closest('.pago-row');
                    const div = document.createElement("div");

                    div.classList.add('uniform-row', 'w-full','flex','flex-row','justify-around');
                    //div.setAttribute("id","uniform-row");
                    div.innerHTML = '<select id="uniforme" name="uniforme" class="w-full lg:w-[60%] border border-black rounded-xl p-2 mb-1 lg:mb-5 bg-white"><option value="" selected disabled hidden>Nombre</option><option value="examen">Dobok</option><option value="men">Peto</option><option value="torneo">Empeineras</option><option value="uniforme">Concha</option></select><input type="number" placeholder="Talla" class="w-full lg:w-[20%] border border-black rounded-xl p-2 mb-1 lg:mb-5">';

                    select.after(div);
                }
                else{
                    const fila = select.nextElementSibling;
                    fila.remove();
                }
            }
        </script>
    @endsection
@endsection