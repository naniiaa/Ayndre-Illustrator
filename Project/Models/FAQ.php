<?php
include_once dirname(__DIR__) . "./mysql.php";
include_once "Model.php";
class FrequentlyAskedQuestions extends Model.php{
    public $faqID;
    public $question;
    public $answer;

    function __construct($id = -1)
    {
		if($id < 0)
        {
	        $this->faqID = -1;
	        $this->question = "";
	        $this->answer = "";
    	}
    	else
        {
    		global $conn;

            $sql = "SELECT * from ` ` WHERE ` `=" . $id;

            $result = $conn->query($sql);

            $data = $result->fetch_assoc();

            $this->employeeNumber = $id;
            //this might change....
            $this->lastName = $data['question'];
            $this->firstName = $data['answer'];
               		
    	}

	}
}
?>
