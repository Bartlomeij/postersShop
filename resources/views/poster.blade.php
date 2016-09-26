@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading poster-header"><h4><b><?=$poster->name;?></b></h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 poster-image">
                            <?php echo '<img src="../images/posters/'.$poster->image.'" />'; ?>
                        </div>
                        <div class="col-xs-12 col-md-6 poster-description">
                            <h4>Description:</h4>
                            <p><?=$poster->description;?></p>
                            <p><a href="/poster/addToCart/<?=$poster->id;?>"><div class="add-to-cart-btn">€<?=$poster->price;?> <span>&nbsp;|&nbsp;</span> ADD TO CART</div></a></p>
                            <p class="shipping">FREE EXPRESS (3-4 working days) Shipping to Poland with 3 or more Posterplates.</p>
                            <h4>Recommended for you:</h4>
                            <div class="row">
                                <?php foreach($recommended as $rec_poster):?>
                                <div class="col-xs-12 col-md-4 recommended poster">
                                    <?php echo '<a href="/poster/'.$rec_poster->id.'"><img src="../images/posters/'.$rec_poster->image.'" /></a>'; ?>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
