<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>
   
</style>
<body>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
                        <div class="bootstrap-table"><div class="fixed-table-toolbar"><div class="bars pull-right"><div id="toolbar" class="btn-group">
            <a href="index.php?page_layout=add_user" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Add user
            </a>
        </div></div></div><div class="fixed-table-container"><div class="fixed-table-header"><table></table></div><div class="fixed-table-body"><div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div><table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">

						    <thead>
						    <tr><th style=""><div class="th-inner sortable">ID</div><div class="fht-cell"></div></th><th style=""><div class="th-inner sortable">Name</div><div class="fht-cell"></div></th><th style=""><div class="th-inner sortable">Email</div><div class="fht-cell"></div></th><th style=""><div class="th-inner ">Permission</div><div class="fht-cell"></div></th><th style=""><div class="th-inner ">Action</div><div class="fht-cell"></div></th></tr>
                            </thead>
                            <tbody><tr data-index="0"><td style="">2</td><td style="">Administrator</td><td style="">admin@gmail.com</td><td style="">
                                        <span class="label 
                                        label-danger ">
                                            Admin                                        </span>
                                    </td><td class="form-group" style="">
                                        <a href="index.php?page_layout=edit_user&amp;user_id=2" class="btn btn-primary">EDIT</a>
                                        <a onclick="return thongBao();" href="templates/user/del_user.php?user_id=2" class="btn btn-danger">DELETE</a>
                                    </td></tr><tr data-index="1"><td style="">3</td><td style="">Nguyễn Van A</td><td style="">nguyenvana@gmail.com</td><td style="">
                                        <span class="label 
                                        label-warning ">
                                            Member                                        </span>
                                    </td><td class="form-group" style="">
                                        <a href="index.php?page_layout=edit_user&amp;user_id=3" class="btn btn-primary">EDIT</a>
                                        <a onclick="return thongBao();" href="templates/user/del_user.php?user_id=3" class="btn btn-danger">DELETE</a>
                                    </td></tr><tr data-index="2"><td style="">4</td><td style="">Nguyễn Van B</td><td style="">nguyenvanb@gmail.com</td><td style="">
                                        <span class="label 
                                        label-warning ">
                                            Member                                        </span>
                                    </td><td class="form-group" style="">
                                        <a href="index.php?page_layout=edit_user&amp;user_id=4" class="btn btn-primary">EDIT</a>
                                        <a onclick="return thongBao();" href="templates/user/del_user.php?user_id=4" class="btn btn-danger">DELETE</a>
                                    </td></tr><tr data-index="3"><td style="">5</td><td style="">Nguyễn Van C</td><td style="">nguyenvanc@gmail.com</td><td style="">
                                        <span class="label 
                                        label-warning ">
                                            Member                                        </span>
                                    </td><td class="form-group" style="">
                                        <a href="index.php?page_layout=edit_user&amp;user_id=5" class="btn btn-primary">EDIT</a>
                                        <a onclick="return thongBao();" href="templates/user/del_user.php?user_id=5" class="btn btn-danger">DELETE</a>
                                    </td></tr><tr data-index="4"><td style="">7</td><td style="">ds</td><td style="">anhdungngo1001@gmail.com</td><td style="">
                                        <span class="label 
                                        label-warning ">
                                            Member                                        </span>
                                    </td><td class="form-group" style="">
                                        <a href="index.php?page_layout=edit_user&amp;user_id=7" class="btn btn-primary">EDIT</a>
                                        <a onclick="return thongBao();" href="templates/user/del_user.php?user_id=7" class="btn btn-danger">DELETE</a>
                                    </td></tr></tbody>
						</table></div><div class="fixed-table-pagination"></div></div></div><div class="clearfix"></div>
                    </div>
                    <!-- <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </nav>
                    </div> -->
				</div>
			</div>
		</div>
</body>
</html>