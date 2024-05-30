@extends('layouts.user-layout')

@section('style')
    <style>
        .main-content {
            min-height: 300px;
            padding-left: 20px;
        }

        .success_add {
            position: fixed;
            top: 70px;
            left: 50%;
            box-shadow: 0 0 5px #111;
            z-index: 10;
            border-radius: 8px;
            transform: translateX(-50%) !important;
            width: 500px;
            height: 300px;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 0 20px;
            color: green;
            background: #fff;
            transition: all 0.2s ease-in-out; 
        }

        .success_add_header {
            height: 50px;
            width: 100%;
            position: relative;
        }

        .success_add_header div {
            height: 60px;
            width: 60px;
            background: #6FD649;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .success_add_body {
            color: #111;
            opacity: 0.8;
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 100%;
            margin-top: 10px;
        }

        .success_add_body h3 {
            font-size: 30px;
            font-weight: 500;
        }

        .success_add_body p {
            margin-top: 7px;
        }

        .closeAdd {
            width: 100%;
            height: 40px;
            margin-top: 100px;
            border: none;
            font-weight: 500;
            background: #6FD649;
            color: #fff;
            border-radius: 5px;
        }

        .closeAdd:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        .success_close {
            width: 50px;
            height: 50px;
            overflow: hidden;
            opacity: 0;
            pointer-events: none;
        }


        .error_add {
            position: fixed;
            top: 70px;
            left: 50%;
            box-shadow: 0 0 5px #111;
            z-index: 10;
            border-radius: 8px;
            transform: translateX(-50%) !important;
            width: 500px;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 0 20px;
            color: green;
            background: #fff;
            transition: all 0.2s ease-in-out; 
            padding-bottom: 13px;
        }

        .error_add_header {
            height: 50px;
            width: 100%;
            position: relative;
        }

        .error_add_header div {
            height: 60px;
            width: 60px;
            background: red;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            border-radius: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .error_add_body {
            color: #111;
            opacity: 0.8;
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }

        .error_add_body h3 {
            font-size: 30px;
            font-weight: 500;
        }

        .error_add_body p {
            margin-top: 7px;
        }

        .closeAdd1 {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            border: none;
            font-weight: 500;
            background: red;
            color: #fff;
            border-radius: 5px;
        }

        .closeAdd1:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        .error_close {
            width: 50px;
            height: 50px;
            overflow: hidden;
            opacity: 0;
            pointer-events: none;
        }


    </style>
@endsection

@section('main')
    <div class="main-content">
            @if(!empty(session('success'))) 
                <div class = "success_add">
                    <div class = "success_add_header">
                        <div><i class="fa-solid fa-check"></i></div>
                    </div>
                    <div class = "success_add_body">
                        <h3>THÀNH CÔNG</h3>
                        <p>Đăng ký tài khoản thành công!</p>
                        <button class = "closeAdd">OK</button>
                    </div>
                </div>
            @else 
                <div class = "success_add success_close">
                    <div class = "success_add_header">
                    </div>
                    <div class = "success_add_body">
                        <button class = "closeAdd">OK</button>
                    </div>
                </div>
            @endif

            @if($errors->any()) 
                <div class = "error_add">
                    <div class = "error_add_header">
                        <div><i class="fa-solid fa-check"></i></div>
                    </div>
                    <div class = "error_add_body">
                        <h3>THẤT BẠI</h3>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        <button class = "closeAdd1">OK</button>
                    </div>
                </div>
            @else 
                <div class = "error_add error_close">
                    <div class = "error_add_header">
                    </div>
                    <div class = "error_add_body">
                        <button class = "closeAdd">OK</button>
                    </div>
                </div>
            @endif
        <div class="auth">
            <div class="title">
                <h3>Đăng ký thành viên</h3>
            </div>
            <form action="{{route('handle-register')}}" enctype = "multipart/form-data" method = "POST">
                <table>
                    <tr>
                        <td><label for="">Họ và Tên</label></td>
                        <td>
                            <input name = "name" type="text" placeholder="VD: Nguyễn Văn A">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Email</label></td>
                        <td>
                            <input name = "email" type="text" placeholder="VD: vana123@gmai.com">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Password</label></td>
                        <td>
                            <input name = "password" type="password" placeholder="********">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Địa chỉ</label></td>
                        <td>
                            <input name = "address" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Số điện thoại</label></td>
                        <td>
                            <input name = "phone_number" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Avatar</label></td>
                        <td>
                            <input name = "upload_image" type="file">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-register">Đăng ký</button>
                        </td>
                    </tr>
                </table> 
                @method('POST') 
                @csrf
            </form>
        </div>
    </div>
@endsection