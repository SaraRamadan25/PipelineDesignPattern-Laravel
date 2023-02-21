<?php

namespace App\QueryFilters;

use Closure;

class Active extends Filter
{
/*    // Closure to mak it consistent with laravel ( + conventions below)
    public function handle($request, Closure $next)
    {
        if (! request()->has('active')) {
            return $next($request);
        }

        $builder = $next($request);
        return $builder->where('active', request('active'));
    }*/

    public function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request($this->filterName()));

    }
}
