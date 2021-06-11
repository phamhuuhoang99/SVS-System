@extends('templates.clinic.master')
@section('title', 'Clinic')
@section('content')
    <div class="w3ls-banner">
        <div class="heading">
            <h1>đặt lịch hẹn</h1>
        </div>
        <div class="container_1">
            <div class="heading">
                <h2>Vui lòng nhập thông tin bệnh nhân</h2>
                <p>Điều vào phiếu bên dưới, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất</p>
            </div>
            <div class="agile-form">
                <form action="/" method="post">
                    <ul class="field-list">
                        <li>
                            <label class="form-label">
                            Họ tên
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input">
                                <input type="text" name="patient_name" placeholder="Nhập tên người bệnh" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Giới tính
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input">
                                <select class="form-dropdown" name="gender" required>
                                    <option value="">&nbsp;</option>
                                    <option value="Male"> Nam </option>
                                    <option value="Female"> Nữ </option>
                                    <option value="Transgender"> Khác </option>
                                </select>
                            </div>
                        <li>
                        <li>
                            <label class="form-label">
                                Số điện thoại
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input">
                                <input type="text" name="mobile_number" placeholder="Nhập số điện thoại" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                              Ngày sinh
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input dob">
                                <span class="form-sub-label">
                                    <select name="day" class="day">
                                        <option>&nbsp;</option>
                                        <option value="1"> 1 </option>
                                        <option value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                        <option value="4"> 4 </option>
                                        <option value="5"> 5 </option>
                                        <option value="6"> 6 </option>
                                        <option value="7"> 7 </option>
                                        <option value="8"> 8 </option>
                                        <option value="9"> 9 </option>
                                        <option value="10"> 10 </option>
                                        <option value="11"> 11 </option>
                                        <option value="12"> 12 </option>
                                        <option value="13"> 13 </option>
                                        <option value="14"> 14 </option>
                                        <option value="15"> 15 </option>
                                        <option value="16"> 16 </option>
                                        <option value="17"> 17 </option>
                                        <option value="18"> 18 </option>
                                        <option value="19"> 19 </option>
                                        <option value="20"> 20 </option>
                                        <option value="21"> 21 </option>
                                        <option value="22"> 22 </option>
                                        <option value="23"> 23 </option>
                                        <option value="24"> 24 </option>
                                        <option value="25"> 25 </option>
                                        <option value="26"> 26 </option>
                                        <option value="27"> 27 </option>
                                        <option value="28"> 28 </option>
                                        <option value="29"> 29 </option>
                                        <option value="30"> 30 </option>
                                        <option value="31"> 31 </option>
                                    </select>
                                    <label class="form-sub-label1"> Ngày </label>
                                </span>
                                <span class="form-sub-label">
                                    <select name="month">
                                        <option>&nbsp;</option>
                                        <option value="January"> Tháng 1 </option>
                                        <option value="February"> Tháng 2 </option>
                                        <option value="March"> Tháng 3 </option>
                                        <option value="April"> Tháng 4 </option>
                                        <option value="May"> Tháng 5 </option>
                                        <option value="June"> Tháng 6 </option>
                                        <option value="July"> Tháng 7 </option>
                                        <option value="August"> Tháng 8 </option>
                                        <option value="September"> Tháng 9 </option>
                                        <option value="October"> Tháng 10 </option>
                                        <option value="November"> Tháng 11 </option>
                                        <option value="December"> Tháng 12 </option>
                                    </select>
                                    <label class="form-sub-label1"> Tháng </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" class="year" name="year" placeholder=" Nhập năm" required>
                                    <label class="form-sub-label1"> Năm </label>
                                </span>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Địa chỉ
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input add">
                                <span class="form-sub-label">
                                    <input type="text" name="street_address" placeholder=" " required>
                                    <label class="form-sub-label1"> Tên đường </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" name="street_address2" placeholder=" " required>
                                    <label class="form-sub-label1"> Đường 2 </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" name="city" placeholder=" " required>
                                    <label class="form-sub-label1"> Thành phố </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" name="state" placeholder=" " required>
                                    <label class="form-sub-label1"> Tỉnh/Thành phố </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" name="zipcode" placeholder=" " required>
                                    <label class="form-sub-label1">  Zip Code </label>
                                </span>
                                <span class="form-sub-label">
                                    <input type="text" name="country" placeholder=" " required>
                                    <label class="form-sub-label1">Tên Nước </label>
                                </span>
                            </div>
                        </li>
                        <li>
                            <label class="form-label">
                                Địa chỉ E-Mail
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input">
                                <input type="email" name="email" placeholder="myname@example.com" required>
                            </div>
                        </li>
                        <li>
                            <label class="form-label1">
                                Các triệu chứng của người bệnh
                            </label>
                            <div class="form-input2">
                                <textarea rows="5" cols="20" name="textarea"></textarea>

                            </div>
                        </li>
                        <li class="last-type">
                            <label class="form-label1">
                                Chọn dịch vụ bạn yêu cầu
                                <span class="form-required"> * </span>
                            </label>
                            <div class="form-input2">
                                <input type="checkbox" name="test1"><label class="type-of-test">Kiểm Tra Tim</label>
                                <input type="checkbox" name="test2"><label class="type-of-test">Kiểm Tra Mắt</label>
                                <input type="checkbox" name="test3"><label class="type-of-test">Kiểm Tra Thính Giác</label>
                                <input type="checkbox" name="test4"><label class="type-of-test">Xét Nghiệm Máu</label>
                                <input type="checkbox" name="test5"><label class="type-of-test">Tư Vấn</label>
                                <input type="checkbox" name="test6"><label class="type-of-test">Chăm Sóc Da</label>
                            </div>
                        </li>
                    </ul>
                    <input type="submit" value="Đặt Lịch">
                </form>
            </div>
        </div>
    </div>
@endsection
