@extends('templates.auto-show.master')
@section('title', 'Auto Show')
@section('content')
    @include('templates.auto-show.men_banner')
    <div class="men">
        <div class="container">
            <div class="grid_1">
                <h1>Contact Info</h1>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum
                    soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum
                </p>
            </div>
            <div class="grid_4">
                <div class="grid_2 preffix_1">
                    <ul class="iphone">
                        <i class="phone"> </i>
                        <li class="phone_desc">Phone : +1 800 245 2365 </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="iphone">
                        <i class="flag"> </i>
                        <li class="phone_desc">Website : <a href="#">www.demolink.com</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="grid_3">
                    <ul class="iphone">
                        <i class="msg"> </i>
                        <li class="phone_desc">Email : <a href="malito:mail@demolink.com">mail(at)autoshow.com</a> </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="iphone">
                        <i class="home"> </i>
                        <li class="phone_desc">Address : vel illum dolore eu feugiat nulla </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact_form">
                <h2>Feedback</h2>
                <form action="#">
                    <div class="col-md-6 to">
                        <input type="text" class="text" value="Name" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="text" value="Email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" class="text" value="Subject" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Subject';}">
                    </div>
                    <div class="col-md-6 text">
                        <textarea value="Message" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="but__center"><input type="submit" value="Send message &gt;&gt;"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978">
        </iframe>
    </div>
@endsection
