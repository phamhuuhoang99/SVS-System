@extends('templates.fit-pro.master')
@section('title', 'Fit Pro')
@section('content')

    <!----start-slide-bottom--->
    <div class="second-head">
        <div class="container">
            <h2>
                <a href="{{ route('temp.fit-pro.index') }}">
                    <h5>Trang chủ</h5>
                </a> / LIÊN HỆ
            </h2>
        </div>
    </div>
    <!-- content-section-starts -->
    <div class="main-contact">
        <div class="container">
            <div class="contact-form">
                <h2>liên hệ</h2>
                <form class="left_form wow bounceInLeft" data-wow-delay="0.4s">
                    <div>
                        <span><label>HỌ TÊN</label></span>
                        <span><input name="userName" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>E-MAIL</label></span>
                        <span><input name="userEmail" type="text" class="textbox"></span>
                    </div>
                    <div>
                        <span><label>Fax</label></span>
                        <span><input name="userPhone" type="text" class="textbox"></span>
                    </div>
                </form>
                <form class="right_form wow bounceInRight" data-wow-delay="0.4s">
                    <div>
                        <span><label>CHỦ ĐỀ</label></span>
                        <span><textarea name="userMsg"> </textarea></span>
                    </div>
                    <div>
                        <span><input type="submit" value="GỬI" class="myButton"></span>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="content_bottompart">
                <div class="col-md-4 company_address">
                    <h3>THÔNG TIN LIÊN HỆ</h3>
                    <p>Địa chỉ: Quận Gò Vấp, Hồ Chí Minh</p>
                    <p>Phone: 035 618 5047</p>
                    <p>Email: <span><a href="mailto:example@email.com">smartvietsolution@gmail.com</a></span></p>
                </div>
                <div class="col-md-8 contact_info">
                    <h3>CHỈ ĐƯỜNG</h3>
                    <div class="map">
                        <iframe width="100%" height="185" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a
                                href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265"
                                style="color:#8C8061;text-align:left;font-size:1em">View Larger Map</a></small>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
