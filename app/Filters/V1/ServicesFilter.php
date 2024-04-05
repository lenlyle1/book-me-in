<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\V1\ApiFilter;

class ServicesFilter extends ApiFilter
{
	protected $safeParms = [
        'retailPrice' => ['lte'],
	];

	protected $columnMap = [
		'retailPrice' => 'retail_price',
	];
}