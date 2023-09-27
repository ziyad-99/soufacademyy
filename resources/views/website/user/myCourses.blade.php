@extends('website.layouts.master')

@section('content')
    <div>
        <div class=" widthfull flex py-20 justify-between">
            <div class="w-full  ">
                <h3 class=" font-bold text-center text-4xl">My Courses</h3>

                <div class=" bg-white  boxshadow2 rounded-xl px-0 py-6 mt-10 w-full mx-auto ">
                    <div class=" w-full px-6 border-b border-[#E2E2E2] border-solid">
                        <div class="flex">
                            <p class="font-bold text-gray2 w-6/12 text-[15px] pb-2">Course</p>
                            <p class="font-bold text-gray2 w-[28%] text-[15px] text-center  pb-2">Progress</p>
                            <p class="font-bold text-gray2 w-[22%] text-[15px] pb-2">Action</p>

                        </div>

                    </div>

                    @if($studentEnrollments->isEmpty())
                        <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                            <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                You dont have any courses !</h5>
                        </div>
                    @else

                        @foreach($studentEnrollments as $enroll)
                            <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                                <div class=" w-6/12 flex flex-wrap items-center">
                                    <div class=" rounded-xl w-4/12 md:w-3/12 overflow-hidden">
                                        <img
                                            src="https://lmszai.zainikthemes.com/uploads/bundle/1662703180-xG4o7nZaOs.jpg"
                                            alt="course" class=" object-contain h-full w-full">
                                    </div>
                                    <div class=" pt-4 md:pt-0 md:px-6">
                                        <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                            @if ($enroll->courseable_type === 'App\Models\Course\SupportingCourse')
                                                <a
                                                    href="{{ route('supporting_course.details', ['slug' => $enroll->courseable->slug]) }}">
                                                    {{ Str::limit($enroll->courseable->title, 30, '...') }}</a>
                                            @endif

                                            @if ($enroll->courseable_type === 'App\Models\Course\LanguageCourse')
                                                <a
                                                    href="{{ route('languages_course.details', ['slug' => $enroll->courseable->slug]) }}">
                                                    {{ Str::limit($enroll->courseable->title, 30, '...') }}</a>
                                            @endif

                                            @if ($enroll->courseable_type === 'App\Models\Course\IntensiveCourse')
                                                <a
                                                    href="{{ route('intensive_course.details', ['slug' => $enroll->courseable->slug]) }}">
                                                    {{ Str::limit($enroll->courseable->title, 30, '...') }}</a>
                                            @endif
                                        </h5>
                                        <p class="text-sm font-medium fontp my-1.5 text-gray ">

                                            @if ($enroll->courseable_type === 'App\Models\Course\SupportingCourse')
                                                {{ $enroll->courseable->branch }}
                                            @endif
                                            {{--                                            <a class="fontp" href="#">{{ $course->branch }}</a>--}}
                                        </p>
                                    </div>
                                </div>
                                <div class="w-6/12 flex flex-wrap items-center">
                                    <div class="w-full md:w-7/12 md:px-20 text-center mb-[18px]">

                                        <p class="text-black text-base font-medium mb-2 fontp">4/16</p>
                                        <div class=" bg-[#D9D9D9] h-2.5 w-full rounded-full">
                                            <div class="bg-orange rounded-full h-full" style="width:25%"></div>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-5/12 mx-auto">

                                        @if ($enroll->courseable_type === 'App\Models\Course\SupportingCourse')
                                            <a href="{{ route('student.zoom', ['courseType' => 'supportingCourse' ,'slug' => $enroll->courseable->slug]) }}"
                                               class="  w-40 btn hover:bg-orange3 cursor-pointer items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">View</span>
                                            </a>
                                        @endif

                                        @if ($enroll->courseable_type === 'App\Models\Course\LanguageCourse')
                                            <a href="{{ route('student.zoom', ['courseType' => 'languagesCourse' ,'slug' => $enroll->courseable->slug]) }}"
                                               class="  w-40 btn hover:bg-orange3 cursor-pointer items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">View</span>
                                            </a>
                                        @endif

                                        @if ($enroll->courseable_type === 'App\Models\Course\IntensiveCourse')
                                            <a href="{{ route('student.zoom', ['courseType' => 'intensiveCourse' ,'slug' => $enroll->courseable->slug]) }}"
                                               class="  w-40 btn hover:bg-orange3 cursor-pointer items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">View</span>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>

                        @endforeach

                    @endif
                </div>
            </div>

        </div>

    </div>

@endsection
