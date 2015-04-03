<?php 
	$Idhieulenh = $_POST['id_hieulenh'];
	$Idden = $_POST['id_den'];
	$Idbienbao = $_POST['id_bienbao'];
	include_once 'generated/include_dao.php';
?>
<div class="huongdan">
                <h3 style="color: #ffffff;text-align: center"> Hướng dẫn tham gia giao thông</h3>
                <div class="box-huongdan">
                <?php 
                	$tb_hieulenh=DAOFactory::getTbHieulenhDAO()->queryByIdLenh($Idhieulenh);
                	$tb_den=DAOFactory::getDbDenDAO()->queryByIdDen($Idden);
                	$tb_bienbao=DAOFactory::getTbBienbaoDAO()->queryByIdBien($Idbienbao);
                	echo '<ul>';
                	if($tb_hieulenh!=NULL)
                	{
                		echo '<li>'.$tb_hieulenh[0]->huongdanHieulenh.'</li>';
                	}
                	if($Idhieulenh==0 )
                	{
						if($Idden!=0)
	                	echo '<li>'.$tb_den[0]->huongdanDen.'</li>';
                	}
                	if($tb_bienbao!=NULL){
						if($Idbienbao!=0)
                		echo '<li>'.$tb_bienbao[0]->huongdanBienbao.'</li>';
                	}
                	echo '</ul>';
                ?>
                </div>
</div>
<div class="phat">
	                <h3 style="color: #ffffff;text-align: center"> Nếu vi phạm</h3>
	                 <div class="box-phat">
	                 <?php 
	                 $tb_phatvp_hieulenh=DAOFactory::getTbPhatvpHieulenhDAO()->queryByIdLenh($Idhieulenh);
	                 $tb_phatvp_den=DAOFactory::getTbPhatvpDenDAO()->queryByIdDen($Idden);
	                 $tb_phatvp_bienbao=DAOFactory::getTbPhatvpBienbaoDAO()->queryByIdBien($Idbienbao);
		                echo '<ul>';
		                if($tb_phatvp_hieulenh!=NULL)
	                		echo '<li>'.$tb_phatvp_hieulenh[0]->mucphat.'</li>';
		                
						if($Idhieulenh==0)
		                if($tb_phatvp_den!=NULL)
		                {
	                		echo '<li>'.$tb_phatvp_den[0]->mucphat.'</li>';
		                }
		               	if($tb_phatvp_bienbao!=NULL)
		                {
	                		echo '<li>'.$tb_phatvp_bienbao[0]->mucphat.'</li>';
		                }
	                	
	                	echo '</ul>';
                	?>
	                 </div>
</div>