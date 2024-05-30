@extends('layouts.user-layout')

@section('style')
    <style>
        .home {
            min-height: 300px;
            padding-left: 20px;
        }

        .product-list {
            border: 1px solid #ccc;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }

        .product-list .item {
            text-decoration: none;
            color: #333;
        }

        .product-list .item .info {
            padding: 5px 7px;
        }

        .product-list .item .name {
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Số dòng muốn hiển thị */
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 5px;
            height: 40px;

        }

        .product-list .item .price span:nth-child(1) {
            text-decoration: line-through;
        }

        .product-list .item .price span:nth-child(2) {
            color: red;
            font-weight: 500;
        }

        .product-list .item img {
            width: 100%;
            height:200px;
        }

        .title {
            position: relative;
            margin-bottom: 20px;
            
            padding-bottom: 3px;
            color: blue;
        }

        .title::after {
            position: absolute;
            content: '';
            display: block;
            clear: both;
            width: 100%;
            height: 3px;
            background: #ccc;
            top: 100%;
        }

        .title::before {
            position: absolute;
            z-index: 1;
            content: '';
            display: block;
            clear: both;
            width: 300px;
            height: 3px;
            background: red;
            top: 100%;
        }

    </style>
@endsection

@section('main')
<div class="contact">
<div class="address" style="margin-left: 20px">
    <h3>Địa chỉ liên hệ</h3>
</div>
<br>
            <div>
                <div class="contact-footer-title" style="text-align:left; margin-left: 20px"><b>Địa chỉ liên hệ gồm 3 cửa hàng mở rộng khắp miền bắc</b></div>
                <div class="contact-bottom-footer layout-center">
        <div class="contact-container">
            <div>
                <div class="contact-footer-title">Cơ sở 1</div>
                <div class="list">
                    <p><i class="fa-solid fa-house"></i>Đặt tại số 132/78, Nguyên Xá, Bắc Từ Liêm, Hà Nội</p>
                    <img src="{{asset('assets/images/users/chgiay1.jpg')}}" alt="cuahang">
                </div>
            </div>
            <div>
                <div class="contact-footer-title">Cở sở 2</div>
                <div class="list">
                    <p><i class="fa-solid fa-house"></i>Số nhà 20, ngõ 91, đường Trần Duy Hưng, Cầu Giấy, Hà Nội</p>
                    <img src="{{asset('assets/images/users/chgiay2.jpg')}}" alt="cuahang" >
                </div>
            </div>
            <div>
                <div class="contact-footer-title">Cở sở 3</div>
                <div class="list">
                    <p><i class="fa-solid fa-house"></i></i>Ninh Giang, Hải Dương</p>
                    <img src="{{asset('assets/images/users/chgiay3.jpg')}}" alt="cuahang">
                </div>
            </div>
        </div>
    </div>
                </div>
</div>
@endsection