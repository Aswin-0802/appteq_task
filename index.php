<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Dashboard</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { display: flex; flex-direction: row; height: 100vh; background: #f4f4f4; }
        .sidebar { width: 280px; background: #fff; padding: 15px; overflow-y: auto; border-right: 1px solid #ddd; }
        .search-box { padding: 8px; border: 1px solid #ccc; border-radius: 4px; width: 100%; margin-bottom: 10px; }
        .tab-container { display: flex; justify-content: space-between; margin-bottom: 10px; }
        .tab { cursor: pointer; padding: 8px; flex: 1; text-align: center; border-bottom: 2px solid transparent; }
        .active-tab { border-bottom: 2px solid #007bff; }
        .symbol-list { list-style: none; }
        .symbol-item { display: flex; justify-content: space-between; padding: 5px 0; }
        .main-content { flex-grow: 1; padding: 15px; }
        .table-container { overflow-x: auto; background: #fff; padding: 10px; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #eee; }
        .buy { color: green; font-weight: bold; }
        .sell { color: red; font-weight: bold; }
        .profit { color: green; }
        .loss { color: red; }
        .actions { margin-top: 10px; display: flex; gap: 10px; }
        .actions button { padding: 8px 12px; cursor: pointer; border: none; background: #007bff; color: white; border-radius: 4px; }
        .actions button:hover { background: #0056b3; }
        .balance-container { background: #fff; padding: 10px; margin-top: 10px; border-radius: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.1); display: flex; justify-content: space-between; }
        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; height: 200px; overflow-x: auto; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <input type="text" class="search-box" placeholder="Search symbol...">
        <div class="tab-container">
            <div class="tab active-tab">Favorites</div>
            <div class="tab">All Symbols</div>
        </div>
        <ul class="symbol-list">
            <li class="symbol-item">BTCUSD <span>65,610.65</span></li>
            <li class="symbol-item">AUDCAD <span>0.90669</span></li>
            <li class="symbol-item">NGAS <span>2.728</span></li>
            <li class="symbol-item">XAUUSD <span>2,324.16</span></li>
        </ul>
    </div>
    <div class="main-content">
        <h2>Positions (5)</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Time</th>
                    <th>Symbol</th>
                    <th>Order</th>
                    <th>Lot</th>
                    <th>Price</th>
                    <th>Partial</th>
                    <th>SL</th>
                    <th>TP</th>
                    <th>Swap</th>
                    <th>LTP</th>
                    <th>Profit</th>
                </tr>
                <tr>
                    <td>961</td>
                    <td>2024-06-17 13:35:28</td>
                    <td>AUDCAD</td>
                    <td class="sell">SELL</td>
                    <td>0.01</td>
                    <td>0.90658</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0.90695</td>
                    <td class="loss">-0.27</td>
                </tr>
                <tr>
                    <td>960</td>
                    <td>2024-06-17 13:35:32</td>
                    <td>AUDCAD</td>
                    <td class="buy">BUY</td>
                    <td>0.01</td>
                    <td>0.90685</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0.90695</td>
                    <td class="loss">-0.12</td>
                </tr>
                <tr>
                    <td>963</td>
                    <td>2024-06-17 13:35:24</td>
                    <td>BTCUSD</td>
                    <td class="buy">BUY</td>
                    <td>0.01</td>
                    <td>65,713.30</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>65,610.65</td>
                    <td class="loss">-1.03</td>
                </tr>
            </table>
        </div>
        <div class="balance-container">
            <p><strong>Balance:</strong> 816.12</p>
            <p><strong>Equity:</strong> 813.47</p>
            <p><strong>Used Margin:</strong> 28.61</p>
            <p><strong>Free Margin:</strong> 784.86</p>
            <p><strong>Margin Level:</strong> 2843.31%</p>
        </div>
        <div class="actions">
            <button>Cancel All Orders</button>
            <button>Cancel Limit Orders</button>
            <button>Cancel Stop Orders</button>
            <button>Close All Positions</button>
            <button>Close Profitable Positions</button>
            <button>Close Losing Positions</button>
        </div>
    </div>
</body>
</html>
