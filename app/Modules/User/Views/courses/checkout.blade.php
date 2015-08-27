@extends('frontend/frontendcols')

@section('content')

    <section class="checkout container">
        <h1>Your Order</h1>
        <!-- order items -->
        <div class="items">
            <table>
                <tbody>
                <tr>
                    <th>Course Name</th>
                    <th class="price">Course Price</th>
                </tr>
                <tr>
                    <td>
                        <h2>{{ $course->title }}</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </td>
                    <td class="price">${{ $course->eln_price }}</td>
                </tr>

                </tbody><tfoot>
                    <tr>
                        <td>Total</td>
                        <td class="price">${{ $course->eln_price }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="licenc-key">
            <!-- cards -->
            <div class="card-holder">
                <ul class="cards list-unstyled">
                    <li><a href="#"><img width="33" height="22" alt="visa" src="images/card1.png"></a></li>
                    <li><a href="#"><img width="33" height="22" alt="americanexpress" src="images/card2.png"></a></li>
                    <li><a href="#"><img width="33" height="22" alt="discover" src="images/card3.png"></a></li>
                    <li><a href="#"><img width="33" height="22" alt="mastercard" src="images/card4.png"></a></li>
                    <li><a href="#"><img width="33" height="22" alt="paypal" src="images/card5.png"></a></li>
                </ul>
            </div>
            <div class="btn-holder">
                <button class="btn btn-primary" type="button">checkout</button>
            </div>
        </div>
    </section>

@endsection