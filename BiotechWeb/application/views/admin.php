<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="page-header">Admin</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-condensed" id="dataTables-admin">
							<thead>
								<tr>
									<th>No.</th>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Dimas</td>
									<td><i class="fa fa-edit"></i> <a href="#">Edit</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel-footer clearfix">
					<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#form-admin">Add New Admin</button>
				</div>
				<div class="modal fade" id="form-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
							<?=form_open('/admin/insert')?>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" placeholder="Username" type="text" name="username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input class="form-control" placeholder="Password" type="password" name="password">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									<input class="form-control" placeholder="Confirm Password" type="password" name="confirm_password">
								</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add New Admin</button>
                            </div>
							<?=form_close()?>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>