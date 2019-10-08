<?php

/**
 * acg-shop initialize test.
 *
 * @param string $something
 * @return string
 */
function tsukihime(string $something = '')
{
    if ($something !== '') {
        return $something;
    }
    return 'Tsukihime!';
}

/**
 * 将当前请求的路由名称转换为 CSS 类名称, 作用是允许我们针对某个页面做页面样式定制
 * 
 */
function route_class()
{
    return str_replace('.', '_', Route::currentRouteName());
}
