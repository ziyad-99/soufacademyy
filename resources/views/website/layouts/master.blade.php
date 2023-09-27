<!DOCTYPE html>
<html dir="{{ App::getLocale() === 'ar' ? 'rtl' : 'ltr'}}" lang="en">

<head>
    <meta charset="UTF-8">
    @include('website.layouts.style')
    <title>@yield('title')</title>
    @yield('css')
</head>

<body class=" ">
<div class="bg-[#f5f5f5]  overflow-hidden">
    @include('website.layouts.header')
    @yield('content')
    @include('website.layouts.footer')
</div>

@include('website.layouts.scripts')

@yield('js')

@if(Session::has('message'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.success("{{ Session::get('message') }}");
    </script>
@endif

@if(Session::has('message_already_waitingList'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.warning("{{ Session::get('message_already_waitingList') }}", 'Warning');
    </script>
@endif

@if(Session::has('message_add_waitingList'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.success("{{ Session::get('message_add_waitingList') }}", 'Congratulations');
    </script>
@endif

@if(Session::has('message_balance_less'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.error("{{ Session::get('message_balance_less') }}", 'Warning');
    </script>
@endif

@if(Session::has('message_profile_updated'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.success("{{ Session::get('message_profile_updated') }}", 'Successfully');
    </script>
@endif

@if(Session::has('message_password_changed'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.success("{{ Session::get('message_password_changed') }}", 'Successfully');
    </script>
@endif

@if(Session::has('message_oldPassword_incorrect'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.error("{{ Session::get('message_oldPassword_incorrect') }}", 'Error');
    </script>
@endif

@if(Session::has('message_socialMedia_updated'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.success("{{ Session::get('message_socialMedia_updated') }}", 'Successfully');
    </script>
@endif

@if(Session::has('message_resource_add'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.success("{{ Session::get('message_resource_add') }}", 'Successfully');
    </script>
@endif

@if(Session::has('message_resource_delete'))
    <script>
        toastr.options = {
            "progressBar": true,
        }

        toastr.warning("{{ Session::get('message_resource_delete') }}", 'Warning');
    </script>
@endif

@if(Session::has('message_add_new_quiz'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.success("{{ Session::get('message_add_new_quiz') }}", 'Successfully');
    </script>
@endif

@if(Session::has('message_no_sessions'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.warning("{{ Session::get('message_no_sessions') }}", 'Warning');
    </script>
@endif

@if(Session::has('message_quiz_done'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.success("{{ Session::get('message_quiz_done') }}", 'Done');
    </script>
@endif

</body>

</html>
