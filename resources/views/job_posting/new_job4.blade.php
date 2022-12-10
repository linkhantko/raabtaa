@extends('layouts.app')
@section('status')
    Employment Contract
    <p class="h6">Legally binding agreement for the job that is being offered to the worker.</p>
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
                            <input class="form-check-input" type="checkbox" value="" id="" checked disabled
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
        <div class="my-3">
            <h1>Contract Present</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="contract" id="yes" autocomplete="off" onclick="yes()"
                    checked>
                <label class="btn btn-outline-success px-5" for="yes">YES</label>

                <input type="radio" class="btn-check" name="contract" id="no" onclick="no()">
                <label class="btn btn-outline-success px-5" for="no">NO</label>
            </div>
        </div>
        <div class="my-3" id="myDIV">
            <div class="row">
                <div class="col-6">
                    <h1>Contract Terms</h1>
                    <textarea name="" id="" class="form-control" rows="4" placeholder="..."></textarea>
                </div>
                <div class="col-6">
                    <h1>User WebPP view</h1>
                    <textarea name="" id="" class="form-control" rows="4" placeholder="..."></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h1>Footer</h1>
                    <textarea name="" id="" class="form-control" rows="4" placeholder="..."></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom fixed-bottom mt-5" style="z-index: 1;">
        <div class="float-end">
            <a href="{{ url('new_job3') }}" class="btn btn-light mt-4 text-uppercase text-dark shadow-lg p-3">
                Cancel
            </a>
            <a href="{{ url('job_posting') }}" class="btn btn-success mt-4 mx-4 text-uppercase text-light shadow-lg p-3">
                Submit
            </a>
        </div>
    </div>
    </div>
@endsection
@section('javascript')
    <script>
        function yes() {
            document.getElementById("myDIV").style.visibility = "visible";
        }

        function no() {
            document.getElementById("myDIV").style.visibility = "hidden";
        }
    </script>
@endsection
