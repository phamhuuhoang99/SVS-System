<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- smooth scrolling -->
<!-- for bootstrap working -->
<script src={{ URL::asset("templates/bigstore/js/bootstrap.js") }}></script>
<!-- for bootstrap working -->
<script type='text/javascript' src={{ URL::asset("templates/bigstore/js/jquery.mycart.js") }}></script>
<script type="text/javascript">
    $(function() {
        var goToCartIcon = function($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                "position": "fixed",
                "z-index": "999"
            });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products) {
                $.each(products, function() {
                    console.log(this);
                });
            },
            clickOnAddToCart: function($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function() {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>
<!-- product -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Đậu xanh(1 kg)</h3>
                    <p class="in-para"> HSD còn 10 tháng</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>50.000đ</del>37.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Đậu xanh không vỏ là loại đậu rất thông dụng tại Việt Nam, loại đậu này thường được dùng để làm bánh, nấu chè hoặc làm các món tráng miệng bởi màu sắc đẹp mắt của nó. Đậu xanh không vỏ có tác dụng bổ nguyên khí, thanh nhiệt, mát gan, chữa lở loét, làm sáng mắt, hạ huyết áp, giảm cân rất hiệu quả. </p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Moong" data-summary="summary 1" data-price="37500" data-quantity="1" data-image="/templates/bigstore/images/of.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of1.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Dầu Sunflower (5 kg)</h3>
                    <p class="in-para"> HSD còn 1 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>250.000đ</del>225.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Dầu Sunflower bình 5 kg - là dòng sản phẩm đến từ thương hiệu dầu ăn danh tiếng, được người tiêu dùng bình chọn là sản phẩm "Dầu ăn ngon số 1" trên thị trường - có nguồn gốc từ thực vật tự nhiên an toàn cho sức khỏe của gia đình bạn.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Sunflower Oil" data-summary="summary 2" data-price="225000" data-quantity="1" data-image="/templates/bigstore/images/of1.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Đậu gà(1 kg)</h3>
                    <p class="in-para"> HSD còn 7 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>75.000đ</del>50.000đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc">  100% hạt đậu gà nhập khẩu từ Mỹ. Ngâm hạt khoảng 8 tiếng trước khi chế biến</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="50000" data-quantity="1" data-image="/templates/bigstore/images/of2.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of3.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Đậu nành(1 kg)</h3>
                    <p class="in-para"> HSD còn 4 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>100.000đ</del>87.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Giàu omega 3, chống oxy hóa, cải thiện làn da, duy trì vóc dáng</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="4" data-name="Soya Chunks" data-summary="summary 4" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of3.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of4.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Snack khoai tây(100 g)</h3>
                    <p class="in-para"> HSD còn 3 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25.000đ</del>17.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Khoai tây, dầu thực vật, bột gia vị sườn nướng BBQ Brazil 5.2% (đường, maltodextrin, muối, chất điều vị (E621, E627, E631), hương tự nhiên và hương giống tự nhiên, gia vị (tỏi, ớt, gừng), chất điều chỉnh độ chua (E330), chất chống đông vón (E550), màu tổng hợp (E110), màu tự nhiên (E160c), chất tạo ngọt tổng hợp (E951))</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="Lays" data-summary="summary 5" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of4.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of5.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Snack Kurkure(100 g)</h3>
                    <p class="in-para"> HSD còn 3 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25.000đ</del>17.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Bột bắp vảy vàng, dầu thực vật, vảy khoai tây, bột gạo, bột gia vị gà 5.3%, chất điều chỉnh độ axid (330), chất ổn định (1450), đạm thủy phân, chất chống đông vón, màu caramen tự nhiên, dầu chiết xuất từ cây hương thảo</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of5.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of6.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Bỏng ngô(250 g)</h3>
                    <p class="in-para"> HSD còn 1 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>50.000đ</del>25.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Bỏng ngô được làm từ nguyên liệu chính là hạt bắp, kết hợp với bơ và một số nguyên liệu. Bỏng ngô giòn, thơm, càng ăn càng thích, nhâm nhi khi xem phim hoặc tám chuyện với bạn bè lại càng thú vị.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="25000" data-quantity="1" data-image="/templates/bigstore/images/of6.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of7.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Hạt điều(250 g)</h3>
                    <p class="in-para"> HSD còn 10 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>100.000đ</del>85.500đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Hạt điều tách vỏ rang muối. Dùng trực tiếp, đậy kín sau khi sử dụng</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="8" data-name="Nuts" data-summary="summary 8" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of7.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of8.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Chuối(6 trái)</h3>
                    <p class="in-para"> HSD 1 tuần</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>50.000đ</del>37.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc">  Trái vừa ăn, chín tới, ngọt mềm thơm</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="Banana" data-summary="summary 9" data-price="37500" data-quantity="1" data-image="/templates/bigstore/images/of8.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of9.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Hành tây(1 kg)</h3>
                    <p class="in-para"> HSD còn 2 tuần.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25.000đ</del>18.500đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Dùng để làm gia vị tẩm ướp, chế biến các món ăn. </p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="10" data-name="Onion" data-summary="summary 10" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of9.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of10.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Khổ qua(1 kg)</h3>
                    <p class="in-para"> HSD còn 2 tuần</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>50.000đ</del>25.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Khổ qua có vị đắng, lạnh và có tác dụng thanh nhiệt, giải độc.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="25000" data-quantity="1" data-image="/templates/bigstore/images/of10.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of11.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Táo Mỹ(1 kg)</h3>
                    <p class="in-para"> HSD còn 2 tuần.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>100.000đ</del>87.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Táo mỹ 100%, không chất bảo quản, hương tự nhiên</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="12" data-name="Apples" data-summary="summary 12" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of11.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of12.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Mật ong(500 g)</h3>
                    <p class="in-para"> HSD hơn 3 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>175.000đ</del>150.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Mật ong 500g được chiết xuất từ mật ong có vị ngọt đậm đà, tinh khiết. Sản phẩm không chỉ tốt cho da mụn, mật ong còn rất hữu ích cho da khô bởi vì nó có thể giúp hấp thu và giữ nước, duy trì độ ẩm cho làn da hiệu quả. Sử dụng mật ong sẽ giúp cho bạn luôn có làn da mềm mại, mịn màng, căng tràn sức sống.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="13" data-name="Honey" data-summary="summary 13" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of12.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of13.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Ngũ cốc(250 g)</h3>
                    <p class="in-para"> HSD còn 9 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>125.000đ</del>112.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Ngũ cốc Chocos vị Socola là thực phẩm bổ sung dinh dưỡng nhanh chóng với nguyên liệu chính như bắp, lúa mì và lúa mạch cùng vị sôcôla tự nhiên.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="14" data-name="Chocos" data-summary="summary 14" data-price="112500" data-quantity="1" data-image="/templates/bigstore/images/of13.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of14.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Yến mạch(1 kg)</h3>
                    <p class="in-para"> HSD còn 8 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>100.000đ</del>87.500</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Yến mạch nguyên chất ăn liền từ 100% yến mạch nhập khẩu từ Úc, không đường, không chất bảo quản, không hương liệu, là thực phẩm ăn liền tiện lợi mà vẫn đảm bảo dinh dưỡng. Thiết kế dạng hộp tiện lợi cho bạn dễ dàng bảo quản hơn.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="15" data-name="Oats" data-summary="summary 15" data-price="87000" data-quantity="1" data-image="/templates/bigstore/images/of14.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of15.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Bánh mì(500 g)</h3>
                    <p class="in-para"> HSD hơn 3 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25.000đ</del>17.500đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc">  Bột mì, nước, đường, dầu cọ tinh luyện, đường Mantoza, bơ dầu thay thế, trứng, sữa bột, shortening, men, chất ổn định, muối, chất bảo quản, bột cacao, hương thực phẩm tổng hợp (socola), enzym, chất nhũ hoá, màu thực phẩm, chất xử lý bột</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="16" data-name="Bread" data-summary="summary 16" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of15.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of16.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Kem dưỡng ẩm <a href=""></a>(500 g)</h3>
                    <p class="in-para"> HSD hơn 5 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>175.000đ</del>150.000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Duy trì sự ẩm mượt mà, giúp da bạn dưỡng trắng hiệu quả</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="17" data-name="Moisturiser" data-summary="summary 17" data-price="150000" data-quantity="1" data-image="/templates/bigstore/images/of16.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of17.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Đậu bắp(250 g)</h3>
                    <p class="in-para"> HSD hơn 1 tuần.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Đậu bắp là một trong những loại thực phẩm được dùng trong bữa ăn thường ngày. Không chỉ có hương vị thơm ngon, độ nhớt đặc trưng, đậu bắp còn được xem là vị thuốc quý, tốt cho sức khỏe. </p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="18" data-name="Lady Finger" data-summary="summary 18" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of17.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of18.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Lụa Ribbon(1 cuộn)</h3>
                    <p class="in-para"> HSD hơn 1 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Ruban Vải và Satin hiện đang sử dụng rất ưa chuộng trong ngành may mặc, giầy da. Có tính chất mềm, dẻo, có thể giặt vò, là, hấp mà không bị biến dạng hoặc giảm tính chất sử dụng. Được sử dụng ghi quy cách, thông tin và trang trí cho các sản phẩm đòi hỏi tính chất mỹ thuật cao.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1" data-id="19" data-name="Satin Ribbon Red" data-summary="summary 19" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of18.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of19.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Nho(500 g)</h3>
                    <p class="in-para"> HSD còn 1 tuần.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Nho đỏ có đặc điểm trái vừa phải, chùm nho trái chen chút nhau, màu đỏ tươi tự nhiên. Giảm lượng Cholesterol trong máu, giảm mỡ trong máu, rất phù hợp với người bị huyết áp cao và người cao tuổi. </p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="Grapes" data-summary="summary 20" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of19.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of20.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Kẹp(1 gói)</h3>
                    <p class="in-para"> HSD hơn 1 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Kẹp quần áo, các phụ kiện may mặc, với giá thành phù hợp</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="21" data-name="Clips" data-summary="summary 21" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of20.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of21.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Dầu dưỡng tóc</h3>
                    <p class="in-para"> HSD hơn 6 tháng.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Nuôi dưỡng sợi tóc chắc khỏe và cọng tóc dày hơn , chắc hơn, tạo độ bóng, độ bền cho tóc</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="22" data-name="Conditioner" data-summary="summary 22" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of21.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of22.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Nước lau kính(250 kg)</h3>
                    <p class="in-para"> Hạn sử dụng hơn 1 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Nước lau kính với công thức đậm đặc và tiên tiến giúp lau sạch bóng các bề mặt kính với hiệu quả cực mạnh và cực nhanh.Sản phẩm thích hợp sử dụng cho các loại cửa kính, gương soi, màn hình TV, các bề mặt làm bằng crôm, inox… Ngoài ra, sản phẩm không chứa các hóa chất độc hại, không gây kích ứng trên da, an toàn cho người sử dụng</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="Cleaner" data-summary="summary 23" data-price="17500" data-quantity="1" data-image="/templates/bigstore/images/of22.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="/templates/bigstore/images/of23.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>Gel rửa mặt(150 g)</h3>
                    <p class="in-para"> HSD hơn 1 năm.</p>
                    <div class="price_single">
                        <span class="reducedfrom "><del>25000đ</del>20000đ</span>
                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Thông tin sản phẩm:</h4>
                    <p class="quick_desc"> Với thành phần làm sạch dịu nhẹ: Piroctone Olamine giúp làm sạch sâu bên trong da; Chiết xuất liễu anh thảo điều hòa hoạt động tiết bã nhờn và nước khoáng Uriage làm dịu, cho làn da sạch nhờn, sáng và mềm mại. Không chứa xà phòng, không chứa Paraben.</p>
                    <div class="add-to">
                        <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="Gel" data-summary="summary 24" data-price="20000" data-quantity="1" data-image="/templates/bigstore/images/of23.png">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>