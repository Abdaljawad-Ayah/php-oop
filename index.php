

	  <?php 
	 class Student {
		
		protected $id;
		protected $name;
		protected $email;
		protected $mobile_number;
		
		public function __construct($id , $name , $email , $mobile_number){
		  $this->id = $id;
		  $this->name = $name;
		  $this->email = $email;
		  $this->mobile_number = $mobile_number;
		  
		}
		
		//getters
	    public function getId(){
		   return $this->id;
		}
		
		public function getName(){
			 return $this->name;
			}
			
		public function getEmail(){
			 return $this->email;
			}	
			
		public function getMobile_number(){
			 return $this->mobile_number;
			}
			
		//setters
        public function setId($id){
		   return $this->id;
		}
		public function setName($name){
		   return $this->name;
		}
		public function setEmail($email){
		   if(strpos($email, '@') > -1){
		     $this->email=$email;
			   
			   }
		}
		
		public function setMobile_number($mobile_number){
		   return $this->mobile_number;
		}
		
		
		
	 }
	 
	 class Teacher extends Student {
		 
		 public $salary; 
		 
		 
		 public function __construct($id , $name , $email, $mobile_number, $salary){
			 $this->salary = $salary;
			 
			 parent::__construct($id ,$name , $email , $mobile_number);
			 
			 }
		 
		 
		 };
	
       $Student = new Student (' 123443' , 'eva@orange.com ' , ' Sara ' , '0777777777');
	   $Teacher = new Teacher('96432' , 'Sadi', 'adam@orange.com ' , '0777788888', '800',$subjects= array('English', 'Arabic', 'Math', 'science'));
	    
		//Student
	   echo $Student->getId() . '<br>';
	   echo $Student->getName() . '<br>';
	   echo $Student->getEmail() . '<br>';
	   echo $Student->getMobile_number() . '<br>';
	   
	   echo "=============<br>";
	    //Teacher
	   echo $Teacher->getId() . '<br>';
	   echo $Teacher->getName() . '<br>';
	   echo $Teacher->getEmail() . '<br>';
	   echo $Teacher->getMobile_number() . '<br>';
	   echo $Teacher->salary . '<br>';
	   
	   for($i=0;$i<4;$i++)
	   { 
		 $subjects[$i]->subjects();  
	   }
	 
	   
	?>
	 
