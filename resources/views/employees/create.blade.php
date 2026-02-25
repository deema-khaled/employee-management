@extends('layout')

@section('content')
<div class="card">
    <div class="card-header bg-success text-white">إضافة موظف جديد</div>
    <div class="card-body">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>الاسم</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label>الهاتف</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label>الوظيفة</label>
                <input type="text" name="position" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">حفظ</button>
        </form>
    </div>
</div>
@endsection
