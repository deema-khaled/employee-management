@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-warning text-dark">تعديل بيانات الموظف</div>
    <div class="card-body">
        <form action="{{ route('employees.update',$employee->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>الاسم</label>
                <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>الهاتف</label>
                <input type="text" name="phone" value="{{ $employee->phone }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>الوظيفة</label>
                <input type="text" name="position" value="{{ $employee->position }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
</div>
@endsection
