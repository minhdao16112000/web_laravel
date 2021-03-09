@extends('layouts.site')

@section('content')


<div class="features_items"><!--features_items-->
    <div class="fb-like" data-href="http://localhost:81/a/public/danh-muc-san-pham/2" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
    @foreach($category_name as $key => $name)
        <h2 class="title text-center" >{{ $name->category_name }}</h2>
    @endforeach
    @foreach($category_by_id as $key => $product)
        <a href="{{ URL::to('chi-tiet-san-pham/'.$product->product_id) }}">
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <form action="{{ URL::to('/save-cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="productinfo text-center">
                                <img src="{{ URL::to('uploads/product/'.$product->product_image) }}" height="200" width="200" alt="" />
                                <h2>{{ number_format($product->product_price).' '.'VNĐ' }}</h2>
                                <p>{{ $product->product_name }}</p>
                                <input name="qty" type="hidden" min="1" value="1" />
                                <input name="productid_hidden" type="hidden" value="{{ $product->product_id }}" />
                                {{-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a> --}}
                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Thêm giỏ hàng
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div><!--f eatures_items-->



@endsection