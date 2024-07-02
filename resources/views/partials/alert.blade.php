@if(session('alert'))
    <script>
        Swal.fire({
            icon: '{{ session('alert.type') }}',
            title: '{{ session('alert.message') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif