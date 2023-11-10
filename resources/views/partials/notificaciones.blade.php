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

    <script>
      document.querySelectorAll('.deleteForm').forEach(function(form) {
          form.addEventListener('submit', function(e) {
              e.preventDefault();
  
              Swal.fire({
                  title: "¿Estás seguro?",
                  text: "No podrás revertir la eliminación de este registro.",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  cancelButtontext: "Cancelar",
                  confirmButtonText: "Sí, eliminar"
              }).then((result) => {
                  if (result.isConfirmed) {
                      form.submit();
                  }
              });
          });
      });
  </script>

</div>