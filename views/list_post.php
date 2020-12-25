<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-right">
                            <div id="toolbar" class="btn-group">
                                <!-- <a href="index.php?page_layout=add_user" class="btn btn-success"  style="background-color: #337ab7; border-color: #337ab7">New</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="fixed-table-container">
                        <div class="fixed-table-body">
                            <div class="fixed-table-loading" style="top: 37px;">
                        </div>
                        <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover" style="text-align:center">
					    <thead>
    					    <tr>
                                <th style="width: 100px">
                                    <div class="th-inner sortable">ID</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="width: 250px">
                                    <div class="th-inner sortable">Thumb</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <div class="th-inner sortable">Title</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <!-- <th style="">
                                    <div class="th-inner ">Permission</div>
                                    <div class="fht-cell">
                                    </div>
                                </th>
                                <th style="">
                                    <div class="th-inner ">Action</div>
                                    <div class="fht-cell"></div>
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql_list_post = "select * from db_posts";
                                $result_list_post = $conn_db->query($sql_list_post);
                                if ($result_list_post->num_rows > 0)
                                {
                                    while ($row = $result_list_post->fetch_assoc())
                                    {
                            ?>
                                        <tr data-index="0" style="text-align:center">
                                            <td>
                                                <a href="#"><?php echo $row["id"]?></a>
                                            </td>
                                            <td>
                                                <a href="index.php?page_layout=details&id=<?php echo $row['id'] ?>"><img src="./img/<?php echo $row["image"]?>" alt="image"  style="width: 50px;height:50px"></a>
                                            </td>
                                            <td style="text-align: left">
                                                <a href="#"><?php echo $row["title"] ?></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } ?>
                            </tbody>
						</table>
                    </div>
                <div class="fixed-table-pagination"></div></div></div><div class="clearfix"></div>
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