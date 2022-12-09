@extends('layouts.app')
@section('side')
    <div class="m-4">
        <img src="{{ asset('images/job.png') }}" width="32" alt="">
        <label for="" class="text-light text-uppercase">Job posting</label>
    </div>
    <div class="m-4">
        <a href="{{ url('new_job') }}">
            <div style="border: solid;border-radius:100px;display: inline-grid;padding: 4px; border-color: white;"></div>
            <label for="" class="text-light text-uppercase mx-2">Post a New Job</label>
        </a>
    </div>
    <div class="m-4">
        <a href="{{ url('home') }}">
            <div style="border: solid;border-radius:100px;display: inline-grid;padding: 4px; border-color: white;"></div>
            <label for="" class="text-light text-uppercase mx-2">Home</label>
        </a>
    </div>
@endsection
@section('content')
    <div class="container main mt-3">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>JOB TITLE</th>
                    <th>Position</th>
                    <th>Application</th>
                    <th>Workers</th>
                    <th>Attendance</th>
                    <th>Status</th>
                    <th>Enable</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr class="text-center">
                        <th>{{ $job->id }}</th>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->created_at }}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>ACTIVE</td>
                        <td><span class="btn btn-success">YES</span></td>
                        <td><img src="{{ asset('images/action.png') }}" alt="" width="20" class="mt-2"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
