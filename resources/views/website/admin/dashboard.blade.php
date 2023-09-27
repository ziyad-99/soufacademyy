@extends('website.admin.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div>
        <div class="w-full md:ps-24 md:px-10">
            <h4 data-aos="fade-up" class="font-bold text-black34 mx-auto my-5 text-2xl px-4 lg:leading-[120%] ">
                <span>Dashboard</span>
            </h4>
            <div class="w-full px-2 pt-5 mb-5 grid grid-cols-1 md:grid-cols-3 gap-4 ">
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">{{ $admins_number }}</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Admins</p>
                </div>
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">{{ $instructor_number }}</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Instructors </p>
                </div>
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">{{ $student_number }}</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Students</p>
                </div>
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">{{ $courses_number }}</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Courses</p>
                </div>
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">0</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Pending Courses</p>
                </div>
                <div class=" flex items-center flex-col w-full bg-white rounded-2xl py-10 p-4">
                    <p class="text-4xl font-semibold text-orange fontp">0</p>
                    <p class="text-sm mt-1 font-semibold text-black34 fontp">Pending Courses</p>
                </div>
            </div>

        </div>
    </div>
@endsection
