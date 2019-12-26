@extends('layouts.app')

@section('title', '- Register')

@section('content')
    <div class="row-alt">
        <section class="container sub">
                <h3>Register</h3>
                <p>Every year we aim to have an unbelievable time, and this year we’d love it for you to join us. <br> Conference passes only cost $30, one of the best values you’ll find.</p>
        </section>
    </div>
        
    <section class="row row-another">
        <div class="grid">
                
            <section class="col-2-3">
                <h5>Purchase a Conference Pass</h5>
                <h3>30$ per Pass</h3>
                <p>Purchase your Styles Conference pass using the form to the right. Multiple passes may be purchased within the same order, so feel free to bring a friend or two along. Once your order is finished we&#8217;ll follow up and provide a receipt for your purchase. See you soon!</p>
                <h3>Why attend?</h3>
                <ul class="why-attend">
                    <li>Over twenty world-class speakers</li>
                    <li>One full day of workshops and two full days of presentations</li>
                    <li>Hosted at The Chicago Theatre, a historical landmark</li>
                    <li>August in Chicago is simply amazing</li>
                </ul>
            </section><!--
                
            --><form class="col-1-3" action="/register" method="POST">
                @csrf
                <fieldset class="register-group">
                    <label>
                        Name
                    <input type="text" name="name" placeholder="Full Name" required>
                    </label>
                    
                    <label>
                        Email
                    <input type="email" name="email" placeholder="name@domain.com" required>
                    </label>
                    
                    <label>
                        Number of Passes
                        <select name="num_of_passes">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    <label>
                        Comments
                        <textarea name="comments"></textarea>
                    </label>
                </fieldset>

                <button class="btn btn-default">
                    Purchase
                </button>
            </form>
                
        </div>
    </section>
@endsection