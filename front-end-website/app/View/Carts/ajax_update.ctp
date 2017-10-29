<!--
    tue.phpmailer@gmail.com
    Cập nhật Ajax giỏ hàng
-->

    <td>
        <h4><?php echo $cart['product']['product_name']; ?></h4>
        <p class="vps"><?php echo $cart['product']['type']; ?></p>
    </td>
    <td>
        <!--<select disabled class="hidden">
            <option> năm</option>
        </select>-->
        <p class="active"><?php echo $cart['product']['quantity']; ?></p>
    </td>
    <td>
        <p><?php echo $cart['product']['price']; ?> VNĐ</p>
        <div class="product-removal">
            <button type="button" class="remove-item" data-toggle="modal"
                    data-target="#myModal<?=$cart['product']['id'] ?>">
            </button>
        </div>

        <div id="myModal<?=$cart['product']['id'] ?>" class="modal fade" role="dialog">
            <?php
            echo $this->Form->create(null, array('type' => 'POST',
                    //echo $this->Form->create(null, array('type' => 'POST',
                    //'url' => '/cart/update',
                    'url' => array('controller' => 'carts', 'action' => 'remove'),
                    'id' => "modal_form_id_{$cart['product']['id']}",
                    'name' => "modal_form_id_{$cart['product']['id']}",
                    'class' => '',
                    'role' => 'form',
                )
            );

            echo $this->Form->input('', array(
                'id' => "id_odetail_product_{$cart['product']['id']}",
                'type' => 'hidden',
                'name' => 'id_odetail_product',
                'value' => $cart['product']['id'],
            ));

            ?>
            <div class="modal-dialog">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Bạn muốn xóa dịch vụ này? </h4>
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn-success" id="remove-product">Đồng ý
                        </button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal">Hủy
                        </button>
                    </div>
                </div>
            </div>
            <?php echo $this->Form->end(); ?>
        </div>

    </td>

    <?php //echo $content; ?>