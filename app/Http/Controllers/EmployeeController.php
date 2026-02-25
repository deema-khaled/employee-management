<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // عرض جميع الموظفين
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // صفحة إضافة موظف جديد
    public function create()
    {
        return view('employees.create');
    }

    // حفظ موظف جديد
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'nullable',
            'position' => 'required',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'تمت إضافة الموظف بنجاح');
    }

    // صفحة تعديل موظف
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // تحديث بيانات موظف
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'phone' => 'nullable',
            'position' => 'required',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'تم تعديل بيانات الموظف');
    }

    // حذف موظف
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'تم حذف الموظف');
    }
}

   