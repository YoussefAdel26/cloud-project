<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            padding: 10px;
            background-color: #ccc;
            width: 150px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <h1>Display Data</h1>
    <a href="index.html" >Back to home</a>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>CGPA</th>
        </tr>
        <tr>
        <td><?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?></td>
            <td><?php echo isset($_GET['fname']) ? $_GET['fname'] : ''; ?></td>
            <td><?php echo isset($_GET['lname']) ? $_GET['lname'] : ''; ?></td>
            <td><?php echo isset($_GET['age']) ? $_GET['age'] : ''; ?></td>
            <td><?php echo isset($_GET['cgpa']) ? $_GET['cgpa'] : ''; ?></td>
        </tr>
    </table>
 

</body>
</html>
