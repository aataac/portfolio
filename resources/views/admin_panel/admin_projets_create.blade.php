{{-- resources/views/admin/dashboard.blade.php --}} @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1>Dashboard
	<small>Projets panel</small>
</h1>
<ol class="breadcrumb">
	<li>
		<a href="#">
			<i class="fa fa-dashboard"></i> Home</a>
	</li>
	<li class="active">Projets</li>

</ol>
@stop @section('content')

<div class="content-projet">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form class="" action="{{route('projets.store')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="titre">Titre</label>
			<input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="{{old('titre') ? old('titre') : '' }}">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{old('description') ? old('description') : '' }}">
		</div>

		{{--
		<div class="form-group">
			<label for="image">Image</label>
			<input name="projet_image" type="file" accept=".jpg, .jpeg, .png, .gif">
		</div>
		<div class="preview">
			<p>No files currently selected for upload</p>
		</div>
		<div> --}}

			<div>
				<label for="image_uploads">Choose images to upload (PNG, JPG)</label>
				<input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
			</div>
			<div class="preview">
				<p>No files currently selected for upload</p>
			</div>

			<button type="submit" class="btn btn-default">Envoyer</button>
		</div>
	</form>

	{{--
	<form method="post" enctype="multipart/form-data">
		<div>
			<label for="image_uploads">Choose images to upload (PNG, JPG)</label>
			<input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
		</div>
		<div class="preview">
			<p>No files currently selected for upload</p>
		</div>
		<div>
			<button>Submit</button>
		</div>
	</form> --}}



</div>



<script>
	var input = document.querySelector('#image_uploads');
var preview = document.querySelector('.preview');

input.style.opacity = 0;input.addEventListener('change', updateImageDisplay);function updateImageDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  var curFiles = input.files;
  if(curFiles.length === 0) {
    var para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);
  } else {
    var list = document.createElement('ol');
    preview.appendChild(list);
    for(var i = 0; i < curFiles.length; i++) {
      var listItem = document.createElement('li');
      var para = document.createElement('p');
      if(validFileType(curFiles[i])) {
        para.textContent = 'File name ' + curFiles[i].name + ', file size ' + returnFileSize(curFiles[i].size) + '.';
        var image = document.createElement('img');
        image.src = window.URL.createObjectURL(curFiles[i]);

        listItem.appendChild(image);
        listItem.appendChild(para);

      } else {
        para.textContent = 'File name ' + curFiles[i].name + ': Not a valid file type. Update your selection.';
        listItem.appendChild(para);
      }

      list.appendChild(listItem);
    }
  }
}var fileTypes = [
  'image/jpeg',
  'image/pjpeg',
  'image/png'
]

function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
    if(file.type === fileTypes[i]) {
      return true;
    }
  }

  return false;
}function returnFileSize(number) {
  if(number < 1024) {
    return number + 'bytes';
  } else if(number > 1024 && number < 1048576) {
    return (number/1024).toFixed(1) + 'KB';
  } else if(number > 1048576) {
    return (number/1048576).toFixed(1) + 'MB';
  }
}

</script>

@stop @section('css')
<link rel="stylesheet" href="{{ url('css/admin_custom.css')}}"> @stop @section('js') @stop