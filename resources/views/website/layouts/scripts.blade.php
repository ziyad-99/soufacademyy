<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script src="{{ URL::asset('website/js/all.js') }}"></script>
<script src="{{ URL::asset('website/js/home.js') }}"></script>

<!-- start changes -->
<script src="{{ URL::asset('website/js/accordion.js') }}"></script>
<!-- end changes -->

<script>
    AOS.init({
        offset: 200, // offset (in px) from the original trigger point
        delay: 100,
        duration: 800,
    });

    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");


    tabTogglers.forEach(function (toggler) {
        toggler.addEventListener("click", function (e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {
                tabTogglers[i].parentElement.children[0].classList.remove("text-orange");
                tabTogglers[i].parentElement.classList.remove("bg-orange/20");
                tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                    continue;
                }
                tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.children[0].classList.add("text-orange");
            e.target.parentElement.classList.add("bg-orange/20");
        });
    });

</script>


<script src="{{ asset('website/js/datatable.js') }}" type="text/javascript" async="true"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
