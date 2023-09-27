@extends('website.layouts.master')

@section('content')
    <div class=" widthfull flex py-20 justify-between">
        <div class="w-full  ">
            <h3 class=" font-bold text-center text-4xl">Instructor Panel</h3>

            <div class=" bg-white  boxshadow2 rounded px-0 py-6 mt-10 w-full mx-auto ">
                <div class=" w-full px-6 border-b pb-4 pt-4 border-[#E2E2E2] border-solid">
                    <p class="font-bold fontp text-center  text-xl">1AS Mathematics - 2nd Unit - 7th lesson</p>
                    <p class="font-medium fontp text-center mt-4 text-base">1AS - Group 3</p>
                    <p class="font-medium fontp text-orange text-center mt-4 text-base">Scientific Branch</p>
                </div>

                <div class=" py-10 px-4 md:px-20 ">
                    <form action="{{ route('instructor.storeQuiz') }}" method="post">
                        @csrf
                        <div id="continer" class="w-full mb-2 lg:w-6/12  ">

                            <input type="text" name="session_id" value="{{ $session_id }}" hidden>
                            <div class=" w-full mt-5">
                                <p class="font-semibold text-black  text-base ">Quiz Name</p>
                                <input class="inputtext" name="quizName" placeholder="quizName" required/>
                            </div>

                            <div class=" w-full mt-5">
                                <p class="font-semibold text-black  text-base ">Quiz Type</p>

                                <select class="inputtext" name="quizType" id="QuizSelect" required>
                                    <option disabled selected>Choose Quiz Type</option>
                                    <option value="true/false">true/false</option>
                                    <option value="Multiple">Multiple</option>
                                </select>
                            </div>

                            <div class=" w-full mt-5">
                                <p class="font-semibold text-black  text-base ">Marks Per Question</p>
                                <input class="inputtext " name="markPerQuestion" placeholder="markPerQuestion"
                                       required/>
                            </div>

                            <div class=" w-full mt-5">
                                <p class="font-semibold text-black  text-base ">Time Duration ( minutes )</p>
                                <input class="inputtext " name="duration" placeholder="duration" required/>
                            </div>

                            <div class="flex w-full pt-5">
                                <div class=" flex w-full md:w-auto flex-wrap">
                                    <button type="button"
                                            class="w-full mb-3 md:mb-0 md:w-40 btn bg-white border border-orange hover:bg-orange/50 cursor-pointer items-center justify-center flex px-6 md:me-4">
                                        <span class=" text-orange font-bold text-sm ">Cancel</span>
                                    </button>
                                    <button id="nextCreate" type="button" onclick="val()"
                                            class="w-full mb-3 md:mb-0 md:w-40  btn items-center justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                        <span class=" text-white font-bold text-sm ">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="continerMultiple" class=" hidden">
                            <div id="cMultipleAdd" class=" py-10 px-4 md:px-20">
                                <div class="w-full">

                                    <div class=" w-full mt-5">
                                        <p class="font-semibold text-black  text-base ">Question 1</p>
                                        <input class="inputtext" name="question" placeholder="question"/>
                                    </div>

                                    <div class="w-full mb-2 mt-10 lg:w-8/12  ">
                                        <div class=" w-full mt-5 flex items-center ">
                                            <input class="inputtext mt-0 w-8/12" name="answerA" placeholder="answerA"/>

                                            <label class="containerRadio ms-5 sss">Correct Answer
                                                <input type="radio" name="answer" value="answerA">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class=" w-full mt-5 flex items-center ">
                                            <input class="inputtext mt-0 w-8/12" name="answerB" placeholder="answerB"/>

                                            <label class="containerRadio ms-5 sss">Correct Answer
                                                <input type="radio" name="answer" value="answerB">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class=" w-full mt-5 flex items-center ">
                                            <input class="inputtext mt-0 w-8/12" name="answerC" placeholder="answerC"/>
                                            <label class="containerRadio ms-5 sss">Correct Answer
                                                <input type="radio" name="answer" value="answerC">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="flex w-full pt-5">
                                        <div class=" flex flex-wrap w-full">
                                            <button type="button" onclick="addQuizMultiple(1,this)"
                                                    class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                        <span
                                                            class=" text-white font-bold text-sm ">Save & Another</span>
                                            </button>

                                            <button type="submit"
                                                   
                                                    class="w-full mb-3 md:mb-0 md:w-40 btn items-center md:ms-3 justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                        <span
                                                            class=" text-white font-bold text-sm ">Done</span>
                                            </button>

                                            <button type="button" onclick="resetval()"
                                                    class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span
                                                        class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="continerTruefalse" class=" hidden">
                            <div id="cAdd" class=" py-10 px-4 md:px-20">
                                <div class="w-full">
                                    <div class=" w-full md:w-8/12 mt-5">
                                        <p class="font-semibold text-black  text-base ">Question 1</p>
                                        <input class="inputtext " name="questionTorF" placeholder="questionTorF"/>
                                    </div>

                                    <div class="w-full mt-5 mb-10 lg:w-8/12 flex items-center ">
                                        <label class="containerRadio ">true
                                            <input type="radio" name="answerTorF" value="true">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="containerRadio ms-5">false
                                            <input type="radio" name="answerTorF" value="false">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>


                                    <div class="flex w-full pt-5">
                                        <div class=" flex flex-wrap w-full">
                                            <button type="button" onclick="addQuiz(1,this)"
                                                    class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                        <span
                                                            class=" text-white font-bold text-sm ">Save & Another</span>
                                            </button>

                                            <button type="submit"
                                                
                                                    class="w-full mb-3 md:mb-0 md:w-40 md:ms-3 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                        <span
                                                            class=" text-white font-bold text-sm ">Done</span>
                                            </button>

                                            <button type="button" onclick="resetval()"
                                                    class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span
                                                        class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('website/js/all.js') }}"></script>
    <script>
        let nextCreate = document.getElementById("nextCreate");
        let continer = document.getElementById("continer");
        let QuizSelect = document.getElementById("QuizSelect");
        let continerMultiple = document.getElementById("continerMultiple");
        let continerTruefalse = document.getElementById("continerTruefalse");
        let cAdd = document.getElementById("cAdd");
        let cMultipleAdd = document.getElementById("cMultipleAdd");


        function val() {
            if (QuizSelect.value == "Multiple") {
                continer.classList.add("hidden");
                continerMultiple.classList.remove("hidden");
            } else if (QuizSelect.value == "true/false") {
                continer.classList.add("hidden");
                continerTruefalse.classList.remove("hidden");
            }
            ;

        }

        function resetval() {

            continer.classList.remove("hidden");
            if (QuizSelect.value == "Multiple") {
                continerMultiple.classList.add("hidden");
            } else {
                continerTruefalse.classList.add("hidden");

            }
            while (cAdd.firstChild) cAdd.removeChild(cAdd.firstChild);
            while (cMultipleAdd.firstChild) cMultipleAdd.removeChild(cMultipleAdd.firstChild);
            cMultipleAdd.insertAdjacentHTML(
                'beforeend',
                `  <div class="w-full">

<div class=" w-full mt-5">
    <p class="font-semibold text-black  text-base ">Question 1</p>
    <input class="inputtext " placeholder="Abc ...." />
</div>
<div class="w-full mb-2 mt-10 lg:w-8/12  ">


    <div class=" w-full mt-5 flex items-center ">
        <input class="inputtext mt-0 w-8/12" placeholder="Abc ...." />

        <label class="containerRadio ms-5 sss">Correct Answer
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class=" w-full mt-5 flex items-center ">
        <input class="inputtext mt-0 w-8/12" placeholder="Abc ...." />

        <label class="containerRadio ms-5 sss">Correct Answer
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class=" w-full mt-5 flex items-center ">
        <input class="inputtext mt-0 w-8/12" placeholder="Abc ...." />

        <label class="containerRadio ms-5 sss">Correct Answer
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>

</div>
<div class="flex w-full pt-5">
    <div class=" flex flex-wrap w-full">
        <button type="button" onclick="addQuizMultiple(1,this)"
            class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
            <span class=" text-white font-bold text-sm ">Save & Another</span>
        </button>

        <button type="button" onclick="resetval()"
            class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
            <span class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
        </button>
    </div>
</div>

</div>`
            );
            cAdd.insertAdjacentHTML(
                'beforeend', `
                                        <div class="w-full">
                                        <div class=" w-full md:w-8/12 mt-5">
                                            <p class="font-semibold text-black  text-base ">Question 1</p>
                                            <input class="inputtext " placeholder="Abc ...." />
                                        </div>



                                        <div class="w-full mt-5 mb-10 lg:w-8/12 flex items-center ">

                                            <label class="containerRadio ">true
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="containerRadio ms-5">false
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>


                                        <div class="flex w-full pt-5">
                                            <div class=" flex flex-wrap w-full">
                                                <div onclick="addQuiz(1,this)"
                                                    class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                    <span class=" text-white font-bold text-sm ">Save & Another</span>
                                                </div>

                                                <button type="button" onclick="resetval()"
                                                    class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                  `
            )

        }

        function addQuiz(e, d) {
            cAdd.lastElementChild.classList.add("hidden");
            if (cAdd.childElementCount != e) {
                forwadquiz(e, d)
            } else {

                cAdd.insertAdjacentHTML(
                    'beforeend',
                    ` <div class="w-full">
                                        <div class=" w-full md:w-8/12 mt-5">
                                            <p class="font-semibold text-black  text-base ">Question ${cAdd.childElementCount + 1}</p>
                                            <input class="inputtext " name="questionTorF${cAdd.childElementCount + 1}" placeholder="questionTorF${cAdd.childElementCount + 1}" />
                                        </div>



                                        <div class="w-full mt-5 mb-10 lg:w-8/12 flex items-center ">

                                            <label class="containerRadio ">true
                                                <input type="radio" name="answerTorF${cAdd.childElementCount + 1}" value="true">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="containerRadio ms-5">false
                                                <input type="radio" name="answerTorF${cAdd.childElementCount + 1}" value="false">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="flex w-full pt-5">
                                            <div class=" flex flex-wrap w-full">
                                                <button type="button" onclick="backquiz(this,${cAdd.childElementCount + 1})"
                                                    class=" w-full mb-3 md:mb-0 md:w-40 btn me-3 bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span class="text-orange group-hover:text-white font-bold text-sm  ">Back</span>
                                                </button>
                                                <button data-id="${cAdd.childElementCount + 1}" type="button"  onclick="forwadquiz(${cAdd.childElementCount + 1},this)"
                                                    class=" w-full mb-3 md:mb-0 hidden md:w-40 btn bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span class="text-orange group-hover:text-white font-bold text-sm  ">forwed</span>
                                                </button>

                                            </div>
                                        </div>

                                        <div class="flex w-full pt-5">
                                            <div class=" flex flex-wrap w-full">

                                                <button type="button" onclick="addQuiz(${cAdd.childElementCount + 1},this)"
                                                    class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                    <span class=" text-white font-bold text-sm ">Save & Another</span>
                                                </button>

                                                <button type="submit"
                                                    
                                                    class="w-full mb-3 md:mb-0 md:w-40 md:ms-3 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                                                        <span
                                                            class=" text-white font-bold text-sm ">Done</span>
                                                </button>

                                                <button type="button" onclick="resetval()"
                                                    class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                                                    <span class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
                                                </button>

                                                <button data-delete="${cAdd.childElementCount + 1}" type="button" onclick="removeQuiz(this)"
                                                    class=" w-full mb-3 md:mb-0  md:w-40 ms-2 btn bg-white text-red-500 group hover:text-white border border-red-500 hover:border-red-600 items-center  justify-center hover:bg-red-600 cursor-pointer flex px-6 md:me-6">
                                                    <span class="text-red-500 group-hover:text-white font-bold text-sm  ">delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>`
                );


            }

        }

        function addQuizMultiple(e, d) {
            cMultipleAdd.lastElementChild.classList.add("hidden");
            if (cMultipleAdd.childElementCount != e) {
                forwadquiz2(e, d)
            } else {

                cMultipleAdd.insertAdjacentHTML(
                    'beforeend',
                    `
    <div class="w-full">

    <div class=" w-full mt-5">
        <p class="font-semibold text-black  text-base ">Question ${cMultipleAdd.childElementCount + 1}</p>
        <input class="inputtext " name="question${cMultipleAdd.childElementCount + 1}" placeholder="question${cMultipleAdd.childElementCount + 1}" required/>
    </div>
    <div class="w-full mb-2 mt-10 lg:w-8/12  ">


        <div class=" w-full mt-5 flex items-center ">
            <input class="inputtext mt-0 w-8/12" name="answerA${cMultipleAdd.childElementCount + 1}" placeholder="answerA${cMultipleAdd.childElementCount + 1}" required/>

            <label class="containerRadio ms-5 sss">Correct Answer
                <input type="radio" name="answer${cMultipleAdd.childElementCount + 1}" value="answerA" required>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class=" w-full mt-5 flex items-center ">
            <input class="inputtext mt-0 w-8/12" name="answerB${cMultipleAdd.childElementCount + 1}" placeholder="answerB${cMultipleAdd.childElementCount + 1}" required/>

            <label class="containerRadio ms-5 sss">Correct Answer
                <input type="radio" name="answer${cMultipleAdd.childElementCount + 1}" value="answerB" required>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class=" w-full mt-5 flex items-center ">
            <input class="inputtext mt-0 w-8/12" name="answerC${cMultipleAdd.childElementCount + 1}" placeholder="answerC${cMultipleAdd.childElementCount + 1}" required />

            <label class="containerRadio ms-5 sss">Correct Answer
                <input type="radio" name="answer${cMultipleAdd.childElementCount + 1}" value="answerC" required>
                <span class="checkmark"></span>
            </label>
        </div>

    </div>
    <div class="flex w-full pt-5">
        <div class=" flex flex-wrap w-full">
            <button type="button" onclick="backquiz2(this,${cMultipleAdd.childElementCount + 1})"
                class=" w-full mb-3 md:mb-0 md:w-40 btn me-3 bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                <span class="text-orange group-hover:text-white font-bold text-sm  ">Back</span>
            </button>
            <button data-id2="${cMultipleAdd.childElementCount + 1}" type="button"  onclick="forwadquiz2(${cMultipleAdd.childElementCount + 1},this)"
                class=" w-full mb-3 md:mb-0 hidden md:w-40 btn bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                <span class="text-orange group-hover:text-white font-bold text-sm  ">forwed</span>
            </button>

        </div>
    </div>

    <div class="flex w-full pt-5">
        <div class=" flex flex-wrap w-full">

            <button type="button" onclick="addQuizMultiple(${cMultipleAdd.childElementCount + 1},this)"
                class="w-full mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                <span class=" text-white font-bold text-sm ">Save & Another</span>
            </button>

            <button type="submit"  class="w-full md:ms-3 mb-3 md:mb-0 md:w-40 btn items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6">
                <span class=" text-white font-bold text-sm ">Done</span>
            </button>

            <button type="button" onclick="resetval()"
                class=" w-full mb-3 md:mb-0 md:w-40 btn ms-auto bg-white text-orange group hover:text-white border border-orange hover:border-orange3 items-center  justify-center hover:bg-orange3 cursor-pointer flex px-6 md:me-6">
                <span class="text-orange group-hover:text-white font-bold text-sm  ">Cancel</span>
            </button>

            <button data-delete2="${cMultipleAdd.childElementCount + 1}" type="button" onclick="removeQuiz(this)"
                class=" w-full mb-3 md:mb-0  md:w-40 md:ms-2 btn bg-white text-red-500 group hover:text-white border border-red-500 hover:border-red-600 items-center  justify-center hover:bg-red-600 cursor-pointer flex px-6 md:me-6">
                <span class="text-red-500 group-hover:text-white font-bold text-sm  ">delete</span>
            </button>
        </div>
    </div>

</div>
    `
                );


            }

        }

        function backquiz(d, e) {
            d.parentNode.parentNode.parentNode.classList.add("hidden");
            d.parentNode.parentNode.parentNode.previousElementSibling.classList.remove("hidden");

            if (cAdd.childElementCount + 1 != e) {
                document.querySelector(`[data-id="${e - 1}"]`).classList.remove("hidden");
                document.querySelector(`[data-delete="${e - 1}"]`).classList.add("hidden");
            }

        }

        function backquiz2(d, e) {
            d.parentNode.parentNode.parentNode.classList.add("hidden");
            d.parentNode.parentNode.parentNode.previousElementSibling.classList.remove("hidden");

            if (cMultipleAdd.childElementCount + 1 != e) {
                document.querySelector(`[data-id2="${e - 1}"]`).classList.remove("hidden");
                document.querySelector(`[data-delete2="${e - 1}"]`).classList.add("hidden");
            }

        }

        function forwadquiz2(e, d) {
            if (cMultipleAdd.childElementCount + 1 != e) {
                d.parentNode.parentNode.parentNode.classList.add("hidden");
                d.parentNode.parentNode.parentNode.nextElementSibling.classList.remove("hidden");
            } else {
                document.querySelector(`[data-delete2="${e - 1}"]`).classList.remove("hidden");
            }
        }

        function forwadquiz(e, d) {
            if (cAdd.childElementCount + 1 != e) {
                d.parentNode.parentNode.parentNode.classList.add("hidden");
                d.parentNode.parentNode.parentNode.nextElementSibling.classList.remove("hidden");
            } else {
                document.querySelector(`[data-delete="${e - 1}"]`).classList.remove("hidden");
            }
        }

        function removeQuiz(input) {
            input.parentNode.parentNode.parentNode.previousElementSibling.classList.remove("hidden");

            input.parentNode.parentNode.parentNode.remove();

        }
    </script>
@endsection
