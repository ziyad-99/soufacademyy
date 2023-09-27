@extends('website.layouts.master')

@section('title')
    Intensive Courses
@endsection

@section('content')
    <div class=" widthfull flex py-20 justify-between">
        <div class="w-full  ">
            <h3 class=" font-bold mb-10 text-center text-4xl">{{ trans('website/intensiveCourse.intensive_courses') }}</h3>
            <div class=" w-full border-t flex flex-wrap border-[#E5E8EC] mt-5">
                <div class="w-full md:w-3/12 border-e border-[#E5E8EC]">
                    <div class="border-b border-[#E5E8EC] py-3">
                        <h3 class=" text-base text-black2 font-bold">{{ trans('website/intensiveCourse.level') }}</h3>
                    </div>
                    <div class=" flex flex-wrap w-full py-3">
                        <!-- malek active add "bg-orange text-white scale-105"  -->
                        <a href="{{ route('level.filter', ['courses' => 'inten_courses', 'level' => 'Beginner']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/intensiveCourse.beginner') }}
                        </a>
                        <a href="{{ route('level.filter', ['courses' => 'inten_courses', 'level' => 'Intermediate']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/intensiveCourse.intermediate') }}
                        </a>
                        <a href="{{ route('level.filter', ['courses' => 'inten_courses', 'level' => 'Advanced']) }}"
                           class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2 m-1 px-4 flex justify-center items-center">
                            {{ trans('website/intensiveCourse.advanced') }}
                        </a>

                    </div>
                    <div class=" border-y mt-10 border-[#E5E8EC] py-3">
                        <h3 class=" text-base text-black2 font-bold">{{ trans('website/intensiveCourse.course') }}</h3>
                    </div>
                    <div class=" flex flex-wrap w-full py-3">
                        @if($inten_courses->count() < 3)
                            @foreach($inten_courses as $course)
                                <a href="{{ route('intensive_course.details', ['slug' => $course->slug]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($course->title, 9, '...') }}</span></a>
                            @endforeach
                        @else
                            @foreach($inten_courses->random(3) as $course)
                                <a href="{{ route('intensive_course.details', ['slug' => $course->slug]) }}"
                                   class="border fontp border-[#E5E8EC] hover:bg-orange/50  transition-all cursor-pointer rounded-xl p-2  m-1 px-4 flex justify-center items-center">
                                    <span class=" fontp">{{ Str::limit($course->title, 9, '...') }}</span></a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class=" w-full md:w-9/12 py-4 px-1 ">
                    <div class=" w-full flex flex-wrap ">

                        @foreach($inten_courses as $course)
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
                                            <span class="ms-1 fontp font-medium">{{ trans('website/intensiveCourse.sessions') }} :</span>
                                            <span class="text-gray ps-2 fontp text-[15px]">
                                                    {{ $course->sessions->count() }}.
                                                </span>
                                        </div>


                                        <div
                                            class="course-item-bottom flex mt-2 mb-3 text-[15px] fontp font-medium">


                                            <img class="w-5 h-5" src="{{ URL::asset('website/images/wallet.svg') }}"
                                                 alt="course">
                                            <span class="ms-1 fontp font-medium">{{ trans('website/intensiveCourse.instructor') }} :</span>
                                            <span class="text-gray ps-2 fontp text-[15px]">
                                                    {{ Str::limit($course->instructor->firstName, 10, '...') }}
                                                </span>


                                        </div>

                                    </div>
                                    <a href="{{ route('intensive_course.details', ['slug' => $course->slug]) }}"
                                       class=" w-full btn-big cursor-pointer bg-green hover:bg-orange items-center justify-center flex px-6">
                                        <span
                                            class=" text-white font-bold text-sm ">{{ $course->price }} {{ trans('website/intensiveCourse.DA') }}</span>
                                    </a>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class=" w-full ">
                    {{ $inten_courses->links('vendor.pagination.soufacademy_pagenation') }}
                </div>
            </div>
        </div>

    </div>
@endsection
