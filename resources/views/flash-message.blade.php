@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
        <strong style="color: rgb(9, 133, 9)">{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block"
        style="display: flex; justify-content:center;align-items:center; gap:1rem; color:red">
        <x-tabler-alert-circle />
        <strong style="color:red">
            {{ $message }}
        </strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please check the form below for errors
    </div>
@endif

    <script>
        const flash_message = document.querySelectorAll('.alert')
        // hide flash message after 4 seconds
        setTimeout(() => {
            flash_message.forEach((message) => {
                message.style.visibility = 'hidden'
            })
        }, 4000)
    </script>