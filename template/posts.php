<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-right">
                            <div id="toolbar" class="btn-group">
                                <!-- <a href="index.php?controller=add_user" class="btn btn-success"  style="background-color: #337ab7; border-color: #337ab7">New</a> -->
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
                                    <div class="th-inner sortable"><b>ID</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="width: 250px">
                                    <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <div class="th-inner sortable"><b>Title</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ($posts->num_rows > 0)
                                {
                                    while ($row = $posts->fetch_assoc()) {?>
                                        <tr style="text-align:center">
                                            <td>
                                                <a href="#"><?php echo $row["id"]?></a>
                                            </td>
                                            <td>
                                                <a href="index.php?controller=detail&id=<?php echo $row["id"]?>"><img src="./assets/img/<?php echo $row["image"]?>" alt="image"  style="width: 50px;height:50px"></a>
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
