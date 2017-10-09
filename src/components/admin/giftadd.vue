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
								<a href="#">Forms</a>
							</li>
							<li class="active">Form Elements</li>
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
						<div class="page-header">
							<h1>
							 	礼物
								<small>
									<i class="icon-double-angle-right"></i>
									添加
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 礼物名称 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="请书写礼物的名称" class="col-xs-10 col-sm-5" v-model="present_name" />
										</div>

									</div>

									<div class="space-4"></div>
								

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 礼物价格 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="请书写礼物的价格" v-model="present_price" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												
											</span>
										</div>
									</div>

									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 礼物数量 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="请书写礼物的数量" v-model="present_count" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												
											</span>
										</div>
									</div>
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 礼物介绍 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="请书写礼物的介绍" v-model="present_conte" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												
											</span>
										</div>
									</div>


									<div class="space-4"></div>

								

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" v-on:click="say()" >
												<i class="icon-ok bigger-110" ></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								
								</form>

								<div class="hr hr-18 dotted hr-double"></div>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
		  

</div>
</template>
<script>
export default {
  name: 'ifooter',
  data () {
    return {
      giftname: '',
      pwd:''
    }

  },

  methods: {
    say: function (message) {
    	//alert(present_name) 
    	//return;
		this.$http.jsonp(url+'?r=gift/add&present_name='+this.present_name+'&present_price='+this.present_price+'&present_conte='+this.present_conte+'&present_count='+this.present_count, {}, {
	        emulateJSON: true
	    }).then(function(response) {
	    
	    	

	    	//console.log(response)
	 	    //this.result = response.body
	 	   // alert('1253')
	 	 // window.location.href='#/admin/tables'

	    }, function(response) {
	   		alert('接口有误');
	     
	    });
    




    }
  },






}
</script>

