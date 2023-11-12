<x-mi-layout>

        <div class="pagetitle">
          <h1>Form Elements</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active">Elements</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
          <div class="row">
            
    
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5 class="card-title">General Form Elements</h5>
            
                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                                    </div>
                                </div>
                                <!-- ... Otros campos ... -->
            
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
            
                        <div class="col-lg-6">
                            hola
                        </div>
                    </div>
                </div>
            </div>
            
    
            

          </div>
        </section>
</x-mi-layout><div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Imagen</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" onchange="previewImage(this)">
                            </div>
                        </div>
<script>
                    function previewImage(input) {
                        var fileInput = input;
                        var imagePreview = document.getElementById('imagePreview');
                
                        if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();
                
                            reader.onload = function (e) {
                                imagePreview.src = e.target.result;
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                </script>