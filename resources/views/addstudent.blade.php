@extends('layouts.app-dash')

@section('title', 'Dashboard')

@section('content')

<div class="py-4 px-3 px-md-4">
    <div class="card mb-3 mb-md-4">

        <div class="card-body">
            <!-- Breadcrumb -->
            <nav class="d-none d-md-block" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Students</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Register New Card</li>
                </ol>
            </nav>
            <!-- End Breadcrumb -->

            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Register Student Card </div>
            </div>

            <!-- Form -->
            <div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="card_id">Card_Id</label>
                            <input type="text" class="form-control" value="" id="card_id" name="card_id" placeholder="Card Id">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="" id="name" name="name" placeholder="Student Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="academic_year">Academic Year</label>
                            <input type="text" class="form-control" value="" id="academic_year" name="academic_year" placeholder="Academic Year">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="faculty">Faculty</label>
                            <input type="text" class="form-control" value="" id="faculty" name="faculty" placeholder="Faculty">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="photo">Upload Photo</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Create</button>
                </form>
            </div>
            <!-- End Form -->
        </div>
    </div>

</div>
@endsection
