<template>
<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
					

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">UI Elements</a>
							</li>
							<li class="active">jQuery UI</li>
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
								jQuery UI
								<small>
									<i class="icon-double-angle-right"></i>
									Restyling jQuery UI Widgets and Elements
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-calendar-empty smaller-90"></i>
											Datepicker
										</h3>

										<div class="row">
											<div class="col-xs-6">
												<div class="input-group input-group-sm">
													<input type="text" id="datepicker" class="form-control" />
													<span class="input-group-addon">
														<i class="icon-calendar"></i>
													</span>
												</div>
											</div>
										</div>
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-list-alt smaller-90"></i>
											Dialogs
										</h3>
										<a href="#" id="id-btn-dialog2" class="btn btn-info btn-sm">Confirm Dialog</a>
										<a href="#" id="id-btn-dialog1" class="btn btn-purple btn-sm">Modal Dialog</a>

										<div id="dialog-message" class="hide">
											<p>
												This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
											</p>

											<div class="hr hr-12 hr-double"></div>

											<p>
												Currently using
												<b>36% of your storage space</b>
												.
											</p>
										</div><!-- #dialog-message -->

										<div id="dialog-confirm" class="hide">
											<div class="alert alert-info bigger-110">
												These items will be permanently deleted and cannot be recovered.
											</div>

											<div class="space-6"></div>

											<p class="bigger-110 bolder center grey">
												<i class="icon-hand-right blue bigger-120"></i>
												Are you sure?
											</p>
										</div><!-- #dialog-confirm -->
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-terminal smaller-90"></i>
											Autocomplete
										</h3>

										<div class="row">
											<div class="col-sm-8 col-md-7">
												<input id="tags" type="text" class="form-control" />
												<div class="space-4"></div>

												<input id="search" type="text" class="form-control" placeholder="Type 'a' or 'h'" />
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<h3 class="header blue lighter smaller">
													<i class="icon-info smaller-90"></i>
													Tooltip
												</h3>

												<div class="bigger-110">
													<p>
														<a class="grey" id="show-option" href="#" title="slide down on show">
															<i class="icon-hand-right"></i>
															slide down on show
														</a>
													</p>

													<p>
														<a class="blue" id="hide-option" href="#" title="explode on hide">
															<i class="icon-hand-right"></i>
															explode on hide
														</a>
													</p>

													<p>
														<a class="pink" id="open-event" href="#" title="move down on show">
															<i class="icon-hand-right"></i>
															move down on show
														</a>
													</p>
												</div>
											</div>
										</div><!-- ./row-fluid -->
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-reorder smaller-90"></i>
											Menu
										</h3>

										<ul id="menu">
											<li class="ui-state-disabled">
												<a href="#">Aberdeen</a>
											</li>

											<li>
												<a href="#">Ada</a>
											</li>

											<li>
												<a href="#">Adamsville</a>
											</li>

											<li>
												<a href="#">Addyston</a>
											</li>

											<li>
												<a href="#">Delphi</a>

												<ul>
													<li class="ui-state-disabled">
														<a href="#">Ada</a>
													</li>

													<li>
														<a href="#">Saarland</a>
													</li>

													<li>
														<a href="#">Salzburg</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="#">Saarland</a>
											</li>

											<li>
												<a href="#">Salzburg</a>

												<ul>
													<li>
														<a href="#">Delphi</a>

														<ul>
															<li>
																<a href="#">Ada</a>
															</li>

															<li>
																<a href="#">Saarland</a>
															</li>

															<li>
																<a href="#">Salzburg</a>
															</li>
														</ul>
													</li>

													<li>
														<a href="#">Delphi</a>

														<ul>
															<li>
																<a href="#">Ada</a>
															</li>

															<li>
																<a href="#">Saarland</a>
															</li>

															<li>
																<a href="#">Salzburg</a>
															</li>
														</ul>
													</li>

													<li>
														<a href="#">Perch</a>
													</li>
												</ul>
											</li>

											<li class="ui-state-disabled">
												<a href="#">Amesville</a>
											</li>
										</ul>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-retweet smaller-90"></i>
											Spinner
										</h3>

										<input id="spinner" name="value" type="text" />
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-resize-horizontal smaller-90"></i>
											Slider
										</h3>

										<p>
											Please see
											<a href="form-elements.html">form elements page</a>
											for more slider examples.
										</p>

										<div class="space-4"></div>

										<div id="slider"></div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-list smaller-90"></i>
											Sortable Accordion
										</h3>

										<div id="accordion" class="accordion-style2">
											<div class="group">
												<h3 class="accordion-header">Section 1</h3>

												<div>
													<p>
														Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header">Section 2</h3>

												<div>
													<p>
														Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			suscipit faucibus urna.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header">Section 3</h3>

												<div>
													<p>
														Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
													</p>

													<ul>
														<li>List item one</li>
														<li>List item two</li>
														<li>List item three</li>
													</ul>
												</div>
											</div>
										</div><!-- #accordion -->
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-folder-close-alt smaller-90"></i>
											Tabs
										</h3>

										<div id="tabs">
											<ul>
												<li>
													<a href="#tabs-1">Nunc tincidunt</a>
												</li>

												<li>
													<a href="#tabs-2">Proin dolor</a>
												</li>

												<li>
													<a href="#tabs-3">Aenean lacinia</a>
												</li>
											</ul>

											<div id="tabs-1">
												<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Duis orci. Aliquam sodales tortor vitae ipsum. Ut et mauris vel pede varius sollicitudin.</p>
											</div>

											<div id="tabs-2">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla..</p>
											</div>

											<div id="tabs-3">
												<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Praesent eu risus hendrerit ligula tempus pretium.</p>
											</div>
										</div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-spinner"></i>
											Progressbar
										</h3>

										<div id="progressbar"></div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
</template>