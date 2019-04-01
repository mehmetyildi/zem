<?php

namespace App\Models\Cms\Inbox;

use App\Models\BaseModel;

class InboxMail extends BaseModel
{
    protected $table = 'inbox_mails';
    protected $fillable = ['contact_form_id', 'form_category_id', 'from', 'to', 'subject', 'body', 'isRead', 'isSent', 'isDraft', 'isTrash', 'isImportant', 'created_by', 'updated_by'];
    public static $rules = array(
        'from' => 'required',
        'to' => 'required',
        'subject' => 'required',
        'body' => 'required',
    );

    public static function messages()
    {
        return[
            'from.required'=>'Kimden kısmı boş olamaz',
            'to.required'=>'Kime kısmı boş olamaz',
            'subject.required'=>'Konu alanı boş olamaz',
            'body.required'=>'Mesaj alanı boş olamaz',
        ];
    }

    /**
     * A mail belongs to a contact form
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function form()
    {
        return $this->belongsTo(ContactForm::class, 'contact_form_id');
    }

    /**
     * A mail belongs to a form category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(FormCategory::class, 'form_category_id');
    }

    /**
     * A mail may have many attachments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments()
    {
        return $this->hasMany(InboxAttachment::class, 'inbox_mail_id');
    }
}