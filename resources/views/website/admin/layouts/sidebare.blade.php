<div id="sidebaradmin"
     class="hidden md:block absolute md:fixed bg-orange h-screen start-0 top-0 p-3 overflow-hidden botom-0 w-[85vw]  md:w-20 z-50 tran bg-gray-light	 transition-all	duration-700"
     onmouseenter="setMouse(true,this)"
     onmouseleave="setMouse(false,this)">
    <div class=" flex items-center">
        <a href="{{ route('dashboard.admin') }}">
            <img class=" h-[60px] md:h-[56px] object-contain" src="{{ asset('website/admin/images/logoadmin.png') }}"/>
        </a>
    </div>

    <div class="mt-20">
        <a href="{{ route('dashboard.admin') }}" class="pt-10">
            <div class="flex items-center bg-blue-light rounded py-2 mb-6">
                <img src="{{ asset('website/admin/images/admin/dashboard.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>

                <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal	duration-700  text-white fontp text-base">
                    {{ trans('admin/sidebare.dashboard') }}
                </h4>
            </div>
        </a>
    </div>

    <a href="{{ route('admin.allAdmins') }}">

        {{--        <div class="flex items-center bg-white/40 rounded-2xl py-3.5 mb-6">--}}
        <div class="flex items-center bg-blue-light rounded py-2 mb-6">
            <img src="{{ asset('website/admin/images/admin/admins.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>

            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp f text-base">
                {{ trans('admin/sidebare.Admins') }}
            </h4>
        </div>
    </a>

    <a href="{{ route('admin.coursesPanel') }}">

        {{--        <div class="flex items-center bg-white/40 rounded-2xl py-3.5 mb-6">--}}
        <div class="flex items-center bg-blue-light rounded py-2 mb-6">
            <img src="{{ asset('website/admin/images/admin/courese.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>
            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp f text-base">
                {{ trans('admin/sidebare.courses') }}
            </h4>
        </div>
    </a>

    <a href="{{ route('admin.allStudents') }}">
        <div class="flex items-center bg-blue-light rounded py-2 mb-6">
            <img src="{{ asset('website/admin/images/admin/student.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>
            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp text-base">
                {{ trans('admin/sidebare.students') }}</h4>
        </div>
    </a>

    <a href="{{ route('admin.allInstructor') }}">
        <div class="flex items-center bg-blue-light rounded py-2 mb-6">
            <img src="{{ asset('website/admin/images/admin/student.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>
            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp text-base">
                {{ trans('admin/sidebare.instructors') }}
            </h4>
        </div>
    </a>

    {{--        <a href=''>--}}
    {{--            <div class="flex items-center bg-white/40 rounded-2xl py-3.5  mb-6">--}}
    {{--                <img src="{{ asset('website/admin/images/admin/courese.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--                <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp  text-base">--}}
    {{--                    workers</h4>--}}
    {{--            </div>--}}
    {{--        </a>--}}

    {{--    <a href=''>--}}

    {{--        <div class="flex items-center bg-blue-light rounded py-2 mb-6">--}}
    {{--            <img src="{{ asset('website/admin/images/admin/instractor.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp  text-base">--}}
    {{--                Serviers</h4>--}}
    {{--        </div>--}}
    {{--    </a>--}}

    {{--    <a href=''>--}}

    {{--        <div class="flex items-center bg-blue-light rounded py-2 mb-6">--}}
    {{--            <img src="{{ asset('website/admin/images/admin/notifications.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp text-base">--}}
    {{--                List orders</h4>--}}
    {{--        </div>--}}
    {{--    </a>--}}

    {{--    <a href=''>--}}

    {{--        <div class="flex items-center bg-blue-light rounded py-2 mb-6">--}}
    {{--            <img src="{{ asset('website/admin/images/admin/subs.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap font-normal duration-700 text-white fontp text-base">--}}
    {{--                Feedback</h4>--}}
    {{--        </div>--}}
    {{--    </a>--}}

    {{--    <a href=''>--}}

    {{--        <div class="flex items-center bg-blue-light rounded py-2 mb-6">--}}
    {{--            <img src="{{ asset('website/admin/images/admin/finaces.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp text-base">--}}
    {{--                FAQs</h4>--}}
    {{--        </div>--}}
    {{--    </a>--}}

    {{--    <a href=''>--}}
    {{--        <div class="flex items-center bg-blue-light rounded py-2 mb-6">--}}
    {{--            <img src="{{ asset('website/admin/images/admin/email.svg') }}" alt="Logo" class="w-6 h-6 mx-3"/>--}}

    {{--            <h4 class="w-36 md:w-0 qqq overflow-hidden	transition-all whitespace-nowrap	font-normal duration-700  text-white fontp f text-base">--}}
    {{--                Tikets</h4>--}}
    {{--        </div>--}}
    {{--    </a>--}}
</div>
