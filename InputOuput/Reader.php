<?php
	require "..\Holder\WordMemoryBot.php";
	class Reader{
		public function readChatDataFromFile($data){
			$respon ="";
			$myfile = fopen($data, "r") or die("Unable to open file!");
			$respon = fread($myfile,filesize($data));
			fclose($myfile);

			preg_match_all("/<bft>.*</bft>/", $respon, $matcher);
			$i = 0;
			$wordText[] = new WordMemoryBot();
			foreach ($matcher[0] as $value) {
				preg_match_all("/<qt>.*</qt>/", $value, $ma);
				$temp = $ma[0][0];
				$temp = str_replace("<qt>", "", $temp);
				$temp = str_replace("</qt>", "", $temp);
				$textQuestion = $temp;

				preg_match_all("/<ans>.*</ans>/",$value , $ma);
				$temp = $ma[0][0];
				$temp = str_replace("<ans>", "", $temp);
				$temp = str_replace("</ans>", "", $temp);
				if (strpos($temp, "<i>")){
					$textAnswer[] = new Array();
					$textAnswer = explode("<i>", $temp);
				} else {
					$textAnswer[] = new Array();
					$textAnswer[0] = $temp;
				}

				preg_match_all("/<pq>.*</pq>/",$value , $ma);
				if ($ma!=null){
					$temp = $ma[0][0];
					$temp = str_replace("<pq>", "", $temp);
					$temp = str_replace("</pq>", "", $temp);
					if(strpos($temp, "<i>")){
						$textPrevQuest[] = new Array();
						$textPrevQuest = explode("<i>", $temp);
					} esle {
						$textPrevQuest[] = new Array();
						$textPrevQuest[0] = $temp;
					}
				} else {
					$textPrevQuest = null;
				}

				$dataWordText = new WordMemoryBot();
				$dataWordText->setQuestionText($textQuestion);
				$dataWordText->setAnswerText($textAnswer);
				$dataWordText->setPrevQuestion($textPrevQuest);
				$wordText[$i]=$dataWordText;
				$i=$i+1;
			}
			return $wordText;
		}
	}
?>
