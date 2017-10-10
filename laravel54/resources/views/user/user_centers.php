<center>
<h3>☛用户详细编辑</h3>
<table border="1" style="background-color: #e4b9c0">
<tr>
    <input type="hidden" value="<?= $user['u_id'] ?>" id="id">
    <td>♂&nbsp;&nbsp;用户昵称</td>
    <td>♂&nbsp;&nbsp;用户年龄</td>
    <td>♂&nbsp;&nbsp;用户地址</td>
    <td>♂&nbsp;&nbsp;个性签名</td>
    <td>♂&nbsp;&nbsp;操作</td>
</tr>
    <tbody id="box">
<tr>

    <td>☄&nbsp;&nbsp;<span class="up" ass="u_name"><?php echo $user['u_name'] ?></span></td>
    <td>☄&nbsp;&nbsp;<span class="up" ass="u_age"><?php echo $user['u_age'] ?></span></td>
    <td>☄&nbsp;&nbsp;<span class="up" ass="u_adress"><?php echo $user['u_adress'] ?></span></td>
    <td>☄&nbsp;&nbsp;<span class="up" ass="u_sign"><?php echo $user['u_sign'] ?></span></td>
    <td>☄&nbsp;&nbsp;<a href="<?=url('index/user')?>">返回</a></td>
</tr>
    </tbody>
</table>
</center>
<script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript"></script>
<script>
$('.up').click(function () {
    //获取当前点击事件内部的值
    if($(this).children('input').prop('type')) return false;
    var val = $(this).html();
    //定义一个input元素
    var input = '<input type="text" value="'+val+'" />';
    //将定义好的input放到当前触发对象的内部
    $(this).html(input);
    //获取光标
    $(this).children('input').focus();
});

$('#box').delegate('input','blur',function () {
    //获取当前input的值
    var val = $(this).val();
    var id = $('#id').val();
//    var id = $(this).parent().parent().parent().attr("id")
    var param = $(this).parent().attr("ass");

    //将值放入input的父节点.span
    $(this).parent().html(val);
//    alert(id);
    $.ajax({
        type:"GET",
        url:"http://www.api.com/app/laravel54/public/index.php?r=center/upd",
        data:"id="+id+"&"+param+"="+val,
        success:function (msg) {
            alert(msg)
        }
    })
})
</script>






