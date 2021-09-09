<style>
    body { 
        background: #FAF5EB;
        font-family: 'ABeeZee','Kanit', sans-serif;
    }

    .navbar {background-color: #CEB888;}

    .navbar a {
        color: #000000;
        border-bottom: 2px solid transparent;
    }

    .navbar-brand {cursor: context-menu;}

    .navbar-toggler {
        background-color: #F5E8DC;
        color: #656565;
        padding: 5px 5px 2px 5px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
    }

    .navbar-toggler:hover {
        background-color: #F5E8DC;
        color: #656565;
    }

    .nav-item a {font-size: 16px;}

    .nav-item a:hover {border-bottom: 2px solid #000000;}

    button:focus {outline: none;}
</style>
<nav id="navbar" class="navbar navbar-expand-md fixed-top py-1">
    <a class="navbar-brand" href="#"><img src="img/logo/rspg-pnru.png" class="logo">MUSHROOMFINDER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <i class='fas fa-bars'></i>
    </button>
    <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">หน้าหลัก</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php">รายชื่อเห็ด</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signin.php">ลงชื่อเข้าสู่ระบบ</a>
            </li>
        </ul>
    </div>
</nav>