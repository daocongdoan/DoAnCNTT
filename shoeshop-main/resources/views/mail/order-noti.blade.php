
</html><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Notification</title>
    <style>
        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        /* Container styles */
        .invoice-main {
            width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }
        
        /* Header styles */
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        
        .invoice-title {
            margin-top: 10px;
        }
        
        /* Body content styles */
        .invoice-body {
            margin-bottom: 20px;
        }
        
        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        
        .invoice-info h3 {
            margin-bottom: 10px;
        }
        
        .left, .right {
            width: 45%;
        }
        
        /* Product list styles */
        .invoice-product-list {
            margin-bottom: 20px;
        }
        
        .uom {
            margin-bottom: 10px;
            font-style: italic;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        /* Footer styles */
        .invoice-footer {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-style: italic;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        
        .invoice-footer div {
            width: 33%;
        }
        
        .invoice-footer h4 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="invoice-main">
        <div class="invoice-header">
            <div class="logo">
                Shoe Shop
            </div>
            <div class="invoice-title">
                <h3>HÓA ĐƠN</h3>
                <p><i>Ngày: {{date('d/m/Y')}}</i></p>
            </div>
        </div>
        <div class="invoice-body">
            <div class="invoice-info">
                <div class="left">
                    <h3>HÓA ĐƠN CHO:</h3>
                    <p>Họ tên: {{$order -> full_name}}</p>
                    <p>Điện thoại: {{$order -> phone_number}}</p>
                    <p>Email: {{$order -> email}}</p>
                </div>
                <div class="right">
                    <h3>THANH TOÁN CHO:</h3>
                    <p>Công ty TNCH Shoe Shop</p>
                    <p>langthang@shoeshop.vn</p>
                    <p>shoeshop.vn</p>
                </div>
            </div>
            <div class="invoice-product-list">
                <p class = "uom">Đơn vị tính: Đồng</p>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Tên Sản Phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_list as $item)
                            <tr>
                                <td>[{{$item -> size}}] {{$item -> product -> title}} ({{$item -> color_code}})</td>
                                <td>{{$item -> quantity}}</td>
                                <td>{{number_format($item -> item_price)}} đ</td>
                                <td>{{number_format($item -> item_price * $item -> quantity)}} đ</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">TỔNG CỘNG</th>
                            <td>{{number_format($total_amount)}} đ</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="invoice-footer">
            <div>
                <p>Vui lòng email đến langthang@shoeshop.vn nếu bạn có câu hỏi hoặc thắc mắc về hóa đơn.</p>
                <p><strong><i>Cảm ơn sự ủng hộ của bạn!</i></strong></p>
            </div>
            <div>
                <p>19001009</p>
                <p>langthang@shoeshop.vn</p>
                <p>shoeshop.vn</p>
            </div>
            <div>
                <h4>Books Store</h4>
                <p>009 Đường Bát Ngát, Thành phố Mênh Mông</p>
            </div>
        </div>
    </div>
</body>
</html>