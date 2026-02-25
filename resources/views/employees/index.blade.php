@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">قائمة الموظفين</div>
    <div class="card-body">
        <a href="{{ route('employees.create') }}" class="btn btn-success mb-3">إضافة موظف</a>
        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>الاسم</th>
                    <th>البريد</th>
                    <th>الهاتف</th>
                    <th>الوظيفة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                        <form action="{{ route('employees.destroy',$employee->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
