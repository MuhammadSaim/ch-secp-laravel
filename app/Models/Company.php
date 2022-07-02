<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    /**
     *
     * laravel scope for search companies
     *
     * @param $query
     * @param array $data
     * @return mixed
     */
    public function scopeCompaniesSearch($query, array $data = []): mixed
    {
        if ( !empty( $data ) ) {
            if ( !empty( $data['name'] ) ) {
                $query->where( 'name', 'LIKE', '%' . $data['name'] . '%' );
            }
            if ( !empty( $data['status'] ) ) {
                $query->where( 'status', $data['status'] );
            }
            if ( !empty( $data['cro'] ) ) {
                $query->where( 'cro_id', $data['cro'] );
            }
            if ( !empty( $data['start_date'] ) ) {
                $query->whereDate( 'registration_date', '>=', date('Y-m-d', strtotime($data['start_date'])) );
            }
            if ( !empty( $data['end_date'] ) ) {
                $query->whereDate( 'registration_date', '<=', date('Y-m-d', strtotime($data['end_date'])) );
            }
            return $query;
        } else {
            return $query;
        }
    }



    /**
     * company relationship to the cro
     *
     * @return BelongsTo
     */
    public function cro(): BelongsTo
    {
        return $this->belongsTo(Cro::class);
    }


}
