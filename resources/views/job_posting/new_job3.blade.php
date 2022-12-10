@extends('layouts.app')
@section('status')
    Point of contact details
    <p class="h6">Who would be connecting with candudate and hire them for this Job?</p>
@endsection
@section('side')
    <div class="card mx-2 my-4">
        <div class="text-uppercase text-center my-3">
            Steps
        </div>
        <ul class="list-group" style="border: none;">
            <li>
                <div class="row my-1">
                    <div class="col-3"><span style="margin-left: 10px;">25%</span></div>
                    <div class="col-9">
                        <div class="progress" style="height:9px;margin-top: 5px;margin-right: 30px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%; background-color: #47AF7C;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="row my-1">
                    <div class="col-3">
                        <span style="margin-left: 15px;">
                            <input class="form-check-input" type="checkbox" value="" id="" checked disabled
                                style="background-color: #47AF7C; border-color:#47AF7C;">
                        </span>
                    </div>
                    <div class="col-9">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            Job Details
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="row my-1">
                    <div class="col-3">
                        <span style="margin-left: 15px;">
                            <input class="form-check-input" type="checkbox" value="" id="" checked disabled
                                style="background-color: #47AF7C; border-color:#47AF7C;">
                        </span>
                    </div>
                    <div class="col-9">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            Screening Question
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="row my-1">
                    <div class="col-3">
                        <span style="margin-left: 15px;">
                            <input class="form-check-input" type="checkbox" value="" id="" checked disabled
                                style="background-color: #47AF7C; border-color:#47AF7C;">
                        </span>
                    </div>
                    <div class="col-9">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            Point of Contact
                        </label>
                    </div>
                </div>
            </li>
            <li>
                <div class="row my-1 mb-5">
                    <div class="col-3">
                        <span style="margin-left: 15px;">
                            <input class="form-check-input" type="checkbox" value="" id="" disabled
                                style="background-color: #47AF7C; border-color:#47AF7C;">
                        </span>
                    </div>
                    <div class="col-9">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            Employment
                        </label>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container-fluit mx-3 main mt-3">
        <div>
            <div class="m-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label mx-3" for="flexCheckIndeterminate">
                        Let applicants message you on WhatsApp directly. Employers get 2x more candidates when there is
                        engagement.
                    </label>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Interviewer’s Name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <div class="form-group md-group show-label">
                        <input class="form-control" type="tel" id="phone" placeholder="e.g. +1 702 123 4567"
                            value="+1 ">
                    </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h1>Worl Place Address</h1>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="City">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Area">
                </div>
            </div>
                <textarea name="" id="" class="form-control" cols="3" rows="4" placeholder="Address"></textarea>
            <div class="m-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label mx-3" for="flexCheckIndeterminate">
                        Use same address for the interview
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom fixed-bottom mt-5" style="z-index: 1;">
        <div class="float-end">
            <a href="{{ url('new_job2') }}" class="btn btn-light mt-4 text-uppercase text-dark shadow-lg p-3">
                Cancel
            </a>
            <a href="{{ url('new_job4') }}" class="btn btn-success mt-4 mx-4 text-uppercase text-light shadow-lg p-3">
                Continue
            </a>
        </div>
    </div>
    </div>
@endsection
@section('javascript')
    <script>
        // alert("jkhkjs");
        function yes() {
            alert("kalsdfj")
        }
    </script>
@endsection
