@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="bg-gray-200 py-10">
    <div class="max-w-screen-xl mx-auto bg-white shadow-lg p-5 rounded-lg">
        <form class="flex flex-col gap-4">
            <div class="grid grid-cols-6 gap-4 max-md:grid-cols-2">
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">Maker</option>
                </select>
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">Model</option>
                </select>
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">State/Region</option>
                </select>
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">City</option>
                </select>
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">Type</option>
                </select>
                <button class="bg-white shadow-lg px-2 py-2 rounded-md text-black max-md:order-11">Reset</button>

                <input type="number" class="border-2 py-2 px-2 rounded-md placeholder:text-black"
                    placeholder="From Year">
                <input type="number" class="border-2 py-2 px-2 rounded-md placeholder:text-black" placeholder="To Year">
                <input type="number" class="border-2 py-2 px-2 rounded-md placeholder:text-black"
                    placeholder="From Price">
                <input type="number" class="border-2 py-2 px-2 rounded-md placeholder:text-black"
                    placeholder="To Price">
                <select name="" class="border-2 py-2 px-2 rounded-md">
                    <option value="">Fuel Type</option>
                </select>
                <button class="bg-orange-700 px-2 py-2 rounded-md text-white max-md:order-11">Search</button>
            </div>
        </form>
    </div>
</main>
@endsection