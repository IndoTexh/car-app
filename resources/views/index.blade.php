@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="bg-gray-200 py-10">
    <div class="max-w-screen-xl mx-auto bg-white shadow-lg p-5 rounded-lg">
        <form class="flex flex-col gap-4">
            <div class="grid grid-cols-4 gap-4 max-md:grid-cols-2">
                <x-select-maker :makers="$makers" name="Maker" />
                <x-select-model :models="$models" name="Model" />
                <x-select-type :types="$types" name="Type" />
                <x-select-fuel :fuels="$fuels" name="Fuel" />
                <x-input name="from_year" placeholder="From Year" />
                <x-input name="to_year" placeholder="To Year" />
                <x-input name="from_price" placeholder="From Price" />
                <x-input name="to_price" placeholder="To Price" />
                <x-button bg="bg-orange-700" color="text-white">Search</x-button>
                <x-button bg="bg-white shadow-lg" color="text-black">Reset</x-button>
            </div>
        </form>
    </div>
</main>
<script>
    document.getElementById('maker').addEventListener('change', function () {
        let maker_id = this.value;
        fetch(`/api/models?maker_id=${maker_id}`)
            .then(response => response.json())
            .then(data => {
                let selectModel = document.getElementById('model');
                selectModel.innerHTML = '<option value="">Model</option>';
                data.forEach(model => {
                    selectModel.innerHTML += `<option value="${model.id}">${model.name}</option>`
                })
            })
    });
</script>
@endsection