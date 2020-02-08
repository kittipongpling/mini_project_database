<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>แก้ไขข้อมูล</title>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <h3>แก้ไขอาจารย์</h3>
    </div>

    <div class="row">
        <form class="form-horizontal" action="create.php" method="post">
            <div class="form-group <?php echo !empty($nameError) ? 'has-error' : ''; ?>">
                <label class="col-sm-2 control-label">รหัสบัตรประชาชน</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="name" type="text" placeholder="" value="<?php echo !empty($name) ? $name : ''; ?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-block"><?php echo $nameError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php echo !empty($emailError) ? 'has-error' : ''; ?>">
                <label class="col-sm-2 control-label">คำนำหน้าชื่อ</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="email" type="text" placeholder="" value="<?php echo !empty($email) ? $email : ''; ?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-block"><?php echo $emailError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">ชื่อ</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="" value="">
                        <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">นามสกุล</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="" value="">
                        <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">รหัสสาขา</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="" value="">
                        <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">รหัสตำแหน่ง</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="" value="">
                        <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">รหัสตำแหน่งพิเศษ</label>
                <div class="controls col-sm-6">
                    <input class="form-control" name="mobile" type="text" placeholder="" value="">
                        <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button onclick="" type="submit" class="btn btn-success">แก้ไขข้อมูล</button>
                    <a class="btn btn-default"onclick="history.back()">กลับ</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>