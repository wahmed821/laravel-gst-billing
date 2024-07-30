@if(session('status'))
<div class="col-md-12">
    <div class="alert alert-success">{{ session('status') }}</div>
</div>
@endif

@if(session('error'))
<div class="col-md-12">
    <div class="alert alert-danger">{{ session('error') }}</div>
</div>
@endif

<?php /*
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
*/ ?>

@if(count($errors))
<div class="col-md-12">
    <div class="alert alert-danger">
        <strong>Validation errors: please fix the following issues</strong>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
