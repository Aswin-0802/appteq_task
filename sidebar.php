<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
        }
        .sidebar {
            width: 60px;
            background-color: #f4f4f4;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            position: fixed;
        }
        .sidebar a {
            text-decoration: none;
            padding: 10px;
            margin: 10px 0;
            color: #333;
            display: flex;
            justify-content: center;
        }
        .content {
            margin-left: 80px;
            padding: 20px;
            width: 100%;
        }
        .card {
            background: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 50px;
            }
            .content {
                margin-left: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">&#9776;</a>
        <a href="#">📈</a>
        <a href="#">💰</a>
        <a href="#">⚙️</a>
    </div>
    <div class="content">
        <h2>Market Overview</h2>
        <div class="card"><span>BTC/USD</span><span>65610.65</span></div>
        <div class="card"><span>AUD/CAD</span><span>0.90669</span></div>
        <div class="card"><span>BRENT</span><span>83.26</span></div>
        <div class="card"><span>NGAS</span><span>2.728</span></div>
    </div>
</body>
</html>