<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
  <thead>
  <tr>
      <th>STT</th>
      <th>Họ và tên</th>
      <th>Số điện thoại</th>
      <th>Email</th>
  </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{ $customer->id}}</td>
        <td>{{ $customer->name}}</td>
        <td>{{ $customer->phone}}</td>
        <td>{{ $customer->email}}</td>
    </tr>
  </tbody>
</table>
<a href="/customer/index">Quay Lại</a>
</body>
</html>
