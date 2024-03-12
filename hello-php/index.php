<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h1, h2 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: black;
            font-size: 32pt;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #85FFBD;
            background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div>
        <h1>Hello World</h1>
        <h2><?= $_ENV['INSTANCE'] ?></h2>
    </div>
</body>
</html>