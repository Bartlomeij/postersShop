@extends('layouts.app')

@section('content')
<div class="container posters">
    <div class="row">
        <div class="col-xs-12 col-md-12 poster">
            <?php echo $poster->name; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 poster">
            <?php echo $poster->image; ?>
        </div>
        <div class="col-xs-12 col-md-6 poster">
            <?php echo $poster->description; ?>
        </div>
    </div>      
</div>
@endsection
