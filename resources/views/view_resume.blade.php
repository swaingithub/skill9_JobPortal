@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>View Resume: {{ $resume->name }}</h4>
        <iframe src="/{{ $resume->file }}" width="90%" height="800px"></iframe>
    </div>
@endsection
