@extends('templates.edulearn.master')
@section('title', 'Edulearn')
@section('content')
    @include('templates.edulearn.banner')
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{route('temp.edulearn.index') }}">Trang chủ</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Câu hỏi</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- faqs -->
	<div class="faq-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Câu hỏi
				<span class="font-weight-bold">thường gặp</span>
			</h3>
			<div class="faq-info pt-md-4">
				<h3 class="w3-head text-dark">Top 10 câu hỏi phổ biến</h3>
				<div class="faq-w3agile">
					<ul class="faq pl-sm-4 pl-3">
						<li class="item1 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">
                                Làm thế nào để kích hoạt được khóa học ?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p> Làm chi tiết các bước theo hướng dẫn.</p>
								</li>
							</ul>
						</li>
						<li class="item2 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Chính sách hoàn trả học phí ?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p> Trong 7 ngày kể từ ngày thanh toán.
                                        Học chưa quá 30% số bài học
                                        Mua khóa học và thanh toán trực tiếp. Trường hợp không thanh toán trực tiếp (mua từ Giảng viên, từ 1 tài khoản khác...) thì chúng tôi không thể hoàn học phí.</p>
								</li>
							</ul>
						</li>
						<li class="item3 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Có thể đổi khóa học mình đăng ký sang khóa học khác không?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Trường hợp 1: Đã đăng ký những chưa thanh toán: Có thể đổi khóa học sang khóa học khác bạn muốn.<br>

                                        Trường hợp 2: Đã mua, đã thanh toán những chưa kích hoạt: Có thể đổi sang khóa học có giá trị bằng hoặc thấp hơn. Nếu muốn đổi khóa học có giá  cao hơn, phải trả thêm phí.<br>
                                        Trường hợp 3: Đã thanh toán, đã kích hoạt: Trong vòng 7 ngày khách hàng đã mua và kích hoạt khóa học, học chưa quá 30%. Có thể đổi sang khóa học có giá trị bằng hoặc thấp hơn. Nếu muốn đổi khóa học có giá  cao hơn, phải trả thêm phí.</p>
								</li>
							</ul>
						</li>
						<li class="item4 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Chứng nhận hoàn thành khóa học?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Sau khi kết thúc chương trình học tại Unica.vn, bạn có thể nhận chứng nhận hoàn thành khóa học.

                                        Chứng nhận hoàn thành khóa học giúp làm nổi bật các kỹ năng bạn học, bạn sẽ tự tin hơn khi chinh phục nhà tuyển dụng. Là minh chứng cho việc đầu tư phát triển bản thân để nâng cao năng lực và nắm bắt tốt hơn các cơ hội thăng tiến trong công việc.</p>
								</li>
							</ul>
						</li>
						<li class="item5 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Mã kích hoạt được sử dụng bao nhiêu lần?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Mã kích hoạt chỉ được sử dụng để kích hoạt khóa học 1 lần duy nhất.
                                        Sau khi kích hoạt thành công, bạn có thể sử dụng tài khỏa đã kích hoạt để tham dự khóa học bất cứ lúc nào và không giới hạn số lần học.</p>
								</li>
							</ul>
						</li>
						<li class="item6 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Việc học online liệu có hiệu quả ?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Linh hoạt về thời gian,
                                        tiết kiệm chi phí và công sức,
                                        không hạn chế về không gian và thời gian.
                                        Có thể lưu trữ được các bài học, nhằm thuận tiện cho việc ôn tập lại kiến thức.</p>
								</li>
							</ul>
						</li>
						<li class="item7 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Có thể học trước rồi trả tiền được không?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Bạn cần thanh toán trước mới có được mã kích hoạt của khóa học.
                                        Có chính sách hoàn học phí nếu bạn không hài lòng với chất lượng khóa học nên bạn hoàn toàn có thể yên tâm học trên web..</p>
								</li>
							</ul>
						</li>
						<li class="item8 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Có thể tải khóa học về máy được không?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Để “Bảo vệ quyền lợi khách hàng”, chúng tôi không hỗ trợ cũng như không khuyến khích học viên tải nội dung bài học của Unica, nhằm giảm thiểu nguy cơ khóa học bị phát tán trái phép, đặc biệt ảnh hưởng tới quyền lợi của Bạn và các học viên khác.                                         Hy vọng bạn thông cảm!</p>
								</li>
							</ul>
						</li>
						<li class="item9 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Khóa học có bán thành đĩa, hay có phần mềm học không?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Việc bán thành đĩa hoặc phần mềm sẽ bất tiện nếu bạn làm xước, làm hỏng.
                                        Việc học trực tiếp bạn không phải lo lắng các vấn đề đó, không những vậy còn tiện cho việc đặt câu hỏi để giảng viên hỗ trợ khi có thắc mắc.
                                        Trên điện thoại, bạn có thể vào CH play hoặc App Store tải app để việc học dễ dàng hơn.</p>
								</li>
							</ul>
						</li>
						<li class="item10 mt-sm-4 mt-3 pl-2">
							<a href="#" title="click here">Đơn hàng bị hoàn học phí, tôi có doanh thu không?</a>
							<ul>
								<li class="subitem1 mt-3">
									<p>Hoa hồng AFF dựa trên doanh thu học viên thanh toán cho khóa học.
                                        Nếu khách yêu cầu hoàn học phí. Bạn sẽ không được hoa hồng.
                                        Trường hợp đã thanh toán hoa hồng cho bạn, số tiền này sẽ được trừ vào doanh thu tháng tiếp theo.</p>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //faqs -->

@endsection