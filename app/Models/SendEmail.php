<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth,Mail;
class SendEmail extends Model
{
    use HasFactory;
    
    public function send($data=array()){

        $template =$data['template'];
        Mail::send($template,$data, function($message)use($data) {
            
            $to = isset($data['to'])?$data['to']:'';
            $bcc = isset($data['bcc'])?$data['bcc']:'';
            $subject = isset($data['subject'])?$data['subject']:'';
            $from = isset($data['from'])?$data['from']:'';
            if(!empty($to)){
               $message->to($to);  
            }
            if(!empty($bcc)){
               $message->bcc($bcc);  
            }else{
                $message->bcc('owlok007@gmail.com');  
            }
            if(!empty($subject)){
               $message->subject($subject);  
            }
            if(!empty($from)){
               $message->from($from);  
            }
        }); 
    }
}
