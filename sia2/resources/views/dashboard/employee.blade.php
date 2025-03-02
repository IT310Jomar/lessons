@extends('layouts.app')

@section('content')
    {{-- @include('layouts.headers.cards') --}}

    <div class="container mt-4">
        <h2 class="mb-4">Employee List</h2>
        <!-- Added ID for easier targeting -->
        <table class="table dt-responsive nowrap w-100" id="employeeTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Department ID</th>
                    <th>Location ID</th>
                    <th>Employment Status</th>
                    <th>Employment Type</th>
                    <th>Title</th>
                    <th>Payroll Type</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">
                {{-- @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->user->name ?? 'N/A' }}</td>
                    <td>{{ $employee->department_id }}</td>
                    <td>{{ $employee->location_id }}</td>
                    <td>{{ $employee->employment_status_id }}</td>
                    <td>{{ $employee->employment_types_id }}</td>
                    <td>{{ $employee->title }}</td>
                    <td>{{ $employee->payroll_type }}</td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

@endsection



