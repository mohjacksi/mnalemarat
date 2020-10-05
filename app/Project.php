<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;

class Project extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'projects';

    protected $appends = [
        'attachments',
        'images',
    ];

    const PROJECT_STATE_SELECT = [
        'جاري'  => 'جاري',
        'منجز'  => 'منجز',
        'معلق'  => 'معلق',
        'متوقف' => 'متوقف',
    ];

    const SAMPLES_APPROVAL_SELECT = [
        'لم يتم الاعتماد' => 'لم يتم الاعتماد',
        'جزئي'            => 'جزئي',
        'مكتمل'           => 'مكتمل',
    ];

    const DELIVERY_RECIPIENT_SELECT = [
        'تسليم المفاتيح'          => 'تسليم المفاتيح',
        'تسليم المشروع'           => 'تسليم المشروع',
        'تسليم المفاتيح والمشروع' => 'تسليم المفاتيح والمشروع',
    ];

    protected $dates = [
        'operating_permission_date',
        'date_of_purchase',
        'date_of_delivery',
        'date_of_commencement',
        'assumed_date_of_receipt',
        'initial_inspection_date',
        'initial_receipt_date',
        'date_of_receipt_project',
        'final_inspect_date',
        'final_receipt_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const CURRENT_BATCH_NUMBER_SELECT = [
        'الدفعة رقم 1'  => 'الدفعة رقم 1',
        'الدفعة رقم 2'  => 'الدفعة رقم 2',
        'الدفعة رقم 3'  => 'الدفعة رقم 3',
        'الدفعة رقم 4'  => 'الدفعة رقم 4',
        'الدفعة رقم 5'  => 'الدفعة رقم 5',
        'الدفعة رقم 6'  => 'الدفعة رقم 6',
        'الدفعة رقم 7'  => 'الدفعة رقم 7',
        'الدفعة رقم 8'  => 'الدفعة رقم 8',
        'الدفعة رقم 9'  => 'الدفعة رقم 9',
        'الدفعة رقم 10' => 'الدفعة رقم 10',
        'الدفعة رقم 11' => 'الدفعة رقم 11',
        'الدفعة رقم 12' => 'الدفعة رقم 12',
        'الدفعة رقم 13' => 'الدفعة رقم 13',
        'الدفعة رقم 14' => 'الدفعة رقم 14',
        'الدفعة رقم 15' => 'الدفعة رقم 15',
    ];

    protected $fillable = [
        'project_name',
        'project_reference',
        'eng_name',
        'operating_permission_date',
        'initial_project_value',
        'purchase_order',
        'date_of_purchase',
        'the_contractor',
        'date_of_delivery',
        'date_of_commencement',
        'project_duration',
        'assumed_date_of_receipt',
        'samples_approval',
        'completion_rate',
        'current_batch_number',
        'current_payment_value',
        'initial_inspection_date',
        'prim_receiving_com',
        'initial_receipt_date',
        'date_of_receipt_project',
        'final_inspect_date',
        'final_receiv_com',
        'final_receipt_date',
        'final_completion_percentage',
        'delay_days',
        'justify_delay',
        'work_done',
        'pay_bef_end',
        'reserved_rate',
        'warranty',
        'final_payment',
        'project_state',
        'delivery_recipient',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getOperatingPermissionDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setOperatingPermissionDateAttribute($value)
    {
        $this->attributes['operating_permission_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfPurchaseAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfPurchaseAttribute($value)
    {
        $this->attributes['date_of_purchase'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfDeliveryAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfDeliveryAttribute($value)
    {
        $this->attributes['date_of_delivery'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfCommencementAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfCommencementAttribute($value)
    {
        $this->attributes['date_of_commencement'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getAssumedDateOfReceiptAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setAssumedDateOfReceiptAttribute($value)
    {
        $this->attributes['assumed_date_of_receipt'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getInitialInspectionDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setInitialInspectionDateAttribute($value)
    {
        $this->attributes['initial_inspection_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getInitialReceiptDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setInitialReceiptDateAttribute($value)
    {
        $this->attributes['initial_receipt_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfReceiptProjectAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfReceiptProjectAttribute($value)
    {
        $this->attributes['date_of_receipt_project'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFinalInspectDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFinalInspectDateAttribute($value)
    {
        $this->attributes['final_inspect_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getFinalReceiptDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setFinalReceiptDateAttribute($value)
    {
        $this->attributes['final_receipt_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getAttachmentsAttribute()
    {
        return $this->getMedia('attachments');
    }

    public function getImagesAttribute()
    {
        $files = $this->getMedia('images');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }
}
