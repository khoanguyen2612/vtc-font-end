<div class="menu_news">
    <?php echo $this->Html->image("maintain_noti_bg.jpg")?>
    <div class="container">
      <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#news" aria-controls="news" role="tab" data-toggle="tab">Tin tức</a>
          </li>
          <li role="presentation">
            <a href="#notificion" aria-controls="tab" role="tab" data-toggle="tab">Thông báo</a>
          </li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="news">
            <?php foreach ($top_new as $top) { ?>
              <div id="topnews" class="row">
                <div class="img_news col-sm-8 col-md-8 col-lg-8">
                  <?php echo $this->Html->image($top['News']['img'])?>
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4">
                  <a href="<?php echo $this->Html->url(array('controller' => 'News','action' => 'Notificion_maintain',$top['News']['id']));?>"><h3><?php echo $top['News']['title'] ?></h3></a>
                  <p><?php echo $top['News']['description'] ?></p>
                </div>
              </div>
            <?php } ?>
            <div id="listnews">
              <?php foreach ($data as $item) { ?>
              <div class="new_item row">
                
                <div class="img_news col-xs-12 col-sm-5 col-md-5 col-lg-5">
                  <?php echo $this->Html->image($item['News']['img'],array('class'=>'img-responsive'))?>
                </div>
                <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7">
                  <a href="<?php echo $this->Html->url(array('controller' => 'News','action' => 'Notificion_maintain',$item['News']['id']));?>"><h5><?php echo $item['News']['title']; ?></h5></a>
                  <p><?php echo $item['News']['description']; ?></p>
                </div>
              </div>
              <?php } ?>
            </div>
            <ul class="pagination">
              <?php
                  echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Hiện thj nút Previous
                  echo " | ".$this->Paginator->numbers()." | "; //Hiển thi các số phân trang
                  echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Hiển thị nút next
                  echo " Page ".$this->Paginator->counter(); // Hiển thị tổng trang
              ?>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane" id="notificion">
            <!-- man hinh thong bao -->
          </div>
        </div>
      </div>
    </div>
  </div>