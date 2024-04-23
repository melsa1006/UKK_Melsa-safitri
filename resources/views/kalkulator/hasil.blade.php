<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MELSA SAFITRI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #CFECEC;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #BDEDFF;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 200px;
            border: 1`px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin: 0 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #B3D9D9;
            color: black;
            font-size: 20px;
            transition: background-color 0.35;

        }

        input[type="submit"]:hover {
            background-color: #4C;

        }
    </style>

</head>
<body>
    <div class="calculator">
    <h1><center>KALKULATOR</center></h1>
    <center>
    <form action="{{ route('proses.store') }}" method="post">
        @csrf
        Input angka pertama : <input type="number" name="a" id=""><br>
        input angka kedua : <input type="number" name="b" id=""><br>
        <input type="submit" value="tambah" name="op">
        <input type="submit" value="kurang" name="op">
        <input type="submit" value="bagi" name="op">
        <input type="submit" value="kali" name="op">
        <input type="submit" value="reset" name="op">
    </form>

    <h1>hasil : {{ $hasil }}</h1>
    </center>    
</body>
</html>