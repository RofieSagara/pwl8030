<?php

	class WordMemoryBot{
		private $questionText;
		private $answerText[];
		private $prevQuestion[];
		private $fuctionName[];
		
		public function setQuestionText($value){
			$this->questionText = $value;
		}
		
		public function getQuestionText(){
			return $this->questionText;
		}
		
		public function setAnswerText($value){
			$this->answerText = $value;
		}
		
		public function getAnswerText(){
			return $this->answerText;
		}
		
		public function setPrevQuestion($value){
			$this->prevQuestion = $value;
		}
		
		public function getPrevQuestion(){
			return $this->prevQuestion;
		}
		
		public function setFuctionName($value){
			$this->fuctionName=$value;
		}
		
		public function getFuctionName(){
			return $this->fuctionName;
		}
	}
?>