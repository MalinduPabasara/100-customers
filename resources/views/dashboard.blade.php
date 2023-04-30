<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>

    <h2 class="customer-count">There are {{ $count }} customers in the table.</h2>


<table id="customers" class="display">
    <thead>
    <tr>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->cust_name }}</td>
            <td>{{ $customer->cust_dob }}</td>
            <td>{{ $customer->cust_email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<style>
    .customer-count {
        position: relative;
        float: right;
        padding: 10px;
        background-color: #f8f9fa;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>

    //I userd jquery tables for this
    $(document).ready(function () {
        $('#customers').DataTable();
    });
</script>
</body>
</html>
