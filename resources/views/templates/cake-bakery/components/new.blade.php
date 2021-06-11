<!-- news -->
<div class="news-agile bg-cream py-5" id="news">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <!-- order form -->
            <div class="col-lg-4 order-form-w3ls pl-lg-0" id="order">
                <div class="agile_its_registration bg-white">
                    <h3 class="title-2 mb-3">Hãy đặt hàng ngay</h3>
                    <p class="mb-4">
                        Chúng tôi mang đến nhiều sự lựa chọn cho bạn
                    </p>
                    <form action="#">
                        <div class="agileits-location form-group">
                            <label>HÌnh dạng</label>
                            <select required>
                                <option value="">Tròn</option>
                                <option value="1">Tam giác</option>
                                <option value="2">Vuông</option>
                                <option value="2">Theo yêu cầu</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                        <div class="agileits-location w3ls-1 form-group">
                            <label>Tằng</label>
                            <select required>
                                <option value="">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="2">4</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                        <div class="agileits-location form-group">
                            <label>Kích cỡ</label>
                            <select required>
                                <option value="">4 inch</option>
                                <option value="">6 inch</option>
                                <option value="">8 inch</option>
                                <option value="">10 inch</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                        <div class="agileits-location w3ls-1 form-group">
                            <label>Hương vị</label>
                            <select required>
                                <option value="">Socola</option>
                                <option value="">Bơ</option>
                                <option value="">Dâu</option>
                                <option value="">Vanilla</option>
                            </select>
                            <div class="clear"></div>
                        </div>
                        <input type="submit" value="Đặt bánh" class="agileinfo-order btn" />
                    </form>
                </div>
            </div>
            <!-- //order form -->
            <!-- news -->
            <div class="col-lg-8 news-blog mt-lg-0 mt-5">
                <h3 class="title-2 mb-md-5 mb-4">Các bài Blog về Cake Bakery</h3>
                <div class="row">
                    <div class="col-sm-6 news-grids-agile">
                        <div class="news-top">
                            <a href={{ URL::route("temp.cake-bakery.index") }}>
                                <img src={{ URL::asset("templates/cake-bakery/images/news1.jpg") }} alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="price-bottom bg-white p-4">
                            <a href={{ URL::route("temp.cake-bakery.index") }} class="text-dark">21 Tháng 9, 2018</a>
                            <h5 class="mt-3">Những gợi ý cho bữa tiệc sinh nhật tuyệt vời của bạn</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 news-grids-agile mt-sm-0 mt-5">
                        <div class="news-top">
                            <a href={{ URL::route("temp.cake-bakery.index") }}>
                                <img src={{ URL::asset("templates/cake-bakery/images/news2.jpg") }} alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="price-bottom bg-white p-4">
                            <a href={{ URL::route("temp.cake-bakery.index") }} class="text-dark">Tháng 9, 2018</a>
                            <h5 class="mt-3">Những điều mà tội thích ở Cake Bakery</h5>
                        </div>
                    </div>
                </div>
                <!-- //news -->
                <!-- faqs -->
                <div class="faq-w3agile mt-5" id="faqs">
                    <h3 class="title-2 mb-md-5 mb-4">Những thắc mắc thường gặp của khách hàng</h3>
                    <ul class="faq list-unstyled">
                        <li class="item1">
                            <a href="#" title="click here" class="text-dark border-bottom pb-3">Cho mình địa chỉ của tiệm bánh với ạ?
                                <i class="fas fa-plus float-right"></i>
                            </a>
                            <ul class="list-unstyled">
                                <li class="subitem1">
                                    <p class="pt-3 pb-4">...</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item2 my-3">
                            <a href="#" title="click here" class="text-dark border-bottom pb-3">Ngoài bánh kem thì quán còn làm các loại bánh khác không ạ?
                                <i class="fas fa-plus float-right"></i>
                            </a>
                            <ul class="list-unstyled">
                                <li class="subitem1">
                                    <p class="pt-3 pb-4">...</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item3 my-3">
                            <a href="#" title="click here" class="text-dark border-bottom pb-3">Tiệm bánh có giao hàng toàn quốc không ạ?
                                <i class="fas fa-plus float-right"></i>
                            </a>
                            <ul class="list-unstyled">
                                <li class="subitem1">
                                    <p class="pt-3 pb-4">...</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item4">
                            <a href="#" title="click here" class="text-dark border-bottom pb-3">Làm thế nào để có thể đặt tiệc theo yêu cầu vậy ạ?
                                <i class="fas fa-plus float-right"></i>
                            </a>
                            <ul class="list-unstyled">
                                <li class="subitem1">
                                    <p class="pt-3">...</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- //faqs -->
            </div>
        </div>
    </div>
</div>
<!-- //news -->