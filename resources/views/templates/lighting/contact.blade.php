@extends("templates.lighting.master")
@section('title', 'Lighting')
@section('content')

    <div class="contact">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href={{ route("temp.lighting.index") }}>Trang Chủ</a></li>
                <li class="active">Liên Hệ</li>
            </ol>
            <!--start contact-->
            <h3>Liên Hệ</h3>
            <div class="section group">
                <div class="col-md-6 span_1_of_3">
                    <div class="contact_info">
                        <h4>Địa Chỉ</h4>
                        <div class="map">
                            <iframe
                                src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
                        </div>
                    </div>
                    <div class="company_address">
                        <h4>Thông Tin :</h4>
                        <p>220/91 Nguyễn Văn Khối,</p>
                        <p>Phường 9 Quận Gò Vấp,</p>
                        <p>Hồ Chí Minh</p>
                        <p>Số điện thoại: 035 618 5047</p>
                        {{--  <p>Fax: (000) 000 00 00 0</p>  --}}
                        <p>Email: <a href="mailto:smartvietsolution@gmail.com">smartvietsolution@gmail.com</a></p>
                        <p>Theo dõi: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                    </div>
                </div>
                <div class="col-md-6 span_2_of_3">
                    <div class="contact-form">
                        <form>
                            <div>
                                <span><label>HỌ TÊN</label></span>
                                <span><input name="userName" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input name="userEmail" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>SỐ ĐIỆN THOẠI</label></span>
                                <span><input name="userPhone" type="text" class="textbox"></span>
                            </div>
                            <div>
                                <span><label>CHỦ ĐỀ</label></span>
                                <span><textarea name="userMsg"> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" class="mybutton" value="GỬI"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
