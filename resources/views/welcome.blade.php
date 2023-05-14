@include('header')
<link href="{{asset('css/index.css')}}" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">



<div class="main-content">
    <div>
      

    <form method="POST" action="/predict" enctype="multipart/form-data">
    @csrf
    <div class="upload-files-container">
		<div class="drag-file-area">
			<span class="material-icons-outlined upload-icon"> file_upload </span>
			<h3 class="dynamic-message"> Drag & drop MRI Scan here </h3>
			<label class="label">  <span class="browse-files"> <input name="img" type="file" class="default-file-input"/> <br> <span class="browse-files-text">or browse file from device</span> </span> </label>
		</div>
		<span class="cannot-upload-message"> <span class="material-icons-outlined">error</span> Please select a file first <span class="material-icons-outlined cancel-alert-button">cancel</span> </span>
		<div class="file-block">
			<div class="file-info"> <span class="material-icons-outlined file-icon">description</span> <span class="file-name"> </span> | <span class="file-size">  </span> </div>
			<span class="material-icons remove-file-icon">delete</span>
			<div class="progress-bar"> </div>
		</div>
        <input type="submit" class="upload-button">
	</div>
    </form>


      

    </div>
</div>





<script src="{{asset('js/index.js')}}"></script>


@include('footer')
