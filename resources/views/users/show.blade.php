@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection