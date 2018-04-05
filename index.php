<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
<!--Write a simple app which loops through the given $people array and displays it in a table.
//Add a button to each row which, when clicked, will alert the person's name and email. -->
</head>

<body>
<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
        <table>

            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>

            <?php foreach ($people as $value): ?>
            <tr>
                <td>
                    <?= $value['id'] ?>
                </td>
                <td>
                    <?= $value['first_name'] ?>
                </td>
                <td>
                    <?= $value['last_name'] ?>
                </td>
                <td>
                    <?= $value['email'] ?>
                </td>
                <td>
                    <button class="btnDisplay" onClick="return alert('<?= 'Person Name: ' .$value['first_name'] .' '. $value['last_name'] .', Email: '. $value['email']?>')">Display</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
</body>

</html>