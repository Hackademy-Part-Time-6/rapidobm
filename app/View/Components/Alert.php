<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
 /**
     * The alert type.
     *
     * @var string
     */
     public $type;

     /**
      * The alert message.
      *
      * @var string
      */
     public $message;

     /**
      * Create the component instance.
      *
      * @param  string  $type
      * @param  string  $message
      * @return void
      */





    public function __construct($type, $message)
    {
        //
 $this->type = $type;
 $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
