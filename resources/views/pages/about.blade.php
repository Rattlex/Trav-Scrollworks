<!-- resources/views/about.blade.php -->

@extends('layouts.app-public')

@section('content')
<div class="about-us-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="about-us-content text-center">
                    <h1>About Us</h1>
                    <div class="about-us-logo">
                        <img src="https://cdn.shopify.com/s/files/1/0693/7883/4714/files/Scrollworks_and_Style-01_480x480.png?v=1704738762" alt="Tenjin Logo">
                    </div>
                    <p class="mt-4">
                        Tenjin is a Japanese-inspired brand specializing in deskmat artistry. Founded in 2021 as a collaborative prowess between its founders, our brand is divided into two sub-brands: Scrollworks — specializing in deskmat lines, and Style — offering merchandise derivatives.
                    </p>
                    <p class="mt-4">
                        Our journey starts with a single vision: to elevate a staple desk accessory into a performance-enhancing piece of art. Recognizing the lack of notable brands focused solely on this positioning, the idea for Tenjin was born.
                    </p>
                    <p class="mt-4">
                        Deeply rooted in Japanese culture and values, we proudly present you with the finest artistic deskmat collections.
                    </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endsection
