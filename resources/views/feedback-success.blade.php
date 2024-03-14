@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container-child {
            max-width: 400px;
            height: 200px;
            position: relative;
        }
        .success-label {
            position: absolute;
            top: 89px;
            left: 121px;
            color: #4BAE4F;
            font-size: 36px;
            font-weight: bold;
        }
        .feedback-label {
            position: absolute;
            top: 132px;
            left: 43px;
            width: 314px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            word-wrap: break-word;
        }
        .tick-image {
            position: absolute;
            top: 14px;
            left: 168px;
            width: 64px;
        }
    </style>
    <div class="container-child">
        <img class="tick-image" src="{{ asset('images/accept.png') }}" alt="Success Tick Icon">
        <p class="success-label">Success!</p>
        <p class="feedback-label">Thank you for your feedback. We will review your feedback and get back to you.</p>
    </div>
</body>
</html>
@endsection