<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp_blog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9q+ w!}!J@~fz*wh%!R#o6.)bZeTz[N|l%H7|*<vH0+!]yKXVcXi.0:,T6;S2o<C');
define('SECURE_AUTH_KEY',  'g?;b`$f$UV@QtX*vxi}:z[,Fi32uBbo,Amd7$Bz<g,.[G2fvN[SegL6W$l5_s_:@');
define('LOGGED_IN_KEY',    '7y]@^0VE 2KlqEW%S;6Nk.]S)$10vNz2d_VPpp#FT!y.$w|b>HS}9AteYGL7w-0-');
define('NONCE_KEY',        '~ebrs!$Wf=x+$[z1+:14f_UL`rMeWvk4+@DdZ|TI `(;0a{Xwr;e?1k$Z)|B*^Sw');
define('AUTH_SALT',        'N4|go}47y$jN ]:2T|,!F,G~Ug-lD(.`l<lRDQQ~R<54OX@kc;Qu/#H$&3E%BQ3g');
define('SECURE_AUTH_SALT', 'fGk(?XPl5G2P!nD<~t:5p./?p=7F({t3Uu9p>U%Vzl&jws}YWv@U3Vc%@S9]420n');
define('LOGGED_IN_SALT',   'P0}i9#>e,uj7s_v8G(=w:zkPU+a;0.e1Kts#{^&A#6Qyz&cq&+@+?#]Lyg)R=ws:');
define('NONCE_SALT',       '*hKs*`2f*%N6K}*8m+ltaa3GI[Udv= b5,HAxw`GgW?j=KA}%(IOaz&|cI6238>!');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
