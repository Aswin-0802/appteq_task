<?php
// sidebar.php
?>
<div class="sidebar">
    <div class="search-container">
        <input type="text" class="search-box" id="search" placeholder="Search symbol..." onkeyup="filter()">
        <span class="search-icon">🔍</span>
    </div>
    <div class="tab-container">
        <div class="tab active-tab" id="favorites-tab" onclick="switchTab('favorites')">Favorites</div>
        <div class="tab" id="all-symbols-tab" onclick="switchTab('all-symbols')">All Symbols</div>
    </div>

    <!-- Favorites Symbols Section -->
    <div class="symbol-list" id="favorites-list">
        <ul>
            <li class="symbol-item">BTCUSD <span>65,610.65</span></li>
            <li class="symbol-item">AUDCAD <span>0.90669</span></li>
            <li class="symbol-item">NGAS <span>2.728</span></li>
            <li class="symbol-item">XAUUSD <span>2,324.16</span></li>
        </ul>
    </div>

    <!-- All Symbols Section -->
    <div class="symbol-list" id="all-symbols-list" style="display: none;">
        <ul>
            <li class="symbol-item">BTCUSD <span>65,610.65</span></li>
            <li class="symbol-item">AUDCAD <span>0.90669</span></li>
            <li class="symbol-item">NGAS <span>2.728</span></li>
            <li class="symbol-item">XAUUSD <span>2,324.16</span></li>
            <li class="symbol-item">EURUSD <span>1.1023</span></li>
            <li class="symbol-item">GBPUSD <span>1.2345</span></li>
            <li class="symbol-item">USDJPY <span>109.85</span></li>
            <li class="symbol-item">OILUSD <span>74.90</span></li>
            <li class="symbol-item">SPX500 <span>4,133.25</span></li>
            <li class="symbol-item">DAX30 <span>15,100.50</span></li>
        </ul>
    </div>
</div>

<script>
    // JavaScript to switch between tabs
    function switchTab(tab) {
        // Show or hide the symbol lists based on selected tab
        if (tab === 'favorites') {
            document.getElementById('favorites-list').style.display = 'block';
            document.getElementById('all-symbols-list').style.display = 'none';
        } else if (tab === 'all-symbols') {
            document.getElementById('favorites-list').style.display = 'none';
            document.getElementById('all-symbols-list').style.display = 'block';
        }

        // Update the active tab styling
        const tabs = document.querySelectorAll(".tab");
        tabs.forEach(tab => tab.classList.remove("active-tab"));
        document.getElementById(tab + '-tab').classList.add("active-tab");
    }

    // Initial tab is "Favorites"
    switchTab('favorites');

    // Search functionality to filter symbols
    function filter() {
        const searchQuery = document.getElementById('search').value.toLowerCase();
        const symbolItems = document.querySelectorAll('.symbol-item');
        
        symbolItems.forEach(item => {
            const symbolText = item.textContent.toLowerCase();
            if (symbolText.includes(searchQuery)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>
