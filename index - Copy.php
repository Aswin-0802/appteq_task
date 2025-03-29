<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="path/to/fontawesome/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div id="sidebar-container">
        <?php include('sidebar.php'); ?>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
		 <div class="col-sm-5">
		 <h2>Positions (5)</h2>
		 </div>
			<div class="col-sm-7">
                <div class="button-container">
                    <button type="button" class="button">Cancel all orders</button>
                    <button type="button" class="button">Cancel limit order(s)</button>
                    <button type="button" class="button">Cancel stop order(s)</button>
                    <button type="button" class="button">Close all position(s)</button>
                    <button type="button" class="button">Close profitable position(s)</button>
                    <button type="button" class="button">Close losing position(s)</button>
                </div>
			</div>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th width="5%" height="37">ID</th>
                    <th width="11%">TIME</th>
                    <th width="10%">SYMBOL <i class="fas fa-sort-amount-down-alt" style="color: red;"></i></th>
                    <th width="10%">ORDER</th>
                    <th width="10%">LOT</th>
                    <th width="11%">PRICE</th>
                    <th width="14%">PARTIAL</th>
                    <th width="4%">SL</th>
                    <th width="4%">TP</th>
                    <th width="6%">SWAP</th>
                    <th width="9%">LTP</th>
                    <th width="6%">PROFIT</th>
                </tr>
                <tr>
                    <td>961</td>
                    <td>2024-06-17 13:35:28</td>
                    <td>AUDCAD</td>
                    <td><span class="label sell">SELL</span></td>
                    <td>0.01</td>
                    <td>0.90658</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0</td>
                    <td>0.90695</td>
                    <td class="loss">-0.27</td>
                </tr>
                <tr>
                    <td>962</td>
                    <td>2024-06-17 13:35:32</td>
                    <td>AUDCAD</td>
                    <td><span class="label buy">BUY</span></td>
                    <td>0.01</td>
                    <td>0.90685</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0</td>
                    <td>0.90669</td>
                    <td class="loss">-0.12</td>
                </tr>
                <tr>
                    <td>960</td>
                    <td>2024-06-17 13:25:24</td>
                    <td>BTCUSD</td>
                    <td><span class="label buy">BUY</span></td>
                    <td>0.01</td>
                    <td>65,713.30</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0</td>
                    <td>65610.65</td>
                    <td class="loss">-1.03</td>
                </tr>
                <tr>
                    <td>963</td>
                    <td>2024-06-17 13:25:36</td>
                    <td>NGAS</td>
                    <td><span class="label buy">BUY</span></td>
                    <td>0.01</td>
                    <td>2.742</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0</td>
                    <td>2.728</td>
                    <td class="loss">-1.40</td>
                </tr>
                <tr>
                    <td height="38">964</td>
                    <td>2024-06-17 13:25:42</td>
                    <td>XAUUSD</td>
                    <td><span class="label sell">SELL</span></td>
                    <td>0.01</td>
                    <td>2324.61</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>0</td>
                    <td>2324.44</td>
                    <td class="profit">0.17</td>
                </tr>
				 <tr style="background-color:#efe8e8">
                    <td height="45" colspan="2">&nbsp;</td>
                    <td style="border-right:1px solid #cccccc;"><p>Balance : <strong style=" color: blue ; font-size:16px">816.12 </strong>&nbsp;&nbsp</p> </td>
                    <td style="border-right:1px solid #cccccc;"><p>Equity : <strong style=" color: blue ;font-size:16px">813.47</strong></p></td>
                    <td style="border-right:1px solid #cccccc;"><p>Used Margin : <strong style=" color: blue ;font-size:16px">28.61</strong></p></td>
                    <td style="border-right:1px solid #cccccc;"><p>Free Margin : <strong style=" color: blue ;font-size:16px">784.86</strong></p></td>
					<td style=""><p>Margin Level : <strong style=" color: blue ;font-size:16px">2843.31%</strong></p></td>
                    <td colspan="4">&nbsp;</td>
                    <td><strong style="color:red">-2.65</strong></td>
                </tr>
                <tr>
                  <td height="46" colspan="12"><div align="center" style="font-size: 16px;color: #888;font-weight: bold;">No Order(s) Found</div></td>
                </tr>
            </table>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
