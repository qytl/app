<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../css/pintuer.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/pintuer.js"></script>
</head>
<body>
<div>
    <div><strong><span></span>修改主播密码</strong></div>
    <div>
        <form method="post" action="<?=url('center/aa')?>">
            <div>

                <div class="label">
                    <label>主播账号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                       <input type="text"  value="<?php echo isset($user['user_name'])?$user['user_name']:''?>" />
                        <input type="hidden" value="<?= csrf_token()?>" name="_token">
                    </label>
                </div>

            </div>

            <div>

                <div class="label">
                    <label>原始密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" value="<?php echo isset($user['user_pwd'])?$user['user_pwd']:'' ?>" />
                    <input type="hidden" name="id" value="<?= $user['id']?>">
                </div>

            </div>

            <div>

                <div class="label">
                    <label>新密码：</label>
                </div>
                <div>
                    <input type="password" name="user_pwd" id="user_pwd" class="input w50" name="newpass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />
                </div>

            </div>

            <div>

                <div class="label">
                    <label>确认新密码：</label>
                </div>
                <div class="field">
                    <input type="password" name="user_pwd" id="user_pwd" class="input w50" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />
                </div>

            </div>

            <div>
                <div>
                    <button type="submit"> 提交</button>
                </div><br>
                <div>
                    <a href="<?=url('index/user')?>">返回个人中心</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>









