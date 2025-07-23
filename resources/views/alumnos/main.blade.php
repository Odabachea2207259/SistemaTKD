@extends('main')

@section('title', 'Alumnos')

@section('subtitle','Alumnos')

@section('main-section','Pagina')

@section('content')

    <div class="relative overflow-x-auto w-[70%] h-[50%] flex place-items-center justify-center items-center">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 opacity-70 hover:opacity-100 hover:font-bold transition duration-200 ease-in-out">
                    <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 opacity-70 hover:opacity-100 hover:font-bold transition duration-200 ease-in-out">
                    <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 opacity-70 hover:opacity-100 hover:font-bold transition duration-200 ease-in-out">
                    <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=" w-full h-[50%] relative flex justify-end items-end">
        <a href="<?= url('/alumnos/add'); ?>"class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 mb-4 text-center">Añadir</a>
        <a href="" class="w-[10rem] border-8 bg-[#1C6AD5] border-[#F4EB50] rounded-full px-5 text-white text-lg mx-2 mb-4 text-center">Imprimir</a>
    </div>
@endsection