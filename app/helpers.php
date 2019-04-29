<?php
/**返回可读性更好的文件尺寸
 * @param $bytes
 * @param int $decimals
 */
function human_filesize($bytes,$decimals=2)
{
    $size = ['B','KB','MB','GB','TB','PB'];
    $factor = floor((strlen($bytes)-1)/3);//计算出单位所在的位置
    //pow(x,y) x的y次方
    return sprintf("%.{$decimals}f",$bytes/pow(1024,$factor)).@$size[$factor];
}

/**判断文件的mime类型是否为图片
 * @param $mineType
 * @return bool
 */
function is_image($mimeType)
{
    return starts_with($mimeType,'image/');//判断是否已image/开头
}
/**
 * Return "checked" if true
 */
function checked($value)
{
    return $value ? 'checked' : '';
}

/**
 * Return img url for headers
 */
function page_image($value = null)
{
    if (empty($value)) {
        $value = config('blog.page_image');
    }
    if (! starts_with($value, 'http') && $value[0] !== '/') {
        $value = config('blog.uploads.webpath') . '/' . $value;
    }

    return $value;
}