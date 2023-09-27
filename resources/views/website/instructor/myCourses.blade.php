@extends('website.layouts.master')

@section('title')
    My Courses
@endsection

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

                    @if($my_sup_courses->isEmpty() && $my_lang_courses->isEmpty() && $my_inten_courses->isEmpty())
                        <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                            <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                You dont have any courses !</h5>
                        </div>
                    @else

                        @if(!$my_sup_courses->isEmpty())
                            @foreach($my_sup_courses as $course)
                                <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                                    <div class=" w-6/12 flex flex-wrap items-center">
                                        <div class=" rounded-xl w-4/12 md:w-3/12 overflow-hidden">
                                            <img
                                                src="https://lmszai.zainikthemes.com/uploads/bundle/1662703180-xG4o7nZaOs.jpg"
                                                alt="course" class=" object-contain h-full w-full">
                                        </div>
                                        <div class=" pt-4 md:pt-0 md:px-6">
                                            <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                                <a
                                                    href="{{ route('supporting_course.details', ['slug' => $course->slug]) }}">
                                                    {{ Str::limit($course->title, 30, '...') }}</a>
                                            </h5>
                                            <p class="text-xs font-normal fontp my-1.5 text-gray ">
                                                <a class="fontp" href="#">{{ $course->branch }}</a>
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

                                        <div class="w-full md:w-4/12 ms-auto">
                                            <a
                                                class=" w-40 btn mb-2 mx-auto bg-green hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Start Session</span>
                                            </a>
                                            <a href="{{ route('instructor.resourcesContainer', ['courseType'=>'supportingCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto items-center hover:bg-orange3 transition-all	 transform hover:scale-[1.01] justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Resources</span>
                                            </a>
                                            <a href="{{ route('instructor.quizContainer', ['courseType'=>'supportingCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto bg-orange3 hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Quiz</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if(!$my_lang_courses->isEmpty())
                            @foreach($my_lang_courses as $course)
                                <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                                    <div class=" w-6/12 flex flex-wrap items-center">
                                        <div class=" rounded-xl w-4/12 md:w-3/12 overflow-hidden">
                                            <img
                                                src="https://lmszai.zainikthemes.com/uploads/bundle/1662703180-xG4o7nZaOs.jpg"
                                                alt="course" class=" object-contain h-full w-full">
                                        </div>
                                        <div class=" pt-4 md:pt-0 md:px-6">
                                            <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                                <a
                                                    href="{{ route('languages_course.details', ['slug' => $course->slug]) }}">
                                                    {{ Str::limit($course->title, 30, '...') }}</a>
                                            </h5>

                                        </div>
                                    </div>
                                    <div class="w-6/12 flex flex-wrap items-center">
                                        <div class="w-full md:w-7/12 md:px-20 text-center mb-[18px]">

                                            <p class="text-black text-base font-medium mb-2 fontp">4/16</p>
                                            <div class=" bg-[#D9D9D9] h-2.5 w-full rounded-full">
                                                <div class="bg-orange rounded-full h-full" style="width:25%"></div>
                                            </div>
                                        </div>

                                        <div class="w-full md:w-4/12 ms-auto">
                                            <a
                                                class=" w-40 btn mb-2 mx-auto bg-green hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Start Session</span>
                                            </a>
                                            <a href="{{ route('instructor.resourcesContainer', ['courseType'=>'languagesCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto items-center hover:bg-orange3 transition-all	 transform hover:scale-[1.01] justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Resources</span>
                                            </a>
                                            <a href="{{ route('instructor.quizContainer', ['courseType'=>'languagesCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto bg-orange3 hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Quiz</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif

                        @if(!$my_inten_courses->isEmpty())
                            @foreach($my_inten_courses as $course)
                                <div class="flex items-center p-6 border-b border-[#E2E2E2]/50 border-solid">
                                    <div class=" w-6/12 flex flex-wrap items-center">
                                        <div class=" rounded-xl w-4/12 md:w-3/12 overflow-hidden">
                                            <img
                                                src="https://lmszai.zainikthemes.com/uploads/bundle/1662703180-xG4o7nZaOs.jpg"
                                                alt="course" class=" object-contain h-full w-full">
                                        </div>
                                        <div class=" pt-4 md:pt-0 md:px-6">
                                            <h5 class="text-lg font-bold text-black2 hover:text-orange transition-all">
                                                <a
                                                    href="{{ route('intensive_course.details', ['slug' => $course->slug]) }}">
                                                    {{ Str::limit($course->title, 30, '...') }}</a></h5>
                                            <p class="text-xs font-normal fontp my-1.5 text-gray ">
                                                <a class="fontp" href="#">{{ $course->branch }}</a>
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

                                        <div class="w-full md:w-4/12 ms-auto">
                                            <a
                                                class=" w-40 btn mb-2 mx-auto bg-green hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Start Session</span>
                                            </a>
                                            <a href="{{ route('instructor.resourcesContainer', ['courseType'=>'intensiveCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto items-center hover:bg-orange3 transition-all	 transform hover:scale-[1.01] justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Resources</span>
                                            </a>
                                            <a href="{{ route('instructor.quizContainer', ['courseType'=>'intensiveCourse','slug' => $course->slug]) }}"
                                               class=" w-40 btn mb-2 mx-auto bg-orange3 hover:bg-orange3 transition-all	 transform hover:scale-[1.01] items-center justify-center flex px-6">
                                                <span class=" text-white font-bold text-sm ">Quiz</span>
                                            </a>
                                        </div>
                                        {{--                                        --}}

                                        {{--                                        <div class="w-full md:w-5/12 mx-auto">--}}
                                        {{--                                            <a href="{{ route('intensive_course.details', ['slug' => $course->slug]) }}"--}}
                                        {{--                                               class="  w-40 btn hover:bg-orange3 cursor-pointer items-center justify-center flex px-6">--}}
                                        {{--                                                <span class=" text-white font-bold text-sm ">View</span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
