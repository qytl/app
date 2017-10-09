<template>
    <div class="main-content">
        <div id="breadcrumbs" class="breadcrumbs">

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">Form Elements</li>
            </ul><!-- .breadcrumb -->

            <div id="nav-search" class="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input" placeholder="Search ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <form role="form" class="form-horizontal">

                        <div class="hr hr-24"></div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="widget-box">
                                    <div class="widget-header">
                                        <h4>分类添加</h4>

                                        <span class="widget-toolbar">
														<a data-action="settings" href="#">
															<i class="icon-cog"></i>
														</a>

														<a data-action="reload" href="#">
															<i class="icon-refresh"></i>
														</a>

														<a data-action="collapse" href="#">
															<i class="icon-chevron-up"></i>
														</a>

														<a data-action="close" href="#">
															<i class="icon-remove"></i>
														</a>
													</span>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div>
                                                <label for="form-field-select-1">所有分类</label>

                                                <select id="form-field-select-1" class="form-control" v-model="val.id">
                                                    <option value="0">顶级分类</option>
                                                    <option v-for="li in lis" v-bind:value="li.id" >{{li.type_name}}</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <div>

                                                <div class="space-2"></div>
                                                分类名称<input type="text" name="" id=""  v-model="val.name">
                                                <br>
                                                <hr>
                                                <input type="button" v-on:click="add_type(val)" value="添加" class="add_type">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /span -->
                        </div><!-- /row -->

                    </form>



                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</template>
<script>

//添加分类




    export default {
        name: '',
        data () {
            return {
                message: '',
                lis:{},
                val:{name:'',id:''},
            }
        }, created()
        {
            type_sel(this)
        },
        methods: {
            add_type(val)
            {
               // alert(val.id)
                $.ajax({
                    url:"http://www.yii.com/advanced/backend/web/index.php?r=type/type_add",
                    dataType:'jsonp',
                    data: val,
                    success: function(msg){
                            if(msg.error==0)
                            {
                                alert(msg.message)
                            }
                            else {
                                alert('sorry');
                            }
                        //alert( "Data Saved: " + msg );
                    }
                });
            }
        }
    }
    //调用接口查询数据
    function type_sel(thi)
    {
        $.ajax({

            url:"http://www.yii.com/advanced/backend/web/index.php?r=type/sel",
            dataType:'jsonp',
            data: "",
            success: function(msg){
                thi.lis = msg.type
               // alert( "Data Saved: " + msg );
            }
        });
    }
</script>

<style>
    /*引入css文件*/
    /*import '/static/css/easydialog.min.css';*/

</style>


<!--
 * 
 *
 * ...
 *
 * 2017 Copyright (c) 

 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/8, 作者: 韩佳乐, 操作:创建
 -->
