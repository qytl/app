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
								注册
								<small>
									<i class="icon-double-angle-right"></i>
									管理员
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > 用户名 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" v-model="username" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 密码 </label>

										<div class="col-sm-9">
											<input type="password" id="form-field-2" placeholder="Password" v-model="pwd" class="col-xs-10 col-sm-5" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
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
      username: '',
      pwd:''
    }

  },

  methods: {
    say: function (message) {
      	
		this.$http.jsonp(url+'?r=log&type=add&user_name='+this.username+'&user_pwd='+this.pwd, {}, {
	        emulateJSON: true
	    }).then(function(response) {

	    	//console.log(response)
	 	    //this.result = response.body
	 	   // alert('1253')
	 	  window.location.href='#/admin/tables'

	    }, function(response) {
	   
	        console.log(response)
	        this.result = response.body
	        window.location.href='#/admin/tables'
	    });
    




    }
  },






}
</script>

