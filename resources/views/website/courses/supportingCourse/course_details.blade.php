@extends('website.layouts.master')

@section('content')

    <div>
        <div class=" widthfull grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 py-20 justify-between">

            <div data-aos="fade-up" class="w-full md:col-span-2">
                <h3 class=" font-bold  text-4xl">{{ $course->title }}</h3>
                <div class=" bg-white rounded-xl px-0 py-4 mt-10">
                    <div class=" w-full px-6 border-b border-[#E2E2E2]/30 border-solid">
                        <div class="flex">
                            <p class="font-medium fontp text-base border-b-2 border-[#FF6900] border-solid pb-2">
                            {{ trans('website/suppotingCourseDetails.course_details') }}
                            </p>
                        </div>

                    </div>
                    <div data-aos="fade-up" class=" border-b border-[#E2E2E2]/30 px-6 py-5 pt-10">
                        <div class=" flex flex-wrap  items-center">
                            <p
                                class=" order-2 md:order-1 w-full md:w-9/12 text-gray2 fontp font-normal lg:w-9/12 text-[15px] leading-[135%] mt-3 text-start">
                                {{ $course->description }}
                            </p>
                            <div class=" order-1 md:order-2 w-full md:w-3/12 ps-5 flex flex-col">
                                <div class="h-[90px] w-[90px] mx-auto rounded-full overflow-hidden ">
                                    <img class="h-full w-full object-cover" src="{{asset('website/images/man.png')}}"/>
                                </div>
                                <p class="font-bold text-center mt-3 text-base ">{{ $course->instructor->firstName }}</p>
                            </div>
                        </div>

                    </div>
                    <!-- in course use data-id="course" remove hidden add grid also add and remove grid from data-id="da3m" add hidden -->
                    <div data-id="course" data-aos="fade-up"
                         class="hidden p-4  grid-cols-1 md:grid-cols-3  gap-4 justify-center items-center">
                        <div class="w-full flex items-center p-5 rounded-xl bg-orange/10 justify-center">
                            <img class="w-6 h-6" src="../../static/images/time.svg" alt="course">
                            <span class="text-orange2 ps-3 font-semibold fontp text-base">
                                    الحجم الساعي: 20 ساعة
                                </span>
                        </div>
                        <div class="w-full flex items-center p-5 rounded-xl bg-orange/10 justify-center">
                            <img class="w-6 h-6" src="../../static/images/book2.svg" alt="course">
                            <span class="text-orange2 ps-3 font-semibold fontp text-base">
                                    الحجم الساعي: 20 ساعة
                                </span>
                        </div>
                        <div class="w-full flex items-center p-5 rounded-xl bg-orange/10 justify-center">
                            <img class="w-6 h-6" src="../../static/images/date.svg" alt="course">
                            <span class="text-orange2 ps-3 font-semibold fontp text-base">
                                    الحجم الساعي: 20 ساعة
                                </span>
                        </div>
                    </div>

                    <div data-id="da3m" id="groups"
                         class=" w-full px-6 border-b mt-2 border-[#E2E2E2]/30  border-solid">
                        <div class="flex">
                            <p class="font-medium fontp text-base border-b-2 border-[#FF6900] border-solid pb-2">
                            {{ trans('website/suppotingCourseDetails.groups') }}
                            </p>
                        </div>
                    </div>

                    @if($course->groups->isEmpty())
                        <h2 style="margin: 5% 10%" class="  text-2xl md:text-3xl">
                            {{ trans('website/suppotingCourseDetails.there_are_no_groups') }}
                        </h2>
                    @else
                        <div data-id="da3m"
                             class=" p-4 grid grid-cols-1 md:grid-cols-3  gap-4 justify-center items-center">

                            @foreach($course->groups as $group)
                                <div data-aos="fade-up" class="w-full p-5 rounded-xl bg-white boxshadow justify-center">
                                    <p
                                        class="text-orange2 ps-3 pb-3 border-b  border-[#E2E2E2]/60  border-solid w-full text-center font-semibold fontp text-base">
                                        {{ $group->groupName }}
                                    </p>
                                    <p class="text-orange w-full text-center mt-4 fontp font-semibold text-[15px]">
                                        Monday
                                    </p>
                                    <p class="ms-1 fontp w-full text-center text-[#515151] font-normal">10:00 am -12:00
                                        pm
                                    </p>
                                    <p class="text-orange w-full text-center mt-4 fontp font-semibold text-[15px]">
                                        Monday
                                    </p>
                                    <p class="ms-1 fontp w-full text-center text-[#515151] font-normal">10:00 am -12:00
                                        pm
                                    </p>

                                    <button onclick="openPop('.flexsss24')"
                                            class=" w-full btn h-12 items-center justify-center flex  hover:bg-orange3 transition-all	 transform hover:scale-[1.01] mt-4   px-6">
                                        <span class=" text-white font-bold text-sm ">{{ trans('website/suppotingCourseDetails.start_now') }}</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div data-aos="fade-up" class=" w-full">
                <div class="lg:sticky w-full top-1">
                    <div class="course-item w-full  rounded-xl bg-white">
                        <div class="course-img-wrap overflow-hidden">
                            <a href="#"><img
                                    src="{{ asset('images/courses/'.$course->img) }}"
                                    alt="course" class="img-fluid imgc"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="text-lg font-bold hover:text-orange text-orange2"><a
                                    class="hover:text-orange" href="#">{{ $course->title }}</a></h5>
                            <div class="instructor-bottom-item flex mt-3 mb-2 text-[15px] fontp font-medium">
                                <img class="w-5 h-5" src="{{ asset('website/images/study.svg') }}" alt="course">
                                <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourseDetails.level') }} :</span>
                                <span class="text-gray ps-2 fontp text-[15px]">
                                        {{ $course->level }}
                                    </span>
                            </div>
                            <div class="course-item-bottom flex mt-2 mb-3 text-[15px] fontp font-medium">
                                <img class="w-5 h-5" src="{{ asset('website/images/wallet.svg') }}" alt="course">
                                <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourseDetails.instructor') }} :</span>
                                <span class="text-gray ps-2 fontp text-[15px]">
                                        {{ $course->instructor->firstName }}
                                    </span>
                            </div>
                        </div>
                        <a href="{{ route('request.enroll', ['courseType' => 'supportingCourse', 'slug' => $course->slug]) }}"
                           class=" w-full btn-big cursor-pointer bg-green hover:bg-orange items-center justify-center flex px-6">
                            <span class=" text-white font-bold text-sm ">{{ $course->price }} {{ trans('website/suppotingCourseDetails.DA') }}</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="widthfull overflow-hidden pb-6 pt-10 mt-10">
            <div class=" flex w-full justify-between">
                <h3 class=" font-bold text-2xl md:text-3xl">{{ trans('website/suppotingCourseDetails.supporting_courses') }}</h3>
                <a href="{{ route('all_supporting_course.index') }}"
                   class="flex justify-center bg-orange hover:bg-orange3 hover:scale-[1.01] transform transition-all rounded-xl px-5 py-2 items-center">
                    <span class="text-sm md:text-sm text-white fontp font-medium">{{ trans('website/suppotingCourseDetails.view_all') }}</span>
                    <svg class="transform  rtl:-scale-100 w-[6px] md:w-[6px] ms-2" width="10" height="17" viewBox="0 0 10 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L7.5118 7.35101C8.16273 7.98295 8.16273 9.01704 7.5118 9.64899L2 15"
                              stroke="#fff" stroke-width="2.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                </a>
            </div>
            <div class=" relative w-full mt-8 flex">
                <div class="slider2 slider-nav5 sdsds w-full" style="color: #000; " data-aos="fade-up">

                    @foreach($sup_courses as $course)

                        <div class="w-full px-2">
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
                                    <div class="instructor-bottom-item flex mt-3 mb-2 text-[15px] fontp font-medium">
                                        <img class="w-5 h-5" src="{{ asset('website/images/study.svg') }}" alt="course">
                                        <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourseDetails.level') }} :</span>
                                        <span class="text-gray ps-2 fontp text-[15px]">
                                           {{ $course->level }}
                                        </span>
                                    </div>


                                    <div class="course-item-bottom flex mt-2 mb-3 text-[15px] fontp font-medium">


                                        <img class="w-5 h-5" src="{{ asset('website/images/wallet.svg') }}"
                                             alt="course">
                                        <span class="ms-1 fontp font-medium">{{ trans('website/suppotingCourseDetails.instructor') }} :</span>
                                        <span class="text-gray ps-2 fontp text-[15px]">
                                                    {{ Str::limit($course->instructor->firstName, 10, '...') }}
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('supporting_course.details', ['slug' => $course->slug]) }}"
                                   class=" w-full btn-big cursor-pointer bg-green hover:bg-orange items-center justify-center flex px-6">
                                    <span class=" text-white font-bold text-sm ">{{$course->price}} {{ trans('website/suppotingCourseDetails.DA') }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <div class=" bg-black/50 hidden fixed top-0 gg422 bottom-0 right-0 left-0 z-50"></div>
        <div
            class="fixed flexsss24 top-0 left-0 right-0 z-50  hidden flex-col  p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl mx-auto my-auto  max-h-full">
                <div class="relative bg-white rounded-2xl  shadow">
                    <button type="button" onclick="closePop('.flexsss24')"
                            class="absolute top-3 right-2.5 group text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-2xl text-sm p-1.5 ml-auto inline-flex items-center "
                            data-modal-hide="popup-modal">
                        <svg aria-hidden="true" class="w-5 h-5 fill-gray2 group-hover:fill-orange"
                             fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <h3 class="mb-5 text-md font-medium text-black34">choose one </h3>
                        <div class=" flex items-center justify-center">
                            <a href="#" onclick="closePop('.flexsss24')" type="button"
                               class="text-orange fontp hover:bg-orange hover:text-white transform transition-all hover:scale-[1.01] font-semibold bg-orange/20  mt-3  h-14  rounded-2xl text-sm inline-flex items-center px-8 py-2.5 text-center me-2">
                                1 month 250.00DA
                            </a>
                            <a href="#" onclick="closePop('.flexsss24')" type="button"
                               class="text-orange hover:bg-orange hover:text-white transform transition-all hover:scale-[1.01] fontp font-semibold bg-orange/20  mt-3  h-14  rounded-2xl text-sm inline-flex items-center px-8 py-2.5 text-center me-2">
                                3 month 250.00DA
                            </a>
                            <a href="#" onclick="closePop('.flexsss24')" type="button"
                               class="text-orange fontp hover:bg-orange hover:text-white transform transition-all hover:scale-[1.01] font-semibold bg-orange/20  mt-3  h-14  rounded-2xl text-sm inline-flex items-center px-8 py-2.5 text-center me-2">
                                6 month 250.00DA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        AOS.init({
            offset: 200, // offset (in px) from the original trigger point
            delay: 100,
            duration: 800,
        });
    </script>
@endsection
