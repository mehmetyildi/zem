<?php

namespace App\Http\Controllers;


use App\Mail\OfferMail;
use App\Mail\QuickOfferMail;
use App\Models\Cms\Inbox\FormCategory;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\ApplicationMail;
use App\Models\Cms\Inbox\ContactForm;
use App\Models\Cms\Inbox\InboxMail;
use App\Models\Cms\Inbox\InboxAttachment;
use Mail;
use GuzzleHttp\Client;

class EmailController extends Controller
{

    /**
     *
     * Turkish spesific letters
     * @var array
     */
    public static $turkish = array("ı", "ğ", "ü", "ş", "ö", "ç", "İ", "Ğ", "Ü", "Ş", "Ö", "Ç");

    /**
     *
     * English equivalents of letters in $turkish array
     * @var array
     */
    public static $english = array("i", "g", "u", "s", "o", "c", "i", "g", "u", "s", "o", "c");

    /**
     * Submit contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        if(1 === preg_match('~[0-9]~', $request->name)){
            return redirect()->back();
        }
        $form = ContactForm::findOrFail($request->form_id);
        $category = FormCategory::findOrFail($request->department);
        Mail::to($category->to)->cc(($category->cc) ?: $category->to)->send(new ContactMail($request->name, $request->company, $request->email, $request->phone, $category->title_tr, $request->body));
        InboxMail::create([
            'contact_form_id' => $form->id,
            'form_category_id' => $category->id,
            'from' => $request->email,
            'to' => $category->to,
            'subject' => 'Web İletişim',
            'body' => composeMailBody(['Departman' => $category->title, 'Firma' => $request->company, 'Ad Soyad' => $request->name, 'Telefon' => $request->phone], $request->body)
        ]);
        session()->flash('success', 'Mesaj Gönderildi.');
        return redirect()->back();
    }

    /**
     * Submit human-resources form
     *
     * @return \Illuminate\Http\Response
     */
    public function job(Request $request)
    {
        if(1 === preg_match('~[0-9]~', $request->name)){
            return redirect()->back();
        }
        $form = ContactForm::findOrFail($request->form_id);
 
        Mail::to($form->to)->cc(($form->cc) ?: $form->to)->send(new ApplicationMail($request->name, $request->email, $request->phone, $request->position, $request->type, $request->file('resume'), $request->body));


        $inboxMail = InboxMail::create([
            'contact_form_id' => $form->id,
            'from' => $request->email,
            'to' => $form->to,
            'subject' => 'İş/Staj Başvurusu',
            'body' => composeMailBody(['Ad Soyad' => $request->name, 'Telefon' => $request->phone, 'Pozisyon' => $request->position, 'Başvuru Tipi' => $request->type], $request->body)
        ]);

        $file = $request->file('resume');
        $filename = 'cv_'.time() . '_' . $file->getClientOriginalName();
        $filename = str_replace(self::$turkish, self::$english, $filename);
        $file->move(public_path('storage/'), $filename);

        InboxAttachment::create([
            'inbox_mail_id' => $inboxMail->id,
            'path' => $filename
        ]);

        session()->flash('success', 'Mesaj Gönderildi.');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function quickOffer(Request $request)
    {
        if(1 === preg_match('~[0-9]~', $request->name)){
            return redirect()->back();
        }
        $form = ContactForm::findOrFail($request->form_id);
        Mail::to($form->to)->cc(($form->cc) ?: $form->to)->send(new QuickOfferMail($request->name, $request->email, $request->phone, $request->page));
        InboxMail::create([
            'contact_form_id' => $form->id,
            'from' => $request->email,
            'to' =>$form->to,
            'subject' => 'Hızlı Teklif',
            'body' => composeMailBody(['Sayfa' => $request->page, 'Ad Soyad' => $request->name, 'Telefon' => $request->phone], '')
        ]);
        if($request->bulletinApproval){
            $client = new Client();
            $res = $client->request('POST', 'http://ebulten.piyetra.com/t/d/s/vguyi/', [
                'form_params' => [
                    'cm-vguyi-vguyi' => $request->email
                ]
            ]);
        }
        session()->flash('success', 'Mesaj Gönderildi.');
        return redirect()->back();
    }

    /**
     * Submit contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function offer(Request $request)
    {
        if(1 === preg_match('~[0-9]~', $request->name)){
            return redirect()->back();
        }
        $form = ContactForm::findOrFail($request->form_id);
        $preferences = '';
        $services = '';
        if($request->serviceSell){
            $services .= 'Raflarımı satmak istiyorum / ';
        }
        if($request->serviceBuy){
            $services .= 'Raf almak istiyorum';
        }
        if($request->preferencePhone){
            $preferences .= 'Telefon / ';
        }
        if($request->preferenceEmail){
            $preferences .= 'E-Posta';
        }
        Mail::to($form->to)->cc(($form->cc) ?: $form->to)->send(new OfferMail($request->name, $request->email, $request->phone, $request->company, $request->gsm, $request->city, $preferences, $services, $request->body));
        InboxMail::create([
            'contact_form_id' => $form->id,
            'from' => $request->email,
            'to' =>$form->to,
            'subject' =>  'Teklif Talebi',
            'body' => composeMailBody(['Firma' => $request->company, 'Ad Soyad' => $request->name, 'Telefon' => $request->phone, 'GSM' => $request->gsm, 'İl' => $request->city, 'İletişim Tercihleri' => $preferences, 'İlgilendiği Hizmetler' => $services], '')
        ]);
        session()->flash('success', 'Mesaj Gönderildi.');
        return redirect()->back();
    }
}