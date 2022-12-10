@extends('layouts.app')
@section('side')
    <div>
        <div class="m-4">
            <a href="{{ url('job_posting') }}">
                <img src="{{ asset('images/job.png') }}" width="32" alt="">
                <label for="" class="text-light text-uppercase">Job posting</label>
            </a>
        </div>
        <div class="m-4">
            <img src="{{ asset('images/calendar.png') }}" width="32" alt="">
            <label for="" class="text-light text-uppercase">Attendance Tracker</label>
        </div>
        <div class="m-4">
            <img src="{{ asset('images/people.png') }}" width="32" alt="">
            <label for="" class="text-light text-uppercase">Change Profile</label>
        </div>
        <div class="m-4">
            <img src="{{ asset('images/edit_password.png') }}" width="32" alt="">
            <label for="" class="text-light text-uppercase">Change Password</label>
        </div>

    </div>
@endsection
