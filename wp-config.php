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
define( 'DB_NAME', 'buoi7' );

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
define( 'AUTH_KEY',         'Iy2ey=r2#@2O|4<5&R$LmW`JsQ?)lqn.itL]#5S.z>0Y8nAo}Qas0 ?3f-+]lsl.' );
define( 'SECURE_AUTH_KEY',  'X+1iB S]ho%9_@i rIH<hW/eai.IZW6R8A{4%iwAbwYQ#cV!=Klx XNHfE`9@Thu' );
define( 'LOGGED_IN_KEY',    '6.N:1!nav}lb7:/a$%P.s9pyeASb+)GOWrRNrW(OH-Um)]$xZ5<PNgo/T4 -V+{^' );
define( 'NONCE_KEY',        '6qee&WOL`hc7V;X3=bjl2[6TAW_{|_+xyY@S|YsZ?Mgr(_bz6f6:^1!DPq}xio)j' );
define( 'AUTH_SALT',        '{A1S7B8qRWRpPpN8x2=g+T|jf0(:cf*gs,,D%lk>~L_bY)vr4._U4[HZJ?Rb6D9w' );
define( 'SECURE_AUTH_SALT', 'C{q-@tfTQD_u&FRw(Pu%Ly_cyH*?OP`NRXXu(z@Y=)(Gl<7ijfZ_tmF8DqTK/%>_' );
define( 'LOGGED_IN_SALT',   'oo;#KT5j4BhZ/]YFx.9w^_YUp@ %v-q80;RKBgXM_oQwXPnjX$pp<5uAsY4nadWY' );
define( 'NONCE_SALT',       'x-I~Y[BYa%fP3WM<QCDwSom:*/4OD{FCKuS0>rlX,ksH/=f$?<7g/bZ/Vpqx)S/k' );

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
