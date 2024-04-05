<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\V1\ApiFilter;

class ProvidersFilter extends ApiFilter
{
	protected $safeParms = [
        'id' => ['eq'],
	];

	protected $columnMap = [
		'userId' => 'user_id',
	];
}