<?php

/**
*
*
* @package - National Flags language
* @copyright (c) RMcGirr83
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.6] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'Aqui você pode adicionar/editar e deletar as diferentes bandeiras.',
	'ACP_NO_UPLOAD'						=> '<br><strong>Se você quiser usar imagens, você deve enviá-las para ext/rmcgirr83/nationalflags/flags antes de adicionar a nova Bandeira. A bandeira deve ter uma minúscula, ou seja, uk.gif</strong>',
	'ACP_FLAGS_DONATE'					=> 'Por favor, considere uma <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S4UTZ9YNKEDDN&item_name=National%20Flags" onclick="window.open(this.href); return false;"><strong>Doação</strong></a> se você gosta da extensão',
	'ACP_FLAG_USERS'					=> 'Número de usuários',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'Bandeira padrão',
	'FLAG_DEFAULT_EXPLAIN'				=> 'Definir isso para sim mostrará a primeira bandeira na seleção do perfil do usuário se um usuário ainda não selecionou uma bandeira.',
	'FLAG_EDIT'							=> 'Editar bandeira',
	'FLAG_NAME'							=> 'Nome da bandeira',
	'FLAG_NAME_EXPLAIN'					=> 'O nome da bandeira. O título da bandeira é exibido como está aqui.',
	'FLAG_IMG'							=> 'Nome da imagem',
	'FLAG_IMG_EXPLAIN'					=> 'O nome da imagem. Exemplo: uk.gif. Novas imagens devem ser enviadas para ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'Imagem da bandeira',
	'FLAG_ADD'							=> 'Adicionar nova bandeira',
	'FLAG_UPLOAD'						=> 'Enviar bandeira',
	'FLAG_UPLOAD_NOTICE'				=> 'Fazer o envio de uma imagem substituirá um arquivo de imagem já localizado no servidor se houver. O arquivo de imagem <strong>é</strong> sensível a maiúsculas e minúsculas.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'Você não poderá substituir uma imagem já existente com o mesmo nome e extensão como mostrado abaixo.',
	'FLAG_FOUND'						=> 'Bandeira encontrada',
	'IMAGES_ON_SERVER'					=> 'Nomes de imagem no servidor',

	//Settings
	'FLAGS_REQUIRED'					=> 'Campo obrigatório',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'Escolhendo sim aqui irá forçar novos inscritos, bem como aqueles que visitam seu perfil de usuário para escolher uma bandeira',
	'FLAGS_DISPLAY_MSG'					=> 'Exibir uma mensagem',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Ao escolher Sim, aqui, será exibida uma mensagem no fórum para que um usuário escolha uma bandeira',
	'FLAGS_NUM_DISPLAY'					=> 'Número de bandeiras',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'O número de bandeiras a serem exibidas na página de índice do fórum',
	'FLAGS_ON_INDEX'					=> 'Exibir no índice',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'Exibir um resumo dos usuários da bandeira na página de índice',
	'FLAGS_DISPLAY_OPTIONS'				=> 'Opções de exibição',
	'FLAGS_DISPLAY_VIEWFORUM'			=> 'Exibir bandeiras ao visualizar tópicos em fóruns',
	'FLAGS_DISPLAY_FORUMROW'			=> 'Exibir bandeiras nas visualizações de índice e fórum',
	'FLAGS_DISPLAY_SEARCH'				=> 'Exibir bandeiras dentro da pesquisa de posts',
	'FLAGS_DISPLAY_MEMBERLIST'			=> 'Exibir bandeiras dentro do memberlist',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'Exibir bandeiras para visitantes',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'Escolhendo sim aqui exibirá as bandeiras para visitantes e bots',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'Posição da bandeira',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'Onde você gostaria que uma bandeira de usuários exibisse',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'Depois de um avatar de usuários', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'Antes de um avatar de usuários', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'Depois de um nome de usuário', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'Antes um nome de usuário', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'Acima de um rank de usuários', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'Abaixo de um rank de usuários', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'Depois dos campos de perfil', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'Antes dos campos de perfil', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'Depois dos campos de contato', //0

	//Logs, messages and errors

	'MSG_FLAGS_DELETED'					=> 'A bandeira foi deletada.',
	'MSG_CONFIRM'						=> '<strong>Você tem certeza de que deseja deletar esta bandeira?</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> array(
		1	=> '<br><strong>%d</strong> O usuário tem essa bandeira e terá que selecionar uma bandeira diferente se você optar por deletar esta.',
		2	=> '<br><strong>%d</strong> Os usuários têm essa bandeira e terão que selecionar uma bandeira diferente se você optar por deletar esta.',
	),
	'MSG_FLAG_EDITED'					=> 'A bandeira foi editada.',
	'MSG_FLAG_ADDED'					=> 'Uma nova bandeira foi adicionada .',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Nenhum nome de bandeira definido, este é um campo obrigatório.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'Nenhuma imagem de bandeira definida, este é um campo obrigatório.',
	'FLAG_ERROR_NOT_EXIST'				=> 'A bandeira selecionada não existe.',
	'FLAG_CONFIG_SAVED'					=> '<strong>As configurações do National flags alteradas</strong>',
	'FLAG_NAME_EXISTS'					=> 'Uma bandeira com esse nome já existe',
	'FLAG_SETTINGS_CHANGED'				=> 'As configurações do National Flags alteradas.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'Não foi possível enviar a bandeira para %s. A imagem da bandeira já existe.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'A transferência foi interrompida porque o arquivo foi identificado como uma ameaça potencial.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'Este arquivo não pode ser exibido porque a extensão <strong>%s</strong> não é permitida.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'O arquivo da bandeira está vazio.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'A bandeira enviado não pode ser transferido porque os dados parecem incorretos ou corrompidos.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'Tipo de arquivo de bandeira incompatível: extensão esperada %1$s, mas extensão fornecida %2$s.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> '%s é um nome de arquivo inválido.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'A bandeira não pode ser transferida',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'O arquivo não pode ser totalmente transferido.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'O tamanho da bandeira é muito grande.<br>O tamanho máximo definido no php.ini não pôde ser determinado.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'O tamanho da bandeira é muito grande.<br>O tamanho máximo definido no php.ini não pôde ser determinado.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'A bandeira especificada não pôde ser enviada porque a solicitação expirou.',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'Não foi possível determinar as dimensões da bandeira',
	'FLAG_IMAGE_URL_INVALID'				=> 'O endereço da bandeira é inválido',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'O arquivo não pode ser encontrado.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'O tamanho da bandeira deve estar entre 0 e %1d %2s.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'A bandeira deve ser exatamente %3$s de largura e %4$s de altura. A imagem enviada é %5$s de largura e %6$s de altura.',
	'FLAGS_REQUIRE_540'			=> 'Esta extensão requer pelo menos PHP versão 5.4.0 e phpBB versão 3.1.4-RC1. Atualize sua versão do PHP e / ou sua versão do phpBB para usar a extensão.',
));
