@extends('website.layouts.master')

@section('title')
    Supporting Courses
@endsection

@section('content')
    <div class=" widthfull flex py-20 justify-between">
        <div class="w-full  ">
            <h3 class=" font-bold mb-10 text-center text-4xl">{{ trans('website/suppotingCourse.supporting_courses') }}</h3>
            <div class=" w-full border-t flex flex-wrap border-[#E5E8EC] mt-5">
                <div class="w-full md:w-3/12 border-e border-[#E5E8EC]">
                    <div class="border-b border-[#E5E8EC] py-3">
                        <h3 class=" text-base text-black2 font-bold">{{ trans('website/suppotingCourse.level') }}</h3>
                    </div>
                    <div class=" flex flex-wrap w-full py-3">
                        <!-- malek active add "bg-orange text-white scale-105"  -->
                        <a href="{{ route('level.filter', ['courses' => 'sup_courses', 'level' => 'High School']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/suppotingCourse.high_school') }}
                        </a>

                        <a href="{{ route('level.filter', ['courses' => 'sup_courses', 'level' => 'Secondary School']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/suppotingCourse.secondary_school') }}
                        </a>

                        <a href="{{ route('level.filter', ['courses' => 'sup_courses', 'level' => 'Primary School']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/suppotingCourse.primary_school') }}
                        </a>
                    </div>
                    <div class=" border-y mt-10 border-[#E5E8EC] py-3">
                        <h3 class=" text-base text-black2 font-bold">{{ trans('website/suppotingCourse.branch') }}</h3>
                    </div>
                    <div class=" flex flex-wrap w-full py-3">
                        @if($sup_courses->count() < 3)
                            @foreach($sup_courses as $course)
                                <a href="{{ route('branch.filter', ['courses' => 'sup_courses', 'branch' => $course->branch]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($course->branch, 9, '...') }}</span></a>
                            @endforeach
                        @else
                            @foreach($sup_courses->pluck('branch')->unique() as $brunch)
                                <a href="{{ route('branch.filter', ['courses' => 'sup_courses', 'branch' => $brunch]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($brunch, 9, '...') }}</span></a>
                            @endforeach
                        @endif
                    </div>
                    <div class=" border-y mt-10 border-[#E5E8EC] py-3">
                        <h3 class=" text-base text-black2 font-bold">{{ trans('website/suppotingCourse.course') }}</h3>
                    </div>
                    <div class=" flex flex-wrap w-full py-3">
                        @if($sup_courses->count() < 3)
                            @foreach($sup_courses as $course)
                                <a href="{{ route('supporting_course.details', ['slug' => $course->slug]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($course->title, 9, '...') }}</span></a>
                            @endforeach
                        @else
                            @foreach($sup_courses->random(3) as $course)
                                <a href="{{ route('supporting_course.details', ['slug' => $course->slug]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($course->title, 9, '...') }}</span></a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class=" w-full md:w-9/12 py-4 px-1 ">
                    <div class=" w-full flex flex-wrap ">

                        @foreach($sup_courses as $course)
                            <div class="lg:w-4/12 px-2">
                                <div class="course-item w-full  rounded-xl bg-white">
                                    <div class="course-img-wrap overflow-hidden">
                                        <a href="#"><img
                                                src="{{ asset('images/courses/'.$course->img) }}"
                                                alt="course" class="img-fluid imgc"></a>

                                    </div>
                                    <div class="card-body">
                                        <h5 class="text-lg font-bold hover:text-orange text-orange2"><a
                                                class="hover:text-orange"
                                                href="#">{{ Str::limit($course->title, 20, '...') }}</a></h5>
                                        <div
                                            class="instructor-bottom-item flex mt-3 mb-2 text-[15px] fontp font-medium">
                                            <img class="w-5 h-5" src="{{ URL::asset('website/images/study.svg') }}"
                                                 alt="course">
                                            <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourse.level') }} :</span>
                                            <span class="text-gray ps-2 fontp text-[15px]">
                                                {{ $course->level }}
                                                </span>
                                        </div>
                                        <div
                                            class="course-item-bottom flex mt-2 mb-3 text-[15px] fontp font-medium">
                                            <img class="w-5 h-5" src="{{ URL::asset('website/images/wallet.svg') }}"
                                                 alt="course">
                                            <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourse.instructor') }} :</span>
                                            <span class="text-gray ps-2 fontp text-[15px]">
                                                    {{ Str::limit($course->instructor->firstName, 10, '...') }}
                                                </span>
                                        </div>
                                    </div>
                                    <a href="{{ route('supporting_course.details', ['slug' => $course->slug]) }}"
                                       class=" w-full btn-big cursor-pointer bg-green hover:bg-orange items-center justify-center flex px-6">
                                        <span
                                            class=" text-white font-bold text-sm ">{{ $course->price }} {{ trans('website/suppotingCourse.DA') }}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class=" w-full ">
                    {{ $sup_courses->links('vendor.pagination.soufacademy_pagenation') }}
                </div>
            </div>
        </div>
    </div>
@endsection
