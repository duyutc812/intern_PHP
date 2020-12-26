<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-toolbar">
                        <div class="bars pull-left">
                            <h3>Add</h3>
                        </div>
                        <div class="bars pull-right">
                            <div id="toolbar" class="btn-group">
                                <a href="index.php?controller=admin" class="btn btn-success"  style="background-color: white; border-color: black; color:black">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="fixed-table-container">
                        <div class="fixed-table-body">
                            <div class="fixed-table-loading" style="top: 37px;">
                        </div>
                        <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20%">
                                    <div class="th-inner sortable"><b>Title</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th style="width: 80%">
                                    <!-- <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div> -->
                                    <input type="text" name="title" style="width: 95%" placeholder="Title" style=" padding-left:20px">
                                </th>
                                
                            </tr>
                            <tr>
                                <th>
                                    <div class="th-inner sortable"><b>Description</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <!-- <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div> -->
                                    <input type="text" name="description" style="width: 95%" placeholder="Description">
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="th-inner sortable"><b>Image</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <!-- <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div> -->
                                    <input type="file" name="image" onchange="preview_image(event)">
                                    <img id="output_image" src="" alt="image" value="" style='width: 250px; height: 250px'>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    <div class="th-inner sortable"><b>Status</b></div>
                                    <div class="fht-cell"></div>
                                </th>
                                <th>
                                    <!-- <div class="th-inner sortable"><b>Thumb</b></div>
                                    <div class="fht-cell"></div> -->
                                    <select name="status_sel" class="form-control" style="width: 120px; padding-left: 15px" >
                                        <option selected value=1>Enabled</option>
                                        <option value=2>Disabled</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <button type="submit">
                                        Submit
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        </table>
                    </div>
                <div class="fixed-table-pagination"></div></div></div><div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
