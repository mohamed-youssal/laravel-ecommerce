@if (Session::has('success'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        // text: "done successfully!",
        showConfirmButton: false,
        timer: 1500
  });
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal.fire({
        position: "top-end",
        icon: "error", // Change icon to "error" for error message
        title: "{{ session('error') }}", // Change title to reflect the error message
        showConfirmButton: false,
        timer: 1500
    });
    </script>
@endif