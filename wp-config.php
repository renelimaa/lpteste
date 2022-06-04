<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bdteste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y&L)kw.Sq9D|B{G=Wgu8^k^kezF[J]4(1oEFpe%Z$_huQB]us:_nxSMt/zvcEr,H' );
define( 'SECURE_AUTH_KEY',  'zc@BqY5R%=3E[]jRB7ZvBX,KT-/7Qj3/r&y5yCgdm}wF+7|f(59%EmYrKpdE:tRU' );
define( 'LOGGED_IN_KEY',    '~A@=DL77ubsNn KZ6rRSMp3: ^HSM=eY</ v!Xmj9o6b]!X)hw7{l?v@;#UB*6nx' );
define( 'NONCE_KEY',        ')^>sB#w;5O/{Sr;PD2y]I[nv>,FtBMtNuO/P`o-viftR`_8x??CELOV{tz^-0LK:' );
define( 'AUTH_SALT',        'GurUsK9X?@Xz!d38)F0`h[cAW`ys7gdyimOZHD=OxuF,!}qm; 0a;2z7T*xPa_);' );
define( 'SECURE_AUTH_SALT', 'kX?u`lo;$DJF2mE~))&CaoWfK7ci&,OI.Lt$iDD:Z7^s<YpbdH|&s6za-m1~;RQ+' );
define( 'LOGGED_IN_SALT',   'a%$q_?T-NL`mCj4D l~ek%n(`r3v<Ok7V5/6`Z<mNvyxd?rU>L-JlOfs2KQ]zb4`' );
define( 'NONCE_SALT',       'Xi%,-lTH4O!U3:+AK$m<^[iY p}WYR&FnIje5L6P+n>*(Q+retME)tM$!5*x4(]!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
