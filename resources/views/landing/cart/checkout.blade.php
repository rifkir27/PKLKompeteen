@extends('layouts.frontend.app', ['title' => 'Cart'])

@section('content')
    <div class="w-full 2xl:p-32 px-3 pt-24 bg-slate-300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <div class="border rounded-lg overflow-hidden">
                        <div class="bg-white border-b px-4 py-3 text-gray-800 font-medium flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="7 10 12 4 17 10"></polyline>
                                <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                <circle cx="12" cy="15" r="2"></circle>
                            </svg>
                            Detail Transaksi
                        </div>
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-800 divide-y divide-gray-200">
                                <thead class="text-xs text-gray-800 uppercase bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 w-0"></th>
                                        <th scope="col" class="px-4 py-3">Nama Barang</th>
                                        <th scope="col" class="px-4 py-3 text-right">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($transaction->details as $i => $detail)
                                        <tr>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                {{ $i + 1 }}
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                {{ $detail->course->name }}</td>
                                            <td class="py-3 px-4 whitespace-nowrap text-right font-mono">
                                                <sup>Rp</sup> {{ moneyFormat($detail->price) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr classname="bg-blue-50 text-blue-900 font-semibold">
                                        <td class="py-3 px-4 whitespace-nowrap"></td>
                                        <td class="py-3 px-4 whitespace-nowrap">Total</td>
                                        <td class="py-3 px-4 whitespace-nowrap text-right text-green-500 font-mono">
                                            <sup>Rp</sup> {{ moneyFormat($transaction->grand_total) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="border rounded-lg overflow-hidden">
                        <div class="bg-white border-b px-4 py-3 text-gray-700 font-medium flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt w-5 h-5" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2">
                                </path>
                            </svg>
                            Konfirmasi Pembayaran
                        </div>
                        <div class="p-4 bg-white">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-y-2">
                                    <label class="text-base text-gray-900 font-medium">
                                        No Invoice
                                    </label>
                                    <input type="text" class="rounded-md border p-2 text-sm text-gray-900 focus:outline-none bg-gray-100 cursor-not-allowed" value="{{ $transaction->invoice }}" name="name" readonly="">
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <label class="text-base text-gray-900 font-medium">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" class="rounded-md border p-2 text-sm text-gray-900 focus:outline-none bg-gray-100 cursor-not-allowed" value="{{ $transaction->user->name }}" name="name" readonly="">
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <label class="text-base text-gray-900 font-medium">
                                        Email
                                    </label>
                                    <input type="email" class="rounded-lg border p-2 text-sm text-gray-900 focus:outline-none bg-gray-100 cursor-not-allowed" value="{{ $transaction->user->email }}" name="email" readonly="">
                                </div>
                                <div class="flex flex-col gap-y-2">
                                    <label class="text-base text-gray-900 font-medium">
                                        Total Bayar
                                    </label>
                                    <input type="text" class="rounded-lg border p-2 text-sm text-gray-900 focus:outline-none bg-gray-100 cursor-not-allowed" value="{{ $transaction->grand_total }}" name="grand_total" readonly>
                                </div>
                                {{-- <div class="flex flex-col gap-y-2">
                                    <label class="text-base text-gray-900 font-medium">
                                        No Whatsapp
                                    </label>
                                    <input type="text" class="rounded-lg border p-2 text-sm text-gray-900 focus:outline-none bg-gray-100 cursor-not-allowed" value="{{ $transaction->phone_number }}" placeholder="No Whatsapp Aktif" name="phone_number" readonly>
                                </div> --}}
                                @if ($transaction->status == "pending")
                                    <div class="flex flex-col gap-y-2">
                                        <label class="text-base text-gray-900 font-bold"> Silakan Transfer Ke Rekening Berikut ini</label>
                                        <label class="text-base text-gray-900 font-semibold">BCA <br>8105675450<br>Dede Rusliandi Taruna</label><br>
                                        <label class="text-red-600">Untuk Konfirmasi Pembayaran, silakan hubungi admin di WA 0812-1212-6043 / klik floating button WA di pojok kanan bawah, jika course perlu pengiriman device, silakan diskusi untuk jasa ongkir</label>
                                    </div>
                                @endif

                                @if ($transaction->status == "success")
                                    <div class="flex flex-col gap-y-2">
                                        <label class="text-red-600 font-semibold text-center">Transaksi Selesai</label>
                                        <a href="{{ route('member.mycourse') }}" class="px-4 py-2 rounded-lg bg-sky-800 text-white text-center text-sm border border-sky-700">
                                            Lihat Course
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($transaction->status == "pending")
                        <div class="my-3">
                            <a href="https://wa.me/6281212126043?text=Hallo%2C%20Admin%20Eduthings%20saya%20ingin%20melakukan%20konfirmasi%20pembayaran%0ANama%3A%20%0AEmail%3A%0ANo%20Invoice%3A%0ATotal%20Pembayaran%3A%0ABukti%20Transfer%3A" target="_blank">
                                <button class="text-white bg-sky-800 hover:bg-sky-900 rounded-lg w-full p-2">
                                    Konfirmasi Pembayaran
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection