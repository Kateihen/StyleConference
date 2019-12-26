@extends('layouts.app')

@section('content')
    <div class="row-alt">
        <section class="container sub">
                <h3>Hello, {{ $visitor->name }}!</h3>
                <p>Thank you for registration! See you in Chicago!</p>
        </section>
    </div>

@endsection