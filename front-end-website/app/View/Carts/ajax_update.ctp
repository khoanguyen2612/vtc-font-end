<!--
    tue.phpmailer@gmail.com
    Cập nhật Ajax giỏ hàng
-->

    <td>
        <h4><?php echo $cart['product']['product_name']; ?></h4>
        <p class="vps"><?php echo $cart['product']['product_type']; ?></p>
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
                    data-target="#myModal">
            </button>
        </div>
    </td>

    <?php //echo $content; ?>