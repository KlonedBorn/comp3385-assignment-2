@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{asset('css/feedback-form.css')}}"> -->
<style>
    .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.title {
    font-size: 36px;
    margin-bottom: 20px;
}

.feedback-form {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    background-color: dodgerblue;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #1e90ff;
}

.alert {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border-radius: 4px;
    margin-top: 20px;
}

.alert ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.alert li {
    margin-bottom: 5px;
}

</style>
<div class="container">
    <h1 class="title">Feedback Form</h1>
    <form action="{{ url('/feedback/send') }}" method="POST" class="feedback-form">
        @csrf
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="full_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="msg">Comments:</label>
            <textarea id="msg" name="comment" class="form-control" required></textarea>
        </div>
        <div class="">
            <label for="form">Let us know what you think of our website</label>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
