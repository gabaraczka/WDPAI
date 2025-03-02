<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
    <style>
        body {
            background-color: #282c34;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        h1 {
            font-size: 3em;
            animation: fadeIn 2s ease-in-out, colorChange 5s infinite alternate;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes colorChange {
            0% {
                color: #ff6f61;
            }
            25% {
                color: #ffcc00;
            }
            50% {
                color:rgb(88, 5, 75);
            }
            75% {
                color: #00bcd4;
            }
            100% {
                color: #9c27b0;
            }
        }
    </style>
</head>
<body>
<?php echo "<h1>Hello world 💪</h1>"; ?>
</body>
</html>