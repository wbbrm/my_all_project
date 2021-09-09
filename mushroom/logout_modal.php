<style>
    h3 {
        color: #583D28;
        font-family: 'ABeeZee','Kanit', sans-serif;
    }

    .modal-content {background-color: #F5E8DC;}

    .modal-footer, .modal-header {border: none;}

    .canclebtn {
        background: #583D28;
        border: none;
        border-radius: 5px;
        color: #FFFFFF;
        font-family: 'ABeeZee','Kanit', sans-serif;
        padding: 5px 10px 2px 10px;
        text-align: center;
        text-decoration: none;
    }
    .canclebtn:hover {background: red;}

    .confirmbtn:hover {background: green;}
</style>
<div class="modal fade" id="logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>ต้องการออกจากระบบหรือไม่ ?</h3>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-footer">
                <form action="logout.php" method="post">
                    <button class="confirmbtn" type="submit" style="font-size: 20px">ออกจากระบบ</button>
                </form>
                <button class="canclebtn" data-dismiss="modal" style="font-size: 20px">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>