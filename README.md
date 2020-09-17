# Twitter Video Downloader
This package retrieves data from twitter api to get post details and url to download videos or images tweets.

Supported url: https://twitter.com/i/status/1306552753636941824

Install
```
composer require julitroalves/twitter-video-downloader;
```

Usage:

```PHP

use \TwitterVideoDownloader\Downloader;

$downloader = new Downloader();

$videoInformations = $downloader->download("https://twitter.com/i/status/1306552753636941824");

// Will return something like this:
array(5) {                                                                                                                                                               
  ["text"]=>                                                                                                                                                             
  string(23) "https://t.co/ENtRBgpXue"                                                                                                                                   
  ["thumbnail"]=>                                                                                                                                                        
  string(88) "https://pbs.twimg.com/ext_tw_video_thumb/1306552663509741569/pu/img/PKlGcufNU-tEj_YT.jpg"                                                                  
  ["url"]=>                                                                                                                                                              
  string(23) "https://t.co/ENtRBgpXue"                                                                                                                                   
  ["type"]=>                                                                                                                                                             
  string(5) "video"                                                                                                                                                      
  ["variants"]=>                                                                                                                                                         
  array(4) {                                                                                                                                                             
    [0]=>                                                                                                                                                                
    object(stdClass)#18 (3) {             
      ["bitrate"]=>                       
      int(832000)                         
      ["content_type"]=>                  
      string(9) "video/mp4"               
      ["url"]=>                           
      string(99) "https://video.twimg.com/ext_tw_video/1306552663509741569/pu/vid/360x640/H9ocqc-emj6FC3Tq.mp4?tag=10"
    }                                     
    [1]=>                                 
    object(stdClass)#19 (3) {             
      ["bitrate"]=>                       
      int(2176000)                        
      ["content_type"]=>                  
      string(9) "video/mp4"               
      ["url"]=>                           
      string(100) "https://video.twimg.com/ext_tw_video/1306552663509741569/pu/vid/720x1280/srZYEYJvGKEHdcjk.mp4?tag=10"
    }
    [2]=>
    object(stdClass)#20 (3) {
      ["bitrate"]=>
      int(632000)
      ["content_type"]=>
      string(9) "video/mp4"
      ["url"]=>
      string(99) "https://video.twimg.com/ext_tw_video/1306552663509741569/pu/vid/320x568/5gZ1ZE70lpM7qOfN.mp4?tag=10"
    }
    [3]=>
    object(stdClass)#21 (2) {
      ["content_type"]=>
      string(21) "application/x-mpegURL"
      ["url"]=>
      string(91) "https://video.twimg.com/ext_tw_video/1306552663509741569/pu/pl/EvyjZEKYx-wUA-lc.m3u8?tag=10"
    }
  }
}

```
