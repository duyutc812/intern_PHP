<?php 
    if ($detail_post->num_rows > 0)
    {
        while ($row = $detail_post->fetch_assoc()){?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-left">
                            <h3><?php echo $row['title']; ?></h3>
                        </div>
                        <div class="bars pull-right">
                            <div id="toolbar" class="btn-group">
                                <a href="index.php" class="btn btn-success"  style="background-color: white; border-color: gray;color: black">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-table-container">
                        <div class="fixed-table-body">
                            <div class="fixed-table-loading" style="top: 37px;">
                        </div>
                        <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover" style="text-align:center">
					    <thead>
    					   <!--  <tr>
                                <th style="width: 250px">
                                    <div class="th-inner sortable">Thumb</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <div class="th-inner sortable">Title</div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="">
                                    <div class="th-inner ">Permission</div>
                                    <div class="fht-cell">
                                    </div>
                                </th>
                                <th style="">
                                    <div class="th-inner ">Action</div>
                                    <div class="fht-cell"></div>
                                </th>
                            </tr>-->
                        </thead>
                        <tbody>
                            <tr style="text-align:center">
                                <td style="width: 250px">
                                    <img src="./assets/img/<?php echo $row["image"]?>" alt="image"  style="width: 230px;height:230px">
                                </td>
                                <td style="text-align: left">
                                    <?php echo $row["description"] ?>
                                </td>
                            </tr>
                            <?php
                        } }
                        ?>
                            </tbody>
						</table>
                    </div>
                <div class="fixed-table-pagination"></div></div></div><div class="clearfix"></div>
            </div>
		</div>
	</div>
</div>