<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-right">
                            <div id="toolbar" class="btn-group">
                                <a href="index.php?controller=admin&action=add" class="btn btn-success"  style="background-color: #337ab7; border-color: #337ab7">New</a>
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
                                <th style="width: 90px">
                                    <div class="th-inner sortable"><b>ID</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="width: 150px">
                                    <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th >
                                    <div class="th-inner sortable"><b>Title</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="width: 220px">
                                    <div class="th-inner "><b>Status</b></div>
                                    <div class="fht-cell">
                                    </div>
                                </th>
                                <th style="width: 250px">
                                    <div class="th-inner "><b>Action</b></div>
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
                                                <?php echo $row["id"]?>
                                            </td>
                                            <td>
                                                <img src="./assets/img/<?php echo $row["image"]?>" alt="image"  style="width: 50px;height:50px">
                                            </td>
                                            <td style="text-align: left">
                                               <?php echo $row["title"] ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if ($row['status'] == 1) {
                                                        echo 'Enabled';
                                                    }
                                                    else {
                                                        echo "Disabled";
                                                    }
                                                 ?>
                                            </td>
                                            <td class="form-group">
                                                <a href="#" class="btn">Show</a>
                                                <a href="index.php?controller=admin&action=edit&id=<?php echo $row['id'] ?>" class="btn">Edit</a>
                                                <a href="index.php?controller=admin&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
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
            <form method="post" accept-charset="utf-8">
                <label for="post_page">Page:</label>
                <select name="post_page">
                    <option value="5">5</option>
                    <option value="10">10</optioal>
                    <option value="50">50</option>
                    <option value="all">all</option>
                </select>
                <button type="submit" name="smb">choose</button>
            </form>
            <div class="product-pagination text-center">
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $page_navigation; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
