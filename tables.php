<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td ,th{
            border: 2px solid #5900ff;
            text-align: center;
        }

        .table1{
            border: 2px solid rgb(255, 0, 64);
            border-collapse: collapse;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <table style="width:80%; margin-left: 50px; margin-top: 30px;" class="table2">
        <caption>Total marks</caption>
        <!--/*col group*/-->
        <colgroup>
            <col style="background-color:yellow">
            <col style="background-color:red">
            <col style="background-color: blue;">
        </colgroup>
        <tr>
            <th>Name</th>
            <th>subject</th>
            <th>Marks </th>
        </tr>
        <tr>
            <td>Sachin</td>
            <td>HTMl</td>
            <td>75</td>
        </tr>
        <tr>
            <td>saman</td>
            <td>Laravel</td>
            <td>100</td>
        </tr>
    </table>

    <table class="table1">
        <tr>
            <th>heading 01</th>
            <th>heading 02</th> 
            <th>heading 03</th>
        </tr>
        <tr>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
        <tr>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
    </table>

</body>
</html>