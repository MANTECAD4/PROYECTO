<div>
    @if(Session::has('success'))
    <script>
      Swal.fire({
        title: "Registro exitoso!",
        text: "{{ Session::get('success') }}",
        icon: "success",
        timer: 3000,
      });
    </script>
  @endif

  @if(Session::has('warning'))
    <script>
      Swal.fire({
        title: "Modificación exitosa!",
        text: "{{ Session::get('warning') }}",
        icon: "success",
        timer: 3000,
      });
    </script>
  @endif

  @if(Session::has('error'))
    <script>
      Swal.fire({
        title: "Eliminación exitosa!",
        text: "{{ Session::get('error') }}",
        icon: "success",
        timer: 3000,
      });
      </script>
  @endif
</div>