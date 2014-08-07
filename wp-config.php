<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'luwkas_axe');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'luwkas_axe');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'dev_pass');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'U(mZ>J*vyBM=^NYQ+JvF.6$RTA}uR~4y<lING-`VG(o(JQw-}wODPI4np7%{(+X_');
define('SECURE_AUTH_KEY',  '|uuXc0B5 ,+-7]/VFrL+*70j4djOwcizh-zV6xWBdiBD{mYs2!S)cNd&>yz=P0:K');
define('LOGGED_IN_KEY',    'LMG-OPuU+5F1I#x~Z7^gHSRhu9d$V++bs_ZS-Kd{rF:}s3+jy4@_a9XRD]v9-C{D');
define('NONCE_KEY',        '|7y``{bHi+1i&n%eGUahZl)bz3h-Qc)!F[7+wH}}7=VS0ND):!)ox12y./M+Bz}A');
define('AUTH_SALT',        'a,g+=P!QP{Hm-d&%|qMS7w$M9m Rs6_-R&}J|3;q$A`08V0DsV=92LE(2](?+C-5');
define('SECURE_AUTH_SALT', 'Vl,JS4zj;l]DGNgmph#beg[B6U(~;T&):9</?^#m]-uB<|8T7G1XlDV^LomJ%^2]');
define('LOGGED_IN_SALT',   '*os-p:3|nu+|>^03MW|mZ-4=wM|~#J{J-.n)EVF!~UWpe()7j?/epa@[4zp$lM64');
define('NONCE_SALT',       '3@;7OP7FyHrIAMOzns:+A#Z`9~;{HE#gF&/C/F--%=qSaff}n2=$_{[v+<96`k*i');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', '');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
