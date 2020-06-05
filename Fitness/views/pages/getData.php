<?php
//require_once('views/member/addMember.php');

 */
class getData
{
public function getdata()
{
  $data['myname'] = $_POST['Fname'];
  $data['mysurname'] = $_POST['surname'];
  
  $this->load->view('member_controller.php', $data);
 } 
    
    
}
