<?php
if (!function_exists('single_image')) {
    function single_image($image, $folder)
    {
        $imageName = mt_rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/' . $folder), $imageName);
        return 'assets/uploads/' . $folder . '/' . $imageName;
    }
}

if (!function_exists('discountPercentage')) {
    function discountPercentage($regular_price = "", $discount_price = "")
    {
        return !empty($discount_price) ? (int)((((float)$regular_price - (float)$discount_price) * 100) / (float)$regular_price) : '';
    }
}

if (!function_exists('getSingleField')) {
    function getSingleField($table, array $where, $field)
    {
        return \DB::table($table)->select($field)->where($where)->first()->$field ?? '';
    }
}

/*
 * PHP implementation of Javascript's "Array.prototype.find"
 * =========================================================
 */
if (!function_exists('array_find')) {
    function array_find(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $value;
            }
        }

        return false;
    }
}
