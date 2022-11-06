<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\sms_user_contact;

class AddFromContacts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $contacts;
    public function __construct($contacts)
    {
        //
        $this->contacts = $contacts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.add-from-contacts');
    }
    // function showData(){
    //     $data =  sms_user_contact::where('created_by', session('user'))->get();
    //     return view('components.add-from-contacts', ['contacts' => $data]);
    // }
}
