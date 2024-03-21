@extends('layouts.app')
@section('content')
    <h1 class="text-2xl font-bold">Dashboard</h1>
    <hr class="h-1 bg-blue-500">

    <div class="mt-5 grid grid-cols-3 gap-10">
        <div class="bg-blue-500 text-white flex justify-between rounded-lg px-2 py-5">
            <h1 class="text-xl">Total Categories</h1>
            <h4 class="text-5xl">5</h4>
        </div>

        <div class="bg-red-500 text-white flex justify-between rounded-lg px-2 py-5">
            <h1 class="text-xl">Total News</h1>
            <h4 class="text-5xl">52</h4>
        </div>

        <div class="bg-green-500 text-white flex justify-between rounded-lg px-2 py-5">
            <h1 class="text-xl">Total Visits</h1>
            <h4 class="text-5xl">512</h4>
        </div>
    </div>
@endsection
