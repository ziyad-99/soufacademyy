<script>
    addEventListener("DOMContentLoaded", (event) => {
        function openPop(gg42) {
            document.querySelector(gg42).classList.add('flex');
            document.querySelector(gg42).classList.remove('hidden');
            document.body.classList.add("overflow-hidden");
            document.body.style.height = "100vh";
            document.body.style.position = "fixed";
            document.body.style.width = "100%";
            gg22.classList.add("block");
            gg22.classList.remove("hidden");
        }

        function closePop(gg42) {
            document.querySelector(gg42).classList.remove('flex');
            document.querySelector(gg42).classList.add('hidden');
            document.body.classList.remove("overflow-hidden");
            document.body.style.height = "100%";
            document.body.style.position = "relative";
            document.body.style.width = "100%";

            gg22.classList.remove("block");
            gg22.classList.add("hidden");


        }
    });
    let gg22 = document.querySelector(".gg422");

    function openNav() {
        document.querySelector("#sidebaradmin").classList.toggle('hidden');
        document.querySelector(".gg4255").classList.toggle('hidden');
    }

    function removedone() {
        gg22.classList.remove('flex');
        gg22.classList.add('hidden');

    }

    function Done() {
        gg22.classList.add('flex');
        gg22.classList.remove('hidden');
        setTimeout(removedone, 2000);
    }

    let qqqs = document.querySelectorAll(".qqq");

    function setMouse(e, d) {
        if (e) {
            d.classList.remove("md:w-20");
            d.classList.add("w-56");
            d.style.width = "14rem"
            for (let i = 0; i < qqqs.length; i++) {
                qqqs[i].classList.remove("md:w-0");
                qqqs[i].classList.add("w-36");
            }

        } else {
            d.classList.remove("w-56")
            d.classList.add("md:w-20")
            d.style.width = "5rem"
            for (let i = 0; i < qqqs.length; i++) {
                qqqs[i].classList.add("md:w-0");
                qqqs[i].classList.remove("w-36");
            }
        }
    }

    function dropdown(name) {
        document.getElementById(name).classList.toggle("show");
    }

    let arr = document.querySelectorAll(".select1");

    window.addEventListener('click', function (e) {

        for (let i = 0; i < arr.length; i++) {
            if (arr[i].parentElement.children[0].contains(e.target)) {
            } else {
                arr[i].classList.remove('show')

            }
        }


    });

    function dropdownfun(name) {
        name.nextElementSibling.classList.toggle("show");

    }

    function dropdownfun2(name) {
        document.getElementById(name).classList.toggle("show");

    }

</script>

<script src="{{ asset('website/js/datatable.js') }}" type="text/javascript" async="true"></script>
<script src="{{ asset('website/js/datatables.min.js') }}"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
