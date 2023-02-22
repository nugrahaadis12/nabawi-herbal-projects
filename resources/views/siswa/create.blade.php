<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="container flex justify-center mx-auto">
        Ini Halaman Create Siswa
    </h1>
    <h2 class="container flex justify-center mx-auto">Form Nama Siswa</h2>

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="block max-w-sm rounded-lg bg-white p-6 shadow-lg">
                    <form action="/siswa/store" method="POST">
                    @csrf
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input name="nama" type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleInput90" placeholder="Name" />
                            <label for="exampleInput90" class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Name
                            </label>
                        </div>
                        <button name="submit"  type="submit" class="w-full rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg" data-te-ripple-init data-te-ripple-color="light">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 class="container flex justify-center mx-auto"><a href="/siswa"><- Back to Siswa Page</a></h2>
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</body>

</html>