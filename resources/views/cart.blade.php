@extends('layouts.app')

@section('content')
<?php $amount_price = 0.00; ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading poster-header"><h4><b>Your shopping cart</b></h4></div>
                <div class="panel-body">
                    <?php if ($completed): ?>
                        <div class="row text-center">
                            <h3>Thank You! Your Order Has Been successfully completed.</h3>
                        </div>
                    <?php else: ?>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td align="center">Id</td>
                                        <td>Name</td>
                                        <td align="center">Amount</td>
                                        <td align="center">Price</td>
                                        <td align="center">Remove</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($shoppingCart):
                                        foreach ($shoppingCart as $key => $value):
                                            $poster = $posters->get($key);
                                            $price = $poster->price * $value;
                                            ?>
                                            <tr>
                                                <td align="center"><?= $key; ?></td>
                                                <td><?= $poster->name; ?></td>
                                                <td align="center"><?= $value; ?></td>
                                                <td align="center">€ <?= $price; ?></td>
                                                <td align="center"><a href="/poster/removeFromCart/<?= $key; ?>"><i class="fa fa-times" aria-hidden="true" style="color: red;"></i></a></td>
                                            </tr>
                                            <?php
                                            $amount_price += $price;
                                        endforeach;
                                    endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <div class="row pull-right">
                        Sum: € <?= $amount_price; ?> | <a href="/completeOrder"><b>Complete your order</b></a> &nbsp; 
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
