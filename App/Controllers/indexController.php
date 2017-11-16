<?php 
/**
* 
*/
class indexController
{
	public function index()
	{
	    view('index');
	}

    public function projects()
    {
        view('projects');
	}

    public function contact()
    {
        view('contact');
	}

    public function contactPost()
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $message=$_POST['message'];
        Mailer::newMail()->from('info@fbdi2012.com','From FBDI on behalf of: '.$name)
            ->subject('Message from FBDI visitor, '.$name)
            ->message($message." Contact: $tel",
            "<h4>Message from $name</h4>
                            <p>$message</p>
                            <br>
                            <hr>
                            Contact : $tel
                    "
                )
            ->reply_to($email,$name)
            ->to([
                'nathanieldeaduot@gmail.com'=>'Nathaniel Garang',
                'garang.samuel@gmail.com'=>'Samuel Garang'
            ])
            ->send();
    }

    public function gallery(){
	    return view('gallery');
    }
}