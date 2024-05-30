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
        .introduce{
            margin-left: 50px;
        }
    </style>
@endsection

@section('main')
    <div class="title" style="margin-left: 20px">
        <h3>Giới thiệu</h3>
    </div>
    <br>
    <div class="introduce">

        <p><b>Chuỗi cửa hàng Doan-Store là chuỗi cửa hàng giày lớn trên toàn quốc</b><p>
        <p>Dù mới chỉ được thành lập cách đây 3 năm, tuy nhiên, cửa hàng đẫ được mở rộng thêm nhiều chi nhánh trên toàn miền bắc</p>
        <p>Các chi nhánh trên toàn quốc đều đảm bảo về uy tín, giá cả cũng như chất lượng sản phẩm</p>
        <p>Với công sức mà các chủ cửa hàng đã đặt ra thì đây luôn là điểm đến hàng đầu dành cho những người chơi giày sành điệu</p>
        <img src="{{asset('assets/images/users/chgiay1.jpg')}}" alt="cuahang" style="width: 300px">
        <img src="{{asset('assets/images/users/chgiay2.jpg')}}" alt="cuahang" >
        <img src="{{asset('assets/images/users/chgiay3.jpg')}}" alt="cuahang" style="width: 300px">
    </div>
@endsection