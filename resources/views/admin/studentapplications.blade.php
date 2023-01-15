@extends('layouts.app')

@section('content')
<div class="admin-page">
    <div class="student-applications-list">
        @foreach ($applications as $application)
            <div class="student-application">
                <h1>{{$application->name}}</h1>
                <h1>{{$application->email}}</h1>
                <h1>{{$application->state}}</h1>
                <form method="post" action="{{ url('/student-applications') }}">
                @csrf
                    <input name="id" type="hidden" value="{{$application->id}}">
                    <input name="state" type="hidden" value="Approve">
                    <button type="submit">Approve</button>
                </form>
                <form method="post" action="{{ url('/student-applications') }}">
                    <input type="hidden" value="{{$application->id}}">
                    <input type="hidden" value="Deny">
                    <button type="submit">Deny</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection