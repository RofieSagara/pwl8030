<?php
	require '..\Holder\WordMemoryBot.php';
	
	class ChatBot{
		var $isAvaiable;
		var $prevQuestion[];
		var $answer;
		var $baseKnowledgeLocation;
		var $wordBot[];
		
		public function setPrevQuestion($value[]){
			$this->prevQuestion=$value;
		}
		
		public function getPrevQuestion(){
			return $this->prevQuestion;
		}
		
		public function setBaseKnowledgeLocation($value){
			$this->baseKnowledgeLocation=$value;
		}
		
		public function getBaseKnowledgeLocation(){
			return $this->baseKnowledgeLocation;
		}
		
		function __construct(){
			$this->prevQuestion = new Array();
			$this->baseKnowledgeLocation = '\Data';
		}
	}

?>