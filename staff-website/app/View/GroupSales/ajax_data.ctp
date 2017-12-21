
<div class="form-group">
    <label for="gr_name" style="text-align: center;display: block;font-weight: 600;color: #0b90e4">Tên Nhóm</label>
    <input type="text" class="form-control" name="gr_name" id="gr_name" value="<?php echo $data['AccountGroup']['group_name']?>">
    <input type="hidden" name="id" value="<?php echo $data['AccountGroup']['id']?>">
</div>
<div class="form-group text-center">
    <?php if (!empty($data['Account'])): ?>
    <label for="sl_lead" style="text-align: center;display: block;font-weight: 500;color:#4d555a;margin-bottom: 6px;
    text-transform: uppercase;">Chọn trưởng nhóm</label>
    <div class="form-group">
    <select id="sl_lead" name="account_id" class="form-control">
        <option value="">Chọn</option>
        <?php foreach ($data['Account'] as $row): ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['lname']; ?></option>
        <?php endforeach; ?>
    </select>
    </div>
    <?php else: ?>
        <p>Danh sách nhóm hiện chưa có thành viên nào</p>
    <?php endif; ?>
</div>
