<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminMenu</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Just an image -->

            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30" alt="">
            </a>

            <a class="navbar-brand" href="index.html">ระบบจองห้องประชุม</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item ">
                        <a class="nav-link href=" #">
                            ปฎิทินการประชุม
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href=" addroom.php">
                            เพิ่มห้องประชุม
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            จองห้องประชุม
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="addmeet.php">เพิ่มการประชุม</a>
                            <a class="dropdown-item" href="#">แก้ไขห้องประชุม</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ประวัติการจอง
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">รายละเอียดการจอง</a>
                            <a class="dropdown-item" href="#">ตรวจสอบรายชื่อประธาน</a>
                        </div>
                    </li>

                </ul>

                <div class="ml-md-2 my-lg-0">

                    <?php
                    session_start();
                    //check session 
                    if (isset($_SESSION['user'])) {
                        echo "<p style='color:white'>ยินดีต้อนรับ ";
                        echo $_SESSION['user'];
                        echo "</p>";
                    } else {
                        echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ กลับไปยังหน้าเข้าสู่ระบบก่อน')</script>";
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                    ?>

                    <a href="logout.php" class="btn btn-primary" role="button">ออกจากระบบ</a>
                </div>

            </div>
        </div>
    </nav>
</body>

</html>