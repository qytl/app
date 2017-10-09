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
    <div><strong><span></span> 修改会员密码</strong></div>
    <div>
        <form method="post" class="form-x" action="">
            <div>

                <div>
                    <label>主播账号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        admin
                    </label>
                </div>

            </div>

            <div>

                <div class="label">
                    <label>原始密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />
                </div>

            </div>

            <div>

                <div class="label">
                    <label>新密码：</label>
                </div>
                <div>
                    <input type="password" class="input w50" name="newpass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />
                </div>

            </div>

            <div>

                <div class="label">
                    <label>确认新密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input w50" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />
                </div>

            </div>

            <div>
<!--                <div class="label">-->
<!--                    <label></label>-->
<!--                </div>-->
                <div>
                    <button type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>





