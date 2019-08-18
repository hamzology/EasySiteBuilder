<?php
class RunApp{
	private $query;
	private $request;
	public function __construct($query,$request){
        $this->config=$GLOBALS['config'];
        $this->lang=$GLOBALS['lang'];
        $this->tconfig=$GLOBALS['tconfig'];
        $this->query=$query;
        $this->request=$request;
        $this->headerincl=array();
        $this->footerincl=array();
        $this->pagedata=NULL;
        $this->headerdata=NULL;
        $this->footerdata=NULL;
    }
	 function lang($tag){
		 if(!empty($this->lang[$tag])){ return $this->lang[$tag]; }else{ return ':'.$tag; }
	 }
	 function build_page(){
		 if (isset($this->tconfig['page'][$this->request[0]])){
			 require_once($this->config['theme_dir'].$this->config['theme'].'/'.$this->tconfig['page'][$this->request[0]]);
		 }else{
			 header('HTTP/1.0 404 Not Found: '.$this->tconfig['page'][$this->request[0]]);
			 die('HTTP/1.0 404 Not Found');
		 }
	 }
	
	 function show_page(){
		 require_once($this->config['theme_dir'].$this->config['theme'].'/'.$this->tconfig['header']);
		 require_once($this->config['theme_dir'].$this->config['theme'].'/'.$this->tconfig['footer']);
		 echo TinyMinify::html($this->headerdata.$this->pagedata.$this->footerdata);
	 }
}
?>