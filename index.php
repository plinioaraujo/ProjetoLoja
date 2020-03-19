<?php 

require './lib/autoload.php';


$smarty = new Template();



//valores para o template
$smarty->assign('NOME', 'HUGO VASCONCELOS DE FREITAS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);


//Fiz uma alteração para o git hub

$smarty->display('index.tpl');
 ?>