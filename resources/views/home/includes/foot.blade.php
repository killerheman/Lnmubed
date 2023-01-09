<script type="application/json"
                                        ></script>
<script src="{{ asset('home/sites/default/files/js/js_L0JHXVH_b3zU1WK3g5A71kBZRBBXxTjVQAhFH9qjtIU.js') }}"></script>
<script src="{{ asset('home/cse.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
    defer></script>
<script src="{{ asset('home/sites/default/files/js/js_3zRZxLRFPv3bNbV-2RQ8h7bLZ9fDBeKhkVuy9M3Axfs.js') }}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

{{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if(Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>