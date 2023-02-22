<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="container flex justify-center mx-auto">
        Ini Halaman exstrakurikuler
    </h1>
    <h2 class="container flex justify-center mx-auto">Extrakurikuler List</h2>

    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <h1 class="text-center text-success"><a href="/extrakurikuler/create">Add Nama Ekskul list</a></h1>
                <div class="border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300 ">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    ID
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Nama
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                    Anggota
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                </th>
                                <th class="px-6 py-2 text-xs text-gray-500">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            @foreach ($ekskulList as $data)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$loop -> iteration}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$data -> nama}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        @foreach ($data -> siswas as $item)
                                        - {{$item -> nama}} <br>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>