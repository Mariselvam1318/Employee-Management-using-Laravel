@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('employees.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-6">
                            <label>Hire Date</label>
                            <input type="date" class="form-control" name="hire_date" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Position</label>
                            <input type="text" class="form-control" name="position" required>
                        </div>
                        <div class="col-md-6">
                            <label>Salary</label>
                            <input type="number" step="0.01" class="form-control" name="salary" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive mt-5">
                <table class="table table-bordered" style="width: 100%;">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 5%;">S.No</th>
                        <th scope="col" style="width: 20%;">Employee Name</th>
                        <th scope="col" style="width: 20%;">Email</th>
                        <th scope="col" style="width: 15%;">Phone</th>
                        <th scope="col" style="width: 15%;">Hire Date</th>
                        <th scope="col" style="width: 15%;">Position</th>
                        <th scope="col" style="width: 10%;">Salary</th>
                        <th scope="col" style="width: 10%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($employees as $key => $employee)

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $employee->name }}</td>
                            <td scope="col">{{ $employee->email }}</td>
                            <td scope="col">{{ $employee->phone }}</td>
                            <td scope="col">{{ $employee->hire_date }}</td>
                            <td scope="col">{{ $employee->position }}</td>
                            <td scope="col">{{ number_format($employee->salary, 2) }}</td>
                            <td scope="col">

                            <a href="{{ route('employees.edit', $employee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fas fa-pencil-alt"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete 
                            </button>
                            </form>
                            </td>

                          </tr>

                        @endforeach

                    </tbody>
                  </table>
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

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
