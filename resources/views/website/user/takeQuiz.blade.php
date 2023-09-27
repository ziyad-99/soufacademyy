@extends('website.layouts.master')


@section('content')
    <div>
        <div class=" widthfull flex py-20 justify-between">
            <div class="w-full  ">
                <h3 class=" font-bold text-center text-4xl">Course Title</h3>

                <div class=" bg-white  boxshadow2 rounded px-0 py-6 mt-10 w-full mx-auto ">
                    <div class=" w-full px-6 border-b border-[#E2E2E2] border-solid">
                        <p class="font-bold text-center  text-2xl">Quiz Name</p>
                        <div class="flex items-center mb-2 justify-between">
                            <p class="font-semibold fontp text-[15px] pb-2">Total Questions: 15</p>
                            <div>
                                <div
                                    class="border border-[#E5E8EC] font-semibold text-orange rounded text-[15px] p-1 m-1 px-3.5 flex justify-center items-center">
                                    <span>20:00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class=" py-10 px-4 md:px-20 border-b border-[#E2E2E2]/50 border-solid">

                        <form action="{{ route('student.uploadQuiz') }}" method="post">
                            @csrf

                            @if($quiz->quizType === 'true/false')
                                @foreach($quiz->questions as $question)
                                    <div class="w-full mb-2 lg:w-6/12 flex items-center ">
                                        <p class="font-medium w-6/12 text-[16px] pb-2"><span
                                                class="-pt-2">{{ $loop->iteration }}-</span>{{ $question->question }}
                                        </p>

                                        <input type="text" name="quiz_id" value="{{ $question->quiz->id }}" hidden>

                                        <label class="containerRadio ">true
                                            <input type="radio" name="answer{{ $question->id }}" value="true">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerRadio ms-5">false
                                            <input type="radio" name="answer{{ $question->id }}" value="false">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endforeach
                            @else
                                @foreach($quiz->questions as $question)
                                    <div class="w-full mb-2 lg:w-8/12 flex flex-wrap items-center ">
                                        <p class="font-medium w-full md:w-5/12 text-[16px] pb-2">
                                            <span class="-pt-2">{{ $loop->iteration }}-</span>{{ $question->question }}
                                        </p>

                                        <input type="text" name="quiz_id" value="{{ $question->quiz->id }}" hidden>

                                        <label class="containerRadio ">{{ $question->answerA }}
                                            <input type="radio" name="answer{{ $question->id }}" value="answerA">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerRadio ms-5">{{ $question->answerB }}
                                            <input type="radio" name="answer{{ $question->id }}" value="answerB">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerRadio ms-5">{{ $question->answerC }}
                                            <input type="radio" name="answer{{ $question->id }}" value="answerC">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endforeach
                            @endif

                            <div class="flex flex-wrap px-4 pt-5">
                                <div class=" flex w-full  flex-wrap lg:pe-4 ms-auto">
                                    <button type="submit"
                                            class=" w-full mb-4 order-1 md:order-2 md:w-40 btn items-center justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                        <span class=" text-white font-bold text-sm ">Finish</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
