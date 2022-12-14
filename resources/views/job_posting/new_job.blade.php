@extends('layouts.app')
@section('status')
    New Job Post
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
                            <input class="form-check-input" type="checkbox" value="" id="" disabled
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
        <div>
            <h1 class="my-3">Job Type</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="Job" id="plac" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="plac">Placement</label>

                <input type="radio" class="btn-check" name="Job" id="sour" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="sour">Sourching</label>
            </div>
            <h1 class="my-3">Tell us about the Job</h1>
            <div class="row my-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Job Title">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <select name="" id="" class="form-control">
                        <option value="">City</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Area">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-6">
                    <select name="" id="" class="form-control">
                        <option value="">Main Category</option>
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <textarea name="" id="" cols="30" rows=3" placeholder="job Descriction" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="my-3">
            <h1>Type of Job</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="time" id="full" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="full">Full Time</label>

                <input type="radio" class="btn-check" name="time" id="part" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="part">Part Time</label>
            </div>
        </div>
        <div class="my-3">
            <h1>Salary</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="number" class="btn-text text-center" placeholder="Minimum">
                <input type="number" class="btn-text text-center" placeholder="Maximum">
            </div>
        </div>
        <div class="my-3">
            <h1>Shift</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="shift" id="day" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="day">Day Shift</label>

                <input type="radio" class="btn-check" name="shift" id="night" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="night">Night Shift</label>

                <input type="radio" class="btn-check" name="shift" id="both" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="both">Both</label>
            </div>
        </div>
        <div class="my-3">
            <h1>Experience Required</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="experiences1" id="fresher" autocomplete="off"
                    onclick="fresher()">
                <label class="btn btn-outline-success px-5" for="fresher">Fresher</label>

                <input type="radio" class="btn-check" name="experiences1" id="experience" onclick="experience()"
                    checked>
                <label class="btn btn-outline-success px-5" for="experience">Experience</label>
            </div>
            <div class="input-group" id="exp">
                <div style="border: solid green; padding:3px; background-color: #47AF7C">
                    <input type="button" value="-" class="button-minus" data-field="quantity"
                        onclick="decrementValue()">
                    <input type="number" step="1" max="" value="1" name="quantity"
                        class="quantity-field" id="number">
                    <input type="button" value="+" class="button-plus" data-field="quantity"
                        onclick="incrementValue()">
                </div>
            </div>
        </div>
        <div class="my-3">
            <h1>Gender</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="male">Male</label>

                <input type="radio" class="btn-check" name="gender" id="female">
                <label class="btn btn-outline-success px-5" for="female">Female</label>
            </div>
        </div>
        <div class="my-3">
            <h1>Education</h1>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="edu" id="nonr" autocomplete="off">
                <label class="btn btn-outline-success px-5" for="nonr">None</label>

                <input type="radio" class="btn-check" name="edu" id="mat">
                <label class="btn btn-outline-success px-5" for="mat">Matric</label>

                <input type="radio" class="btn-check" name="edu" id="inter">
                <label class="btn btn-outline-success px-5" for="inter">Inter</label>

                <input type="radio" class="btn-check" name="edu" id="uni">
                <label class="btn btn-outline-success px-5" for="uni">University</label>
            </div>
        </div>
        <h1>Language</h1>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;" checked>
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    Urdu
                </label>
            </div>
        </div>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;">
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    English
                </label>
            </div>
        </div>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;">
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    Punjabi
                </label>
            </div>
        </div>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;">
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    Sindhi
                </label>
            </div>
        </div>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;">
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    Pashto
                </label>
            </div>
        </div>
        <div class="my-3">
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                    style="background-color: #47AF7C; border-color:#47AF7C;">
                <label class="form-check-label mx-2" for="flexCheckDefault">
                    Balochi
                </label>
            </div>
        </div>
        <div class="my-3">
            <h1>Number of Job Openings</h1>
            <div class="input-group">
                <div style="border: solid green; padding:3px; background-color: #47AF7C">
                    <input type="button" value="-" class="button-minus" data-field="quantity"
                        onclick="decrementjob()">
                    <input type="number" step="1" max="" value="0" name="quantity"
                        class="quantity-field" id="jobcount">
                    <input type="button" value="+" class="button-plus" data-field="quantity"
                        onclick="incrementjob()">
                </div>
            </div>
            <div class="float-end">
                <a href="{{ url('job_posting') }}" class="btn btn-light mt-4 text-uppercase text-dark shadow-lg p-3">
                    Cancel
                </a>
                <a href="{{ url('new_job2') }}" class="btn btn-success mt-4 mx-4 text-uppercase text-light shadow-lg p-3">
                    Continue
                </a>
            </div>
        </div>
    </div>
@section('javascript')

    <script>
        function experience() {
            document.getElementById("exp").style.visibility = "visible";
        }

        function fresher() {
            document.getElementById("exp").style.visibility = "hidden";
        }

        function incrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').value = value;
        }

        function decrementValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            document.getElementById('number').value = value;
        }

        function incrementjob() {
            var value = parseInt(document.getElementById('jobcount').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('jobcount').value = value;
        }

        function decrementjob() {
            var value = parseInt(document.getElementById('jobcount').value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            document.getElementById('jobcount').value = value;
        }
    </script>
@endsection
