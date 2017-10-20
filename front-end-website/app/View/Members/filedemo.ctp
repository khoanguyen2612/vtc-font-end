
<div class="container">
    <div class="row">

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">WHOIS</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content md-cn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title">Tên miền <b><?php echo $data['domainName']?></b> đã được đăng kí</h1>
                </div>
                <div class="modal-body">
                    <div class="whois-body">
                        <div class="whois-section">
                            <div class="whois-item"><span><b> Registrar Info</b></span></div>
                            <!-- <p>This is a large modal.</p> -->
                            <div class="whois-content" >
                                <div class="dcol">Domain Name</div><div class="drcol"><?php echo $data['domainName']?></div>
                                <div class="clearfix"></div>
                                <div class="dcol">Registrar</div><div class="drcol"><?php echo $data['registrar']?></div>
                                <div class="clearfix"></div>
                                <div class="dcol">WHOIS Server</div><div class="drcol"></div>
                                <div class="clearfix"></div>
                                <div class="dcol">Registrar URL</div><div class="drcol"></div>
                                <div class="clearfix"></div>
                                <div class="dcol">Status</div><div class="drcol"><?php echo $data['status'][0]?></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="whois-section">
                            <div class="whois-item">Name Servers</div>
                            <div class="whois-content-1" >
                                <div><?php echo $data['nameServer'][0]?></div>  
                                <div><?php echo $data['nameServer'][1]?></div>      
                            </div>
                        </div>
                        <div class="whois-section">
                            <div class="whois-item"> Important Dates</div>
                            <div class="whois-content" >
                                <div class="dcol">Updated Date</div><div class="drcol"><?php echo $data['updatedDate']?></div>
                                <div class="clearfix"></div>
                                <div class="dcol">Creation Date</div><div class="drcol"><?php echo $data['creationDate']?></div>
                                <div class="clearfix"></div>
                                <div class="dcol">Expiration Date</div><div class="drcol"><?php echo $data['expirationDate']?></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="whois-section">
                            <div class="whois-item"> Raw Registrar Data</div>
                            <div class="whois-content-1" >
                                <div>
                                  <p><?php echo $data['rawtext']?></p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
<style type="text/css">
.md-cn {
    width: 100%;
    padding: 0%;
    height: auto;
}
.modal-lg{
  padding: unset;
}
.modal-header {
    padding: 20px;
    background: #e67237;
    color: #fff;
}
.whois-body{
    margin: 10px 50px;
    text-align: left;

}
.whois-section{
    margin-bottom: 15px;

}
.whois-item{
    background: #005faf;
    color: #fff;
    padding: 10px;
    font-size: 24px;
    }
.whois-content {
  line-height: 30px;
  padding-top: 10px;
}
.whois-content-1 {
  line-height: 15px;
  padding-top: 20px;
}
.dcol {
    float: left;
    width: 50%;
}
</style>