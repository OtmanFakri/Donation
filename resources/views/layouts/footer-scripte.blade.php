<!--
    All Scripts Here
============================ -->
<script src="{{assert('assets/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{assert('assets/js/popper.min.js')}}"></script>
<script src="{{assert('assets/js/bootstrap-v5.1.3.min.js')}}"></script>
<!--
    Active Scripts Here
============================ -->
<script src="{{asset('assets/js/active.js')}}"></script>
<script>
    const closeBtn = document.getElementById('close-toast');
    const toastContainer = document.getElementById('toast-default');

    closeBtn.addEventListener('click', () => {
        toastContainer.classList.toggle('hidden');
    });
</script>
