<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\V1\ApiFilter;

class CompaniesFilter extends ApiFilter
{
	protected $safeParms = [
        'id' => ['eq'],
        'userId' => ['eq'],
        'country' => ['eq'],
	];

	protected $columnMap = [
		'userId' => 'user_id',
	];
}