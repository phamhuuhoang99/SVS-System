<div class="col-sm-4 item-grid item-gr simpleCart_shelfItem">
    <div class="grid-pro">
        <div class=" grid-product ">
            <figure>
                <a href={{ $href }}>
                    <div class="grid-img">
                        <img src={{ $img1 }} class="img-responsive" alt="">
                    </div>
                    <div class="grid-img">
                        <img src={{ $img2 }} class="img-responsive" alt="">
                    </div>
                </a>
            </figure>
        </div>
        <div class="women">
            <a href="#"><img src={{ asset( "templates/classicstyle/img/ll.png") }} alt=""></a>
            <h6><a href={{ route("temp.classicstyle.single") }}>{{$name}}</a></h6>
            <p><del>đ{{$pricefake}}</del><em class="item_price">đ{{$price}}</em></p>
            <a href="#" data-text="Thêm Vào Giỏ" class="but-hover1 item_add">Thêm Vào Giỏ</a>
        </div>
    </div>
</div>
