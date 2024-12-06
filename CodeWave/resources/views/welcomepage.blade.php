<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    @extends('layout')

    @section('content')
    @if (session('success'))
    {{ session('success') }}
    @endif

    <form class="max-w-lg mx-auto pt-5">
        <div class="flex gap-3 border-slate-400 rounded-xl border-[1px] p-2 pb-3 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            <input type="search" placeholder="Search your course here" class="outline-none w-full searchbar" />
        </div>
    </form>

    <div class="mx-auto max-w-lg flex flex-row pt-4 gap-4">

        <div class="flex flex-grow-0 self-start gap-2 flex-row bg-slate-600 shadow-md rounded-lg p-[7px]">

            <div class="bg-[url('https://img.icons8.com/?size=100&id=123603&format=png&color=000000')] h-6 w-6 bg-cover"></div>
            <div class="text-white font-normal font-lexend">React</div>

        </div>

        <div class="flex flex-grow-0 self-start gap-2 flex-row bg-orange-400 shadow-md rounded-lg p-[7px]">

            <div class="bg-[url('https://img.icons8.com/?size=100&id=WZCcsYDBHITs&format=png&color=000000')] h-6 w-6 bg-cover"></div>
            <div class="text-white font-normal font-lexend">Python</div>
        </div>

        <div class="flex flex-grow-0 self-start gap-2 flex-row bg-red-400 shadow-md rounded-lg p-[7px]">
            <form action="{{ route('logout') }}" method="post">
                @csrf

                <div class="bg-[url('https://img.icons8.com/?size=100&id=WZCcsYDBHITs&format=png&color=000000')] h-6 w-6 bg-cover"></div>
                <div class="text-white font-normal font-lexend">
                    <button type="submit">Logout</button>
                </div>

        </div>
        </form>
    </div>

    </div>





    @endsection
</body>

</html>