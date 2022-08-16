<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Helper;

class Query
{
    const ORDER_BY_DESC = 'desc';
    const ORDER_BY_ASC = 'asc';

    // common
    const ID = 'id';
    const CREATED_AT = 'created_at';
    const STATUS = 'status';

    // comparisons
    const EQUAL = '=';
    const NOT_EQUAL = '!=';
    const GREATER_THAN = '>';
    const LESS_THAN = '<';

    // category
    const CATE_ID = 'category_id';

    // product



    const WITH_PRODUCT = 'product';
}
