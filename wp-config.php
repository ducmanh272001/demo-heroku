<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'ducmanh' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'X|YZ>boh-xM9G:as=1Yh~zi2g!@0#*fYDDf@ nCaPNvKGAENA>EE9>6LG^pu@rRf' );
define( 'SECURE_AUTH_KEY',  'vO&6VDFY7i,`lDkm9_aL%+D{{?Z~[we)-SS^4gFlQ1JabQU}s1/_*~8z2wvP<b|j' );
define( 'LOGGED_IN_KEY',    'POh&LmT}!JU P%*:URmX^MC52(W-c]K-}l%X*p1:YIbdEQ^rFlyuw8JpL[GLkB+<' );
define( 'NONCE_KEY',        '2}2ii(5Ma}W:>55]hvCHq hHHKZ?R_:?&Op^+9?`:K0}J]7JS;.oa@#h}L<[xsos' );
define( 'AUTH_SALT',        'C+e?Fg^Xt))U@9&qmk+qp>8wexdpn0Ntg`b(Z)Ya)v-~abv74-_Ll,PPeZ00}d0I' );
define( 'SECURE_AUTH_SALT', '+#{RK|$*(BFsmc-?:z dwV#_Xjc`EpDv$(l[j, ;>Z(z<bgVoFS[P/=Nxi0e~vT$' );
define( 'LOGGED_IN_SALT',   '^lT%aK/1D-Vk=t~T-uYdmH~Z+<j80,>5G40gxF`AW(3xoKLQWnAScSPG3CnKgzhl' );
define( 'NONCE_SALT',       'tfygffG 4%auA1E%n%th~Pj^QFB=8`&xiBd?|r{]5i1ocRx6%qgk-(]=R}AD P|(' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
