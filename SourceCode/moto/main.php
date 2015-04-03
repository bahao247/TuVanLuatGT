<?php
	include('header.html');
	include_once('generated/include_dao.php');
?>

<div class="col-md-5">
            <div class="row police">
                <div class="col-md-5">
                    <div class="row">
                        <img src="images/police.png">
                    </div>
                    <p> Người điểu khiển giao thông</p>
                </div>
                <div class="col-md-7">
                    
                    <select class="form-control form-control-index" id="hieulenh">
                    <?php 
						$tb_hieulenh=DAOFactory::getTbHieulenhDAO()->queryAll();
						for($i=0; $i<count($tb_hieulenh); $i++)
						{
							echo "<option value=".$tb_hieulenh[$i]->idLenh.">".$tb_hieulenh[$i]->huongdanHieulenh."</option>";
						}
					?>
                    	
                    </select>
                </div>
            </div>
            <div class="row light">
                <div class="col-md-4">
                    <div class="row">
                        <img src="images/den.png">
                    </div>
                    <p> Đèn giao thông</p>
                </div>
                <div class="col-md-8 light-color">
                <select class="form-control den-box" id="den">
                <?php 
                	$tb_den=DAOFactory::getDbDenDAO()->queryAll();
                	FOR($i=0; $i<count($tb_den); $i++)
                	{
                		echo "<option value=".$tb_den[$i]->idDen.">".$tb_den[$i]->trangthai."</option>";
                	}
                ?>
                </select> 
                </div>
            </div>
            <div class="row notyfile">
                <div class="col-md-5">
                    <img src="images/bienbap.png">
                    <p> Biển báo</p>
                </div>
                <div class="col-md-7 bienbao-box">
                    <div class="col-md-7">
                    <select class="form-control form-control-index" id="bienbao">
                    <?php 
						$tb_bienbao=DAOFactory::getTbBienbaoDAO()->queryAll();
						for($i=0; $i<count($tb_bienbao); $i++)
						{
							echo "<option value=".$tb_bienbao[$i]->idBien.">".$tb_bienbao[$i]->tenBienbao."</option>";
						}
					?>
					</select>
                    </div>
                    <div class="col-md-5 bienbao">
                    <img src="images/1chieu.png" alt="" class="img-rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row moto">
            <img src="images/Vicentinho-de-moto.png">
            </div>
            <div class="row bthuongdan">
            <button type="button" class="btn btn-success" onclick="load_ajax()">Hướng dẫn</button>
            </div>
        </div>
        <div class="col-md-5" id="result">
            
        </div>
<?php
	include('footer.html');
?>