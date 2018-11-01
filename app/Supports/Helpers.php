<?php

// namespace App\Supports ;

if ( ! function_exists('kondisi_tulisan_error') )
{
    function kondisi_tulisan_error($errors, $key){
        return $errors->first($key);
    }
}

if ( ! function_exists('kondisi_error') )
{
    function kondisi_error($errors, $key){
      return $errors->has($key) ? 'error':'';
    }
}

// kebutuhan rumus
if ( ! function_exists('kondisi_sekolah') ) //kondisi untuk request sekolah maupun tidak
{
    function kondisi_sekolah($rumus){
        if (request('sekolah')) {
            return $rumus;
        }else{
            if ($rumus == 100) {
                return 1;
            }else{
                return 0;
            }
        }
    }
}

if ( ! function_exists('kondisi_jumlah_data') ) // kondisi apakah datanya 1 atau lebih dari 1
{
    function kondisi_jumlah_data($data){
        if (count($data) > 1) {
            return number_format((array_sum($data) / count($data)) * 100);
        }else{
            return number_format(array_sum($data));
        }
    }
}

if ( ! function_exists('kondisi_null') ) // kondisi datanya kosong atau tidak
{
    function kondisi_null($data){
        if ($data == null) {
            return 0;
        }else{
            return $data;
        }
    }
}
// end kubutuhan rumus

if( ! function_exists('table_row_number') )
{
    function table_row_number($paginate, $index){
        return $index+1+(($paginate->currentPage()-1)*$paginate->perPage());
    }
}

if( ! function_exists('total_bukan_tanya') )
{
    function total_bukan_tanya($value){
        return count($value);
    }
}
