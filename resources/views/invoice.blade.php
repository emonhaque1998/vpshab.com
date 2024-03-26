<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>.
    @vite(['resources/css/invoice.css', 'resources/js/app.js'])
</head>

<body>
    <div class="header">
        <div class="w-2/3 mx-auto">
            <div class="flex">
                <div class="logo w-2/3">
                    <img class="w-32"
                        src="https://static.vecteezy.com/system/resources/previews/023/654/784/non_2x/golden-logo-template-free-png.png"
                        alt="">
                </div>
                <div class="w-1/3">
                    <h1 class="text-right font-extrabold text-lg">{{ config('app.name', 'Laravel') }}</h1>
                    <p class="text-right text-sm">Rajbari Sadar, Rajbari 7700</p>
                    <p class="text-right text-sm">Email: sales@putulhost.com</p>
                    <p class="text-right text-sm">Call: 09638205205 (9AM-9PM)</p>
                </div>
            </div>
            <div class="bg-gray-300 rounded-lg mt-5 p-3">
                <h1 class="font-extrabold text-lg">Invoice: #{{ $data['invoice'] }}</h1>
                <h1>Invoice Date:</h1>
                <h1>Due Date: 17/01/2024</h1>
            </div>

            <div class="mt-2 p-3">
                <h1 class="font-extrabold text-md">Invoiced To</h1>
                <h1>Brothers Computer</h1>
                <h1>Name: {{ $data['customer_name'] }}</h1>
                <h1>Manikganj , Dhaka, 1800</h1>
                <h1>Bangladesh</h1>
            </div>

            <table class="min-w-full bg-white border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="w-2/3 px-6 py-3 font-extrabold text-center text-xs border-gray-200 border text-gray-500 uppercase tracking-wider">
                            Description
                        </th>
                        <th scope="col"
                            class="w-1/3 px-6 py-3 text-center text-xs font-extrabold border-gray-200 border text-gray-500 text-gray-500 uppercase tracking-wider">
                            Amount
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-2 whitespace-nowrap border-gray-200 border text-gray-500">
                            {{ $data['productName'] ?? '' }}
                        </td>
                        <td class="px-6 text-right py-2 whitespace-nowrap border-gray-200 border text-gray-500">
                            {{ $data['totalPrice'] ?? '0' }}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 text-right whitespace-nowrap border-gray-200 border text-gray-500">
                            Sub Total
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            jane@example.com
                        </td>
                    </tr>
                    <tr>
                        <td
                            class="px-6 font-extrabold text-right whitespace-nowrap border-gray-200 border text-gray-500">
                            Total
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            jane@example.com
                        </td>
                    </tr>
                    <!-- More rows can be added here -->
                </tbody>
            </table>


            <h1 class="mt-10 mb-3 text-lg font-extrabold">Transactions</h1>
            <table class="min-w-full bg-white border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 font-medium text-center text-xs border-gray-200 border text-gray-500 uppercase tracking-wider">
                            Transaction Date
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium border-gray-200 border  text-gray-500 uppercase tracking-wider">
                            Gateway
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium border-gray-200 border  text-gray-500 uppercase tracking-wider">
                            Transaction ID
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-extrabold border-gray-200 border text-gray-500 uppercase tracking-wider">
                            Amount
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <tr>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            Balance
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            jane@example.com
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            {{ $data['transaction_id'] }}
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            jane@example.com
                        </td>

                    </tr>
                    <tr>
                        <td colspan="3"
                            class="px-6 font-extrabold text-right whitespace-nowrap border-gray-200 border text-gray-500">
                            Balance
                        </td>
                        <td class="px-6 whitespace-nowrap border-gray-200 border text-gray-500">
                            jane@example.com
                        </td>
                    </tr>
                    <!-- More rows can be added here -->
                </tbody>
            </table>
            <hr class="mt-5">
            <h1 class="text-center font-extrabold text-pink-700 my-5 text-lg"><a href="{{ url('/') }}">Home
                    Page</a></h1>
        </div>
    </div>
</body>

</html>
