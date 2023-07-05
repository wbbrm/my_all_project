<style>
    body { 
        background: #FAF5EB;
        font-family: 'ABeeZee','Kanit', sans-serif;
    }

    button:focus {outline: none;}

    .top-nav {background-color: #CEB888;}

    .side-nav {background-color: #CEB888;}

    a.item {
        display: block;
        font-size: 16px;
        padding: 10px 20px;
        text-decoration: none;
    }

    a.item:hover {
        background-color: #F5E8DC;
        color: #656565;
    }
    .line {
        
    }
</style>
<div class="top-nav w3-bar w3-top w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text" onclick="w3_open();"><i class='fas fa-bars'></i>&nbspMenu</button>
    <span class="w3-bar-item w3-right">MushroomFinder&nbsp&nbsp<img src="img/logo/logonoshadow.png" width="30"></span>
</div>
<nav class="side-nav w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:200px;" id="sidenav"><br>
    <div class="w3-container w3-row">
        <div class="w3-col w3-bar">
            <?php echo $_SESSION['user']; ?>
        </div>
    </div>
    <hr>
    <div class="w3-bar-block">
        <a href="" class="item w3-hide-large" onclick="w3_close()" title="close menu">Close Menu&nbsp<i class="fa fa-close"></i></a>
        <a href="dashboard.php" class="item">หน้าหลัก</a>
        <a href="dashboard.php#tablemushroom" class="item">ตารางเห็ด</a>
        <a href="dashboard.php#tablelocation" class="item">ตารางบริเวณที่พบ</a>
        <a href="add_family.php" class="item">ตารางวงศ์เห็ด</a>
        <a href="add_mushroom.php" class="item">เพิ่มข้อมูลเห็ด</a>
        <a href="#logout" class="item" data-toggle="modal">ออกจากระบบ</a>
    </div>
</nav>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="overlay"></div>

<script>
    var sidenav = document.getElementById("sidenav");
    var overlay = document.getElementById("overlay");

    function w3_open() {
        if (sidenav.style.display === 'block') {
            sidenav.style.display = 'none';
            overlay.style.display = "none";
        } else {
            sidenav.style.display = 'block';
            overlay.style.display = "block";
        }
    }

    function w3_close() {
        sidenav.style.display = "none";
        overlay.style.display = "none";
    }
</script>