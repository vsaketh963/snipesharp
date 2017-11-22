<?php

namespace App\Http\Transformers;

use App\Models\AssetMaintenance;
use Gate;
use Illuminate\Database\Eloquent\Collection;
use App\Helpers\Helper;

class AssetMaintenancesTransformer
{
    public function transformAssetMaintenances(Collection $assetmaintenances, $total)
    {
        $array = [];
        foreach ($assetmaintenances as $assetmaintenance) {
            $array[] = self::transformAssetMaintenance($assetmaintenance);
        }

        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformAssetMaintenance(AssetMaintenance $assetmaintenance)
    {
        $array = [
            'id'            => (int) $assetmaintenance->id,
            'asset_name'    => ($assetmaintenance->asset) ? ['id' => $assetmaintenance->asset->id,'name' => e($assetmaintenance->asset->name)] : null,
            'title'         => ($assetmaintenance->title) ? e($assetmaintenance->title) : null,
            'notes'         => ($assetmaintenance->notes) ? e($assetmaintenance->notes) : null,
            'supplier'      => ($assetmaintenance->supplier) ? ['id' => $assetmaintenance->supplier->id,'name' => e($assetmaintenance->supplier->name)] : null,
            'cost'          => Helper::formatCurrencyOutput($assetmaintenance->cost),
            'asset_maintenance_type'          => e($assetmaintenance->asset_maintenance_type),
            'start_date'         => Helper::getFormattedDateObject($assetmaintenance->start_date, 'datetime'),
            'asset_maintenance_time'          => $assetmaintenance->asset_maintenance_time,
            'completion_date'     => Helper::getFormattedDateObject($assetmaintenance->completion_date, 'datetime'),
            'user_id'    => ($assetmaintenance->admin) ? ['id' => $assetmaintenance->admin->id,'name' => e($assetmaintenance->admin->getFullNameAttribute())] : null,
            'created_at' => Helper::getFormattedDateObject($assetmaintenance->created_at, 'datetime'),
            'updated_at' => Helper::getFormattedDateObject($assetmaintenance->updated_at, 'datetime'),

        ];

        $permissions_array['available_actions'] = [
            'update' => (bool) Gate::allows('update', Asset::class),
            'delete' => (bool) Gate::allows('delete', Asset::class),
        ];

        $array += $permissions_array;

        return $array;
    }
}
