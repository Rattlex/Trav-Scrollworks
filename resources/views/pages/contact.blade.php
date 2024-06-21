@extends('layouts.app-public')

@section('content')
<div class="contact-us-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-us-content text-center">
                    <h1>Discord</h1>
                    <div class="contact-us-logo">
                        <img id="centeredImage" src="https://cdn.shopify.com/s/files/1/0693/7883/4714/files/DC-Banner---1080-x-1920-2_1024x1024.png?v=1704738587" alt="Tenjin Logo">
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endsection
