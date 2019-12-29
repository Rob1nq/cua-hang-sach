@if ($errors->any())
    <div class="alert alert-danger  ">
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
 	</div>
@endif
@if (session('success'))
	<div class="alert alert-success">
		<p>{{ session('success') }}</p>
	</div>
@endif
@if (session('danger'))
	<div class="alert alert-danger">
		<p>{{ session('danger') }}</p>
	</div>
@endif