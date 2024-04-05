<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\V1\ApiFilter;

class CustomersFilter extends ApiFilter
{
	protected $safeParms = [		
        'id' => ['eq'],
        'companyId' => ['eq'],
        'clientId' =>  ['eq'],
        'outstanding' =>  ['eq'],
        'gender' => ['eq'],
        'acceptsMarketing' => ['eq'],
        'acceptsSmsMarketing' => ['eq'],
        'referralSource' => ['eq'],
	];

	protected $columnMap = [
		'companyId' => 'company_id',
		'clientId' => 'client_id',
		'acceptsMarketing' => 'accepts_marketing',
        'acceptsSmsMarketing' => 'accepts_sms_marketing',
        'referralSource' => 'referral_source',
	];
}