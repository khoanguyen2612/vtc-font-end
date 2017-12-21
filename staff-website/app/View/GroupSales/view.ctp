<?php echo $this->Html->script('/libs/datatables.min') ?>
<?php echo $this->Html->css('/libs/datatables.min') ?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="head_panel" style="padding: 20px 4px;">
                    <h4 style="display: inline;color: #f37636;font-weight: 600"><i class="star"></i>QUẢN LÝ ĐỘI NHÓM KINH DOANH</h4>
                </div>
                <?php echo $this->Session->flash(); ?>
                <div>
                    <button class="btn pull-right" style="margin-bottom: 15px;border-color: #2678bb;padding: 4px 30px;background-color: #fff;color: #0060af;font-size: 16px; " data-toggle="modal" data-target="#add_grp">
                        Thêm Nhóm mới
                    </button>
                </div>
                <div class="clearfix"></div>
                <div class="list_dm">
                    <div class="top_pn">
                        <div class="table-responsive">
                            <table id="table_gr" class="table table-bordered">
                                <thead>
                                    <tr id="panel">
                                        <th >STT</th>
                                        <th >
                                            Tên Nhóm
                                        </th>
                                        <th >
                                            Trưởng Nhóm
                                        </th>
                                        <th>
                                            Thao tác
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($data)): ?>
                                    <?php foreach ($data as $key => $row): ?>
                                        <tr>
                                            <td style="width: 20px;text-align: center">
                                                <?php echo $key + 1; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['AccountGroup']['group_name'] ?>
                                            </td>
                                            <td>
                                                <?php if (!empty($row['AccountGroup']['account_id'])): ?>
                                                    <?php foreach ($row['Account'] as $row1): ?>
                                                        <?php 1; ?>
                                                        <?php echo ($row1['id'] == $row['AccountGroup']['account_id']) ? $row1['lname'] : ''; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td style="width: 390px">
                                                <button class="btn act_btn">Xem doanh thu</button>
                                                <button class="btn edit act_btn" data-toggle="modal" data-target="#edit_info" group-id="<?php echo $row['AccountGroup']['id']; ?>">
                                                    Sửa thông tin
                                                </button>
                                                <a href="<?php echo $this->Html->url(array('controller' => 'GroupSales', 'action' => 'delete', $row['AccountGroup']['id'])) ?>" class="act_btn del">Xóa Nhóm</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="edit_info" class="modal fade" role="dialog">
    <?php echo $this->Form->create(false, array('url' => array('controller' => 'GroupSales', 'action' => 'edit'))) ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <h4 class="modal-title text-center" style="color: #d55a00">Sửa thông tin nhóm</h4>
            <div id="edit_bd">
            </div>
            <div class="text-center">
                <button type="submit" class="btn act_btn">Cập Nhật</button>
                <button type="button" class="btn act_btn" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<div id="add_grp" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <?php echo $this->Form->create(false,array('url'=>array('controller'=>'GroupSales','action'=>'add'),'id'=>'form_crt')); ?>
        <div class="modal-content">
            <h4 class="modal-title text-center" style="color: #d55a00">Thêm nhóm mới</h4>
            <div id="edit_bd">
                <div class="form-group">
                    <label for="gr_name" style="text-align: center;display: block;font-weight: 600;color: #0b90e4">Tên Nhóm</label>
                    <input type="text" class="form-control" name="gr_name" id="gr_name" value="">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn act_btn">Thêm Mới</button>
                <button type="button" class="btn act_btn" data-dismiss="modal">Hủy</button>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<script>
    $('.edit').on('click', function (e) {
        $.ajax({
            url: "<?php echo $this->Html->url(array('controller' => 'GroupSales', 'action' => 'ajax')); ?>",
            type: 'POST',
            data: {
                id: $(this).attr('group-id')
            },
            dataType: "html",
            success: function (result) {
                //console.log(result);
                $('#edit_bd').html(result);
            }

        });
    });
    $('a.del').click(function(){
        if(!confirm('Xóa nhóm lựa chọn ?')){
            return false;
        }
    });
    $('#table_gr').DataTable(
        {
            "language": {
                "lengthMenu": "Hiển thị _MENU_ ",
                "zeroRecords": "Không có dữ liệu",
                "info": "Trang _PAGE_ trong tổng số _PAGES_ trang",
                "infoEmpty": "Không tìm thấy dữ liệu phù hợp",
                "infoFiltered": "(Lọc _MAX_ bản ghi trong tổng số tất cả)"
            }
        }
    );
    // setInterval(function(){ $('#flashMessage').hide() }, 4000);
</script>
<style>
    #flashMessage {
        border-radius: 5px;
        padding: 8px 0px;
        background-color: #c0e6ff;
        color: #e41013;
        text-align: center;
        width: 60%;
        margin: 8px auto;
    }
    #table_gr th,#table_gr td{
        color: #2a363f;
        text-align: center;
        border:solid 1px #898989 !important;
        vertical-align: middle;
    }
    #table_gr {
        border:none;
        border-collapse: collapse;
    }
    #table_gr th{
        background-color: #d7d7d7;
        font-weight: 500;
    }
    .act_btn{
        text-align: center;
        width: 115px;
        vertical-align: middle;
        text-decoration: none !important;
        display: inline-block;
        background-color: #fff;
        color:#2a363f ;
        padding: 6px 7px;
        border:solid 1px #2a363f;
        line-height: 1;
        border-radius: 5px;
    }
    .act_btn:hover{
        background-color: #2a363f;
        color: #fff;
    }
    .modal-content{
        padding: 20px 25px;
    }
    input[name=gr_name]{
        text-align: center;
    }
    label[for=gr_name]{
        text-transform: uppercase;
        font-size: 15px;
        margin: 5px 0px 12px 0px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button{
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: 0.1em 0.5em;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        color:#2a363f !important;
        border: 1px solid #a79c9c;
        border-radius: 5px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active,.dataTables_wrapper .dataTables_paginate .paginate_button:hover{
        outline: none;
        background: none;
        background-color: #fff;
        box-shadow: unset;
        border: 1px solid #a79c9c;
        color: #2a363f !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
        color: #2a363f !important;
        border: 1px solid #979797;
        background: none #fff;
        background-color: #d0c7c7;
    }
    .next,.previous{
        border: none !important;
    }
    .next:hover,.previous:hover{
        color: #0b90e4 !important;
    }
    #table_gr_length label,#table_gr_filter input{
        font-weight: 500;
    }
    a,button{
        outline: none !important;
    }
    .star {
        background: url(<?php echo $this->Html->url('/img/star_img.png') ?>) no-repeat top;
        display: inline-block;
        width: 27px;
        height: 27px;
        margin-bottom: -6px;
        margin-right: 8px;
    }
    .content {
        background-color: #f3f3f3;
    }
    .content .row {
        margin-top: 10px;
        margin-bottom: 30px;
        padding-bottom: 60px;
        background-color: #fff;
    }
</style>