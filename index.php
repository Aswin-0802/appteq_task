<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<div id="sidebar-container">
	<?php include('sidebar.php'); ?>
</div>
<div class="main-sidebar">
<div class="price-display-row">
	<div class="price-display-column" style="border-right:1px solid #999999">
		<h2>XAUUSD</h2>
		<h5>$2324.16</h5>
	</div>
	 <div>
		&nbsp;
	</div>
	<div class="price-display-column">
		<h2>BTCUSD</h2>
		<h5>$65190.65</h5>
	</div>
</div>

<!-- Search Bar with Icon -->
<div class="search-bar">
	<i class="fas fa-search search-icon"></i>
	<input type="text" class="search-box" id="search" placeholder="Search">
</div>

<div class="segment-control">
	<div class="segment-btn active" onClick="showSymbols('favorites')">Favorites</div>
	<div class="segment-btn" onClick="showSymbols('all')">All Symbols</div>
</div>

<div class="symbol-container">
	<!-- Favorites Section -->
	<div class="symbol-section active symbol-list" id="favorites-section">
		<ul class="symbol-list">
			<li>
				<span class="symbol-name">BTCUSD</br><small style="margin-top:0.5px">-57% ][ 1185 </small></span>
				<span class="price">65610.65</br><small style="margin-top:0.5px">L:65432.71</small></span>
				<span class="price neutral">65622.50</br><small style="margin-top:0.5px">H:66893.29</small></span>
			</li>
			<li>
				<span class="symbol-name">AUDCAD</br><small style="margin-top:0.5px">-0.16% ][ 26 </small></span>
				<span class="price">0.90669</br><small style="margin-top:0.5px">L:0.9057</small></span>
				<span class="price neutral">0.90695</br><small style="margin-top:0.5px">H:0.90865</small></span>
			</li>
			<li>
				<span class="symbol-name">BRENT</br><small style="margin-top:0.5px">-0.86% ][ 11 </small></span>
				<span class="price">83.26</br><small style="margin-top:0.5px">L:82.2</small></span>
				<span class="price neutral">83.37</br><small style="margin-top:0.5px">H:2.747</small></span>
			</li>
			<li>
				<span class="symbol-name">NGAS</br><small style="margin-top:0.5px">-0.29% ][ 20 </small></span>
				<span class="price">2.728</br><small style="margin-top:0.5px">L:2.696</small></span>
				<span class="price neutral">2.748</br><small style="margin-top:0.5px">H:2.873</small></span>
			</li>
			<li>
				<span class="symbol-name">NGAScash</br><small style="margin-top:0.5px">0.32% ][ 38 </small></span>
				<span class="price">2.852</br><small style="margin-top:0.5px">L:2.821</small></span>
				<span class="price neutral">2.890</br><small style="margin-top:0.5px">H:79.11</small></span>
			</li>
			<li>
				<span class="symbol-name">WTI</br><small style="margin-top:0.5px">1.01% ][ 12 </small></span>
				<span class="price">79.11</br><small style="margin-top:0.5px">L:78.3</small></span>
				<span class="price neutral">79.23</br><small style="margin-top:0.5px">H:79.03</small></span>
			</li>
			<li>
				<span class="symbol-name">WTIcash</br><small style="margin-top:0.5px">0.98% ][ 103 </small></span>
				<span class="price">79.03</br><small style="margin-top:0.5px">L:77.97</small></span>
				<span class="price neutral">80.06</br><small style="margin-top:0.5px">79.03</small></span>
			</li>
			<li>
				<span class="symbol-name">XAGUSD</br><small style="margin-top:0.5px">-0.16% ][ 23 </small></span>
				<span class="price">29.452</br><small style="margin-top:0.5px">L:29.021</small></span>
				<span class="price neutral">289.475</br><small style="margin-top:0.5px">H:29.557</small></span>
			</li>
			<li>
				<span class="symbol-name">XAUUSD</br><small style="margin-top:0.5px">-0.21% ][ 28 </small></span>
				<span class="price">2324.16</br><small style="margin-top:0.5px">L:2315.15</small></span>
				<span class="price neutral">2324.44</br><small style="margin-top:0.5px">H:2328.99</small></span>
			</li>
			<li>
				<span class="symbol-name">XPDUSD</br><small style="margin-top:0.5px">-0.66% ][ 546 </small></span>
				<span class="price">887.95</br><small style="margin-top:0.5px">L:884.1</small></span>
				<span class="price neutral">893.41</br><small style="margin-top:0.5px">H:896.34</small></span>
			</li>
			<li>
				<span class="symbol-name">XPTUSD</br><small style="margin-top:0.5px">0.72% ][ 34 </small></span>
				<span class="price">964.96</br><small style="margin-top:0.5px">L:947.48</small></span>
				<span class="price neutral">965.30</br><small style="margin-top:0.5px">H:967.68</small></span>
			</li>
			<li>
				<span class="symbol-name">AUDCHF</br><small style="margin-top:0.5px">-0.06% ][ 25 </small></span>
				<span class="price">0.58869</br><small style="margin-top:0.5px">L:0.58679</small></span>
				<span class="price neutral">0.588894</br><small style="margin-top:0.5px">H:0.5895</small></span>
			</li>
			<li>
				<span class="symbol-name">AUDJPY</br><small style="margin-top:0.5px">-0.03% ][ 25 </small></span>
				<span class="price">104.151</br><small style="margin-top:0.5px">L:103.59</small></span>
				<span class="price neutral">104.176</br><small style="margin-top:0.5px">H:104.185</small></span>
			</li>
		</ul>
	</div>
	
	<!-- All Symbols Section -->
	<div class="symbol-section symbol-list" id="all-section">
		<ul class="symbol-list">
			<li>
				<span class="symbol-name">BTCUSD</span>
				<span class="price up">$65,950.15</span>
				<span class="price up">+1.25%</span>
			</li>
			<li>
				<span class="symbol-name">ETHUSD</span>
				<span class="price up">$3,312.45</span>
				<span class="price up">+2.15%</span>
			</li>
			<li>
				<span class="symbol-name">XAUUSD</span>
				<span class="price up">$2,324.16</span>
				<span class="price up">+0.87%</span>
			</li>
			<li>
				<span class="symbol-name">XAGUSD</span>
				<span class="price down">$26.18</span>
				<span class="price down">-0.45%</span>
			</li>
			<li>
				<span class="symbol-name">NGAS</span>
				<span class="price down">$2.312</span>
				<span class="price down">-1.15%</span>
			</li>
			<li>
				<span class="symbol-name">EURUSD</span>
				<span class="price up">$1.0915</span>
				<span class="price up">+0.12%</span>
			</li>
			<li>
				<span class="symbol-name">GBPUSD</span>
				<span class="price">$1.2632</span>
				<span class="price neutral">0.00%</span>
			</li>
		</ul>
	</div>
</div>
 <div class="pagination">
    <button class="pagination-btn">1</button>
    <button class="pagination-btn">2</button>
    <button class="pagination-btn">3</button>
    <button class="pagination-btn">4</button>
    <button class="pagination-btn">5</button>
</div>
</div>

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
			<th width="4%" height="37">ID</th>
			<th width="12%">TIME</th>
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
			<td style="border-right:1px solid #cccccc;"><p style=" font-size:10px">Balance : <strong style=" color: blue ; font-size:12px">816.12 </strong>&nbsp;&nbsp;</p> </td>
			<td style="border-right:1px solid #cccccc;"><p style=" font-size:10px">Equity : <strong style=" color: blue ;font-size:12px">813.47</strong></p></td>
			<td style="border-right:1px solid #cccccc;"><p style=" font-size:10px">Used Margin : <strong style=" color: blue ;font-size:12px">28.61</strong></p></td>
			<td style="border-right:1px solid #cccccc;"><p style=" font-size:10px">Free Margin : <strong style=" color: blue ;font-size:12px">784.86</strong></p></td>
			<td style=""><p style=" font-size:10px">Margin Level : <strong style=" color: blue ;font-size:12px">2843.31%</strong></p></td>
			<td colspan="4">&nbsp;</td>
			<td><strong style="color:red; font-size:13px">-2.65</strong></td>
		</tr>
		<tr>
		  <td height="40" colspan="12"><div align="center" style="font-size: 16px;color: #888;font-weight: bold;">No Order(s) Found</div></td>
		</tr>
	</table>
</div>
</div>

</body>
</html>
<script>
	
// for toggle
function showSymbols(segment) {
    const segmentBtns = document.querySelectorAll('.segment-btn');
    segmentBtns.forEach(btn => {
        btn.classList.remove('active');
    });

    const activeBtn = document.querySelector(`.segment-btn[onClick="showSymbols('${segment}')"]`);
    activeBtn.classList.add('active');

    const sections = document.querySelectorAll('.symbol-section');
    sections.forEach(section => {
        section.classList.remove('active');
    });

    const selectedSection = document.getElementById(`${segment}-section`);
    selectedSection.classList.add('active');
}
// for search
document.getElementById('search').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    
    const symbolNames = document.querySelectorAll('.symbol-name');
    
    symbolNames.forEach(symbol => {
        const symbolText = symbol.textContent.toLowerCase();
        
        if (symbolText.includes(searchTerm)) {
            symbol.closest('li').style.display = ''; 
        } else {
            symbol.closest('li').style.display = 'none'; 
        }
    });
});

</script>
