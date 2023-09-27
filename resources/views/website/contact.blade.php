@extends('website.layouts.master')

@section('title')
    Contacts us
@endsection

@section('content')
    <div class=" widthfull flex py-20 justify-between">
        <div class="w-full  ">
            <h3 class=" font-bold text-center text-4xl">Conact Us</h3>

            <div class=" bg-white flex flex-wrap boxshadow2 rounded px-0 py-0 mt-10 w-full mx-auto lg:w-10/12">
                <div class="w-full md:w-4/12 py-10 ps-8 pe-10 border-e border-[#D0D0D0]/50 ">
                    <p class="font-bold  text-2xl  ">Get in Touch</p>
                    <div class=" flex mt-8 items-center">
                        <div class="h-[60px] w-[60px] rounded-full overflow-hidden ">
                            <img class="h-full w-full object-cover" src="{{ asset('website/images/man.png') }}"/>

                        </div>
                        <p class="font-medium fontp ps-3 text-sm ">EL Oued Cite Rimal</p>

                    </div>
                    <div class=" flex my-6 items-center">
                        <div class="h-[60px] w-[60px] rounded-full overflow-hidden ">
                            <img class="h-full w-full object-cover" src="{{ asset('website/images/man.png') }}"/>

                        </div>
                        <div>
                            <p class="font-medium fontp ps-3 text-sm ">mail@lmszai.co.uk</p>
                            <p class="font-medium fontp ps-3 text-sm ">info@lmazaiinner.co.uk</p>

                        </div>
                    </div>
                    <div class=" flex  items-center">
                        <div class="h-[60px] w-[60px] rounded-full overflow-hidden ">
                            <img class="h-full w-full object-cover" src="{{ asset('website/images/man.png') }}"/>

                        </div>
                        <div>
                            <p class="font-medium fontp ps-3 text-sm ">328-456-07875</p>

                            <p class="font-medium fontp ps-3 text-sm ">128-456-07875</p>
                        </div>

                    </div>
                </div>
                <div class=" w-full md:w-8/12 px-9 py-10 ">

                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class=" flex-wrap flex w-full">
                            <div class="w-full md:w-6/12 md:pe-2">
                                <p class="font-semibold text-black  text-sm ">Email</p>
                                <input class="inputtext " type="email" name="email" placeholder="Abc @gmail.com...."/>
                            </div>
                            <div class=" w-full md:w-6/12 md:ps-2">
                                <p class="font-semibold text-black  text-sm ">Name</p>
                                <input class="inputtext " type="text" name="name" placeholder="Your name *"/>
                            </div>

                        </div>
                        <div class=" w-full mt-5">
                            <p class="font-semibold text-black  text-sm ">Subject</p>
                            <input class="inputtext " type="text" name="subject" placeholder="Abc ...."/>
                        </div>
                        <div class=" w-full mt-5">
                            <p class="font-semibold text-black  text-sm ">Message</p>
                            <textarea class="inputtext min-h-[150px] h-auto py-3" rows="5"
                                      name="message" placeholder="Abc ...."></textarea>
                        </div>
                        <button type="submit"
                                class=" w-full btn items-center mt-5 justify-center hover:bg-orange3 transition-all	 transform hover:scale-[1.01] flex px-6">
                            <span class=" text-white font-bold text-sm ">Submit</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>


@endsection
