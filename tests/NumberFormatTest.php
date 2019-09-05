<?php
/**
 * 数字字节格式化测试类
 */

require '../vendor/autoload.php';

use \numberFormat\NumberFormat;

$number = '102400010';
echo NumberFormat::byte_format($number);
//输出：97.7 MB