<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <!-- 引入 echarts.js -->
    <script src="../public/js/echarts.js"></script>
</head>
<body>
<center>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="width: 600px;height:400px;"></div>
<script type="text/javascript">
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '老铁,快来瞅瞅!'
        },
        tooltip: {},
        legend: {
            data:['粉丝']
        },
        xAxis: {
            data: ["黑粉","白粉","红粉","新粉","老粉","铁粉"]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [<?php echo isset($user['img_one'])?$user['img_one']:''?>, <?php echo isset($user['img_two'])?$user['img_two']:''?>, <?php echo isset($user['img_three'])?$user['img_three']:''?>, <?php echo isset($user['img_four'])?$user['img_four']:''?>, <?php echo isset($user['img_five'])?$user['img_five']:''?>, <?php echo isset($user['img_six'])?$user['img_six']:''?>]

        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);
</script>
</center>
<div>
    <a href="?r=index/user">返回中心</a>
</div>
</body>
</html>