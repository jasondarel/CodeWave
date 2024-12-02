<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@extends('layout')

<body>
    <!-- <div class="font-lexend font-light">Whereas disregard and contempt for human rights have resulted </div> -->
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


    <div class="absolute p-5 top-0 flex flex-col gap-12">

        <div>LOGO CODEWAVE DISINI</div>
        <div class="flex flex-col  gap-6">

            <div class="font-lexend font-light text-slate-500 text-[12px]">OVERVIEW</div>

            <button class="transition-all hover:text-purple-600 duration-300 rounded-lg button-e3fuiH flex-grow-0 self-start">
                <div class="flex flex-row gap-3 items-end ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </div>

                    <div class="text-[16px]">
                        Dashboard
                    </div>
                </div>
            </button>

            <button class="transition-all hover:text-purple-600 duration-300 rounded-lg button-e3fuiH flex-grow-0 self-start">
                <div class="flex flex-row gap-3 items-end ">

                    <div class="">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>

                    </div>

                    <div class="text-[16px]">
                        Inbox
                    </div>
                </div>
            </button>

            <button class="transition-all hover:text-purple-600 duration-300 rounded-lg button-e3fuiH flex-grow-0 self-start">
                <div class="flex flex-row gap-3 items-end ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>

                    <div class="text-[16px]">
                        Materials
                    </div>
                </div>
            </button>

            <button class="transition-all hover:text-purple-600 duration-300 rounded-lg button-e3fuiH flex-grow-0 self-start">
                <div class="flex flex-row gap-3 items-end ">

                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-transition">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                        </svg>

                    </div>

                    <div class="text-[16px]">
                        Task
                    </div>
                </div>
            </button>

        </div>
    </div>



</body>

</html>