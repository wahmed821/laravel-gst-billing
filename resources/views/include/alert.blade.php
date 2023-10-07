@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<?php /*
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
*/ ?>

@if(count($errors))
<div class="alert alert-danger">
    <strong>Validation errors: please fix the following issues</strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
