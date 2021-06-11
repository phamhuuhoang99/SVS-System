<div class="col-md-{{$col}} product-men">
    <div class="men-pro-item simpleCart_shelfItem">
        <div class="men-thumb-item">
            <img src={{$img}} alt="" class="pro-image-front">
            <img src={{$img}} alt="" class="pro-image-back">
            <div class="men-cart-pro">
                <div class="inner-men-cart-pro">
                    <a href={{$href}} class="link-product-add-cart">Chi Tiết</a>
                </div>
            </div>
            <span class="product-new-top">New</span>

        </div>
        <div class="item-info-product ">
            <h4><a href={{$href}}>{{$name}}</a></h4>
            <div class="info-product-price">
                <span class="item_price">đ{{$price}}</span>
                <del>đ{{$pricefake}}</del>
            </div>
            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                <form action="#">
                    <fieldset>
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="business" value=" ">
                        <input type="hidden" name="item_name" value="{{$name}}">
                        <input type="hidden" name="amount" value="{{$price}}">
                        <input type="hidden" name="discount_amount" value="{{$discount}}">
                        <input type="hidden" name="currency_code" value="VND">
                        <input type="hidden" name="return" value=" ">
                        <input type="hidden" name="cancel_return" value=" ">
                        <input type="submit" name="submit" value="Thêm vào giỏ" class="button">
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>