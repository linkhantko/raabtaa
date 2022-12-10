@extends('layouts.app')
@section('side')
    <div class="card mx-2 my-4" style="width: 15rem;">
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
                            <input class="form-check-input" type="checkbox" value="" id="" disabled checked
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
                            <input class="form-check-input" type="checkbox" value="" id="" disabled
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
        <button type="button" class="btn btn-lg" style="background-color: #e1eee8" onclick="yes()">
            YES/NO <span class="badge bg-secondary">+</span>
        </button>
        <button type="button" class="btn btn-lg" style="background-color: #e1eee8">
            MULTIPLE CHOICE <span class="badge bg-secondary">+</span>
        </button>
        <button type="button" class="btn btn-lg" style="background-color: #e1eee8">
            MULTIPLE SELECTION <span class="badge bg-secondary">+</span>
        </button>

        <div class="card mt-3 shadow" style="background-color: #e1eee8">
            <div class="card-header">
                <div class="text-uppercase">QUESTION 1- YES / NO</div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="" id="" class="form-control"
                            placeholder="Enter your question here">
                        <span class="text-uppercase text-muted" style="font-size: 8px">select the correct answer</span>
                    </div>
                    <div class="row my-2">
                        <div class="col-5">
                            <input type="text" name="" id="" class="form-control" value="YES">
                        </div>
                        <div class="col-1">
                            <img src="{{ asset('images/choose.png') }}" alt="">
                        </div>
                        <div class="col-1 mx-2">
                            <button class="btn btn-success"> - </button>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-5">
                            <input type="text" name="" id="" class="form-control" value="NO">
                        </div>
                        <div class="col-1">
                            <img src="{{ asset('images/choose.png') }}" alt="">
                        </div>
                        <div class="col-1 mx-2">
                            <button class="btn btn-success"> - </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom fixed-bottom mt-5">
            <div class="float-end">
                <a href="{{ url('new_job') }}" class="btn btn-light mt-4 text-uppercase text-dark shadow-lg p-3">
                    Cancel
                </a>
                <a href="{{ url('new_job2') }}" class="btn btn-success mt-4 mx-4 text-uppercase text-light shadow-lg p-3">
                    Continue
                </a>
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
