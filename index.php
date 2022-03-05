<?php

// Exceptions

class Video {

}

class User {
    public function download(Video $video){
        if (! $this->subscribed()){
            throw new Exception('You must be subscribed');
        }
    }

    public function subscribed(){
        return false;
    }
}
class UserDownloadsController {
    public function show(){
        try {
            (new User)->download(new Video);
        } catch(Exception $e) {
           echo "Whoops";
        }
    }
}
(new UserDownloadsController)->show();