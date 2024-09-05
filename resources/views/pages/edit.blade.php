@extends('layouts.app')

@section('content')

<div class="container">

    <h3 align="center" class="mt-5">Edit Employee</h3>

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="form-area">
                <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $employee->name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $employee->email }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $employee->phone }}">
                        </div>
                        <div class="col-md-6">
                            <label>Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" value="{{ $employee->hire_date }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Position</label>
                            <input type="text" class="form-control" name="position" value="{{ $employee->position }}" required>
                        </div>
                        <div class="col-md-6">
                            <label>Salary</label>
                            <input type="number" step="0.01" class="form-control" name="salary" value="{{ $employee->salary }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
        }
    </style>
@endpush
