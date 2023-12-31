@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Add New Menu</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/daftarharga" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="menu" class="form-label">Menu</label>
                <input type="text" class="form-control @error('menu') is-invalid @enderror" id="menu"
                    name="menu" required autofocus value="{{ old('menu') }}">
                @error('menu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                    name="harga" required autofocus value="{{ old('harga') }}">
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror            
            </div>
            <button type="submit" class="btn btn-primary mt-5">Add Menu</button>
        </form>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
       
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[]);
            
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
