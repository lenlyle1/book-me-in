<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiFilter
{
	protected $operatorMap = [
		'eq' => '=',
		'lt' => '<',
		'lte' => '<=',
		'gt' => '>',
		'gte' => '>='
	];

	public function transform(Request $request)
	{
		$queryItems = [];

		foreach ($this->safeParms as $parm => $operators) {
			$query = $request->query($parm);

			if (!isset($query)) {
				continue;
			}

			$column = $this->columnMap[$parm] ?? $parm;

			foreach ($operators as $operator) {
				if (empty($query[$operator])) {
					die('Operand ' . $operator . ' not allowed for ' . $column);
					continue;
				}
					
				$queryItems[] =  [$column, $this->operatorMap[$operator], $query[$operator]];
				
			}
		}

		return $queryItems;
	}
}