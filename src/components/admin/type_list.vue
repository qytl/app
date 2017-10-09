<template>

    <div>



        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">


                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Tables</a>
                    </li>
                    <li class="active">Simple &amp; Dynamic</li>
                </ul><!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- #nav-search -->
            </div>

            <div class="page-content">


                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="table-responsive">
                                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                               分类ID
                                            </th>
                                            <th>
                                                分类名称
                                            </th>
                                            <th>
                                                父级ID
                                            </th>

                                            <th>操作</th>
                                        </tr>
                                        <tr v-for="li in lis" v-bind:value="li.id">
                                            <th>
                                                {{li.id}}
                                            </th>
                                            <th>
                                                {{li.type_name}}
                                            </th>
                                            <th>
                                                {{li.parent_id}}
                                            </th>

                                            <th><a href="javascript:" v-on:click="type_del(li.id)">删除</a></th>

                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr v-for="respon in result">

                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td>
                                                <a href="#">{{respon.id}}</a>
                                            </td>
                                            <td>{{respon.user_name}}</td>
                                            <td class="hidden-480">{{respon.user_pwd}}</td>
                                            <td>{{respon.create_time}}</td>

                                            <td class="hidden-480">
                                                <span class="label label-sm label-warning">{{respon.is_online}}</span>
                                            </td>

                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                                    <button class="btn btn-xs btn-success">
                                                        <i class="icon-ok bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-info" v-on:click="upd(respon)">
                                                        <i class="icon-edit bigger-120" ></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-danger" v-on:click="del(respon)">
                                                        <i class="icon-trash bigger-120"></i>
                                                    </button>

                                                    <button class="btn btn-xs btn-warning">
                                                        <i class="icon-flag bigger-120"></i>
                                                    </button>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                                                            <i class="icon-cog icon-only bigger-110"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>






                                        </tbody>
                                    </table>
                                </div><!-- /.table-responsive -->
                            </div><!-- /span -->
                        </div><!-- /row -->






                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->
        <button v-on:click="cpage('frist')">首页</button>
        <button v-on:click="cpage('prev')">上一页</button>

        <button v-on:click="cpage('next')">下一页</button>
        <button v-on:click="cpage('last')">尾页</button>
        当前页面是{{ page }} 页

    </div>
</template>

<script>
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
            type_del(val)
            {
                $.ajax({
                    type: "get",
                    url:"http://www.yii.com/advanced/backend/web/index.php?r=type/del",
                    dataType:'jsonp',
                    data: "id="+val,
                    success: function(msg){
                        if(msg.error==0)
                        {
                            alert(msg.message)
                        }
                        else {
                            alert('sorry');
                        }
                        // alert( "Data Saved: " + msg );
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
