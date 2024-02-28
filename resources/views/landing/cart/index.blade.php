@extends('layouts.frontend.app', ['title' => 'Cart'])

@section('content')
    <div class="w-full 2xl:p-32 px-3 pt-24 bg-slate-300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8">
                    <x-landing.cart-table :carts="$carts" :total="$total" />
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <x-landing.cart-form :user="$user" :total="$total" />
                </div>
            </div>
        </div>
    </div>
@endsection