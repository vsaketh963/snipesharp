<?php

namespace App\Console\Commands;

use App\Models\Asset;
use App\Models\AssetModel;
use Illuminate\Console\Command;

class RemoveExplicitEols extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snipeit:remove-explicit-eols {--model_name=*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'remove explicit eols on assets with selected model';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $assetModel= AssetModel::where('name', '=', $this->option('model_name'))->first();

        if($assetModel){
            $assets = Asset::where('model_id', '=', $assetModel->id)->get();
        }
        else {
            $this->error('Asset model not found');
        }

        dd($assets);
    }
}