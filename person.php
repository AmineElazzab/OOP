<?php class person {
 private $Name; 
 private $Age;
//  private $Size;
 private $Hair; 

 public function __construct($Name, $Age) {
   $this->Name = $Name; 
   $this->Age = $Age;
//    $this->Size = $Size;
//    $this->Hair = $Hair;

 } 
 public function get_Name() {
   return $this->Name; 
 } 
 public function set_Name($Name) {
   $this->Name = $Name; 
 } 
 public function get_Age() {
  return $this->Age; 
 } 
 public function set_Age($Age) {
  $this->Age = $Age; 
 } 
//  public function get_Size() {
//     return $this->Size; 
//   } 
//   public function set_Size($Size) {
//     $this->Size = $Size; 
//   } 
  // public function get_Hair() {
  //  return $this->Hair; 
  // } 
  // public function set_Hair($Hair) {
  //  $this->Hair = $Hair; 
  // }
} 
?>