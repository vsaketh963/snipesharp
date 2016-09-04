<?php

namespace App\Models;

use App\Models\Actionlog;
use App\Models\Asset;
use App\Models\CheckoutRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Loggable
{

    public function log()
    {
        return $this->morphMany(Actionlog::class, 'item');
    }

    public function logCheckout($note, $target = null /*target is overridable for components*/)
    {
        $log = new Actionlog;
        // We need to special case licenses because of license_seat vs license.  So much for clean polymorphism :)
        if (static::class == LicenseSeat::class) {
            $log->item_type = License::class;
            $log->item_id = $this->license_id;
        } else {
            $log->item_type = static::class;
            $log->item_id = $this->id;
        }
        $log->user_id = Auth::user()->id;
        if (!is_null($this->asset_id) || isset($target)) {
            $log->target_type = Asset::class;
            $log->target_id = $this->asset_id;
        } else if (!is_null($this->assigned_to)) {
            $log->target_type = User::class;
            $log->target_id = $this->assigned_to;
        }
        $log->location_id = $log->target_type::find($log->target_id)->location_id;
        $log->note = $note;
        $log->logaction('checkout');

        return $log;
    }

    public function logCheckin($note)
    {
        $log = new Actionlog;
        if (static::class == LicenseSeat::class) {
            $log->item_type = License::class;
            $log->item_id = $this->license_id;
        } else {
            $log->item_type = static::class;
            $log->item_id = $this->id;
        }
        $log->location_id = null;
        $log->note = $note;
        $log->user_id = Auth::user()->id;
        $log->logaction('checkin from');

        return $log;
    }

    public function logUpload($filename, $note)
    {
        $log = new Actionlog;
        if (static::class == LicenseSeat::class) {
            $log->item_type = License::class;
            $log->item_id = $this->license_id;
        } else {
            $log->item_type = static::class;
            $log->item_id = $this->id;
        }
        $log->user_id = Auth::user()->id;
        $log->note = $note;
        $log->target_id =  null;
        $log->created_at =  date("Y-m-d h:i:s");
        $log->filename =  $filename;
        $log->logaction('uploaded');

        return $log;
    }

    public function isRequestedBy(User $user)
    {
        return $this->requests()
            ->where('user_id', $user->id)
            ->exists();
    }

    public function scopeRequestedBy($query, User $user)
    {
        return $query->whereHas('requests', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }



    public function cancelRequest()
    {
        $this->requests()->where('user_id', Auth::id())->delete();
    }
}
