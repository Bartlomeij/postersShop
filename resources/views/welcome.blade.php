@extends('layouts.app')

@section('content')
<div class="container posters">
    <div class="row">
        <?php
            foreach ($posters as $poster) {
                echo '
                    <div class="col-xs-12 col-md-3 poster">
                        <a href="/poster/'.$poster->id.'">
                            <img src="images/posters/'.$poster->image.'">
                        </a>
                    </div>';
            }
        ?>
    </div>      
</div>
@endsection
